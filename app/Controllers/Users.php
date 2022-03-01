<?php
/**
* @file Users.php
* @authors Julie Sigrist, Julien Wodey, Ombreux David
* @version 1.0
* @date 16/02/2022
* @brief Controller des utilisateurs
*
*  @details 
* <p>Cette classe permet de gérer les actions des pages gérées par le controller des utilisateurs</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>connect</strong> : page de connexion</li>
* 	<li><strong>create_user</strong> : page d'inscription</li>
* 	<li><strong>deconnect</strong> : fonction de déconnexion</li>
* </ul>
*
**/
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Users_model;
use App\Entities\Users_entity;

class Users extends BaseController{
	
	public function __construct(){
		
	}
/**
*	@brief 		fonction retournant le formulaire de connexion avec l'email et le mot de passe
* 	@details 
*	<p>Cette fonction permet à l'utilisateur de se connecter via une requête à la base de données</p>
*
**/
	public function connect(){
		if($this->session->get('user_id') == NULL){
			helper('form');
			$this->_data['title'] = "Se connecter";
			// Chargement de la librairie
			$validation =  \Config\Services::validation();
			//Définition des règles de vérification des champs
			$validation->setRules([
					'user_email' => [
						'label'  => 'e-mail',
						//Attribution de required pour obligation de saisie, valid_email pour vérification du format
						'rules'  => 'required|valid_email|is_unique[user.user_email]',
						//Attribution des messages d'erreurs individualisés pour chaque condition
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'valid_email' => 'Le {field} doit être au format valide',
						],
					],
					'user_password' => [
						'label'  => 'mot de passe',
						'rules'  => 'required|max_length[30]|min_length[5]',
						'errors' => [
						//Attribution des messages d'erreurs individualisés pour chaque condition
							'max_length' => 'Le {field} doit être de maximum trente caractères',
							'min_length' => 'Le {field} doit être de minimum de cinq caractères',
							'required' => 'Le {field} doit être rempli',
						],
					],
				],
			);
			
			$arrErrors = array();
				if (count($this->request->getPost())  > 0){ // Le formulaire a été envoyé ?
					$objUsersModel = new Users_model(); //instanciation du model
					//récupération des valeurs post
					$strMailField = $this->request->getPost('user_email'); 
					$strPasswordField = $this->request->getPost('user_password');
					$verifiedMail = $objUsersModel->checkMail($strMailField);
					//si le mail n'existe pas
					if($verifiedMail == false){
						$arrErrors[] = "Connexion impossible";
					//si le mail existe
					}elseif($verifiedMail == true){
						//instanciation de l'entité
						$objUser = new Users_entity;
						//récupération du mot de passe via l'adresse mail en bdd
						$UserPassword = $objUsersModel->getUserPassword($strMailField);
						//récupération de l'objet dans le tableau UserPassword
						$objUser = $UserPassword[0];
						//comparaison des mots de passe 
						$verifiedPassword = $objUsersModel->checkPassword($strPasswordField, $objUser->user_password);
						//si le mot de passe est juste
						if ($verifiedPassword == true){
							$User = $objUsersModel->getUser($objUser->user_email);
							$objUser = $User[0];
							//attribution des données de l'utilisateur à la session
							$this->session->set('user_email', $objUser->user_email);
							$this->session->set('user_firstname', $objUser->user_firstname);
							$this->session->set('user_id', $objUser->user_id);
						//si le mot de passe est faux
						}else{
							//attribution d'une erreur
							$arrErrors[] = "Connexion impossible";
						}
					}
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
						

			//attribution des erreurs à la vue
			$this->_data['arrErrors'] = $arrErrors;
			//attribution des fonctions CodeIgniter de formulaire à la vue
			$this->_data['form_open'] = form_open("users/connect");
			$this->_data['label_email']     = form_label("Adresse mail : ", "user_email");
			$this->_data['form_email'] = form_input ("user_email", "", "id='user_email'");
			$this->_data['label_password']     = form_label("Mot de passe : ", "user_password");
			$this->_data['form_password'] = form_input ("user_password", "", "id='user_password'", "password");
			$this->_data['form_submit' ]= form_submit("submit", "Se connecter");
			$this->_data['form_close'] = form_close();
				//instruction d'affichage de la page
		$this->display('connect.tpl');
	}else{
		// en cas d'utilisateur connecté, interdiction d'accès à la page
		$this->_data['title'] = "Interdit";
		$this->display("erreur403.tpl");
	}
	
		

	}
/**
*	@brief 		fonction retournant permettant la création d'un utilisateur
* 	@details 
*	<p>Cette fonction permet au visiteur de se créer un compte</p>
*
**/
	public function create(){
		//si l'utilisateur n'est pas connecté
		if($this->session->get('user_id') == NULL){
			//Ajout du helper de formulaire
			helper('form');
			helper('array');
			//assignation du titre
			$this->_data['title'] = "S'inscrire";
			
			// Chargement de la librairie
			$validation =  \Config\Services::validation();
			//Définition des règles de validation du formulaire
			$validation->setRules([
					'user_name' => [
						'label'  => 'nom',
						//le champ est obligatoire et ne peut contenir que des lettres, des tirets et des underscores mais pas d'accents
						'rules'  => 'required|alpha_dash',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_dash' => 'Le {field} ne doit contenir que des lettres, des tirets ou des underscores',
						],
					],
					'user_firstname' => [
						'label'  => 'prénom',
						'rules'  => 'required|alpha_dash',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_dash' => 'Le {field} ne doit contenir que des lettres et des tirets, sans accents',
						],
					],
					'user_email' => [
						'label'  => 'mail',
						'rules'  => 'required|valid_email|is_unique[user.user_email]',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							//vérifie que le mail est au bon format
							'valid_email' => 'Le {field} doit être au format valide',
							//vérifie que le mail n'est pas présent dans la base de données
							'is_unique' => 'le {field} semble être déjà utilisé',
						],
					],
					'user_password' => [
						'label'  => 'mot de passe',
						'rules'  => 'required|alpha_numeric',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_numeric' => 'Le {field} doit être au format valide',
						],
					],
					'user_passwordConfirmed' => [
						'label'  => 'mot de passe',
						'rules'  => 'required|alpha_numeric|matches[user_password]',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_numeric' => 'Le {field} ne doit contenir que des lettres et des chiffres',
							//vérifie que la valeur de ce champ correspond à celle du champ nommé user_password
							'matches' => 'le {field} doit correspondre au mot de passe'
						],
					],
					'user_houseNumber' => [
						'label'  => 'numéro de rue',
						'rules'  => 'required|numeric',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'numeric' => 'Le {field} doit être en chiffre',
						],
					],
					'user_address' => [
						'label'  => 'adresse',
						'rules'  => 'required|alpha_numeric_space',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							//compromis utilisé pour autoriser les espaces mais représente une faille par l'acceptation des chiffres
							'alpha_numeric_space' => 'L\'{field} doit être composé uniquement de lettres et ne pas contenir d\'accents',
						],
					],
					'user_cp' => [
						'label'  => 'code postal',
						'rules'  => 'required|numeric|exact_length[5]',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'numeric' => 'Le {field} doit être des chiffres',
							//de la longueur exacte
							'exact_length' => 'Le {field} doit contenir 5 caractères',
						],
					],
					'user_city' => [
						'label'  => 'ville',
						'rules'  => 'required|alpha',
						'errors' => [
							'required' => 'La {field} est obligatoire',
							'alpha' => 'La {field} ne doit contenir des chiffres',
						],
					],
					'user_phone' => [
						'label'  => 'numéro de téléphone',
						'rules'  => 'required|numeric|exact_length[10]',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'numeric' => 'Le {field} doit être des chiffres',
							'exact_length' => 'Le {field} doit être de dix caractères',
						],
					],



				]
			);
			//assignation des erreurs à transmettre à la vue
			$arrErrors = array();
			//Vérification d'envoi du formulaire
			if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?

				if ($validation->run($this->request->getPost())){ //on teste la validation du formulaire sur les données
					$objUsersModel = new Users_model(); // Instanciation du modèle
					$objUsers     = new \App\Entities\Users_entity(); // Instanciation de l'entité
					
					//Décortication des valeurs de POST pour ajout à la base de données selon le modèle convenu
					$intHouseNumber = $this->request->getPost(['user_houseNumber'][0]); 
					$charAddress = $this->request->getPost(['user_address'][0]);
					$charUserAddress = $intHouseNumber.", ".$charAddress;
					$charUserPasswordHashed = $objUsersModel->hashing($this->request->getPost(['user_password'][0]));
					
					//Re-création d'un tableau afin de compléter l'entité selon la base de données
					$arrUser = [
								'user_address' => $charUserAddress,
								'user_name' => $this->request->getPost(['user_name'][0]),
								'user_firstname' => $this->request->getPost(['user_firstname'][0]),
								'user_email' => $this->request->getPost(['user_email'][0]),
								'user_password' => $charUserPasswordHashed,
								'user_city' => $this->request->getPost(['user_city'][0]),
								'user_cp' => $this->request->getPost(['user_cp'][0]),
								'user_phone' => $this->request->getPost(['user_phone'][0]),
							];
					//Remplissage de l'objet entité
					$objUsers->fill($arrUser);
					//Ajout en base de données
					$objUsersModel->save($objUsers); 
					//Redirection vers la page d'accueil (méthode par défaut)
					return redirect()->to('/Pages');
				//Si le formulaire n'est pas envoyé car contient des erreurs
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
			}
			//Attribution des erreurs à la vue
			$this->_data['arrErrors'] = $arrErrors;
			//Création du formulaire
			$this->_data['form_open'] = form_open("users/create");
			
			$this->_data['label_name']     = form_label("Nom : ", "user_name");
			
			$this->_data['form_name'] = form_input ("user_name", $this->request->getPost('user_name')??'', "id='user_name'");
			
			$this->_data['label_firstname']     = form_label("Prénom : ", "user_firstname");
			$this->_data['form_firstname'] = form_input ("user_firstname", $this->request->getPost('user_firstname')??'', "id='user_firstname'");
			
			$this->_data['label_email']     = form_label("Adresse mail : ", "user_email");
			$this->_data['form_email'] = form_input ("user_email", $this->request->getPost('user_email')??'', "id='user_email'");
			
			$this->_data['label_password']     = form_label("Mot de passe : ", "user_password");
			$this->_data['form_password'] = form_input ("user_password", $this->request->getPost('user_password')??'', "id='user_password'", "password");
			
			$this->_data['label_passwordConfirmed']     = form_label("Confirmez votre mot de passe : ", "user_passwordConfirmed");
			$this->_data['form_passwordConfirmed'] = form_input ("user_passwordConfirmed", $this->request->getPost('user_passwordConfirmed')??'', "id='user_passwordConfirmed'", "password");
			
			$this->_data['label_houseNumber']     = form_label("Numéro de rue : ", "user_houseNumber");
			$this->_data['form_houseNumber'] = form_input ("user_houseNumber", $this->request->getPost('user_houseNumber')??'', "id='user_houseNumber'");

			$this->_data['label_address']     = form_label("Rue : ", "user_address");
			$this->_data['form_address'] = form_input ("user_address", $this->request->getPost('user_address')??'', "id='user_address'");
			
			$this->_data['label_city']     = form_label("Ville : ", "user_city");
			$this->_data['form_city'] = form_input ("user_city", $this->request->getPost('user_city')??'', "id='user_city'");
			
			$this->_data['label_cp']     = form_label("Code postal : ", "user_cp");
			$this->_data['form_cp'] = form_input ("user_cp", $this->request->getPost('user_cp')??'', "id='user_cp'");
			
			$this->_data['label_phone']     = form_label("Numéro de téléphone : ", "user_phone");
			$this->_data['form_phone'] = form_input ("user_phone", $this->request->getPost('user_phone')??'', "id='user_phone'");

			
			$this->_data['form_submit' ]= form_submit("submit", "Validez !");
			$this->_data['form_close'] = form_close();
			//Instruction d'affichage
			$this->display('create.tpl');
		}else{
			//si l'utilisateur est connecté interdiction d'accès à la page
			$this->_data['title'] = "Interdit";
			$arrErrors[] = "";
			$this->_data['arrErrors'] = $arrErrors;
			$this->display('erreur403.tpl');
		}
		
	}
	
/**
*	@brief 		fonction permettant l'affichage de la page d'accueil
* 	@details 
*	<p>Cette fonction permet d'afficher l'accueil</p>
*
**/

	public function disconnect(){
		//destruction de la session
		$this->session->destroy();
		return redirect()->to('Users/connect');
	}

/**
*	@brief 		méthode permettant la modification d'un utilisateur
* 	@details 
*	<p>Cette méthode permet au visiteur de modifier ses données</p>
*
**/
	public function profil(){
		if($this->session->get('user_id') != NULL){
			//Ajout du helper de formulaire
			helper('form');
			helper('array');
			//assignation du titre
			$this->_data['title'] = "S'inscrire";
			
			// Chargement de la librairie
			$validation =  \Config\Services::validation();
			//Définition des règles de validation du formulaire
			$validation->setRules([
					'user_name' => [
						'label'  => 'nom',
						//le champ est obligatoire et ne peut contenir que des lettres, des tirets et des underscores mais pas d'accents
						'rules'  => 'alpha_dash',
						'errors' => [
							'alpha_dash' => 'Le {field} ne doit contenir que des lettres, des tirets ou des underscores',
						],
					],
					'user_firstname' => [
						'label'  => 'prénom',
						'rules'  => 'alpha_dash',
						'errors' => [
							'alpha_dash' => 'Le {field} ne doit contenir que des lettres et des tirets, sans accents',
						],
					],
					'user_email' => [
						'label'  => 'mail',
						'rules'  => 'valid_email',
						'errors' => [
							//vérifie que le mail est au bon format
							'valid_email' => 'Le {field} doit être au format valide',
							//vérifie que le mail n'est pas présent dans la base de données
							'is_unique' => 'le {field} semble être déjà utilisé',
						],
					],
					'user_houseNumber' => [
						'label'  => 'numéro de rue',
						'rules'  => 'numeric',
						'errors' => [
							'numeric' => 'Le {field} doit être en chiffre',
						],
					],
					'user_address' => [
						'label'  => 'adresse',
						'rules'  => 'alpha_numeric_space',
						'errors' => [
							//compromis utilisé pour autoriser les espaces mais représente une faille par l'acceptation des chiffres
							'alpha_numeric_space' => 'L\'{field} doit être composé uniquement de lettres et ne pas contenir d\'accents',
						],
					],
					'user_phone' => [
						'label'  => 'numéro de téléphone',
						'rules'  => 'numeric|exact_length[10]',
						'errors' => [
							'numeric' => 'Le {field} doit être des chiffres',
							'exact_length' => 'Le {field} doit être de dix caractères',
						],
					],



			]);
			//assignation des erreurs à transmettre à la vue
			$arrErrors = array();
			$objUsersModel = new Users_model(); // Instanciation du modèle
			$objUsers     = new \App\Entities\Users_entity(); // Instanciation de l'entité
			$userId = $this->session->get('user_id'); //attribution de l'id en session
			$objUser = $objUsersModel->getFullUser($userId); // récupération de l'ensemble des données de l'utilisateur
			$objUserIdentity = $objUser[0]; // récupération de l'objet
			
			$charUsername = $objUserIdentity->user_name;
			$charuserFirstname = $objUserIdentity->user_firstname;
			$charUserMail = $objUserIdentity->user_email;
			$intuserPhone = $objUserIdentity->user_phone;
			$charUserAddress = $objUserIdentity->user_address;
			$intUserCP = $objUserIdentity->city_id;
			$address = $objUserIdentity->user_address;
			$temp = explode(", ", $address);
			$houseNumber = $temp[0];
			$address = $temp[1];
			//Vérification d'envoi du formulaire
			if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?

				if ($validation->run($this->request->getPost())){ //on teste la validation du formulaire sur les données
					//Décortication des valeurs de POST pour ajout à la base de données selon le modèle convenu
					$intHouseNumber = $this->request->getPost(['user_houseNumber'][0]); 
					$charAddress = $this->request->getPost(['user_address'][0]);
					$charUserAddress = $intHouseNumber.", ".$charAddress;
					$password = $objUserIdentity->user_password;
					$charUserPasswordHashed = $objUsersModel->hashing($this->request->getPost(['user_password'][0]));
					
					//Re-création d'un tableau afin de compléter l'entité selon la base de données
					$arrUser = [
								'user_id' => $objUserIdentity->user_id,
								'user_address' => $charUserAddress,
								'user_name' => $this->request->getPost(['user_name'][0]),
								'user_firstname' => $this->request->getPost(['user_firstname'][0]),
								'user_password' => $password,
								'user_email' => $this->request->getPost(['user_email'][0]),
								'user_phone' => $this->request->getPost(['user_phone'][0]),
							];
					//remplacement des données en bdd
					$objUsersModel->replace($arrUser);
					return redirect()->to('Users/profil');
			
				//Si le formulaire n'est pas envoyé car contient des erreurs
				 }else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				 }
			}
			//Attribution des erreurs à la vue
			$this->_data['arrErrors'] = $arrErrors;
			//Création du formulaire
			$this->_data['form_open'] = form_open("users/profil");
			//$intuserPhone = $objUserIdentity->user_phone;
			//$charUserAddress = $objUserIdentity->user_address;
			//$intUserCP = $objUserIdentity->city_id;
			$this->_data['label_name']     = form_label("Nom : ", "user_name");
			
			$this->_data['form_name'] = form_input ("user_name", $charUsername, "id='user_name'");
			
			$this->_data['label_firstname']     = form_label("Prénom : ", "user_firstname");
			
			$this->_data['form_firstname'] = form_input ("user_firstname", $charuserFirstname, "id='user_firstname'");
			
			$this->_data['label_email']     = form_label("Adresse mail : ", "user_email");
			$this->_data['form_email'] = form_input ("user_email", $charUserMail, "id='user_email'");
			
			$this->_data['label_houseNumber']     = form_label("Numéro de rue : ", "user_houseNumber");
			$this->_data['form_houseNumber'] = form_input ("user_houseNumber", $houseNumber, "id='user_houseNumber'");

			$this->_data['label_address']     = form_label("Rue : ", "user_address");
			$this->_data['form_address'] = form_input ("user_address", $address, "id='user_address'");
			
			$this->_data['label_phone']     = form_label("Numéro de téléphone : ", "user_phone");
			$this->_data['form_phone'] = form_input ("user_phone", $intuserPhone, "id='user_phone'");

			
			$this->_data['form_submit' ]= form_submit("submit", "Validez !");
			$this->_data['form_close'] = form_close();
			//Instruction d'affichage
			$this->display('profil.tpl');
			}else{
				//si l'utilisateur n'est pas connecté
				$this->_data['title'] = "Interdit";
				$arrErrors[] = "";
				$this->_data['arrErrors'] = $arrErrors;
				$this->display('erreur403.tpl');
			}
		}
	}

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
		helper('form');
		$this->_data['title'] = "Se connecter";
		// Chargement de la librairie
        $validation =  \Config\Services::validation();
		//Définition des règles de vérification des champs
		$validation->setRules([
                'user_email' => [
                    'label'  => 'e-mail',
					//Attribution de required pour obligation de saisie, valid_email pour vérification du format
                    'rules'  => 'required|valid_email',
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
			/*if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?
				if ($validation->run($this->request->getPost())){ //on teste la validation du formulaire sur les données
					$objUsersModel = new Users_model(); // Instanciation du modèle
					$userconnect = $objUsersModel->login($mail, $password);//Utilisation de la fonction login
					
					if($arrResult === false){
						$this->_arrData['strError'] = "Connexion impossible";
						echo('2');
					}else{
					$objUsers = new \App\Entities\Users_entity(); // Instanciation de l'entité
					$objUsers->fill($this->request->getPost());
							echo('3');			
					}
					return redirect()->to(''); // redirection vers l'action par défaut du controller Product
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
			}*/
			if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?
				var_dump($this->request->getPost());
			}else{
				echo('2');
				$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
			}
			
        
		$this->_data['arrErrors'] = $arrErrors;
		$this->_data['form_open'] = form_open("users/connect");
		$this->_data['label_email']     = form_label("Adresse mail : ", "user_email");
		$this->_data['form_email'] = form_input ("user_email", "", "id='user_email'");
		$this->_data['label_password']     = form_label("Mot de passe : ", "user_password");
		$this->_data['form_password'] = form_input ("user_password", "", "id='user_password'", "password");
		$this->_data['form_submit' ]= form_submit("submit", "Se connecter");
		$this->_data['form_close'] = form_close();
			if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?
				if ($validation->run($this->request->getPost())){ //on teste la validation du formulaire sur les données
					$objUsersModel = new Users_model(); // Instanciation du modèle
					$objUsers     = new \App\Entities\Users_entity(); // Instanciation de l'entité
					$objUsers->fill($this->request->getPost());
					return redirect()->to('/Users'); // redirection vers l'action par défaut du controller Product
					var_dump($objUsers);
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
			}

		$this->display('connect.tpl');
		

	}
/**
*	@brief 		fonction retournant permettant la création d'un utilisateur
* 	@details 
*	<p>Cette fonction permet au visiteur de se créer un compte</p>
*
**/

	
	public function create(){
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
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
						'alpha' => 'Le {field} ne doit contenir que des lettres',
                    ],
                ],
                'user_firstname' => [
                    'label'  => 'prénom',
                    'rules'  => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'alpha_numeric_space' => 'Le {field} doivent être des lettres ni contenir d\'accent',
                    ],
                ],
				'user_email' => [
                    'label'  => 'mail',
                    'rules'  => 'required|valid_email|is_unique[user.user_email]',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'valid_email' => 'Le {field} doit être au format valide',
						'is_unique' => 'le {field} semble être déjà utilisé',
                    ],
                ],
				'user_password' => [
                    'label'  => 'mot de passe',
                    'rules'  => 'required|alpha',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'alpha' => 'Le {field} doit être au format valide',
                    ],
                ],
				'user_passwordConfirmed' => [
                    'label'  => 'mot de passe',
                    'rules'  => 'required|alpha_numeric|matches[user_password]',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'alpha_numeric' => 'Le {field} ne doit contenir que des lettres et des chiffres',
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
                        'alpha_numeric_space' => 'L\'{field} doit être composé uniquement de lettres et ne pas contenir d\'accents',
                    ],
                ],
				'user_cp' => [
                    'label'  => 'code postal',
                    'rules'  => 'required|numeric|max_length[5]|min_length[5]',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'numeric' => 'Le {field} doit être des chiffres',
						'max_length' => 'Le {field} doit être de maximum cinq caractères',
						'min_length' => 'Le {field} doit être de minimum de cinq caractères',
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
                    'rules'  => 'required|numeric|max_length[10]|min_length[10]',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'numeric' => 'Le {field} doit être des chiffres',
						'max_length' => 'Le {field} doit être de maximum dix caractères',
						'min_length' => 'Le {field} doit être de minimum de dix caractères',
                    ],
                ],



            ]
        );
		//assignation des erreurs à transmettre à la vue
        $arrErrors = array();
		
        if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?
				$this->_data['title'] = "S'inscrire";

            if ($validation->run($this->request->getPost())){ //on teste la validation du formulaire sur les données
                $objUsersModel = new Users_model(); // Instanciation du modèle
                $objUsers     = new \App\Entities\Users_entity(); // Instanciation de l'entité
				$intHouseNumber = $this->request->getPost(['user_houseNumber'][0]); 
				$charAddress = $this->request->getPost(['user_address'][0]);
				$charUserAddress = $intHouseNumber.", ".$charAddress;
				$charUserName = $this->request->getPost(['user_name'][0]);
				$charUserFirstName = $this->request->getPost(['user_firstname'][0]);
				$charUserMail = $this->request->getPost(['user_email'][0]);
				$charUserCity  = $this->request->getPost(['user_city'][0]);
				$intUserCP = $this->request->getPost(['user_cp'][0]);
				$intUserPhone = $this->request->getPost(['user_phone'][0]);
				$charUserPasswordHashed = $objUsersModel->hashing($this->request->getPost(['user_password'][0]));
				
				$arrUser = [
							'user_address' => $charUserAddress,
							'user_name' => $charUserName,
							'user_firstname' => $charUserFirstName,
							'user_email' => $charUserMail,
							'user_password' => $charUserPasswordHashed,
							'user_city' => $charUserCity,
							'user_cp' => $intUserCP,
							'user_phone' => $intUserPhone,
						];

	            $objUsers->fill($arrUser);
				var_dump($this->request->getPost());
				
				var_dump($objUsers);

                $objUsersModel->save($objUsers); // On sauvegarde l'objet
                //return redirect()->to('/Pages/accueil'); // redirection vers l'action par défaut du controller Product
            }else{
                $arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
            }
        }
			
        $this->_data['arrErrors'] = $arrErrors;
		
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

		$this->display('create.tpl');
	}
	public function accueil(){
		$this->display('accueil.tpl');
	}

}
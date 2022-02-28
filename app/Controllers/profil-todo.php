<?php
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
						'rules'  => 'valid_email|is_unique[user.user_email]',
						'errors' => [
							//vérifie que le mail est au bon format
							'valid_email' => 'Le {field} doit être au format valide',
							//vérifie que le mail n'est pas présent dans la base de données
							'is_unique' => 'le {field} semble être déjà utilisé',
						],
					],
					'user_password' => [
						'label'  => 'mot de passe',
						'rules'  => 'alpha_numeric',
						'errors' => [
							'alpha_numeric' => 'Le {field} doit être au format valide',
						],
					],
					'user_passwordConfirmed' => [
						'label'  => 'mot de passe',
						'rules'  => 'alpha_numeric|matches[user_password]',
						'errors' => [
							'alpha_numeric' => 'Le {field} ne doit contenir que des lettres et des chiffres',
							//vérifie que la valeur de ce champ correspond à celle du champ nommé user_password
							'matches' => 'le {field} doit correspondre au mot de passe'
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
					'user_cp' => [
						'label'  => 'code postal',
						'rules'  => 'numeric|exact_length[5]',
						'errors' => [
							'numeric' => 'Le {field} doit être des chiffres',
							//de la longueur exacte
							'exact_length' => 'Le {field} doit contenir 5 caractères',
						],
					],
					'user_city' => [
						'label'  => 'ville',
						'rules'  => 'alpha',
						'errors' => [
							'alpha' => 'La {field} ne doit contenir des chiffres',
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
					$objUser = $objUsersModel->getFullUser($intUserId);
					$intHouseNumber = $this->request->getPost(['user_houseNumber'][0]); 
					$charAddress = $this->request->getPost(['user_address'][0]);
					$charUserAddress = $intHouseNumber.", ".$charAddress;
					//$charUserName = $this->request->getPost(['user_name'][0]);
					//$charUserFirstName = $this->request->getPost(['user_firstname'][0]);
					//$charUserMail = $this->request->getPost(['user_email'][0]);
					//$charUserCity  = $this->request->getPost(['user_city'][0]);
					//$intUserCP = $this->request->getPost(['user_cp'][0]);
					//$intUserPhone = $this->request->getPost(['user_phone'][0]);
					//$prout = $this->request->getPost(['user_password'][0]);
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
					$objUsers->replace($arrUser);

					
			
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
			
			$this->_data['label_name']     = form_label("Nom : ", "user_name",  "class='persoInfo'");
			
			$this->_data['form_name'] = form_input ("user_name", $this->request->getPost('user_name')??'', "id='user_name' class='general'");
			
			$this->_data['label_firstname']     = form_label("Prénom : ", "user_firstname",  "class='persoInfo'");
			$this->_data['form_firstname'] = form_input ("user_firstname", $this->request->getPost('user_firstname')??'', "id='user_firstname' class='general'");
			
			$this->_data['label_email']     = form_label("Adresse mail : ", "user_email",  "class='persoInfo'");
			$this->_data['form_email'] = form_input ("user_email", $this->request->getPost('user_email')??'', "id='user_email'");
			
			$this->_data['label_password']     = form_label("Mot de passe : ", "user_password",  "class='persoInfo'");
			$this->_data['form_password'] = form_input ("user_password", $this->request->getPost('user_password')??'', "id='user_password' class='general'", "password");
			
			$this->_data['label_passwordConfirmed']     = form_label("Confirmez votre mot de passe : ", "user_passwordConfirmed",  "class='persoInfo'");
			$this->_data['form_passwordConfirmed'] = form_input ("user_passwordConfirmed", $this->request->getPost('user_passwordConfirmed')??'', "id='user_passwordConfirmed' class='general'", "password");
			
			$this->_data['label_houseNumber']     = form_label("Numéro de rue : ", "user_houseNumber",  "class='persoInfo'");
			$this->_data['form_houseNumber'] = form_input ("user_houseNumber", $this->request->getPost('user_houseNumber')??'', "id='user_houseNumber' class='general'");

			$this->_data['label_address']     = form_label("Rue : ", "user_address",  "class='persoInfo'");
			$this->_data['form_address'] = form_input ("user_address", $this->request->getPost('user_address')??'', "id='user_address' class='general'");
			
			$this->_data['label_city']     = form_label("Ville : ", "user_city",  "class='persoInfo'");
			$this->_data['form_city'] = form_input ("user_city", $this->request->getPost('user_city')??'', "id='user_city' class='general'");
			
			$this->_data['label_cp']     = form_label("Code postal : ", "user_cp",  "class='persoInfo'");
			$this->_data['form_cp'] = form_input ("user_cp", $this->request->getPost('user_cp')??'', "id='user_cp' class='general'");
			
			$this->_data['label_phone']     = form_label("Numéro de téléphone : ", "user_phone",  "class='persoInfo'");
			$this->_data['form_phone'] = form_input ("user_phone", $this->request->getPost('user_phone')??'', "id='user_phone' class='general'");

			
			$this->_data['form_submit' ]= form_submit("submit", "Validez !");
			$this->_data['form_close'] = form_close();
			//Instruction d'affichage
			$this->display('create.tpl');
		}else{
			$this->_data['title'] = "Interdit";
			$arrErrors[] = "";
			$this->_data['arrErrors'] = $arrErrors;
			$this->display('erreur403.tpl');
		}
		
	}
	

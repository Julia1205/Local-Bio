<?php
	/**
	* Contrôleur des utilisateurs
	* @author Julien Wodey
	*/
	class UsersCtrl extends Ctrl{
		
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();

			include("Models/user_manager.php");
			include("Models/user_entity.php");
		}
			
			function LeNettoyeur($data){
            return input.replaceAll(/[&/\#,+()$~%.^'":*?<>{}]/g, ""0123456789);
        }



		/**
		* Page de création de compte
		*/
		public function create_account(){
			if(count($_POST) >0){ // formulaire envoyé
				// Créer un objet utilisateur avec les données du formulaire
				$objUser = new User;
				$objUser->hydrate($_POST);
				
				// Récupération des données du formulaire
				$Passwd 		= trim($_POST['pass']);
				$ConfirmPwd 	= trim($_POST['confirmPass']);
				// initialisation du tableau des erreurs
				$arrErrors = array(); 
				
				$objUserManager = new User_manager;
				
				// Vérifications du nom
				if ($objUser->getName() == ''){
					$arrErrors['name'] = "Veuillez saisir un nom";
				}
				// Vérifications du prénom
				if ($objUser->getFirstname() == ''){
					$arrErrors['firstname'] = "Veuillez saisir un prénom";
				}
				// Vérifications du mail (format + existence en bdd)
				if ($objUser->getMail() == ''){
					$arrErrors['mail'] = "Veuillez saisir un email";
				}elseif (!filter_var($objUser->getMail(), FILTER_VALIDATE_EMAIL)) {
					$arrErrors['mail'] = "L'email n'est pas valide";
				}elseif ($objUserManager->findByMail($objUser->getMail()) !== false){
					$arrErrors['mail'] = "Ce mail est déja lié à un compte";
				}
				
				// Vérifications du mot de passe et de sa confirmation
				if ($objUser->getPass() == ''){
					$arrErrors['pass'] = "Veuillez renseigner un mot de passe";
				}else if ($strPasswd != $strConfirmPwd){
					$arrErrors['pass'] = "Veuillez saisir le même mot de passe";
				}
				
				if (count($arrErrors) == 0){
					$objUserManager->insert($objUser);
					header("Location:index.php");
				}

				$this->_arrData['strError']		= $arrErrors;
			}
			$this->_arrData['Name'] 		= $_POST['name']??"";
			$this->_arrData['Firstname'] = $_POST['firstname']??"";
			$this->_arrData['Mail'] 		= $_POST['mail']??"";
			$this->display("create_account");
		}
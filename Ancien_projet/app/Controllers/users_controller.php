<?php
/**
* @file users_controller.php
* @author Julie Sigrist
* @version 1.0
* @date 31/01/2022
* @brief Controller des utilisateurs
* @todo ajout fonctions, adaptation de login, création vue, models, entities
*
*  @details 
* <p>Cette classe permet de gérer les actions des pages gérées par le controller des utilisateurs</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>login</strong> : page de connexion</li>
* 	<li><strong>Logout</strong> : déconnexion (tuage de session)</li>
*	<li><strong>Create_account</strong> : ajout d'un utilisateur</li>
* </ul>
*
**/
	class UsersCtrl extends Ctrl{
		
		
		public function __construct(){
		}
/**
*	@brief 		fonction permettant à l'utilisateur de se connecter à son compte personnel
* 	@details 
*	<p>Cette fonction permet de se connecter à un compte personnel, 
*		en comparant dans la base de données les adresse mail et mot de passe enregistrés à ceux entrés dans le formulaire.</p>
*	@param 	none
*	@return	Tableau contenant l'id d'utilisateur ainsi que les noms et prénoms via la super globale session. (sous-tableaux)
*
**/
		//fonction de connexion
		public function login(){
			/*$this->_strTitle	= "Se connecter";
			$this->_strDesc		= "Page de connexion";*/
			
			include("Models/connect.php");
			// si le formulaire envoyé
			if(count($_POST) >0){ // si le formulaire envoyé
				$strMail 	= trim($_POST['mail']);
				$strPwd		= trim($_POST['passwd']);
				// Vérification du mail et du mot de passe
				if ($strMail == '' || $strPwd == ''){
					echo "<p class='error'>Merci de renseigner l'email et le mot de passe</p>";
				}else{
					$strQuery 	= "	SELECT * 
									FROM users
									WHERE user_mail='".$strMail."'
									AND user_pwd = '".$strPwd."'
									";
					$arrResult 	= $db->query($strQuery)->fetch();
					if($arrResult === false){
						echo "<p class='error'>Connexion impossible</p>";
					}else{
						// Ajout de l'utilisateur en session
						$_SESSION['user']['user_id'] 	= $arrResult['user_id'];
						$_SESSION['user']['user_name'] 	= $arrResult['user_name']." ".$arrResult['user_firstname'];;
						header("Location:index.php");
					}
				}
			}
			
			$this->display("login");
		}
		
/**
*	@brief 		fonction permettant à la session de se terminer
* 	@details 
*	<p>Cette fonction permet de tuer une session en la vidant de ses données. Pour cela, il est nécessaire malgré tout de l'appeler puis de la détruire.</p>
*	@param 	none
*	@return	Super-globale $_SESSION vide.
*
**/
		public function logout(){
			session_start();
			session_destroy();
			header("Location:index.php");
		}
/**
*	@brief 		fonction permettant de créer un utilisateur.
* 	@details 
*	<p>Cette fonction permet d'ajouter un utilisateur à la base de données.</p>
*	@param 	
*	@return	
*
**/
		public function create_account(){
			
		}



	}
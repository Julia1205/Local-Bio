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
		$this->_data['form_open'] = form_open("users/connect");
		$this->_data['label_email']     = form_label("Adresse mail : ", "user_email");
		$this->_data['form_email'] = form_input ("user_email", "", "id='user_email'");
		$this->_data['label_password']     = form_label("Mot de passe : ", "user_password");
		$this->_data['form_password'] = form_input ("user_password", "", "id='user_password'");
		$this->_data['form_submit' ]= form_submit("submit", "Validez !");
		$this->_data['form_close'] = form_close();
		if (count($this->request->getPost()) > 0){ // Le formulaire a été envoyé ?
			$objUsers = new users_entity;
			$objUsersModel = new users_model;
			$objUsers->fill($this->request->getPost('user_email', 'user_password'));

				//return redirect()->to('users/profil'); // redirection vers l'action par défaut du controller Product
			$this->_data['user'] = $objUsersModel->connect();
			var_dump($objUsersModel);
        }
		$this->display('connect.tpl');

	}
	public function accueil(){
		$this->display('accueil.tpl');
	}

}
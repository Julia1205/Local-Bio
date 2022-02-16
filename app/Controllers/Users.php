<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Users_model;
use App\Entities\Users_entity;

class Users extends BaseController{
	
	public function __construct(){
		helper('form');
	}
	
	public function connect(){
		
		$this->_data['title'] = "Se connecter";
		$objUser = new users_entity;
		$objUsersModel = new users_model;
		//$this->_data['hello'] = $objUsersModel->random();

		$data['label_email']     = form_label("Adresse mail : ", "user_email");
		$data['form_email'] = form_input ("user_email", "", "id='user_email");
		$data['form_close'] = form_close();
		$this->display('connect.tpl');

	}

}
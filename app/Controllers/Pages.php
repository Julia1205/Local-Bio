<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Accueil_model;
use App\Entities\accueil_entity;

class Pages extends BaseController{
	
	public function __construct(){
		
	}
	
	public function accueil(){
		$this->_data['title'] = "Accueil";
		
		/*$objAccueil = new accueil_entity;
		$objAccueilModel = new accueil_model;
		$this->_data['result'] = $objAccueilModel->calcul();*/
		
		$this->display("accueil.tpl");

	}
	
	public function about(){
		$this->_data['title'] = "A propos";
		$this->display("about.tpl");
	}
}
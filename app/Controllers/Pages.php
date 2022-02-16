<?php
/**
* @file Pages.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 16/02/2022
* @brief Controller des pages statiques
*
*  @details 
* <p>Cette classe permet de gérer les actions des pages gérées par le controller des pages</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>accueil</strong> : page d'accueil</li>
* 	<li><strong>about</strong> : pages "à propos"</li>
* </ul>
*
**/
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Accueil_model;
use App\Entities\accueil_entity;

class Pages extends BaseController{
	
	public function __construct(){
		
	}
/**
*	@brief 		fonction retournant la page d'accueil
* 	@details 
*	<p>Cette fonction permet d'attribuer le titre de la page et d'afficher le template correspondant
**/
	public function accueil(){
		$this->_data['title'] = "Accueil";		
		$this->display("accueil.tpl");

	}
/**
*	@brief 		fonction retournant la page à propos
* 	@details 
*	<p>Cette fonction permet d'attribuer le titre de la page et d'afficher le template correspondant
**/

	public function about(){
		$this->_data['title'] = "A propos";
		$this->display("about.tpl");
	}
}
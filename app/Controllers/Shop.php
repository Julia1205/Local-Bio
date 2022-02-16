<?php
/**
* @file Shop.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 16/02/2022
* @brief Controller des produits
*
*  @details 
* <p>Cette classe permet de gérer les actions des pages gérées par le controller des produits</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>boutique</strong> : page de la boutique</li>
* </ul>
*
**/
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Shop_model;
use App\Entities\Shop_entity;

class Shop extends BaseController{
	
	public function __construct(){
	}
/**
*	@brief 		fonction retournant la liste des produits de la base de données en fonction de la catégorie si précisée
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		la liste des produits présents dans la base de données</p>
*	@param 	$intCat integer
*	@return	Tableau contenant les produits (sous-tableaux)
*
**/
	public function boutique($intCat=null){

		$this->_data['title'] = "Boutique";
		$this->_data['c'] = [1, 2, 3];
		$objShop = new shop_entity;
		$objShopModel = new shop_model;
		
		if($intCat != null){
			$this->_data['products'] = $objShopModel->findByCat($intCat);
		}else{
			$this->_data['products'] = $objShopModel->findAll();
		}
		$this->display('shop.tpl');
	}
}
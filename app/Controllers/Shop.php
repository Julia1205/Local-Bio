<?php
/**
* @file Shop.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 16/02/2022
* @brief Controller de la boutique
*
*  @details 
* <p>Cette classe permet de gérer les actions des pages gérées par le controller des produits</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>boutique</strong> : page de la boutique</li>
*	<li><strong>details</strong> : page de détails des articles</li>
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
		//Assignation du titre
		$this->_data['title'] = "Boutique";
		//Instanciation de l'objet entité boutique
		$objShop = new shop_entity;
		//Instanciation de l'objet model boutique
		$objShopModel = new shop_model;
		//vérification si présence du paramètre dans l'URL
		if($intCat != null){
			//Si le paramètre existe, utiliser la fonction findByCat
			$this->_data['products'] = $objShopModel->findByCat($intCat);
		}else{
			//Si le paramètre n'existe pas, utiliser la fonction findAll
			$this->_data['products'] = $objShopModel->findAll();
		}
		//fonction de recherche
		if (count($this->request->getPost())  > 0){
		$objShopModel = new Shop_model(); //instanciation du model
		$Product = new Shop_entity(); //instanciation de l'entité
		//récupération de la chaîne de caractères dans le formulaire
		$strSearchField = $this->request->getPost('product_search'); 
		//utilisation de la fonction de recherche
		$arrProducts = $objShopModel->findProduct($strSearchField);
		//affichage des produits correspondants à la recherche
		$this->_data['products'] = $arrProducts;

		}
		//instanciation du helper de formulaire
		helper('form');

		$this->_data['form_open'] = form_open("shop/boutique");
		$this->_data['label_product']     = form_label("Rechercher un produit ", "product_search");
		$this->_data['form_product'] = form_input ("product_search", "", "id='product_search'");
		$this->_data['form_submit' ]= form_submit("submit", "Rechercher");
		$this->_data['form_close'] = form_close();


		//Appel de l'affichage
		$this->display('shop.tpl');
	}

/**
*	@brief 		fonction retournant les détails du produit de la base de données en fonction de son nom
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		les détails d'un produit présent dans la base de données</p>
*	@param 	$charName string
*	@return	Tableau contenant les valeurs présentes dans la base de données (sous-tableaux)
*
**/

	public function details($charName=null){
		//instanciation de l'helper
			helper('form');
		//Assignation du titre 
		$this->_data['title'] = "Details";
		//Instanciation de l'objet entité boutique
		$objShop = new shop_entity;
		//Instanciation de l'objet model boutique
		$objShopModel = new shop_model;
		//Vérification si le nom du produit est présent dans l'URL
		if($charName != null){
			//Si présence, utiliser la fonction findDetails
			$arrAttributesInput = [
						'name' => 'product_quantity',
						'id' => 'product_quantity',
						'value' => $this->request->getPost('product_quantity')??'',
						'type' => 'number',
			];
		
			$this->_data['product'] = $objShopModel->findDetails($charName);
			$id = $this->_data['product'][0]->product_id;
			$url = $this->_data['product'][0]->url_name;
			
			$this->_data['form_open'] = form_open("cart/panier/".$id);
			$this->_data['input_quantity'] = form_input ($arrAttributesInput);
			$this->_data['form_submit'] = form_submit("submit", "Ajouter au panier");
			$this->_data['form_close'] = form_close();
			$qty = $this->request->getPost('product_quantity');
			
			var_dump($this->request->getPost('product_quantity'));

			

		
			
			//Demande d'affichage de la page de details
			$this->display('details.tpl');
		}
		
		
	}
}
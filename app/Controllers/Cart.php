<?php
/**
* @file Cart.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 04/03/2022
* @brief Controller du panier
*@todo Fonction de retrait du panier d'un produit
*
*  @details 
* <p>Cette classe permet de gérer les actions par le controller du panier</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>addPanier</strong> : ajout du produit en session</li>
*	<li><strong>panier</strong> : récupération du tableau en session pour établissement du panier affiché</li>
* </ul>
*
**/
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Cart_model;
use App\Models\Shop_model;
use App\Entities\Cart_entity;

	class Cart extends BaseController{
		
/**
*	@brief 		constructeur de la class
*
**/
		public function __construct(){
			
		}
		
/**
*	@brief 		fonction ajoutant en session le produit voulu par l'utilisateur
* 	@details 
*	<p>Cette fonction permet d'ajouter dans la session un tableau "products" contenant l'id du produit ainsi que la quantité souhaitée</p>
*	@param 	$id integer
*	@return	$arrCart Tableau contenant les produits sous forme de sous-tableaux dans la session
*
**/
		public function addPanier($id){			
			/* Gestion de l'ajout au panier */
			//Récupération de la quantité dans le champ de la page du produit
			$qty = intval($this->request->getPost('product_quantity')); 
			//Récupération du contenu à l'indice Products de la session
			$arrCart['products'] = $this->session->products;
			//Si le tableau products contient déjà le produit
			if (isset($arrCart['products'][$id])){
				//Attribution de la nouvelle quantité dans le tableau de panier 
				$initialQty = $arrCart['products'][$id];
				$ttqty = $initialQty + $qty;
				//mise à jour du panier dans la session
				$arrCart['products'][$id] = $ttqty;	
				//Mise à jour en session
				$this->session->set($arrCart);
			}else{//Si le produit n'existe pas encore
				//Ajout dans le tableau du produit et sa quantité
				$arrCart['products'][$id] = $qty;
				//Ajout en session du tableau composé
				$this->session->set($arrCart);
			}
			//redirection sur la boutique après ajout
			return redirect()->to('shop/boutique');
		}
		
/**
*	@brief 		fonction de parcours du tableau de panier en session pour affichage
* 	@details 
*	<p>Cette fonction permet de parcourir le tableau Products de la session afin d'attribuer le nom du produit pour affichage et calcul des montants hors taxes, 
*	toutes taxes comprises, du montant de la TVA et du total TTC de l'ensemble du panier avec affichage de l'ensemble de ces éléments</p>
*	@param 	none
*	@return	$objProduct objet d'un produit ajouté au panier auquel on attribut les différents calculs de prix
*
**/
		public function panier(){
			//Vérification de présence en session du tableau
			if(isset($this->session->products)){
				//Récupération en session du tableau
				$arrCart = $this->session->products;
				//Instanciation du model de la boutique
				$objShopModel = new shop_model;
				//Incrémentation des différents prix à 0
				$totalHT = 0;
				$totalTTC = 0;
				$totalTVA= 0;
				//parcours du tableau avec décomposition de chaque produits
				foreach($arrCart as $idProd => $prodQty){
					//Récupération du nom du produit 
					$objProduct = $objShopModel->find($idProd);
					//attribution à l'objet de chaque produit la quantité dans le panier en session
					$objProduct->qty = $prodQty;
					//attribution du prix hors taxes avec calcul du montant pour chaque produit (puisque dans la boucle de parcours
					$objProduct->prix_totalHT = $objProduct->qty * $objProduct->product_pu;
					//Attribution du prix toutes taxes comprises pour chaque produit
					$objProduct->prix_totalTTC =  ROUND(($objProduct->prix_totalHT * $objProduct->product_tva /100) + $objProduct->prix_totalHT, 2);
					// Attribution de l'objet composé à un tableau liant l'id et les différents informations
					$arrProductToDisplay[$idProd] = $objProduct;
					//Calcul des différents montants
					$totalHT += $objProduct->prix_totalHT; 
					$totalTTC += $objProduct->prix_totalTTC;
					$totalTVA += $objProduct->prix_totalTTC - $objProduct->prix_totalHT;
				}
				//Attribution à la vue des montants pour chaque produit
				$this->_data['totalHT'] = $totalHT;
				$this->_data['totalTTC'] = $totalTTC;
				$this->_data['totalTVA'] = $totalTVA;
				//Attribution du titre de la page
				$this->_data['title'] = "Panier";
				//Attribution des tableaux de produits à la vue
				$this->_data['arrProduct'] = $arrProductToDisplay;
				//Instruction d'affichage du template
				$this->display('panier.tpl');
			}else{//s'il n'y a pas de panier dans la session
				$this->_data['title'] = "Panier vide";
				//affichage d'une page invitant l'utilisateur connecté à ajouter des produits à son panier
				$this->display('empty_basket.tpl');
			}
		}
	}
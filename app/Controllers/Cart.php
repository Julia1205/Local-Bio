<?php
/**
* @file Cart.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 04/03/2022
* @brief Controller du panier
*
*  @details 
* <p>Cette classe permet de gérer les actions par le controller du panier</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>panier</strong> : page du</li>
* </ul>
*
**/
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Cart_model;
use App\Models\Shop_model;
use App\Entities\Cart_entity;

	class Cart extends BaseController{
		
		public function addPanier($id){			
			/* Gestion de l'ajout au panier */
			$qty = intval($this->request->getPost('product_quantity')); 
			$arrCart['products'] = $this->session->products;

			if (isset($arrCart['products'][$id])){
				$initialQty = $arrCart['products'][$id];
				$ttqty = $initialQty + $qty;
				$arrCart['products'][$id] = $ttqty;	
				$this->session->set($arrCart);
			}else{
				$arrCart['products'][$id] = $qty;
				$this->session->set($arrCart);
			}
			return redirect()->to('shop/boutique');
		}

		public function panier(){
			if(isset($this->session->products)){
				$arrCart = $this->session->products;
				$objShopModel = new shop_model;
				$totalHT = 0;
				$totalTTC = 0;
				$totalTVA= 0;
				foreach($arrCart as $idProd => $prodQty){
					$objProduct = $objShopModel->find($idProd);
					$objProduct->qty = $prodQty;
					$objProduct->prix_totalHT = $objProduct->qty * $objProduct->product_pu;
					$objProduct->prix_totalTTC =  ROUND(($objProduct->prix_totalHT * $objProduct->product_tva /100) + $objProduct->prix_totalHT, 2);
					$arrProductToDisplay[$idProd] = $objProduct;
					$totalHT += $objProduct->prix_totalHT; 
					$totalTTC += $objProduct->prix_totalTTC;
					$totalTVA += $objProduct->prix_totalTTC - $objProduct->prix_totalHT;
					
					
				}
				$this->_data['totalHT'] = $totalHT;
				$this->_data['totalTTC'] = $totalTTC;
				$this->_data['totalTVA'] = $totalTVA;
				
				$this->_data['title'] 		= "panier";
				$this->_data['arrProduct'] 	= $arrProductToDisplay;
				
				$this->display('panier.tpl');
			}else{
				$this->_data['title'] 		= "Interdit";
				$this->display('empty_basket.tpl');
			}
		}
	}
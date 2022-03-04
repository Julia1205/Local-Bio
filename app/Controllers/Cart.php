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
use App\Entities\Cart_entity;

	class Cart extends BaseController{
		
		public function panier($id){			
			$qty = $this->request->getPost('product_quantity'); 
			$arrCart['products'] = $this->session->products;
			//var_dump($arrCart['products']);die;
			if (isset($arrCart['products'][$id])){
				$initialQty = $arrCart['products'][$id];
				$ttqty = $initialQty + $qty;
				$arrCart['products'][$id] = $ttqty;	
				$objProduct = new Cart_model;
				//$product_name = $objProduct->getName($id);
				//$temp = $product_name[0];
				
				//echo ('2 produits');
				foreach($this->session->products as $key => $value){
					
						$product_name = $objProduct->getName($key);
						//var_dump($product_name);
					
				}
				$this->session->set($arrCart);
				//var_dump($temp);
			}else{
				$arrCart['products'][$id] = $qty;
				$objProduct = new Cart_model;
				$product_name = $objProduct->getName($id);
				//echo('1 produit');
				$this->session->set($arrCart);
			//var_dump($product_name);
			}

			
			$this->session->set($arrCart);
				//var_dump($this->session->products[1]);
			$this->_data['title'] = "panier";
			
			$this->display('panier.tpl');
		}
	}
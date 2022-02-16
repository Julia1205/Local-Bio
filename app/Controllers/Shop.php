<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Shop_model;
use App\Entities\Shop_entity;

class Shop extends BaseController{
	
	public function __construct(){
	}
	
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
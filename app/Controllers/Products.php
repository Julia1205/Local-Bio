<?php
/**
* @file Products.php
* @authors Julie Sigrist, Julien Wodey, David Ombreux
* @version 1.0
* @date 03/03/2022
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
use App\Models\Products_model;
use App\Entities\Products_entity;

class Products extends BaseController{
	
	public function productAdd(){
		if($this->session->get('rank_id') == 1){
			//instanciation du helper de formulaire
			helper('form');
			// Chargement de la librairie
			$validation =  \Config\Services::validation();
				$validation->setRules([
					'product_name' => [
						'label'  => 'nom du produit',
						//le champ est obligatoire et ne peut contenir que des lettres, des tirets et des underscores mais pas d'accents
						'rules'  => 'required|alpha_space',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_space' => 'Le {field} ne doit contenir que des lettres et sans accents',
						],
					],
					'product_desc' => [
						'label'  => 'description du produit',
						'rules'  => 'required',
						'errors' => [
							'required' => 'La {field} est obligatoire',
						],
					],
					'product_pu' => [
						'label'  => 'prix de vente',
						'rules'  => 'required|decimal',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'decimal' => 'Le {field} ne peut contenir que des chiffres et des virgules',
						],
					],
					'product_stock' => [
						'label'  => 'quantité entrante de stock',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'La {field} est obligatoire',
							'integer' => 'La {field} ne peut contenir que des chiffres entiers',
						],
					],
					'category_id' => [
						'label'  => 'id de la catégorie',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'L\' {field} est obligatoire',
							'integer' => 'L\' {field} ne peut contenir que des chiffres entiers',
						],
					],
					'product_conditioning' => [
						'label'  => 'conditionnement du produit',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'integer' => 'Le {field} ne peut contenir que des chiffres entiers',
						],
					],
					'product_img' => [
						'label'  => 'nom de l\'image du produit et son extension',
						'rules'  => 'required|alpha_numeric_punct',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_numeric_punct' => 'Le {field} ne peut contenir que des lettres, des points, des tirets et des underscores',
						],
					],
				]);
			//initialisation du tableau d'erreurs
			$arrErrors = array();
			//attribution des fonctions CodeIgniter de formulaire à la vue
			$this->_data['form_open'] = form_open("Products/productAdd");
			
			$this->_data['label_product_name']     = form_label("Nom du produit", "product_name");
			$this->_data['form_product_name'] = form_input ("product_name", "", "id='product_name'");
			
			$this->_data['label_product_desc']     = form_label("Description du produit", "product_desc");
			$this->_data['form_product_desc'] = form_input ("product_desc", "", "id='product_desc'");
			
			$this->_data['label_product_pu']     = form_label("Prix de vente du produit", "product_pu");
			$this->_data['form_product_pu'] = form_input ("product_pu", "", "id='product_pu'");

			$this->_data['label_product_stock']     = form_label("Stock entrant du produit", "product_stock");
			$this->_data['form_product_stock'] = form_input ("product_stock", "", "id='product_stock'");

			$this->_data['label_category_id']     = form_label("ID de la catégorie", "category_id");
			$this->_data['form_category_id'] = form_input ("category_id", "", "id='category_id'");
			
			$this->_data['label_product_conditioning']     = form_label("Conditionnement du produit", "product_conditioning");
			$this->_data['form_product_conditioning'] = form_input ("product_conditioning", "", "id='product_conditioning'");


			$this->_data['label_product_img']     = form_label("Image du produit (nom du fichier)", "product_img");
			$this->_data['form_product_img'] = form_input ("product_img", "", "id='product_img'");

			$this->_data['form_submit' ]= form_submit("submit", "Ajouter");
			$this->_data['form_close'] = form_close();
			if (count($this->request->getPost())  > 0){ // Le formulaire a été envoyé ?
				if ($validation->run($this->request->getPost())){
					$objProductsModel = new Products_model(); // Instanciation du modèle
					$objProducts     = new Products_entity; // Instanciation de l'entité
					//construction de l'url name
					$temp = explode(".", $this->request->getPost('product_img'));
					$url_name = $temp[0];
					
					//construction de l'objet à sauvegarder
					$arrProduct = [
							'product_name' => $this->request->getPost('product_name'),
							'product_desc' => $this->request->getPost('product_desc'),
							'product_pu' => $this->request->getPost('product_pu'),
							'product_stock' => $this->request->getPost('product_stock'),
							'category_id' => $this->request->getPost('category_id'),
							'product_img' => $this->request->getPost('product_img'), 
							'product_tva' => 2,
							'product_conditioning' => 0,
							'url_name' => $url_name,
					];
					//Remplissage de l'objet entité
					$objProducts->fill($arrProduct);
				//var_dump($arrProduct);die;
					//Ajout en base de données
					$objProductsModel->save($objProducts);
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
			}
			//attribution des erreurs à la vue 
			$this->_data['arrErrors'] = $arrErrors;
			$this->_data['title'] = "Ajouter un produit";
			$this->display('product_add.tpl');
			
		}else{
			
			$this->_data['title'] = "Interdit";
			$arrErrors[] = "";
			$this->_data['arrErrors'] = $arrErrors;
			$this->display('erreur403.tpl');
		}
	}
	
	public function listProducts(){
		if($this->session->get('rank_id') == 1){
			//Assignation du titre
			$this->_data['title'] = "Liste des produits";
			$objProductsModel = new Products_model(); // Instanciation du modèle
			$objProducts     = new Products_entity; // Instanciation de l'entité
			$this->_data['products'] = $objProductsModel->findAll();
			$this->display('listProducts.tpl');
		}else{
			$this->_data['title'] = "Interdit";
			$arrErrors[] = "";
			$this->_data['arrErrors'] = $arrErrors;
			$this->display('erreur403.tpl');
		}

	}
	
	public function productModify($charUrlName){
		$this->_data['title'] = "Modifier un produit";

				if($this->session->get('rank_id') == 1){
					//instanciation du helper de formulaire
					helper('form');
					$objProductsModel = new Products_model(); // Instanciation du modèle
					$objProducts     = new Products_entity; // Instanciation de l'entité
					$this->_data['product'] = $objProductsModel->findDetails($charUrlName);
					$objProduct = $this->_data['product'][0];
				//var_dump($objProduct);die;

			// Chargement de la librairie
			$validation =  \Config\Services::validation();
				$validation->setRules([
					'product_name' => [
						'label'  => 'nom du produit',
						//le champ est obligatoire et ne peut contenir que des lettres, des tirets et des underscores mais pas d'accents
						'rules'  => 'required|alpha_space',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_space' => 'Le {field} ne doit contenir que des lettres et sans accents',
						],
					],
					'product_desc' => [
						'label'  => 'description du produit',
						'rules'  => 'required',
						'errors' => [
							'required' => 'La {field} est obligatoire',
						],
					],
					'product_pu' => [
						'label'  => 'prix de vente',
						'rules'  => 'required|decimal',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'decimal' => 'Le {field} ne peut contenir que des chiffres et des virgules',
						],
					],
					'product_stock' => [
						'label'  => 'quantité entrante de stock',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'La {field} est obligatoire',
							'integer' => 'La {field} ne peut contenir que des chiffres entiers',
						],
					],
					'category_id' => [
						'label'  => 'id de la catégorie',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'L\' {field} est obligatoire',
							'integer' => 'L\' {field} ne peut contenir que des chiffres entiers',
						],
					],
					'product_conditioning' => [
						'label'  => 'conditionnement du produit',
						'rules'  => 'required|integer',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'integer' => 'Le {field} ne peut contenir que des chiffres entiers',
						],
					],
					'product_img' => [
						'label'  => 'nom de l\'image du produit et son extension',
						'rules'  => 'required|alpha_numeric_punct',
						'errors' => [
							'required' => 'Le {field} est obligatoire',
							'alpha_numeric_punct' => 'Le {field} ne peut contenir que des lettres, des points, des tirets et des underscores',
						],
					],
				]);
			//initialisation du tableau d'erreurs
			$arrErrors = array();
			//attribution des fonctions CodeIgniter de formulaire à la vue
			$this->_data['form_open'] = form_open("Products/productModify/".$charUrlName);
			
			$this->_data['label_product_name']     = form_label("Nom du produit", "product_name");
			$this->_data['form_product_name'] = form_input ("product_name", $objProduct->product_name, "id='product_name'");
			
			$this->_data['label_product_desc']     = form_label("Description du produit", "product_desc");
			$attributes = [
				'type' => 'textarea',
				'id' => "product_desc",
				'name' => 'product_desc',
				'value' => $objProduct->product_desc,
				'rows' => 5,
				'cols' => 50,
				];
			$this->_data['form_product_desc'] = form_textarea ($attributes);
			
			$this->_data['label_product_pu']     = form_label("Prix de vente du produit", "product_pu");
			$this->_data['form_product_pu'] = form_input ("product_pu", $objProduct->product_pu, "id='product_pu'");

			$this->_data['label_product_stock']     = form_label("Stock entrant du produit", "product_stock");
			$this->_data['form_product_stock'] = form_input ("product_stock", $objProduct->product_stock, "id='product_stock'");

			$this->_data['label_category_id']     = form_label("ID de la catégorie", "category_id");
			$this->_data['form_category_id'] = form_input ("category_id", $objProduct->category_id, "id='category_id'");
			
			$this->_data['label_product_conditioning']     = form_label("Conditionnement du produit", "product_conditioning");
			$this->_data['form_product_conditioning'] = form_input ("product_conditioning", $objProduct->product_conditioning, "id='product_conditioning'");


			$this->_data['label_product_img']     = form_label("Image du produit (nom du fichier)", "product_img");
			$this->_data['form_product_img'] = form_input ("product_img", $objProduct->product_img, "id='product_img'");

			$this->_data['form_submit' ]= form_submit("submit", "Modifier");
			$this->_data['form_close'] = form_close();
			if (count($this->request->getPost())  > 0){ // Le formulaire a été envoyé ?
				if ($validation->run($this->request->getPost())){
					//construction de l'url name
					$temp = explode(".", $this->request->getPost('product_img'));
					$url_name = $temp[0];
					//var_dump($this->request->getPost());die;
					//construction de l'objet à sauvegarder
					$arrProduct = [
							'product_id' => $objProduct->product_id,
							'product_tva' => $objProduct->product_tva,
							'product_name' => $this->request->getPost('product_name'),
							'product_desc' => $this->request->getPost('product_desc'),
							'product_conditioning' => $this->request->getPost('product_conditioning'),
							'product_pu' => $this->request->getPost('product_pu'),
							'product_stock' => $this->request->getPost('product_stock'),
							'category_id' => $this->request->getPost('category_id'),
							'product_img' => $this->request->getPost('product_img'), 
							'url_name' => $url_name,
					];
					//Remplissage de l'objet entité
					$objProducts->fill($arrProduct);
						
					//Ajout en base de données
					$objProductsModel->replace($arrProduct);
				}else{
					$arrErrors = $validation->getErrors(); // on récupère les erreurs pour les afficher
				}
			}
			//attribution des erreurs à la vue 
			$this->_data['arrErrors'] = $arrErrors;
		$this->display('modify.tpl');
			
		}else{
			
			$this->_data['title'] = "Interdit";
			$arrErrors[] = "";
			$this->_data['arrErrors'] = $arrErrors;
			$this->display('erreur403.tpl');
		}

		
	}
}

<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends Controller
{
    public function index() {
        
        // Instanciation du modèle
        $objProductModel       = new Product_model();
        
        // On fournit les variables pour la vue
        $data['title']          = "Liste des produits"; // titre
        $data['arrProducts']   = $objProductModel->findAll(); // liste de tous les produits
        
        // Affichage de la vue
        echo view('product_list',$data);
    }
    public function add(){
        helper('form'); // Déclare l'utilisation du helper

        $data['title']          = "Ajouter un produit";

        // Il faut charger la librairie
        $validation =  \Config\Services::validation();

		// On donne des règles de validation une à une ou à travers d'un tableau (setRules)
        //$validation->setRule('product_name', 'Nom du produit', 'required');
        //$validation->setRule('product_price', 'Prix du produit', 'required');

        $validation->setRules([
                'product_name' => [
                    'label'  => 'Nom du produit',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                    ],
                ],
                'product_price' => [
                    'label'  => 'Prix du produit',
                    'rules'  => 'required|numeric',
                    'errors' => [
                        'required' => 'Le {field} est obligatoire',
                        'numeric' => 'Le {field} doit être un nombre',
                    ],
                ],
            ]
        );
		$arrErrors = array();
		// Le formulaire a été envoyé ?
		if (count($this->request->getPost()) > 0){
			$objProduct->fill($this->request->getPost());
			//on teste la validation du formulaire sur les données
			if ($validation->run($this->request->getPost())){
				// On sauvegarde l'objet
				$objProductModel->save($objProduct);
				// redirection vers l'action par défaut du controller Product
				return redirect()->to('/product');
			}else{
				// on récupère les erreurs pour les afficher
				$arrErrors = $validation->getErrors();
			}
		}

		$data['arrErrors']      = $arrErrors;
		$data['form_open']      = form_open("product/addedit");
		$data['form_id']        = form_hidden("product_id", $objProduct->product_id??'', "id='product_id'");
		$data['label_name']     = form_label("Nom", "product_name");
		$data['form_name']      = form_input("product_name", $objProduct->product_name??'', "id='product_name'");
		$data['label_price']    = form_label("Prix", "product_price");
		$data['form_price']     = form_input("product_price", $objProduct->product_price??'', "id='product_price'");
		$data['form_submit']    = form_submit("submit", "Envoyer");
		$data['form_close']     = form_close();
	   
		echo view('product_add', $data);
	}
	public function addedit($intId = null){
	// Déclare l'utilisation du helper
	helper('form');

	// Instanciation du modèle
	$objProductModel    = new Product_model();
	// Instanciation de l'entité
	$objProduct         = new \App\Entities\Product_entity();

	if ($intId){
	$data['title']      = "Modifier un produit";
	$objProduct         = $objProductModel->find($intId);
	}else{
	$data['title']      = "Ajouter un produit";
	}

	// Il faut charger la librairie
	$validation =  \Config\Services::validation();

	// On donne des règles de validation
	$validation->setRules([
	'product_name' => [
		'label'  => 'Nom du produit',
		'rules'  => 'required',
		'errors' => [
			'required' => 'Le {field} est obligatoire',
		],
	],
	'product_price' => [
		'label'  => 'Prix du produit',
		'rules'  => 'required|numeric',
		'errors' => [
			'required' => 'Le {field} est obligatoire',
			'numeric' => 'Le {field} doit être un nombre',
		],
	],
	])
	public function delete($intId){
        $objProductModel   = new Product_model();
        $objProductModel->delete($intId);
        return redirect()->to('/product');
    }

}
>>>>>>> 71fcd9db832399505eed8b5fea1df970c7faad29
}
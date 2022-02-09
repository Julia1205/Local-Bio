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
        $data['arrProduct']   = $objProductModel->findAll(); // liste de toutes les villes
        
        // Affichage de la vue
        echo view('product_list',$data);
    }
}
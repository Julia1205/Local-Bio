<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\City_model;

class City extends Controller


{
    public function index($page='') {
        
        // Instanciation du modèle
        $objCityModel       = new City_model();
        
        // On fournit les variables pour la vue
        $data['titrePage'] = "Liste des villes"; // titre
        $data['arrCity']   = $objCityModel->findAll(); // liste de toutes les villes
        
        // Affichage de la vue
        echo view('city_list', $data);
    }
}

<?php

namespace App\Controllers;


use CodeIgniter\Controller; // Permet d'instancier la classe "Controller" et de pouvoir l'utiliser (extends Controller)

class Pages extends BaseController
{
    public function index()
    {
		// echo('Ma première page');
        return view('welcome_message');
	}
	
	/* public function accueil()
    {
		$data['titrePage'] = "Ma page d'accueil";
		$data['titreH1'] = "Ma première page";
			
		echo view('templates/header', $data);
		echo view('pages/accueil', $data);
		echo view('templates/footer');
	} */
	
	/* public function contact()
    {
		$data['titrePage'] = "Ma page contact";
		$data['titreH1'] = "Mon formulaire de contact";
		echo view('templates/header', $data);
		echo view('pages/contact', $data);
		echo view('templates/footer');
	} */
	
	public function view($page = ''){
		helper('html');
		helper('url');
		
		if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		/* if($page == 'home'){
			$data['titrePage'] = "Local'Bio - Accueil";
			$data['titrePrincipal'] = "CHOISISSEZ UN MODE DE VIE PLUS SAIN";
			$data['fileCss'] = "home.css";
		}
		else if($page == 'contact'){
			$data['titrePage'] = "Ma page contact";
			$data['titrePrincipal'] = "Mon formulaire de contact";
			$data['fileCss'] = "";
		}
		else if($page == 'shop'){
			$data['titrePage'] = "Local'Bio - La Boutique";
			//$data['titrePrincipal'] = "";
			$data['fileCss'] = "shop.css";
		}
		else if($page == 'about'){
			$data['titrePage'] = "Local'Bio - A propos";
			$data['fileCss'] = "about.css";
		}
		else if($page == 'connexion'){
			$data['titrePage'] = "Local'Bio - Connexion";
			$data['fileCss'] = "connexion.css";
		}
		else if($page == 'shop_fruits'){
			$data['titrePage'] = "Local'Bio - Boutique Fruits";
			$data['fileCss'] = "shopFruits.css";
		}
		else if($page == 'shop_epices'){
			$data['titrePage'] = "Local'Bio - Boutique Epices";
			$data['fileCss'] = "ShopEpices.css";
		} */
		
		switch($page){
			case 'home':
			$data['titrePage'] = "Local'Bio - Accueil";
			$data['titrePrincipal'] = "CHOISISSEZ UN MODE DE VIE PLUS SAIN";
			$data['fileCss'] = "home.css";
			break;

			case 'contact':
			$data['titrePage'] = "Ma page contact";
			$data['titrePrincipal'] = "Mon formulaire de contact";
			$data['fileCss'] = "";
			break;

			case 'shop':
			$data['titrePage'] = "Local'Bio - La Boutique";
			//$data['titrePrincipal'] = "";
			$data['fileCss'] = "shop.css";
			break;

			case 'about':
			$data['titrePage'] = "Local'Bio - A propos";
			$data['fileCss'] = "about.css";
			break;
			
			case 'connexion':
			$data['titrePage'] = "Local'Bio - Connexion";
			$data['fileCss'] = "connexion.css";
			break;
			
			case 'inscription':
			$data['titrePage'] = "Local'Bio - Inscription";
			$data['fileCss'] = "inscription.css";
			break;
			
			case 'shop_fruits':
			$data['titrePage'] = "Local'Bio - Boutique Fruits";
			$data['fileCss'] = "shopFruits.css";
			break;
			
			case 'shop_epices':
			$data['titrePage'] = "Local'Bio - Boutique Epices";
			$data['fileCss'] = "ShopEpices.css";
			break;
			
			case 'panier':
			$data['titrePage'] = "Local'Bio - Votre panier";
			$data['fileCss'] = "panier.css";
			break;
			
			case 'product':
			$data['titrePage'] = "Local'Bio - Descriptif produit";
			$data['fileCss'] = "product.css";
			break;
			
			case 'vegetable':
			$data['titrePage'] = "Local'Bio - Rayon légumes";
			$data['fileCss'] = "legume.css";
			break;
			
			case 'spices':
			$data['titrePage'] = "Local'Bio - Rayon épices";
			$data['fileCss'] = "epice.css";
			break;
			
			
		}
		
		echo view('templates/header', $data);
		echo view('templates/nav', $data);
		echo view('pages/' . $page, $data);
		echo view('templates/footer', $data);
	}
	
}

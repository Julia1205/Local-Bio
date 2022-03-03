<?php 
/**
* @file Products_model.php
* @authors Julie Sigrist, Julien Wodey, Ombreux David
* @version 1.0
* @date 03/03/2022
* @brief model des produits
*
*  @details 
* <p>Requêtes à la table des produits</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>hashing</strong> : fonction hashant le mot de passe</li>
*
* </ul>
*
**/
namespace App\Models;
use CodeIgniter\Model;
	
	class Products_model extends Model{
		// Nom de la table à utiliser
		protected $table         = 'product';
		// Nom du champ de la clé primaire
		protected $primaryKey    = 'product_id';
		// Champs utilisables
		protected $allowedFields = ['product_name, product_desc, product_pu, product_stock, category_id, product_img, url_name'];
	 
		// Type de retour => Chemin de l'entité à utiliser
		protected $returnType    = 'App\Entities\Products_entity';
	 
		// Utilisation ou non des dates (création / modification)
		protected $useTimestamps = false;
/**
*	@brief 		fonction retournant le détails des articles
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		le détail d'un article dans la base de données</p>
*	@param 	$charProduct string
*	@return	arrDetails tableau contenant les details (sous-tableaux)
*
**/
	public function findDetails($charProduct){
		//requête à la base de données du produit recherché
		$arrDetails = $this->where("url_name", $charProduct)->find();
		//retour de tableau contenant les détails du produit
		return $arrDetails;
	}

	}

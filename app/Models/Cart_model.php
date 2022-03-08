<?php 
/**
* @file shop_model.php
* @authors Julie Sigrist, Julien wodey, David Ombreux
* @version 1.0
* @date 16/02/2022
* @brief Model des produits
*
*  @details 
* <p>Cette classe permet de faire les requêtes à la base de données pour les produits</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>findByCat</strong> : récupération des articles en fonction de leur catégorie</li>
* </ul>
*
**/
namespace App\Models;
use CodeIgniter\Model;

	class Cart_model extends Model{
		
		// Nom de la table à utiliser
		protected $table         = 'product';
		// Nom du champ de la clé primaire
		protected $primaryKey    = 'product_id';
		// Champs utilisables
		protected $allowedFields = ['product_name', 'product_pu', 'product_tva', 'product_id'];
	 
		// Type de retour => Chemin de l'entité à utiliser
		protected $returnType    = 'App\Entities\Shop_entity';
	 
		// Utilisation ou non des dates (création / modification)
		protected $useTimestamps = false;

		
		public function getName($productId){
			$productName = $this->where('product_id', $productId)->find();
			
			return $productName;
		}
	}
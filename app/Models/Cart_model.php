<?php 
/**
* @file shop_model.php
* @authors Julie Sigrist, Julien wodey, David Ombreux
* @version 1.0
* @date 16/02/2022
* @brief Model des produits
*
*  @details 
* <p>Cette classe est prévue pour les fonctions du controller Cart</p>
* <p>Elle ne contient pas encore de fonctions</p>
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

	}
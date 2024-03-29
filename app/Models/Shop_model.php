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
*	<li><strong>findDetails</strong> : fonction de récupération de l'ensemble des données d'un produit</li>
*	<li><strong>findProduct</strong> : fonction de recherche d'un produit par son nom ou contenu de sa description</li>
* </ul>
*
**/
namespace App\Models;
use CodeIgniter\Model;

	class Shop_model extends Model{
		
		// Nom de la table à utiliser
		protected $table         = 'product';
		// Nom du champ de la clé primaire
		protected $primaryKey    = 'product_id';
		// Champs utilisables
		protected $allowedFields = ['product_name', 'product_desc', 'product_pu', 'product_img', 'product_conditionning', 'url_name', 'product_tva'];
	 
		// Type de retour => Chemin de l'entité à utiliser
		protected $returnType    = 'App\Entities\Shop_entity';
	 
		// Utilisation ou non des dates (création / modification)
		protected $useTimestamps = false;
		
/**
*	@brief 		fonction retournant la liste des produits de la base de données
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		la liste des produits présents dans la base de données</p>
*	@param 	$intNumCat integer
*	@return	$arrList tableau contenant les produits (sous-tableaux)
*
**/
		public function findByCat($intNumCat){
			//requête à la base de données des produits ayant la catégorie souhaitée
			$arrList = $this->where("category_id", $intNumCat)->findAll();
			//retour du tableau d'objets contenant les produits
			return $arrList;
		}
		
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
		
/**
*	@brief 		fonction retournant les articles de la recherche
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		les produits dans la base de données correspondants à la saisie</p>
*	@param 	$strSearchField string
*	@return	arrProduct tableau contenant les produits (sous-tableaux)
*
**/
		public function findProduct($strSearchField){
			//requête recherchant dans le nom du produit et dans la description
			$arrProduct = $this->like("product_name", $strSearchField, 'both')->orLike("product_desc", $strSearchField, 'both')->findAll();
			return $arrProduct;
		}
	}
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

class Shop_model extends Model{
	
	// Nom de la table à utiliser
    protected $table         = 'product';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'product_id';
    // Champs utilisables
    protected $allowedFields = ['product_name', 'product_desc', 'product_pu', 'product_img', 'product_conditionning', 'url_name'];
 
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
*	@return	Tableau contenant les produits (sous-tableaux)
*
**/
	public function findByCat($intNumCat){
		$arrList = $this->where("category_id", $intNumCat)->findAll();
		return $arrList;

	}
/**
*	@brief 		fonction retournant le détails des articles
* 	@details 
*	<p>Cette fonction permet de rechercher via une requête, 
*		le détail d'un article dans la base de données</p>
*	@param 	$charProduct varchar
*	@return	arrDetails tableau contenant les details (sous-tableaux)
*
**/
	public function findDetails($charProduct){
		$arrDetails = $this->where("url_name", $charProduct)->find();
		return $arrDetails;
		
	}
}


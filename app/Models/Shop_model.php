<?php 
namespace App\Models;
use CodeIgniter\Model;

class Shop_model extends Model{
	
	// Nom de la table à utiliser
    protected $table         = 'product';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'product_id';
    // Champs utilisables
    protected $allowedFields = ['product_name', 'product_desc', 'product_pu'];
 
    // Type de retour => Chemin de l'entité à utiliser
    protected $returnType    = 'App\Entities\Shop_entity';
 
    // Utilisation ou non des dates (création / modification)
    protected $useTimestamps = false;
	
	public function findByCat($intNumCat){
		$arrList = $this->where("category_id", $intNumCat)->findAll();
		return $arrList;
	}
	
	public function random(){
		$hello = "hi";
		
	}
}


<?php 
namespace App\Models;
use CodeIgniter\Model;

class Users_model extends Model{
	
	// Nom de la table à utiliser
    protected $table         = 'user';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'user_id';
    // Champs utilisables
    protected $allowedFields = ['user_email', 'user_password'];
 
    // Type de retour => Chemin de l'entité à utiliser
    protected $returnType    = 'App\Entities\Users_entity';
 
    // Utilisation ou non des dates (création / modification)
    protected $useTimestamps = false;
	
	public function findByCat($intNumCat){
		$arrList = $this->where("user_email")->find();
		return $arrList;
	}
	
	public function random(){
			$hello = "hi";
		return $hello;
		
	}
}

<?php 
/**
* @file Users_model.php
* @authors Julie Sigrist, Julien Wodey, Ombreux David
* @version 1.0
* @date 16/02/2022
* @brief model des utilisateurs
*
*  @details 
* <p>Requêtes à la table des utilisateurs</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong></strong> : </li>
* 	<li><strong></strong> : </li>
* 	<li><strong></strong> : </li>
* </ul>
*
**/
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
	
	
	public function connect(){
		$this->_data['user'];
		$userconnect = $this->where("user_email", $_data['user_email'])->find();
		return $userconnect;
		var_dump($objUsersModel);

		
	}
}

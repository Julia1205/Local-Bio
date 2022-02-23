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
    protected $allowedFields = ['user_email', 'user_password', 'user_name', 'user_firstname', 'user_address', 'user_phone'];
 
    // Type de retour => Chemin de l'entité à utiliser
    protected $returnType    = 'App\Entities\Users_entity';
 
    // Utilisation ou non des dates (création / modification)
    protected $useTimestamps = false;
/**
*	@brief 		fonction 
* 	@details 
*	<p></p>
*	@param 	$arrPost array
*	@return	userconnect 
*
**/
	
	public function login($strmailField, $strpasswordField){
		//var_dump($arrPost); die;
		//$mail = $strmailField;
		//$userId = $this->where("user_id", 26);
		//$password = password_verify($strpasswordField, ;
		//$truePassword = $this->where('user_password'), 
		//password_verify($strpasswordField);
		//$userconnect = $this->getWhere(["user_email" => $mail], "user_password", $password);
						//var_dump($userId);
						die;


		if ($mail == $userconnect){
			if($password == $truePassword){
			}else{
				
			}
		}else{
			
		}
		$userconnect = $this->where("user_email", $mail)->find();
			if (password_verify($password , $userconnect['user_password'])){
				return $userconnect;
			}else{
				return false;
			}
	}
	
/**
*	@brief 		fonction hashant le mot de passe
* 	@details 
*	<p>Cette fonction permet de hasher le mot de passe</p>
*	@param 	$userPassword varchar
*	@return	hashedPwd varchar
*
**/
	public function hashing($userPassword){
		$hashedPwd = password_hash($userPassword , PASSWORD_DEFAULT);
		return $hashedPwd;
	}
/**
*	@brief 		fonction vérifiant le mot de passe
* 	@details 
*	<p>Cette fonction permet de comparer le mot de passe saisi par l'utilisateur 
*	dans la page de connexion et sa version hashée dans la base de données</p>
*	@param 	$userPostPassword varchar
*	@return	clearedPwd varchar
*
**/

	public function verify($userPostPassword){
		$resultCheck = $this->where("user_password", $userPassword)->find;
		$clearedPwd = password_verify($userPassword); 
		return $clearedPwd;
	}

}

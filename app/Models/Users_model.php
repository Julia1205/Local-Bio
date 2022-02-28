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
    protected $allowedFields = ['user_email', 'user_password', 'user_name', 'user_firstname', 'user_address', 'user_phone', 'user_id'];
 
    // Type de retour => Chemin de l'entité à utiliser
    protected $returnType    = 'App\Entities\Users_entity';
 
    // Utilisation ou non des dates (création / modification)
    protected $useTimestamps = false;

/**
*	@brief 		fonction hashant le mot de passe
* 	@details 
*	<p>Cette fonction permet de hasher le mot de passe</p>
*	@param 	$userPassword varchar
*	@return	hashedPwd varchar
*
**/
	public function hashing($userPassword){
		$hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);
		return $hashedPwd;
	}
/**
*	@brief 		fonction vérifiant l'email de connexion
* 	@details 
*	<p>Cette fonction permet de vérifier si l'email </p>
*	@param 	$userPassword varchar
*	@return	hashedPwd varchar
*
**/

	public function checkMail($strmailField){
		$mail = $strmailField;
		$usermail = $this->select('user_email')->where("user_email", $mail)->find();
		if(empty ($usermail)){
			$userConnect = false;
			return $userConnect;
			
		}else{
			
			$userConnect = true;
			return $userConnect;
		}
	}
	public function getUserPassword($strMailField){
		$mail = $strMailField; 
		$user = $this->select('user_email, user_password, user_id')->where("user_email", $mail)->find();
		return $user;
	}
	
	public function checkPassword($clearPassword, $hashedPassword){
		$passwordField = $clearPassword;
		$bddPassword = $hashedPassword;
		$oups = "oups";
		if(password_verify($passwordField, $bddPassword)){
			return true;
		}else{
			return false;
		}
		return $oups;
	}
	
	public function getFullUser($strMail){
		$mail = $strMail;
		$userIdentity = $this->select('user_id, user_firstname, user_email')->where("user_email", $mail)->find();
		return $userIdentity;
	}
	
}
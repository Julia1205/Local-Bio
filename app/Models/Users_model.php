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
*	@param 	$userPassword string
*	@return	hashedPwd string
*
**/
	public function hashing($userPassword){
		//hashage du mot de passe à l'aide de la fonction password_hash de PHP
		$hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);
		//retour du mot de passe hashé
		return $hashedPwd;
	}
	
/**
*	@brief 		fonction vérifiant l'email de connexion
* 	@details 
*	<p>Cette fonction permet de vérifier si l'email </p>
*	@param 	$userPassword string
*	@return	$hashedPwd string
*
**/
	public function checkMail($strmailField){
		//requête de récupération dans la bdd correspondant à l'email entré dans le formulaire
		$usermail = $this->select('user_email')->where("user_email", $strmailField)->find();
		//si la requête ne trouve pas de mail correspondant
		if(empty ($usermail)){
			//renvoi de la condition négative
			$userConnect = false;
			return $userConnect;
		}else{ //si la requête renvoi un résultat
			//renvoi de la condition positive
			$userConnect = true;
			return $userConnect;
		}
	}
	
/**
*	@brief 		fonction récupérant certaines données de l'utilisateur
* 	@details 
*	<p>Cette fonction permet de récupérer l'adresse mail, 
*	le mot de passe hashé et l'id de l'utilisateur voulant se connecter </p>
*	@param 	$strMailField string
*	@return	$user tableau d'objet
*
**/
	public function getUserPassword($strMailField){
		//récupération de l'email, du mot de passe hashé et de l'id de l'utilisateur correspondant à l'adresse mail vérifiée précédemment
		$user = $this->select('user_email, user_password, user_id')->where("user_email", $strMailField)->find();
		//renvoi de l'objet user contenant les données de la bdd
		return $user;
	}
	
/**
*	@brief 		fonction vérifiant le mot de passe
* 	@details 
*	<p>Cette fonction permet de comparer le mot de passe hashé dans la base de données, 
*	et le mot de passe entré dans le formulaire de connexion</p>
*	@param 	$clearPassword string, $hashedPassword string
*	@return	bouléen
*
**/
	public function checkPassword($clearPassword, $hashedPassword){
		//vérification de la correspondance du mot de passe entré et celui hashé de la bdd avec la fonction PHP password_verify
		if(password_verify($clearPassword, $hashedPassword)){
			//renvoi de condition vraie si correspondance
			return true;
		}else{ //cas où il n'y a pas de correspondance 
			//renvoi de condition fausse
			return false;
		}
	}
	
/**
*	@brief 		fonction récupérant les données de l'utilisateur vérifié
* 	@details 
*	<p>Cette fonction permet de récupérer l'id, le prénom et l'adresse mail en base de données 
*	de l'utilisateur venant de s'être connecté</p>
*	@param 	$strMail string
*	@return	$userIdentity tableau d'objet
*
**/
	public function getUser($strMail){
		//requête de récupération de l'id, du prénom et de l'adresse mail correspondant à l'email vérifié précedemment
		$userIdentity = $this->select('user_id, user_firstname, user_email')->where("user_email", $strMail)->find();
		//renvoi du tableau contenant l'objet de la requête
		return $userIdentity;
	}
	
	public function getFullUser($intUserId){
		//requête récupérant les données complètes de l'utilisateur selon son id
		$userFullIdentity = $this->select('user_id, user_firstname, user_email, user_name, user_password, user_phone, user_address, city_id')->where("user_id", $intUserId)->find();
		return $userFullIdentity;
	}
	
}
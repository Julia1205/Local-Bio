<?php
	/**
	* @file utilisateurs_controller.php
	* @authors Julie Sigrist
	* @version 1.0
	* @date 07/02/2022
	* @brief Controller des utilisateurs
	*
	*  @details 
	* <p>Cette classe permet de gérer les actions des pages gérées par le controller des utilisateurs</p>
	* <p>Les actions sont :</p>
	* <ul>
	* 	<li><strong>ajouter</strong> : formulaire d'ajout d'un utilisateur</li>
	*	<li><strong>modifier</strong> : formulaire de modification de la fiche d'un utilisateur</li>
	*	<li><strong>supprimer</strong> : bouton de suppression de la fiche descriptive d'un utilisateur</li>
	* </ul>
	*
	**/
	class utilisateursCtrl extends baseCtrl{
		//Exemple de commentaire d'une fonction
		/**
		*	@brief 		constructeur de la classe
		* 	@details 
		*	<p>Cette fonction permet de rechercher via une requête, 
		*		la liste des articles présents dans la base de données</p>
		*	@param 	$intLimit integer
		*	@return	Tableau contenant les articles (sous-tableaux)
		*
		**/
		public function __construct(){
			
		}
		/**
		*	@brief 		fonction d'ajout d'un utilisateur
		* 	@details 
		*	<p>Cette fonction permet d'ajouter à la base de donnée un utilisateur, 
		*		en complétant sa fiche descriptive</p>
		*	@param 	
		*	@return	
		*
		**/
		public function ajouterUtilisateur(){
			//appel du model concerné
			include("Models/");
			//appel de la méthode d'affichage dans le controller parent
			$this->display("");
			
		}

		/**
		*	@brief 		fonction de modification d'un utilisateur
		* 	@details 
		*	<p>Cette fonction permet de modifier dans la base de données, 
		*		les données concernant un utilisateur</p>
		*	@param 	
		*	@return	
		*
		**/
		public function modifierUtilisateur(){
			
		}
		/**
		*	@brief 		fonction de suppression	d'un utilisateur
		* 	@details 
		*	<p>Cette fonction permet de supprimer les données d'un utilisateur dans la base de données</p>
		*	@param 	
		*	@return	
		*
		**/
		public function supprimerUtilisateur(){
			
		}
	}
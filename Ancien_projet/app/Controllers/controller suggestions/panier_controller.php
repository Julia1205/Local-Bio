<?php
	/**
	* @file panier_controller.php
	* @authors Julie Sigrist
	* @version 1.0
	* @date 07/02/2022
	* @brief Controller du panier
	*
	*  @details 
	* <p>Cette classe permet de gérer les actions des pages gérées par le controller du panier</p>
	* <p>Les actions sont :</p>
	* <ul>
	* 	<li><strong>ajouter</strong> : formulaire d'ajout d'un produit</li>
	*	<li><strong>modifier</strong> : formulaire de modification de la fiche d'un produit</li>
	*	<li><strong>supprimer</strong> : bouton de suppression de la fiche descriptive d'un produit</li>
	* </ul>
	*
	**/
	class panierCrl extends baseCtrl{
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
		*	@brief 		fonction d'ajout d'un produit
		* 	@details 
		*	<p>Cette fonction permet d'ajouter à la base de donnée un produit, 
		*		en complétant sa fiche descriptive</p>
		*	@param 	
		*	@return	
		*
		**/
		public function ajouterProduit(){
			
		}
		/**
		*	@brief 		fonction de suppression d'un produit du panier
		* 	@details 
		*	<p>Cette fonction permet de supprimer un produit du panier en création par l'utilisateur</p>
		*	@param 	
		*	@return	
		*
		**/
		public function retirerProduit(){
			
		}
		/**
		*	@brief 		fonction de paiement
		* 	@details 
		*	<p>Cette fonction permet d'enregistrer dans la base de données la commande passée et de modifier le stock des produits concernés automatiquement</p>
		*	@param 	
		*	@return	
		*
		**/
		public function payer(){
			
		}
	}
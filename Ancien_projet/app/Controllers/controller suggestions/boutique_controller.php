<?php
	/**
	* @file boutique_controller.php
	* @authors Julie Sigrist
	* @version 1.0
	* @date 07/02/2022
	* @brief Controller de la boutique
	*
	*  @details 
	* <p>Cette classe permet de gérer les actions des pages gérées par le controller de la boutique</p>
	* <p>Les actions sont :</p>
	* <ul>
	* 	<li><strong>affichage</strong> : Liste des produits</li>
	*	<li><strong>recherche</strong> : liste des produits en fonction de la recherche</li>
	* </ul>
	*
	**/
	class boutiqueCrl extends baseCtrl{
		//Exemple de commentaire d'une fonction
		/**
		*	@brief 		fonction retournant la liste des articles de la base de donnée
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
		*	@brief 		fonction retournant la liste des produits correspondants à la recherche de l'utilisateur présents dans la base de donnée
		* 	@details 
		*	<p>Cette fonction permet de rechercher via une requête et pour un nombre de produits affichés défini, 
		*		la liste des produits catégorisés légumes présents dans la base de données</p>
		*	@param 	$categorie characters, $limit integer
		*	@return	Tableau contenant les produits (sous-tableaux)
		*
		**/
		public function affichage(){
			
		}
		/**
		*	@brief 		fonction retournant la liste des produits de la catégorie souhaitée de la base de donnée, sur l'accueil de la page boutique, il s'agit des légumes
		* 	@details 
		*	<p>Cette fonction permet de rechercher via une requête, 
		*		la liste des produits catégorisés présents dans la base de données</p>
		*	@param 	$categorie characters
		*	@return	Tableau contenant les produits (sous-tableaux)
		*
		**/
		public function recherche(){
			
		}
	}
	
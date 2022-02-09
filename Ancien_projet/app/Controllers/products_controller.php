<?php
/**
* @file products_controller.php
* @author 
* @version 1.0
* @date 03/02/2022
* @brief Controller des produits
* @todo codage des fonctions
*
*  @details 
* <p>Cette classe permet de gérer les fonctions des produits</p>
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>product_list</strong> : page de connexion</li>
* 	<li><strong>product_add</strong> : déconnexion (tuage de session)</li>
*	<li><strong>product_modify</strong> : modification de la fiche produit</li>
*	<li><strong>product_delete</strong> : suppression d'un article de la boutique</li>
* </ul>
*
**/
	class ProductsCtrl extends Ctrl{
		
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			
		}
		
		/**
		* Page boutique
		*/
		public function product_list(){
			// Requête de récupération des articles 			
			// Initialisation du tablau pour l'affichage
			// Parcours les données de la base de données 
	
				// Créer et hydrater chaque objet
				

				// Remplissage du tableau à afficher avec l'objet créé
			// Eléments à donner à la vue
			
		}
	
		/**
		* Page d'ajout d'un produit
		*/
		public function product_add(){
			// Récupération des données du formulaire pour le template
			// Eléments à donner à la vue
			
		}
		/**
		* Page de modification d'un produit (stock, producteur, ...)
		*/
		public function product_modify(){
			
		}
		/**
		* Page de suppression d'un produit
		*/
		public function product_delete(){
			
		}
		
	}
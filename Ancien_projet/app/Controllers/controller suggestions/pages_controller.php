<?php
	/**
	* @file pages_controller.php
	* @authors Julie Sigrist
	* @version 1.0
	* @date 07/02/2022
	* @brief Controller des pages statiques
	*
	*  @details 
	* <p>Cette classe permet de gérer les actions des pages gérées par le controller des pages statiques</p>
	* <p>Les actions sont :</p>
	* <ul>
	* 	<li><strong>afficher</strong> : en fonction de la page concernée, utiliser les blocks nécessaires à la composition de la vue de la page.</li>
	* </ul>
	*
	**/
	class pagesCrl extends baseCtrl{
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
		*	@brief 		fonction d'affichage des pages statiques
		* 	@details 
		*	<p>Cette fonction  permet l'appel des différents blocks de contenus sur 
		*		une page statique, en fonction de la page concernée.</p>
		*
		**/
		public function afficher(){
			
		}
		
	}
<?php
	/**
	* @file BaseCtrl.php
	* @authors Julie Sigrist
	* @version 1.0
	* @date 09/02/2022
	* @brief Controller mère
	*
	*  @details 
	* <p>Cette classe permet la gestion de l'ensemble des controllers et d'instancier l'objet smarty utilisé pour les templates</p>
	* <ul>
	* 	<li><strong>display</strong> : instanciation de smarty et afficher la vue de manière dynamique</li>
	* </ul>
	*
	**/
	class Ctrl{
		/** tableau permettant de transmettre les variables au template */
		protected array $_arrData = array();
		
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
		}
		
		/**
		* Fonction d'affichage des templates
		* @param $strView string Nom du template à afficher
		*/
		/**
		*	@brief 		affichage de la vue
		* 	@details 
		*	<p>Cette fonction permet d'instancier smarty qui est un moteur de templates et de construire le lien de la vue souhaitée.</p>
		*	@param 	$strView string nom du template à afficher
		*
		**/

		protected function display(string $strView){
			
			// créer l’objet smarty
			$smarty = new Smarty();
    
			// Pour le menu "active"
			$smarty->assign("strPage", $strView);
	
			// Toutes les données propres à la vue 
			foreach($this->_arrData as $key => $value){
				$smarty->assign($key, $value);
			}
	
			// afficher le template
			$smarty->display("Views/".$strView.".tpl");
		}
	}
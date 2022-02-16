<?php 
namespace App\Models;
use CodeIgniter\Model;

class accueil_model extends Model{
	protected $title = "Accueil";
	public function calcul(){
		$result = 2+2;
		return $result;
	}

}
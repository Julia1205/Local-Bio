<?php

namespace App\Models;
use CodeIgniter\Model;

class City_model extends Model
{
    // Nom de la table à utiliser
    protected $table         = 'city';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'city_id';
    // Champs utilisables
    protected $allowedFields = ['city_postal_code', 'city_name'];

    // Type de retour => Chemin de l'entité à utiliser
    protected $returnType    = 'App\Entities\City_entity';

    // Utilisation ou non des dates (création / modification)
    protected $useTimestamps = false;

}
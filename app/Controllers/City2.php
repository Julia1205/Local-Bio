<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CityModel;


class CityController extends Controller
{

    public function index() {
        $model = new CityModel();
 
        $city = [
            'city' => $model->paginate(5),
            'pager' => $model->pager
        ];
        
        return view('index', $city);
    }
 
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Regiones;

class RegionController extends Controller
{
    public function indice(){
        return Regiones::all();
    }


    public function mostrar($id) {
        return Regiones::where('re_id', '=', $id)->get();
    }
    
    
}

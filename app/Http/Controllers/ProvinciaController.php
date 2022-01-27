<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Provincias;

class ProvinciaController extends Controller
{
    public function indice(){
        return Provincias::all();
    }


    public function mostrar($id) {
        return Provincias::where('pr_id', '=', $id)->get();
    }

    public function provinciasDeRegion($id) {
        return Provincias::where('re_id', '=', $id)->get();
    }
    
}

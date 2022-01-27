<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadController extends Controller
{
    public function indice(){
        return Ciudades::all();
    }


    public function mostrar($id) {
        return Ciudades::where('ci_id', '=', $id)->get();
    }

    public function ciudadesDeProvincia($id) {
        return Ciudades::where('pr_id', '=', $id)->get();
    }
}

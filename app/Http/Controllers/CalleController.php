<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;
use App\Models\Regiones;
use App\Models\Provincias;
use App\Models\Ciudades;
use Exception;

class CalleController extends Controller
{
    public function indice(){
        return Calles::all();
    }


    public function mostrar($id) {
        return Calles::where('ca_id', '=', $id)->get();
    }

    public function guardar(Request $peticion){
        return Calles::create($peticion->all());
    }

    public function actualizar(Request $peticion, $id){
        
            $calles = Calles::where('ca_id', '=', $id);
            $calles->update($peticion->all());

            return 201;
        
    }

    public function datosCalle($id){
        $calle= Calles::where('ca_id', '=', $id)->first();
        $citi = Ciudades::where('ci_id', '=', $calle['ci_id'])->first();
        $provincia = Provincias::where('pr_id', '=', $citi['pr_id'])->first();
        $region = Regiones::where('re_id', '=', $provincia['re_id'])->first();
        
        $array=new \stdClass();
        $array->calle=$calle;
        $array->ciudad=$citi;
        $array->provincia=$provincia;
        $array->region=$region;

        return $array;

    }

    
    public function datosTodasLasCalles(){

        
        
        $calles= Calles::all();

        //dd($calles);

        $array=[];

        foreach($calles as $key=> $calle){

            //dd($calle);
            $citi = Ciudades::where('ci_id', '=', $calle['ci_id'])->first();
            $provincia = Provincias::where('pr_id', '=', $citi['pr_id'])->first();
            $region = Regiones::where('re_id', '=', $provincia['re_id'])->first();

            $array[$key]=[$calle, $citi, $provincia, $region];

        }

        
        
        return $array;

    }

    public function deleteCalle($id){
        try{
            Calles::where('ca_id', '=', $id)->delete();
            return 'Calle Borrada';
        }catch(\Exception $e){
            return 'Calle no borrada';
        }
    }



}


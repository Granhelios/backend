<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudades;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = [
            ['Arica', 1],
	        ['Iquique', 3],
	        ['Antofagasta', 5],
	        ['Copiapó', 8],
        	['La Serena', 11],
        	['Valparaíso', 14],
        	['Santiago', 22],
        	['Rancagua', 28],
        	['Talca', 31],
        	['Chillán', 35],
        	['Concepción', 38],
        	['Temuco', 41],
        	['Valdivia', 43],
        	['Puerto Montt', 45],
        	['Coyhaique', 50],
        	['Punta Arenas', 53],

        ];

        $ci_temporal = array_map(function($ciudad){
            return[
                'ci_nombre' =>$ciudad[0],
                'pr_id'=>$ciudad[1],
            ];
            }, $ciudades
        );

        Ciudades::insert($ci_temporal);
    
    }
}

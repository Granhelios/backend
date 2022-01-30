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
            ['A-2', 2],
	        ['Iquique', 3],
            ['B-1', 4],
	        ['Antofagasta', 5],
            ['B-2', 6],
            ['B-3', 7],
	        ['Copiapó', 8],
            ['B-4', 9],
            ['B-6', 10],
        	['La Serena', 11],
            ['B-7', 12],
            ['B-8', 13],
        	['Valparaíso', 14],
            ['C-1', 15],
            ['C-2', 16],
            ['C-3', 17],
            ['C-4', 18],
            ['C-5', 19],
            ['C-6', 20],
            ['C-7', 20],
        	['Santiago', 22],
            ['D-1', 23],
            ['D-2', 24],
            ['D-3', 25],
            ['D-4', 26],
            ['D-7', 27],
        	['Rancagua', 28],
            ['E-1', 29],
            ['E-2', 30],
        	['Talca', 31],
            ['E-3', 33],
            ['E-4', 34],
        	['Chillán', 35],
            ['E-5', 36],
            ['E-6', 37],
        	['Concepción', 38],
            ['F-1', 39],
            ['F-2', 40],
        	['Temuco', 41],
            ['F-3', 42],
        	['Valdivia', 43],
            ['F-4', 44],
        	['Puerto Montt', 45],
            ['G-1', 46],
            ['G-2', 47],
            ['G-3', 48],
            ['G-4', 49],
        	['Coyhaique', 50],
            ['G-5', 51],
            ['G-6', 52],
        	['Punta Arenas', 53],
            ['Z-1', 54],
            ['Z-2', 55],
            ['Z-3', 56],

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

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calles;

class CallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calles = [
            ['10 de Julio', 1],
            ['El Teniente', 1],
            ['Marcos Maturana', 1],
	        ['I-1', 2],
	        ['A-1', 3],
	        ['C-1', 4],
        	['LS-1', 5],
        	['V-1', 6],
        	['Hoevel', 7],
            ['Radal', 7],
            ['Alameda', 7],
        	['R-1', 8],
        	['T-1', 9],
        	['C-1', 10],
        	['Collao', 11],
            ['Los Carrera', 11],
            ['Paícavi', 11],
        	['T-1', 12],
        	['V-1', 13],
        	['P-1', 14],
        	['Co-1', 15],
        	['PA-1', 16],
        ];

        $ca_temporal = array_map(function($calle){
            return[
                'ca_nombre' =>$calle[0],
                'ci_id'=>$calle[1],
            ];
            }, $calles
        );

        Calles::insert($ca_temporal);
    }
}

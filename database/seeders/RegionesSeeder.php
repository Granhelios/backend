<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Regiones;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $re_nombre = [
            'Arica y Parinacota',
            'Tarapacá',
            'Antofagasta',
            'Atacama',
            'Coquimbo',
            'Valparaiso',
            'Metropolitana de Santiago',
            'Libertador General Bernardo O\'Higgins',
            'Maule',
            'Ñuble',
            'Biobío',
            'La Araucanía',
            'Los Ríos',
            'Los Lagos',
            'Aisén del General Carlos Ibáñez del Campo',
            'Magallanes y de la Antártica Chilena'
        ];

        $re_temporal = array_map(function($region){
            return[
                're_nombre' =>$region,
            ];
            }, $re_nombre
        );

        Regiones::insert($re_temporal);
    }
}

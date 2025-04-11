<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estates')->insert(
            [
                [
                    "id"=> 2,
                    "name"=> "Ciudad Autónoma de Buenos Aires"
                ],
                [
                    "id"=> 6,
                    "name"=> "Provincia de Buenos Aires"
                ],
                [
                    "id"=> 10,
                    "name"=> "Provincia de Catamarca"
                ],
                [
                    "id"=> 14,
                    "name"=> "Provincia de Córdoba"
                ],
                [
                    "id"=> 18,
                    "name"=> "Provincia de Corrientes"
                ],
                [
                    "id"=> 22,
                    "name"=> "Provincia del Chaco"
                ],
                [
                    "id"=> 26,
                    "name"=> "Provincia del Chubut"
                ],
                [
                    "id"=> 30,
                    "name"=> "Provincia de Entre Ríos"
                ],
                [
                    "id"=> 34,
                    "name"=> "Provincia de Formosa"
                ],
                [
                    "id"=> 38,
                    "name"=> "Provincia de Jujuy"
                ],
                [
                    "id"=> 42,
                    "name"=> "Provincia de La Pampa"
                ],
                [
                    "id"=> 46,
                    "name"=> "Provincia de La Rioja"
                ],
                [
                    "id"=> 50,
                    "name"=> "Provincia de Mendoza"
                ],
                [
                    "id"=> 54,
                    "name"=> "Provincia de Misiones"
                ],
                [
                    "id"=> 58,
                    "name"=> "Provincia del Neuquén"
                ],
                [
                    "id"=> 62,
                    "name"=> "Provincia de Río Negro"
                ],
                [
                    "id"=> 66,
                    "name"=> "Provincia de Salta"
                ],
                [
                    "id"=> 70,
                    "name"=> "Provincia de San Juan"
                ],
                [
                    "id"=> 74,
                    "name"=> "Provincia de San Luis"
                ],
                [
                    "id"=> 78,
                    "name"=> "Provincia de Santa Cruz"
                ],
                [
                    "id"=> 82,
                    "name"=> "Provincia de Santa Fe"
                ],
                [
                    "id"=> 86,
                    "name"=> "Provincia de Santiago del Estero"
                ],
                [
                    "id"=> 90,
                    "name"=> "Provincia de Tucumán"
                ],
                [
                    "id"=> 94,
                    "name"=> "Provincia de Tierra del Fuego, Antártida e Islas del Atlántico Sur"
                ]
            ]
        );

    }
}

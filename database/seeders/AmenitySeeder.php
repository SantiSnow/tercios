<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amenities')->insert(
            [
                [
                    "name"=> "Garage",
                    "property_id" => 1,
                ],

                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 1,
                ],

                [
                    "name"=> "Balcón",
                    "property_id" => 1,
                ],

                [
                    "name"=> "Pileta",
                    "property_id" => 1,
                ],

                [
                    "name"=> "Seguridad",
                    "property_id" => 2,
                ],

                [
                    "name"=> "Garage",
                    "property_id" => 3,
                ],

                [
                    "name"=> "Balcón",
                    "property_id" => 3,
                ],

                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 5,
                ],

                [
                    "name"=> "Internet",
                    "property_id" => 5,
                ],

                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 7,
                ],

                [
                    "name"=> "Garage",
                    "property_id" => 50,
                ],

                [
                    "name"=> "Seguridad",
                    "property_id" => 50,
                ],

                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 50,
                ],

                [
                    "name"=> "Internet",
                    "property_id" => 50,
                ],

                [
                    "name"=> "Garage",
                    "property_id" => 51,
                ],

                [
                    "name"=> "Seguridad",
                    "property_id" => 51,
                ],

                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 51,
                ],

                [
                    "name"=> "Balcón",
                    "property_id" => 51,
                ],

                [
                    "name"=> "Pileta",
                    "property_id" => 51,
                ],

                [
                    "name"=> "Internet",
                    "property_id" => 51,
                ],
                [
                    "name"=> "Internet",
                    "property_id" => 52,
                ],
                [
                    "name"=> "Seguridad",
                    "property_id" => 52,
                ],
                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 52,
                ],
                [
                    "name"=> "Internet",
                    "property_id" => 8,
                ],
                [
                    "name"=> "Aire Acondicionado",
                    "property_id" => 8,
                ],
                [
                    "name"=> "Internet",
                    "property_id" => 14,
                ],
                [
                    "name"=> "Internet",
                    "property_id" => 15,
                ],
                [
                    "name"=> "Garage",
                    "property_id" => 19,
                ],
                [
                    "name"=> "Balcón",
                    "property_id" => 19,
                ],
                [
                    "name"=> "Internet",
                    "property_id" => 19,
                ],

            ]
        );
    }
}

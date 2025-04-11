<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert(
            [
                [ 'id' => 1, 'name' => 'Casa' ],
                [ 'id' => 2, 'name' => 'Clínica' ],
                [ 'id' => 3, 'name' => 'Departamento' ],
                [ 'id' => 4, 'name' => 'Local' ],
                [ 'id' => 5, 'name' => 'Lote' ],
                [ 'id' => 6, 'name' => 'Oficina' ],
                [ 'id' => 7, 'name' => 'PH' ],
            ]
        );
    }
}

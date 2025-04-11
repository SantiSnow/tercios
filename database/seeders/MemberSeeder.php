<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('members')->insert(
            [
                [
                    "name"=> "Dr. Pablo Stachon",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-1.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Dr. Augusto Müller",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-2.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Dr. Diego Cerezo",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-3.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Dr. Erik Servioli",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-4.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Dana Garfunkel",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-5.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Agostina Santilli",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-6.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Jun Pablo Varela",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-7.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],

                [
                    "name"=> "Facundo Ibarra",
                    "position"=> "EL CARGO EN LA EMPRESA",
                    "email"=> "mail@red-fox.com.ar",
                    "image"=> "/images/staff/staff-8.png",
                    "linkedin_url"=> "",
                    "ig_url"=> "",
                    "meta_url"=> "",
                ],
            ]
        );
    }
}

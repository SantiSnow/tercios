<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->line('Creating an administrator with command line (see database seeder to access panel)...');

        Artisan::call('user:create', [
            'name' => "Administrator", 'email' => 'dev@osaka-software.com', 'password' => 'p4s$w0rd_redfox_23!',
        ]);

        Artisan::call('user:create', [
            'name' => "Administrator", 'email' => 'info@red-fox.com.ar', 'password' => 'RedFox_Admin_23!',
        ]);

        $this->call([
            EstateSeeder::class,
            CitySeeder::class,
            TypeSeeder::class,
            PropertySeeder::class,
            AmenitySeeder::class,
            ImageSeeder::class,
            PostSeeder::class,
            MemberSeeder::class,
        ]);

        $this->command->line('Done.');

    }
}

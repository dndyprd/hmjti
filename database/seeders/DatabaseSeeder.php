<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{ 
 
    public function run(): void
    { 
        $this->call([
            BidangSeeder::class,
            ProkerSeeder::class, 
            BlogSeeder::class,
            BlogGallerySeeder::class,
            UserSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{ 
 
    public function run(): void
    { 
        User::create([
            'name' => 'HMJ Teknologi Informasi',
            'email' => env('ADMIN_EMAIL', 'hmjteknologiinformasi@pnb.ac.id'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'HMJTI26')),
        ]);

        $this->call([
            BidangSeeder::class,
            ProkerSeeder::class, 
            BlogSeeder::class,
            BlogGallerySeeder::class,
        ]);
    }
}

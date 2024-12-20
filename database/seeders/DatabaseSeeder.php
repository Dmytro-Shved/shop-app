<?php

namespace Database\Seeders;

use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cigarette;
use App\Models\Liquid;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin::factory(10)->create();

//        Admin::factory()->create([
//            'name' => 'Test Admin',
//            'email' => 'test@example.com',
//        ]);

//        Cigarette::factory(1)->create([
//            'id' => '1',
//            'name' => 'Test Pod',
//            'type' => 'pod',
//            'strength' => '100',
//            'puffs' => 1000,
//            'flavor' => 'Apple Arctic Fresh',
//            'price' => 120,
//            'image' =>  'images/pod/xros.png',
//        ]);
//
//        Cigarette::factory(1)->create([
//            'name' => 'Test',
//            'type' => 'elfbar',
//            'strength' => '100',
//            'puffs' => 1000,
//            'flavor' => 'Juice',
//            'price' => 110,
//            'image' =>  'images/elfbar/blast.png',
//        ]);

//        Liquid::factory(1)->create([
//            'name' => 'Test Liquid',
//            'pg_vg_ratio' => '50/50',
//            'volume' => 10,
//            'flavor' => 'Arctic Fresh Mint',
//            'price' => 25,
//            'image' => 'images/liquid/VksOeSzFghNk0AvlgPSlEgN4eheu3HOzUudjGBkh.jpg',
//        ]);
    }
}

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
         Admin::factory(10)->create();

        Admin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);


//        Cigarettes
        Cigarette::factory(1)->create([
            'name' => 'Gene Pod',
            'type' => 'pod',
            'strength' => '120',
            'puffs' => 3000,
            'flavor' => 'Mint',
            'price' => 120,
            'image' =>  'images/pod/nano.png',
        ]);

        Cigarette::factory(1)->create([
            'name' => 'Elfbar Apple',
            'type' => 'elfbar',
            'strength' => '100',
            'puffs' => 2000,
            'flavor' => 'Apple',
            'price' => 120,
            'image' =>  'images/elfbar/xOdBragkWqNXkDDLaID3D7mo92GUniS9e0ODh0Ti.jpg',
        ]);

        Cigarette::factory(1)->create([
            'name' => 'Smok Nord 2',
            'type' => 'pod',
            'strength' => '200',
            'puffs' => 4000,
            'flavor' => 'Strawberry',
            'price' => 120,
            'image' =>  'images/pod/boi29mRlf2wsgVUgT1cO5eihN0qrRnXugdVFze45.jpg',
        ]);

        Cigarette::factory(1)->create([
            'name' => 'Candy Rainbow',
            'type' => 'elfbar',
            'strength' => '100',
            'puffs' => 4000,
            'flavor' => 'Candy',
            'price' => 120,
            'image' =>  'images/elfbar/AXp5Z1cfwXJfSWXUmU6rQ8tgA524QM8XydcKxAjy.jpg',
        ]);

        Cigarette::factory(1)->create([
            'name' => 'Pod Smok System',
            'type' => 'pod',
            'strength' => '200',
            'puffs' => 5000,
            'flavor' => 'Mint',
            'price' => 150,
            'image' =>  'images/pod/0q8OjD24AfxtElW7W5bnPNxGcDBKyPMOW4M0WZUB.jpg',
        ]);

//        Liquids

        Liquid::factory(1)->create([
            'name' => 'Cherry Liquid',
            'pg_vg_ratio' => '50/50',
            'volume' => 10,
            'flavor' => 'Cherry',
            'price' => 25,
            'image' => 'images/liquid/gFAeRR0kXdfggafjo2tq93HmdHN30rQT7yZYF6ex.jpg',
        ]);

        Liquid::factory(1)->create([
            'name' => 'Mint Serenity Liquid',
            'pg_vg_ratio' => '50/50',
            'volume' => 25,
            'flavor' => 'Mint Serenity',
            'price' => 25,
            'image' => 'images/liquid/pdphNY09sAI5IPcCvm3bFAoaK2mUvznSqWruN1Xq.jpg',
        ]);

        Liquid::factory(1)->create([
            'name' => 'Watermelon Liquid',
            'pg_vg_ratio' => '50/50',
            'volume' => 10,
            'flavor' => 'Watermelon Juice',
            'price' => 25,
            'image' => 'images/liquid/UGGGNI9sqHImioc7JampFfCt7kMBWsav5iCHcmNC.jpg',
        ]);

        Liquid::factory(1)->create([
            'name' => 'Ice Liquid',
            'pg_vg_ratio' => '50/50',
            'volume' => 25,
            'flavor' => 'Ice',
            'price' => 25,
            'image' => 'images/liquid/VksOeSzFghNk0AvlgPSlEgN4eheu3HOzUudjGBkh.jpg',
        ]);

        Liquid::factory(1)->create([
            'name' => 'Lost Liduid',
            'pg_vg_ratio' => '50/50',
            'volume' => 25,
            'flavor' => 'Watermelon and Mango',
            'price' => 25,
            'image' => 'images/liquid/F8FhMIJhTfudAZE2nt5JHy3URGrjGSwaKAJAfMdS.jpg',
        ]);

        Liquid::factory(1)->create([
            'name' => 'Elixir CBD',
            'pg_vg_ratio' => '50/50',
            'volume' => 25,
            'flavor' => 'Mango',
            'price' => 25,
            'image' => 'images/liquid/Yl2EsEmK7F8hplu5xOpYhhGS3c8RNro4Z41Z85Ql.jpg',
        ]);

        Admin::factory(1)->create([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => 'admin',
        ]);
    }
}

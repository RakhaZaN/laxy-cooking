<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremiumRecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('premium_recipes')->insert([
            [
                'name' => 'Sourdough',
                'price' => 100000,
                'image' => 'premium/sourdough.png'
            ],
            [
                'name' => 'Milk Shake',
                'price' => 40000,
                'image' => 'premium/milkshake.jpg'
            ],
            [
                'name' => 'Salad',
                'price' => 80000,
                'image' => 'premium/salad.png'
            ],
        ]);
    }
}

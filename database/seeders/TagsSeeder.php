<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'tag' => 'Rice',
                'created_at' => now()
            ],
            [
                'tag' => 'Breakfast',
                'created_at' => now()
            ],
            [
                'tag' => 'Dinner',
                'created_at' => now()
            ],
            [
                'tag' => 'Dessert',
                'created_at' => now()
            ],
            [
                'tag' => 'Food',
                'created_at' => now()
            ],
            [
                'tag' => 'Drink',
                'created_at' => now()
            ],
        ]);
    }
}

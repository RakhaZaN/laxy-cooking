<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipe_tag')->insert([
            [
                'recipe_id' => 1,
                'tag_id' => 1
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 1,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 2,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 4
            ],
            [
                'recipe_id' => 3,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 4,
                'tag_id' => 4
            ],
            [
                'recipe_id' => 4,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 4,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 1
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 5,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 6,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 3
            ],
            [
                'recipe_id' => 7,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 2
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 4
            ],
            [
                'recipe_id' => 8,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 9,
                'tag_id' => 5
            ],
            [
                'recipe_id' => 10,
                'tag_id' => 6
            ],
            [
                'recipe_id' => 11,
                'tag_id' => 6
            ],
            [
                'recipe_id' => 12,
                'tag_id' => 6
            ],
        ]);
    }
}

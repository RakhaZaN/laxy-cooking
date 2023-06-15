<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'recipe_id' => 1,
                'url' => 'https://www.youtube.com/embed/qH__o17xHls'
            ],
            [
                'recipe_id' => 1,
                'url' => 'https://www.youtube.com/embed/7AxydboW8v8'
            ],
            [
                'recipe_id' => 2,
                'url' => 'https://www.youtube.com/embed/FTL_QPa9FeM'
            ],
            [
                'recipe_id' => 2,
                'url' => 'https://www.youtube.com/embed/J0w4IVUUSEQ'
            ],
            [
                'recipe_id' => 3,
                'url' => 'https://www.youtube.com/embed/Fz95m_nrvmE'
            ],
            [
                'recipe_id' => 3,
                'url' => 'https://www.youtube.com/embed/74K8TczsBDw'
            ],
            [
                'recipe_id' => 4,
                'url' => 'https://www.youtube.com/embed/tKLFKQxeaOU'
            ],
            [
                'recipe_id' => 4,
                'url' => 'https://www.youtube.com/embed/NbGPOTDf6Jc'
            ],
            [
                'recipe_id' => 5,
                'url' => 'https://www.youtube.com/embed/xkj7G1K-EUM'
            ],
            [
                'recipe_id' => 5,
                'url' => 'https://www.youtube.com/embed/RG-1k4VdxrA'
            ],
            [
                'recipe_id' => 6,
                'url' => 'https://www.youtube.com/embed/XThth3YIw1I'
            ],
            [
                'recipe_id' => 6,
                'url' => 'https://www.youtube.com/embed/MQrbgNnglqo'
            ],
            [
                'recipe_id' => 7,
                'url' => 'https://www.youtube.com/embed/jINzhuHuB4g'
            ],
            [
                'recipe_id' => 7,
                'url' => 'https://www.youtube.com/embed/4jeWLFSWcWU'
            ],
            [
                'recipe_id' => 8,
                'url' => 'https://www.youtube.com/embed/gaEokM6eTnQ'
            ],
            [
                'recipe_id' => 8,
                'url' => 'https://www.youtube.com/embed/A5z1zn20tdU'
            ],
            [
                'recipe_id' => 9,
                'url' => 'https://www.youtube.com/embed/z60_v7NhFck'
            ],
            [
                'recipe_id' => 9,
                'url' => 'https://www.youtube.com/embed/YHv2bELpKEo'
            ],
            [
                'recipe_id' => 10,
                'url' => 'https://www.youtube.com/embed/E-UKq8hKZDA'
            ],
            [
                'recipe_id' => 10,
                'url' => 'https://www.youtube.com/embed/l_IPkfECTWM'
            ],
            [
                'recipe_id' => 11,
                'url' => 'https://www.youtube.com/embed/ap5rXdt-Uyk'
            ],
            [
                'recipe_id' => 11,
                'url' => 'https://www.youtube.com/embed/fOen5IpBYtE'
            ],
            [
                'recipe_id' => 12,
                'url' => 'https://www.youtube.com/embed/Zfa94WR-dFI'
            ],
            [
                'recipe_id' => 12,
                'url' => 'https://www.youtube.com/embed/XaB2AQyuLZU'
            ],
        ]);
    }
}

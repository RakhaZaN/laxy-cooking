<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            [
                'recipe_id' => 1,
                'ingredient' => '4 piring nasi putih',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '3 siung bawang putih',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '2 butir telur, kocok lepas',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '2 batang daun bawang, iris tipis',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '2 sdm kecap manis',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '1 sdm saus tiram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '1 sdt garam',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => '1/2 sdt merica',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'ingredient' => 'Minyak goreng secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '2 genggam kerupuk orange',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '1 genggam makaroni',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '2 - 3 buah bakso, iris tipis',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '3 batang daun sawi, potong kecil',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '2 siung bawang putih',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '4 siung bawang merah',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '6 buah cabe merah keriting',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '3 buah cabe rawit merah',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '1/2 ruas kencur',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '1/4 sdt merica bubuk',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => '1/4 sdt kaldu ayan (optional)',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'ingredient' => 'garam, gula dan air secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => '4 gelas air',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => '1 bungkus agar-agar coklat',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => '2 bungkus susu bubuk sachet',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => '3/4 sdm coklat bubuk/chocolator ',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => '2 sendok makan gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'ingredient' => 'sejumput garam',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Tepung terigu serbaguna, 100 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Baking powder, 1/4 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Pisang, dihancurkan dengan garpu, 75 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Potongan pisang untuk toping',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Gula pasir, 2 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Susu cair, 90 ml',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => 'Butter / margarin dicairkan, 50 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'ingredient' => '1 butir telur, pisahkan putih dan kuningnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Telur - 2 butir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Kecap asin - 1 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Kecap manis - 1 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Lada bubuk - 1/4 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Ait - 2 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Bawang putih, cincang halus - 2 siung',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Daun bawang, iris kasar - 2 tangkar',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Minyak goreng - 5 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'ingredient' => 'Nasi Putih - 1 piring',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '3 buah tofu',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '1 lembar nori dipotong-potong',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '200 gram daging giling',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '1 sdm kecap manis',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '2 sdm kecap asin',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '1 sdm saus tiram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => 'Garam dan merica secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => 'larutan tepung maizena 1/2 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'ingredient' => '1 sdt minyak wijen',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => '1 bungkus mie instan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => '1 butir telur',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => '5 pcs baso sapi / sosis',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => '1 helai sosin',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => 'Cabe rawit sesuai selera',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => 'Kecap secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => 'Saos cabai secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => 'Gula, garam, dan penyedap rasa secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => '1 pcs bawang putih',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => '2 pcs bawang merah',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'ingredient' => 'secukupnya merica bubuk',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'Strawberry secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'Kiwi secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'Jeruk secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => '4 lembar roti tawar',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'krim kocok kental',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'Gula secukupnya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'ingredient' => 'Vanila',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Tepung terigu - 150 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Tepung tapioka - 1 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Garam - 1/4 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Minyak goreng - 1 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Air panas (mendidih) - 90 ml',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Daging ayam, cincang halus - 150 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Daging udang, cincang kasar - 100 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Tepung tapioka - 2 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Saus tiram - 1 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Minyak wijen - 1 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Garam - 1 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Gula pasir - 1 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Daun bawang, iris halus - 2 batang',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Kecap asin - 4 sdm',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Minyak wijen - 1 sdt',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'ingredient' => 'Cuka - sedikit',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '1 bungkus (15 g) jelly tawar',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '3 sdm kopi bubuk instan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '100 g gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '750 ml susu',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '1 sdm kopi bubuk instan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '50 g gula palem',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '50 g gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'ingredient' => '800 ml air',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '1 bungkus (15 g) jelly tawar',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '3 sdm kopi bubuk instan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '100 g gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '800 ml air',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '750 ml susu',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '1 sdm kopi bubuk instan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '50 g gula palem',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'ingredient' => '50 g gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Mangga harum manis - 750 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Jus mangga harum manis - 300 ml',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Susu evaporasi - 405 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Whip cream cair - 100 ml',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Kirm kental manis, sesuaikan selera - 200 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Sagu mutiara - 75 gram',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Air untuk merebus sagu mutiara - 500 ml',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'ingredient' => 'Gula pasir - secukupnya',
                'created_at' => now()
            ],
        ]);
    }
}

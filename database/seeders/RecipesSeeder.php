<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            [
                'name' => 'Nasi Goreng Rumahan',
                'description' => 'Nasi goreng adalah salah satu hidangan favorit di Indonesia yang selalu dinantikan oleh banyak orang. Selain rasanya yang lezat, nasi goreng juga mudah dibuat dengan bahan-bahan yang sederhana dan praktis. Mari jelajahi berbagai resep nasi goreng rumahan yang akan membuatmu jatuh cinta dengan hidangan yang satu ini!',
                'image' => 'recipes/recipe-1.jpeg',
                'prep_time' => 10,
                'cook_time' => 20,
                'serving_count' => 2,
                'seen' => 42,
                'created_at' => now(),
            ],
            [
                'name' => 'Seblak Sederhana',
                'description' => 'Seblak adalah hidangan mie yang berasal dari Bandung, Jawa Barat yang kini semakin populer di seluruh Indonesia bahkan hingga mancanegara. Hidangan ini memiliki rasa pedas dan gurih yang khas, serta bisa disesuaikan dengan berbagai jenis tambahan seperti telur, daging, seafood, sayuran, dan lain sebagainya. Bagi yang belum pernah mencoba, tidak ada salahnya untuk mencicipi hidangan yang satu ini. Berikut merupakan resep membuat seblak yang lezat dan mudah di rumah. Selamat mencoba!',
                'image' => 'recipes/recipe-2.jpeg',
                'prep_time' => 10,
                'cook_time' => 15,
                'serving_count' => 2,
                'seen' => 89,
                'created_at' => now(),
            ],
            [
                'name' => 'Puding Coklat',
                'description' => 'Puding coklat salah satu makanan penutup yang paling digemari oleh banyak orang, puding merupakan hidangan penutup yang terbuat dari bahan dasar susu, tepung maizena, dan coklat bubuk yang memberikan rasa manis dan lezat pada makanan ini. Selain itu, puding coklat juga mudah dibuat dan cocok untuk berbagai acara, mulai dari acara keluarga, hingga acara formal. Nah, di website ini, kami akan berbagi resep puding coklat yang mudah dan pastinya akan membuat Anda ketagihan. Yuk, simak dan praktekkan resepnya di rumah!',
                'image' => 'recipes/recipe-3.jpeg',
                'prep_time' => 5,
                'cook_time' => 20,
                'serving_count' => 6,
                'seen' => 12,
                'created_at' => now(),
            ],
            [
                'name' => 'Banana Pancake',
                'description' => 'Pancake adalah salah satu hidangan sarapan yang sangat populer di seluruh dunia karena rasanya yang lezat dan teksturnya yang lembut dan empuk. Namun, pancake tidak hanya sekadar hidangan sarapan, tetapi juga cocok dijadikan camilan atau hidangan penutup yang memuaskan. Yuk, coba resep pancake yang mudah dan lezat ini untuk memulai hari Anda dengan energi yang penuh! Jangan lupa menambahkan topping favorit untuk menciptakan pancake yang sempurna sesuai dengan selera Anda.',
                'image' => 'recipes/recipe-4.jpeg',
                'prep_time' => 15,
                'cook_time' => 10,
                'serving_count' => 4,
                'seen' => 73,
                'created_at' => now(),
            ],
            [
                'name' => 'Telur Kecap Pontianak',
                'description' => 'Telur Kecap Pontianak adalah hidangan telur yang dimasak dengan bumbu kecap manis, bawang merah, dan bawang putih, serta disajikan dengan potongan cabai hijau dan tomat. Hidangan ini memiliki rasa manis dan pedas yang khas, serta cocok disajikan sebagai lauk pada saat makan siang atau malam. Nah, di website ini, kami akan memberikan resep Telur Kecap Pontianak yang mudah dan pastinya akan membuat lidah Anda bergoyang. Yuk, coba praktekkan resepnya di rumah!',
                'image' => 'recipes/recipe-5.jpg',
                'prep_time' => 5,
                'cook_time' => 5,
                'serving_count' => 1,
                'seen' => 1023,
                'created_at' => now(),
            ],
            [
                'name' => 'Tofu Nori Kukus Siram Daging',
                'description' => 'Tofu Nori Kukus Siram Daging adalah hidangan Asia yang terdiri dari potongan-potongan tahu yang diberi lembaran nori pada bagian atas Tofu, kemudian dikukus hingga matang dan disiram dengan saus daging yang lezat dan gurih. Hidangan ini memiliki rasa yang lezat dan sehat, serta cocok dijadikan sebagai menu makan malam.',
                'image' => 'recipes/recipe-6.jpeg',
                'prep_time' => 3,
                'cook_time' => 15,
                'serving_count' => 1,
                'seen' => 9,
                'created_at' => now(),
            ],
            [
                'name' => 'Mie Nyemek Ala Anak Kos',
                'description' => 'Kali ini kami akan berbagi resep makanan yang cocok untuk Anda yang sedang menjadi anak kos atau mahasiswa yang tinggal di kos-kosan, yaitu Mie Nyemek Ala Anak Kos. Mie Nyemek ini terbuat dari mie instan yang dimasak dengan bumbu-bumbu sederhana seperti saus tomat, saus sambal, dan bawang putih, serta ditambahkan dengan potongan telur dadar dan daging ayam atau sosis sebagai pelengkapnya. Hidangan ini sangat mudah dan cepat untuk dibuat, cocok untuk Anda yang sibuk atau malas memasak. Nah, di website ini, kami akan memberikan resep Mie Nyemek Ala Anak Kos yang mudah dan pastinya akan membuat perut Anda kenyang. Yuk, simak dan praktekkan resepnya di rumah!',
                'image' => 'recipes/recipe-7.jpg',
                'prep_time' => 15,
                'cook_time' => 10,
                'serving_count' => 1,
                'seen' => 4328,
                'created_at' => now(),
            ],
            [
                'name' => 'Japanese Fruit Sandwich',
                'description' => 'Japanese Fruit Sandwich adalah hidangan yang terdiri dari roti putih lembut yang diisi dengan potongan buah-buahan segar, mentega, dan whipped cream. Hidangan ini memiliki rasa yang manis dan segar dengan tekstur yang lembut dan renyah dari roti. Japanese Fruit Sandwich cocok dijadikan sebagai menu sarapan atau camilan sehat dan lezat.',
                'image' => 'recipes/recipe-8.png',
                'prep_time' => 5,
                'cook_time' => 10,
                'serving_count' => 1,
                'seen' => 2343,
                'created_at' => now(),
            ],
            [
                'name' => 'Gyoza',
                'description' => 'Gyoza adalah hidangan Asia yang terdiri dari kulit pangsit yang diisi dengan campuran daging cincang, sayuran, dan bumbu-bumbu yang khas. Hidangan ini biasanya dimasak dengan cara digoreng atau dikukus, dan disajikan dengan saus khusus yang lezat. Gyoza memiliki rasa yang gurih dan lezat dengan tekstur kulit yang renyah dan isian yang empuk. Gyoza populer di Jepang dan banyak negara Asia lainnya, serta sering dijadikan sebagai makanan pembuka atau camilan.',
                'image' => 'recipes/recipe-9.jpeg',
                'prep_time' => 10,
                'cook_time' => 20,
                'serving_count' => 1,
                'seen' => 123,
                'created_at' => now(),
            ],
            [
                'name' => 'Coffee Jelly',
                'description' => 'Minuman Coffe Jelly merupakan minuman yang populer di Asia dan dapat ditemukan di berbagai kedai kopi atau toko minuman. Minuman ini merupakan alternatif yang unik dan menyenangkan untuk menikmati kopi dengan cara yang berbeda dan segar.disini kami akan membagi resep mudah untuk membuat coffe jelly untuk anda coba.',
                'image' => 'recipes/recipe-10.jpeg',
                'prep_time' => 15,
                'cook_time' => 15,
                'serving_count' => 4,
                'seen' => 1034,
                'created_at' => now(),
            ],
            [
                'name' => 'Korean Strawberry Milk',
                'description' => 'NKorean Strawberry Milk adalah minuman yang menyegarkan dan mudah dibuat di rumah. Dengan bahan-bahan sederhana seperti susu segar, stroberi segar, dan sirup gula, kamu bisa membuat minuman yang lezat dan sehat dalam waktu singkat. Untuk membuatnya, cukup campurkan semua bahan dalam blender dan aduk hingga merata. Kemudian, tuang campuran ke dalam gelas yang sudah diisi es batu dan nikmati minuman segarmu. Ayo coba membuat Korean Strawberry Milk di rumah dan rasakan sensasi segarnya!',
                'image' => 'recipes/recipe-11.jpeg',
                'prep_time' => 3,
                'cook_time' => 10,
                'serving_count' => 1,
                'seen' => 2344,
                'created_at' => now(),
            ],
            [
                'name' => 'Mango Sago',
                'description' => 'Mango Sago adalah hidangan penutup segar yang berasal dari Hong Kong. Hidangan ini terdiri dari potongan mangga matang, mutiara sago yang kenyal, dan susu kental manis yang dicampur menjadi satu. Sago merupakan bola kecil yang terbuat dari tepung sagu yang dimasak dan kemudian dicelupkan ke dalam air dingin untuk memberikan tekstur kenyal yang lezat. Mango Sago biasanya disajikan dingin dan memberikan sensasi segar dan manis di setiap gigitannya. Hidangan ini populer di seluruh Asia dan mudah ditemukan di restoran atau kedai minuman.',
                'image' => 'recipes/recipe-12.jpeg',
                'prep_time' => 25,
                'cook_time' => 25,
                'serving_count' => 6,
                'seen' => 1209,
                'created_at' => now(),
            ],
        ]);
    }
}

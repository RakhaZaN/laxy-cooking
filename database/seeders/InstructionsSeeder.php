<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instructions')->insert([
            [
                'recipe_id' => 1,
                'step' => 1,
                'instruction' => 'Panaskan minyak goreng dalam wajan yang besar.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 2,
                'instruction' => 'Tumis bawang putih hingga harum.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 3,
                'instruction' => 'Tambahkan telur, aduk-aduk hingga matang.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 4,
                'instruction' => 'Masukkan nasi putih, aduk rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 5,
                'instruction' => 'Tambahkan kecap manis, saus tiram, garam, dan merica bubuk. Aduk rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 6,
                'instruction' => 'Masukkan daun bawang, aduk rata kembali.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 1,
                'step' => 7,
                'instruction' => 'Angkat dan hidangkan dengan kerupuk, acar timun, dan sambal.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 1,
                'instruction' => 'Angkat dan hidangkan dengan kerupuk, acar timun, dan sambal.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 2,
                'instruction' => 'Sementara kerupuk direndam, rebus makaroni sampai lembut',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 3,
                'instruction' => 'Haluskan bumbu dan tumis hingga harum. Pinggirkan bumbu halusnya kemudian masukkan telur dan buat seperti orak arik',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 4,
                'instruction' => 'Masukkan bakso dan makaroni. Aduk sebentar dan tuangkan air secukupnya (kira-kira 1/4 - 1 gelas air)',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 5,
                'instruction' => 'Masukkan sayur sawinya. Masukkan garam, gula, merica bubuk serta kaldu ayam. Aduk rata dan koreksi rasanya',
                'created_at' => now()
            ],
            [
                'recipe_id' => 2,
                'step' => 6,
                'instruction' => 'Angkat dan sajikan hangat-hangat.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 1,
                'instruction' => 'Rebus air hingga mendidih',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 2,
                'instruction' => 'Masukkan agar-agar. Aduk terus jangan sampai menggumpal',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 3,
                'instruction' => 'Masukkan susu bubuk. Terus diaduk',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 4,
                'instruction' => 'Masukkan coklat bubuk. Aduk sampai merata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 5,
                'instruction' => 'Masukkan gula pasir',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 6,
                'instruction' => 'Masukkan puding coklat dalam cetakkan.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 7,
                'instruction' => 'Dinginkan di suhu ruang kurang lbh 15 menit lalu masukkan kulkas',
                'created_at' => now()
            ],
            [
                'recipe_id' => 3,
                'step' => 8,
                'instruction' => 'Sajikan dalam keadaan dingin',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 1,
                'instruction' => 'Campur tepung terigu dan baking powder. Aduk rata lalu ayak, sisihkan.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 2,
                'instruction' => 'Mixer putih telur dengan kecepatan tinggi hingga mengembang kaku, sisihkan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 3,
                'instruction' => 'Dalam wadah lain, mixer kuning telur dan gula pasir hingga pucat. Tambahkan pisang, aduk rata. Tuang susu cair dan tepung bergantian sembari mixer dengan kecepatan rendah. Matikan mixer.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 4,
                'instruction' => 'Masukkan adonan putih telur, aduk perlahan dengan spatula hingga rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 5,
                'instruction' => 'Terakhir masukkan butter cair, aduk perlahan hingga rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 6,
                'instruction' => 'Panaskan pan anti lengket dan olesi dengan sedikit margarin',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 7,
                'instruction' => 'Tuang adonan sebanyak 1 sendok sayur. Masak hingga kecokelatan kedua sisinya, gunakan api kecil. Angkat.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 8,
                'instruction' => 'Tata pancake di piring. Beri bahan topping.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 4,
                'step' => 9,
                'instruction' => 'Siap disajikan.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'step' => 1,
                'instruction' => 'Dalam mangkuk, campur air, kecap asin, kecap manis, lada bubuk dan bawang putih, aduk rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'step' => 2,
                'instruction' => 'Tumis daun bawang sebentar dengan minyak goreng sampai harum, kemudian masukkan telur. Diamkan hingga putih telur matang.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'step' => 3,
                'instruction' => 'Tuang campuran kecap dan bawang putih ke atas telur, sedikit demi sedikit. Siram-siram saus kecap ke atas telur sampai meresap dan telur matang. Tingkat kematangan telur bisa disesuaikan sesuai selera.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 5,
                'step' => 4,
                'instruction' => 'Siram di atas nasi hangat, siap disajikan.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'step' => 1,
                'instruction' => 'Marinasi daging dgn bumbu minimal 15 menit.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'step' => 2,
                'instruction' => 'Taruh nori di atas tofu, lalu kukus tofu 5 menit atau sampai matang. Buang sisa airnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 6,
                'step' => 3,
                'instruction' => 'Tumis bawang putih hingga harum, masukkan daging, setelah pucat beri bumbu, aduk rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 1,
                'instruction' => 'Rebus mie, lalu tiriskan hingga tidak berair',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 2,
                'instruction' => 'Potong-potong sosin dan baso sesuai selera',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 3,
                'instruction' => 'Haluskan bumbu halus, kemudian tumis hingga harum',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 4,
                'instruction' => 'Masukkan baso hingga sedikit mengering, kemudian masukkan telur goreng orak-arik hingga kering (selama memasak, gunakan api kecil/sedang agar tidak mudah gosong)',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 5,
                'instruction' => 'Masukkan mie, sosin, dan cabai rawit aduk hingga merata',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 6,
                'instruction' => 'Tambahkan gula, garam, penyedap rasa, kecap, & saos sambal, aduk hingga merata, lalu cicipi',
                'created_at' => now()
            ],
            [
                'recipe_id' => 7,
                'step' => 7,
                'instruction' => 'Koreksi rasa, bila sudah pas, bisa langsung dihidangkan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 1,
                'instruction' => 'Siapkan buah. Untuk resep ini,buang inti stroberi, kupas dan potong kiwi menjadi dua, lalu kupas kulit jeruk dengan hati-hati.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 2,
                'instruction' => 'Keringkan buah sepenuhnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 3,
                'instruction' => 'Buat krim kocok. Keluarkan krim kocok dari lemari es dan segera tuangkan ke dalam mangkuk pengaduk dan gunakan mixer listrik, kocok dengan kecepatan rendah. Setelah bergelembung, tambahkan gula dan vanila, lalu kocok dengan kecepatan lebih tinggi hingga krim mengental. Krim harus memiliki puncak yang kaku dan konsistensi yang dapat dioleskan',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 4,
                'instruction' => 'Oleskan krim kocok pada satu potong roti Kemudian sejajarkan buah pada irisan yang sama. Saya ingin memotong sandwich saya secara diagonal jadi saya meletakkan buah di kedua diagonal seperti X dan kemudian mengisi celah untuk membuat lapisan buah yang rata. Isi celah dengan lebih banyak whip cream. Tempatkan potongan roti kedua di atasnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 5,
                'instruction' => 'Bungkus sandwich dengan bungkus plastik dan gunakan spidol permanen untuk menandai cara Anda berencana mengiris buah.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 8,
                'step' => 6,
                'instruction' => 'Tempatkan sandwich di antara dua piring dan bekukan selama 30 menit atau di lemari es selama 2 jam.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 1,
                'instruction' => 'Dalam wadah baskom, aduk rata terigu, tapioka, dan garam. Buat cekungan di tengahnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 2,
                'instruction' => 'Tuang minyak goreng dan air panas. Aduk cepat hingga rata dengan sendok kayu. Uleni hingga adonan kalis. Istirahatkan selama 20 menit agar adonan lentur saat di cetak.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 3,
                'instruction' => 'Bagi adonan jadi 4 bagian. Masing-masing adonan, giling dengan pasta maker dari ukuran paling tebal, lanjutkan dengan ukuran yang hasilnya paling tipis.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 4,
                'instruction' => 'Cetak adonan tipis tadi jadi bentuk bulat dengan diameter kira-kira 8 cm. Lakukan hingga semua adonan habis.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 5,
                'instruction' => 'Taburi tiap lembar kulit dengan terigu agar tidak saling menempel.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 6,
                'instruction' => 'Dalam wadah, campur semua bahan isian dan aduk hingga rata. Koreksi rasanya dengan mencicipi sedikit adonan yang digoreng atau direbus.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 7,
                'instruction' => 'Ambil selembar kulit gyoza, beri isian di tengahnya sebanyak 1 sdt. Tangkupkan jadi setengah lingkaran lalu lipat dan tumpuk di sepanjang sisinya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 8,
                'instruction' => 'Tekan sedikit ujungnya agar menempel. Lakukan hingga habis.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 9,
                'instruction' => 'Panaskan wajan datar anti lengket. Beri sedikit saja minyak goreng. Tata gyoza dan biarkan masak hingga sisi bagian bawah berubah kecoklatan.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 10,
                'instruction' => 'Tuang air hingga ¼ tinggi gyoza. Tutup wajan. Biarkan masak hingga airnya habis dan kulit gyoza terlihat jadi transparan serta matang. Angkat.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 9,
                'step' => 11,
                'instruction' => 'Siap disajikan bersama saus.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 1,
                'instruction' => 'Aduk jelly bubuk, kopi instan dan gula hingga rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 2,
                'instruction' => 'Tuangkan sedikit air dan aduk hingga kopi dan jelly larut.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 3,
                'instruction' => 'Tuangkan sisa air dalam panci, tambahkan larutan kopi dan jelly. Aduk rata.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 4,
                'instruction' => 'Masak di atas api sedang sambil aduk-aduk hingga mendidih. Matikan api.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 5,
                'instruction' => 'Tuang ke dalam wadah atau loyang segi empat. Biarkan hingga dingin. Simpan dalam lemari es.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 6,
                'instruction' => 'Kuah: kopi instan, gula dan gula palem hingga rata dengan sedikit air hangat.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 7,
                'instruction' => 'Campurkan dengan susu, taruh dalam wadah bertutup. Simpan dalam lemari es hingga dingin.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 8,
                'instruction' => 'Penyajian:Potong-potong jelly bentuk dadu 1 cm.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 10,
                'step' => 9,
                'instruction' => 'Taruh dalam gelas, tuangi susu yang sudah didinginkan di lemari es.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 1,
                'instruction' => 'Pertama-tama, rendam strawberry menggunakan air garam selama kurang lebih 10 menit. Hal ini bertujuan untuk mengeluarkan ulat yang ada pada buah strawberry. Kemudian, iris tipis semua buah strawberry dan sisihkan ke dalam wadah.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 2,
                'instruction' => 'Panaskan wajan dengan api kecil, lalu masukkan buah strawberry dan gula pasir. Aduk terus hingga tercampur rata dan berair.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 3,
                'instruction' => 'Setelah strawberry sudah berair dan menjadi seperti selai, matikan api. Lalu, kamu bisa pindahkan ke wadah kecil.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 4,
                'instruction' => 'Siapkan gelas cantik yang ingin digunakan dan masukkan selai strawberry kamu ke dalamnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 6,
                'instruction' => 'Kemudian, tambahkan es batu dan susu UHT secukupnya. Jika kamu suka minuman yang lebih manis dan creamy, cobalah tambahkan sweet cream secukupnya.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 11,
                'step' => 6,
                'instruction' => 'Terakhir, kamu dapat menambahkan sisa selai strawberry sebagai lapisan paling atas. Kamu juga bisa menambahkan irisan buah strawberry untuk menghiasi mulut gelas. Korean Strawberry Milk sudah dapat dinikmati',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 1,
                'instruction' => 'Masak jelly bersama dengan gula dan air sesuai petunjuk kemasan hingga mendidih, kemudian tuang kedalam wadah bentuk kotak. Biarkan hingga set suhu ruangan setelah itu potong-potong dadu. Simpan dahulu dalam kulkas.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 2,
                'instruction' => 'Bagi dua mangga, yang satu dihaluskan dan sebagian lagi dipotong kotak-kotak 1 x 1 cm. Simpan di kulkas.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 3,
                'instruction' => 'Didihkan air kemudian masukan sagu mutiara masak selama 10 menit lalu matikan kompor. Diamkan sagu mutiara selama 15 menit, kemudian masak kembali selama 10 menit atau hingga tidak terlihat bintik putih. Setelah itu angkat, masukan kedalam air dingin dan saring sagu mutiara.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 4,
                'instruction' => 'Taruh mangga yang dihaluskan di gelas saji. Tuang susu evaporasi, whipcream cair dan krim kental manis (boleh diaduk rata atau tidak). Kemudian tambahkan sagu mutiara, potongan jelly dan potongan manga.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 5,
                'instruction' => 'Sajikan selagi dingin.',
                'created_at' => now()
            ],
            [
                'recipe_id' => 12,
                'step' => 1,
                'instruction' => '',
                'created_at' => now()
            ],
        ]);
    }
}

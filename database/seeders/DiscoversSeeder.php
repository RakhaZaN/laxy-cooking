<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscoversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discovers')->insert([
            [
                'recipe_id' => 1,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.9621723671862!2d112.78149909839476!3d-7.249451199999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f98eb5dfcac5%3A0x1c99e4dc3d2d78fa!2sNasi%20Goreng%20Jawa%20Bu%20Siti!5e0!3m2!1sid!2sid!4v1684694450555!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 1,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.894049304121!2d112.74599119839482!3d-7.264939700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f962eb0de93d%3A0xb49f746789abadaf!2sNasi%20Goreng%2069!5e0!3m2!1sid!2sid!4v1684694694866!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 2,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63324.60987251873!2d112.7060786874064!3d-7.264937607754254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f98afbb59631%3A0xb1ac18ce3a0a3bbe!2sSeblak%20Bandung%20FR!5e0!3m2!1sid!2sid!4v1684695141486!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 2,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.34818585067!2d112.64036814863282!3d-7.2809723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd144ac6381%3A0x7268cfe09e8b58e1!2sSeblak%20Aulia%20Bandung!5e0!3m2!1sid!2sid!4v1684695243017!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 3,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.34923764019!2d112.64036800673229!3d-7.280964851284608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd3cb47cb177%3A0xcb498d65583d41e9!2sPuyo%20Silky%20Desserts%20-%20Pakuwon!5e0!3m2!1sid!2sid!4v1684695368200!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 3,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.3497635342!2d112.640367935782!3d-7.280961126929718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd72de7a85b7%3A0xac79a12f2f29b2a3!2sOLIPE%20PUDDING!5e0!3m2!1sid!2sid!4v1684695404326!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 4,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.187422968827!2d112.7011335554199!3d-7.292284000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8bc42e5a0b%3A0x5673b1ad0051420!2sPancious%20Pancake%20House!5e0!3m2!1sid!2sid!4v1685537780029!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 4,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6125052809366!2d112.73392207369645!3d-7.284852892722457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbea561d0f9d%3A0x351791d80fe14db3!2sCarpentier%20Kitchen!5e0!3m2!1sid!2sid!4v1685537717147!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 5,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2538435416204!2d112.78885927452355!3d-7.3253596926828495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf1af24cfd7%3A0x7307b835260ccd55!2sTelur%20Kecap%20Rama!5e0!3m2!1sid!2sid!4v1684695656598!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 5,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.85251488169!2d112.60707604863278!3d-7.277399799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd42d361de09%3A0xb2cf58d6950a1a46!2sNasi%20Telur%20Ambyar!5e0!3m2!1sid!2sid!4v1684695768585!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 6,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8411739068206!2d112.73829477369617!3d-7.25890999274781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f967a346aefd%3A0xba3510f84e15f112!2sNew%20Muda%20Mudi%20Chinese%20Food!5e0!3m2!1sid!2sid!4v1685537922592!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 6,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.611666430926!2d112.6899577736964!3d-7.284947892722349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc15eeefefeb%3A0xaf711c5af2df6c36!2sHan%20Palace%20Chinese%20Restaurant!5e0!3m2!1sid!2sid!4v1685538341124!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 7,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63322.85461642276!2d112.60707576482928!3d-7.277384909728322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ff6ff7f74ead%3A0x7b30cea037b1f8ec!2sMie%20Nyemek%20Miezilla!5e0!3m2!1sid!2sid!4v1684696059974!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 7,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63314.53798381101!2d112.66183044863284!3d-7.3360763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb479163d93b%3A0xba0887096e87a777!2sWarung%20Indomie%20Cak%20Bud!5e0!3m2!1sid!2sid!4v1684696115616!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 8,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63314.53851758682!2d112.6618303776913!3d-7.336072548071075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb960e6befb9%3A0x3d26406996265139!2sHIGAYON%20Cafe%20n%20Co.!5e0!3m2!1sid!2sid!4v1684696205066!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 8,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63321.25683080816!2d112.68874128170835!3d-7.288697135883988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa258e4003bd%3A0x1c8df72c5977ff5c!2sBon%20Ami%20Bakery%20-%20Dharmahusada!5e0!3m2!1sid!2sid!4v1684696296066!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 9,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63321.64836686379!2d112.5803046486328!3d-7.2859267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdcf4509d77b%3A0x60f87eb271f9670e!2sMyoungDong%20Gyoza!5e0!3m2!1sid!2sid!4v1684696351322!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 9,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.151692527754!2d112.71388814863283!3d-7.2752797000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8c450e2055%3A0x80238da1f5dc695f!2sGyoza%20Hashi!5e0!3m2!1sid!2sid!4v1684696370412!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 10,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.15221761189!2d112.71388807768163!3d-7.275275978490356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb0aacf01c3f%3A0x812e7603b90a6c03!2sPoint%20Coffee!5e0!3m2!1sid!2sid!4v1684696431015!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 10,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.15221761189!2d112.71388807768163!3d-7.275275978490356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf3bac54c2b%3A0xd2d5f70f524cf250!2sPAPER%20CUP%20COFFEE%20MANYAR!5e0!3m2!1sid!2sid!4v1684696463197!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 11,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.1527426955!2d112.71388800673041!3d-7.275272256982571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe265170721%3A0xf93887d070261e8e!2sHaewoo%20Bakery%20%26%20Coffee!5e0!3m2!1sid!2sid!4v1684696518728!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 11,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.1527426955!2d112.71388800673041!3d-7.275272256982571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9b3ab8cbbf%3A0x95389502627ef4b4!2sChamogo%20(Korean%20Street%20Food%20House)!5e0!3m2!1sid!2sid!4v1684696541888!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 12,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63323.15326777857!2d112.71388793577923!3d-7.2752685354766555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd4f7045871%3A0x184bf4604e471813!2sHari%20Baru%20-%20Local%20Dessert%20%26%20Snack!5e0!3m2!1sid!2sid!4v1684696597185!5m2!1sid!2sid'
            ],
            [
                'recipe_id' => 12,
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63324.904935736165!2d112.66211034863282!3d-7.262843099999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdb02c5452f%3A0x65a8384da12bb981!2sIgor&#39;s%20Pastry%20%7C%20Bakery%2C%20Pastry%20%26%20Oleh-Oleh%20Surabaya%20-%20Biliton!5e0!3m2!1sid!2sid!4v1684696671768!5m2!1sid!2sid'
            ],
        ]);
    }
}

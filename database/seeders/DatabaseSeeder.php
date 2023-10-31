<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Teo Yulio Sihotang',
            'username'=> 'teoyuliosihotang',
            'email'=> 'teojulio6@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Ferdi Jiranda Sinaga',
        //     'email'=> 'ferdigantenk@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'School',
            'slug' => 'school'
        ]);
        Category::create([
            'name' => 'Friendship',
            'slug' => 'friendship'
        ]);
        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);
        Category::create([
            'name' => 'Old Time',
            'slug' => 'old-time'
        ]);
        Category::create([
            'name' => 'Hoby',
            'slug' => 'hoby'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'Judul-Pertama',
        //     'excerpt' => 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati.Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut',
        //     'body'=> 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati. Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut. Tidak jarang, semua ingin berteman dengan Fitri.
        //     Ada lagi anak perempuan bernama Ita, ia berbanding terbalik dengan Fitri. Ia pintar namun sangat sombong. Temannya hanya dua yaitu Lisa dan Lily, gadis kembar di sekolahnya.
        //     Suatu hari, Ibu guru mengumumkan bahwa akan ada perlombaan membaca pidato dua minggu lagi. Bu Yati selaku wali kelas 6 membuka kesempatan seluas-luasnya bagi siapa saja yang ingin ikut seleksi. Fitri dan Ita jelas ikut berpartisipasi. 
        //     Setiap hari mereka selalu latihan membaca pidato agar lolos seleksi. Sampai hari penyeleksian tiba, keduanya memberikan tampilan yang memukau lalu dinyatakan lolos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'Judul-Ke-Dua',
        //     'excerpt' => 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati.Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut',
        //     'body'=> 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati. Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut. Tidak jarang, semua ingin berteman dengan Fitri.
        //     Ada lagi anak perempuan bernama Ita, ia berbanding terbalik dengan Fitri. Ia pintar namun sangat sombong. Temannya hanya dua yaitu Lisa dan Lily, gadis kembar di sekolahnya.
        //     Suatu hari, Ibu guru mengumumkan bahwa akan ada perlombaan membaca pidato dua minggu lagi. Bu Yati selaku wali kelas 6 membuka kesempatan seluas-luasnya bagi siapa saja yang ingin ikut seleksi. Fitri dan Ita jelas ikut berpartisipasi. 
        //     Setiap hari mereka selalu latihan membaca pidato agar lolos seleksi. Sampai hari penyeleksian tiba, keduanya memberikan tampilan yang memukau lalu dinyatakan lolos.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'Judul-Ke-Tiga',
        //     'excerpt' => 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati.Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut',
        //     'body'=> 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati. Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut. Tidak jarang, semua ingin berteman dengan Fitri.
        //     Ada lagi anak perempuan bernama Ita, ia berbanding terbalik dengan Fitri. Ia pintar namun sangat sombong. Temannya hanya dua yaitu Lisa dan Lily, gadis kembar di sekolahnya.
        //     Suatu hari, Ibu guru mengumumkan bahwa akan ada perlombaan membaca pidato dua minggu lagi. Bu Yati selaku wali kelas 6 membuka kesempatan seluas-luasnya bagi siapa saja yang ingin ikut seleksi. Fitri dan Ita jelas ikut berpartisipasi. 
        //     Setiap hari mereka selalu latihan membaca pidato agar lolos seleksi. Sampai hari penyeleksian tiba, keduanya memberikan tampilan yang memukau lalu dinyatakan lolos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'Judul-Ke-Empat',
        //     'excerpt' => 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati.Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut',
        //     'body'=> 'Ada seorang anak bernama Fitri, dia merupakan murid kelas 6 SD yang sangat pintar dan baik hati. Di sekolah sangat banyak teman yang menyukainya karena sikapnya tersebut. Tidak jarang, semua ingin berteman dengan Fitri.
        //     Ada lagi anak perempuan bernama Ita, ia berbanding terbalik dengan Fitri. Ia pintar namun sangat sombong. Temannya hanya dua yaitu Lisa dan Lily, gadis kembar di sekolahnya.
        //     Suatu hari, Ibu guru mengumumkan bahwa akan ada perlombaan membaca pidato dua minggu lagi. Bu Yati selaku wali kelas 6 membuka kesempatan seluas-luasnya bagi siapa saja yang ingin ikut seleksi. Fitri dan Ita jelas ikut berpartisipasi. 
        //     Setiap hari mereka selalu latihan membaca pidato agar lolos seleksi. Sampai hari penyeleksian tiba, keduanya memberikan tampilan yang memukau lalu dinyatakan lolos.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
      
    }
}

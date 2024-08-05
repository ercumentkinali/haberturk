<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        //Category::factory()->count(5)->create(); // 5 adet kategori oluşturur
        $categories = [
            ['slug'=>'gundem', 'name' => 'Gündem', 'description' => 'Gündem haberleri'],
            ['slug'=>'ekonomi', 'name' => 'Ekonomi', 'description' => 'Ekonomi haberleri'],
            ['slug'=>'spor', 'name' => 'Spor', 'description' => 'Spor haberleri'],
            ['slug'=>'magazin', 'name' => 'Magazin', 'description' => 'Magazin haberleri'],
            ['slug'=>'dunya', 'name' => 'Dünya', 'description' => 'Dünya haberleri'],
            ['slug'=>'teknoloji', 'name' => 'Teknoloji', 'description' => 'Teknoloji haberleri'],
            ['slug'=>'saglik', 'name' => 'Sağlık', 'description' => 'Sağlık haberleri'],


        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

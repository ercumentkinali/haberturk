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
            ['category_name' => 'Gündem', 'description' => 'Gündem haberleri'],
            ['category_name' => 'Ekonomi', 'description' => 'Ekonomi haberleri'],
            ['category_name' => 'Spor', 'description' => 'Spor haberleri'],
            ['category_name' => 'Magazin', 'description' => 'Magazin haberleri'],
            ['category_name' => 'Dünya', 'description' => 'Dünya haberleri'],
            ['category_name' => 'Teknoloji', 'description' => 'Teknoloji haberleri'],
            ['category_name' => 'Sağlık', 'description' => 'Sağlık haberleri'],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

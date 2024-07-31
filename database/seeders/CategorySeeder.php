<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
      Category::factory()->count(5)->create(); // 5 adet kategori oluşturur

        // $categories = [
        //     ['name' => 'Technology'],
        //     ['name' => 'Health'],
        //     ['name' => 'Business'],
        //     ['name' => 'Entertainment'],
        //     ['name' => 'Sports'],
        // ];
        // foreach ($categories as $category) {
        //     Category::create($category);
        // }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::factory()->count(10)->create(); // 10 adet haber oluşturur

}

}

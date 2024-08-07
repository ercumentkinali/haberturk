<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {






        $this->call([
            //CategorySeeder::class,
             NewsSeeder::class,
             ArticleSeeder::class
        ]);



    }
}

<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text,
            'image_url' => $this->faker->imageUrl(),
            'category_id' => Category::factory(), // İlişkili kategori oluşturur
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

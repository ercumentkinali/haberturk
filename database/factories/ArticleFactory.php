<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $images = glob(public_path('images') . '/*.jpg');
        $randomImage = basename($images[array_rand($images)]);
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text,
            'image_url' => 'images/' . $randomImage,                                                      // $this->faker->imageUrl(),//
            'category_id' => Category::inRandomOrder()->first()->id, //Category::factory(), // İlişkili kategori oluşturur
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

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
        $category = Category::inRandomOrder()->first();
        $images = glob(public_path('images') . '/*.jpg');
        $image_url = basename($images[array_rand($images)]);
        do {
             $sub_image_url = basename($images[array_rand($images)]);
            } while ($sub_image_url == $image_url);

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text,
            'sub_content' => $this->faker->text,
            'image_url' => 'images/' . $image_url,
            'sub_image_url' => 'images/' . $sub_image_url,
            'category_id' => $category->id,
            'created_at' => now(),
            'updated_at' => now(),
         ];
    }
}

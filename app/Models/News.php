<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'content', 'image_url', 'category_id', 'sub_content', 'sub_image_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


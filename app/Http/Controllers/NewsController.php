<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $news = News::all();
        return view('index.default', compact('news', 'currentDate'));
    }

    public function news()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $news = News::all();
        return view('news.index.default', compact('news','currentDate'));
    }

    public function show(string $categorySlug, int $id, string $titleSlug)
    {
        $selectedNews = News::with('category')->find($id);
        $news = News::all();

        if (!$selectedNews || Str::slug($selectedNews->title) !== $titleSlug || Str::slug($selectedNews->category->name) !== $categorySlug) {
            abort(404);
        }



        return view('news.show.default', compact('news', 'selectedNews'));
    }

    public function showByCategory($slug)
    {

        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $category = Category::where('slug', $slug)->firstOrFail();
        $category_id= $category->id ;
        $news = News::all();
        $news = News::where('category_id', $category_id)->get();
        return view('category.index.default', compact('category', 'news','currentDate'));
    }
}


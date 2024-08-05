<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;

class NewsController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $news = News::all(); // Tüm postları alır
        return view('index.default', compact('news', 'currentDate'));
    }

    public function news()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $news = News::all(); // Tüm postları alır
        return view('news.index.default', compact('news','currentDate'));
    }

    public function show(int $id)
    {
        $news = News::all(); // Belirli bir ID'ye göre veri çeker
        $selectedNews = News::find($id);
        if (!$selectedNews) {
            abort(404);
        }
        return view('news.show.default', compact('news', 'selectedNews')); // Veriyi 'news.show' view'ına gönderir
    }
    public function showByCategory($id)
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $category = Category::findOrFail($id);
        $news = News::all();
        $news = News::where('category_id', $id)->get();

        return view('category.index.default', compact('category', 'news','currentDate'));
    }
    // public function showByCategoryDetail($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $news = News::where('category_id', $id)->get();

    //     return view('category.show.default', compact('category', 'news'));

    // }

}


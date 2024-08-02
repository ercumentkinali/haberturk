<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        // eğer haber yoksa  404 error u ver
        return view('news.show.default', compact('news', 'selectedNews')); // Veriyi 'news.show' view'ına gönderir
    }

}


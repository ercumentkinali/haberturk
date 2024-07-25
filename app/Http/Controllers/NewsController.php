<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function welcome()
    {
        $news = News::all(); // Tüm postları alır
        return view('welcome', compact('news')); // Verileri 'welcome' view'ına gönderir
    }

    public function second()
    {
        $news = News::all(); // Tüm postları alır
        return view('second-page', compact('news')); // Verileri 'second-page' view'ına gönderir
    }

    public function detay()
    {
        $news = News::all(); // Belirli bir ID'ye göre veri çeker
        return view('detay', compact('news')); // Veriyi 'news.show' view'ına gönderir
    }



}


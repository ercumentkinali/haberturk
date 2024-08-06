<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        $articles = Article::all();
        return view('articles.index.default', compact('articles','currentDate'));
    }
    public function show(int $id)
    {
        $articles = Article::all();
        $selectedNews = Article::find($id);
        if (!$selectedNews) {
            abort(404);
        }
        return view('articles.show.default', compact('articles', 'selectedNews'));
    }

}

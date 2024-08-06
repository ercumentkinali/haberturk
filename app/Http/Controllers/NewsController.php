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
        $categoryId = $selectedNews->category_id;
        $relatedNews = News::where('category_id', $categoryId)
                            ->where('id', '!=', $id)
                            ->inRandomOrder()
                            ->take(30)
                            ->get();
        $youtubeVideos = [
            'https://www.youtube.com/embed/oWW5TLrrbNo',
            'https://www.youtube.com/embed/IRp0zhUFi-M'
        ];
        $randomImages = [
            'images/11.jpg',
            'images/14.jpg',
            'images/15.jpg',
            'images/18.jpg'
        ];
        $randomTexts = [
            'Lorem ipsum odor amet, consectetuer adipiscing elit. Purus ridiculus semper magnis efficitur sodales fringilla commodo ornare pretium. Suscipit curabitur phasellus aenean euismod felis viverra. Himenaeos class class elementum mollis dignissim posuere scelerisque. Ac venenatis parturient nisl ac hac suspendisse varius arcu. Semper ad nec; potenti hac ipsum mi.

            Aliquet venenatis curabitur; risus augue sapien in conubia? Aliquam purus amet habitant lorem at proin. Sodales nascetur purus consectetur consequat elit auctor mus sollicitudin. Quisque cras penatibus efficitur magna blandit aenean fermentum bibendum. Amet aliquet in interdum, justo felis varius quisque magnis pharetra. Odio ipsum cursus vulputate convallis sagittis class, maecenas lacinia. Est class aenean himenaeos pretium ultrices rhoncus primis potenti. Luctus cursus semper leo ad ex tortor.',
            'Ultricies vel placerat in porttitor nec efficitur. Turpis aliquet sociosqu, justo consectetur nascetur non luctus interdum. Habitasse a a facilisi magna volutpat sed, feugiat facilisi. Vivamus vel nascetur mauris mauris venenatis cubilia curae. Mi ornare sem hac integer natoque aenean finibus sed. Diam quis pulvinar elit netus nullam primis maecenas a aliquam. Suscipit risus duis consequat phasellus tincidunt placerat quam laoreet.

            Class eleifend quam metus dignissim suscipit aliquet. Metus justo condimentum bibendum cras cursus hac. Phasellus dolor pulvinar; risus vitae viverra porttitor vulputate. Sollicitudin egestas ex aliquam vivamus eu iaculis. Imperdiet molestie efficitur habitant potenti gravida class, turpis vitae. Aligula nisi justo, lobortis sed aliquam neque? Aptent praesent elit lobortis ligula consectetur ligula maximus. Vestibulum interdum mauris ex feugiat senectus. Pharetra aliquet diam; et phasellus velit elementum placerat mi.',
            'Pellentesque sem fringilla, sed varius est elit est. Posuere justo taciti ullamcorper pellentesque platea? Aptent mauris non congue nulla lacus semper imperdiet leo! Pulvinar quis ornare taciti quis duis pharetra platea per. Dis tempus faucibus euismod turpis sapien; orci tempor phasellus. Gravida laoreet pretium lacus natoque viverra ac vivamus porta. Justo lacinia platea sociosqu quam arcu leo arcu vivamus primis. Enim posuere euismod sollicitudin fermentum dictumst eu tincidunt nam id. Vulputate torquent lacinia, hendrerit eu posuere nulla. Pellentesque proin dis lacus blandit maximus varius.

            Nec justo sit aliquam duis vivamus proin. Erat malesuada auctor turpis at fames felis arcu scelerisque. Netus suspendisse etiam mauris quam litora. Sed urna nulla nullam dis varius tempus aptent proin. Dis vulputate sem blandit tempus dui ullamcorper enim. Ac dolor amet at augue habitasse habitant nostra hendrerit maximus. Vehicula sodales feugiat tristique nec dui vestibulum. Curae ante fusce in montes consectetur vivamus. Aenean suscipit sed tristique; pulvinar viverra in dolor. Malesuada feugiat orci auctor sodales laoreet.'
        ];
        $news = News::all();
        if (!$selectedNews || Str::slug($selectedNews->title) !== $titleSlug || Str::slug($selectedNews->category->name) !== $categorySlug) {
            abort(404);
        }
        shuffle($youtubeVideos);
        shuffle($randomImages);
        shuffle($randomTexts);

        $youtubeVideos = array_slice($youtubeVideos, 0, 1);
        $randomImages = array_slice($randomImages, 0, 1);
        $randomTexts = array_slice($randomTexts, 0, 1);

        return view('news.show.default', compact('news', 'selectedNews', 'youtubeVideos', 'randomImages', 'randomTexts', 'relatedNews'));
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


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::today()->toDateString();
        $currentDate = Carbon::parse($currentDate)->format('d.m.Y');
        session(['currentDate' => $currentDate]);

        return view('welcome'  , ['currentDate' => $currentDate]);

    }
    public function second()
    {
        $currentDate = session('currentDate');

        return view('second-page', compact('currentDate'));
    }
}

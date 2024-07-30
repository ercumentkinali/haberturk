@extends('master.default')

@section('title', 'News Detail')

@section('content')

    @include('master.parts.logo')

    @extends('master.parts.mega-menu')

    <!-- Sol Navigasyon Menüsü -->
    @include('news.show.show-sideBar')

    <!-- Orta İçerik Alanı -->
    @include('news.show.show-left')

    <!-- Sağ Detay Alanı -->
    @include('news.show.show-right')

@endsection

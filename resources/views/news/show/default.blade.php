@extends('master.default')

@section('title', 'News Detail')

@section('content')

    @include('master.parts.logo')

    <!-- Sol sideBar Menüsü -->
    @include('master.parts.sideBar')

    <!-- Orta İçerik Alanı -->
    @include('news.show.show-left')

    <!-- Sağ Detay Alanı -->
    @include('news.show.show-right')

@endsection

@extends('master.default')

@section('title', 'News')

@section('content')

    @extends('master.parts.logo')

    @extends('master.parts.mega-menu')

    @include('master.parts.sideBar')

    <!-- Sol ekran -->
    @include('news.index.news-index-left')

    <!-- Sağ Detay Alanı -->
    @include('news.index.news-index-right')


@endsection

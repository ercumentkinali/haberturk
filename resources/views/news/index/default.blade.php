@extends('master.default')

@section('title', 'News')

@section('content')

    @include('master.parts.logo')

    @include('master.parts.sideBar')

    <!-- Sol ekran -->
    @include('news.index.left')

    <!-- Sağ Detay Alanı -->
    @include('news.index.right')


@endsection

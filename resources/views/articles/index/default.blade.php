@extends('master.default')

@section('title', 'News')

@section('content')

    @include('master.parts.logo')

    @include('master.parts.sideBar')

    <!-- Sol ekran -->
    @include('articles.index.left')

    <!-- Sağ Detay Alanı -->
    @include('articles.index.right')


@endsection

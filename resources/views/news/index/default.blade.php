@extends('master.default')

@section('title', 'News')

@section('content')

    @include('master.parts.logo')

    @include('master.parts.sideBar')


    @include('news.index.left')


    @include('news.index.right')


@endsection

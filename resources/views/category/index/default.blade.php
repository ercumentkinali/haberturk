@extends('master.default')

@section('title', $category->name)

@section('content')

    @include('master.parts.logo')

    @include('master.parts.sideBar')



    @include('category.index.left')


    @include('category.index.right')


@endsection

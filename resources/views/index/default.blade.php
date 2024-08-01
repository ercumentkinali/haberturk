@extends('master.default')

@section('title', 'Index')

@section('content')

    @include('index.sideBar')

    @include('index.index-left')

    @include('index.index-right')

@endsection

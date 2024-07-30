@extends('master.default')

@section('title', 'Index')

@section('content')

    @extends('index.sideBar')

    @extends('index.index-left')

    @include('index.index-right')


@endsection

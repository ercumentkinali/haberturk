@extends('layouts.app')

@section('title', 'welcome')

@section('content')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @for ($i = 1; $i <= 10; $i++)
                <div class="swiper-slide">
                    Metin {{ $i }}
                </div>
            @endfor
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
@endsection

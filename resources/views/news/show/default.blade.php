@extends('master.default')

@section('title', 'News Detail')

@section('content')

    @extends('master.parts.logo')

    @extends('master.parts.mega-menu')

    <div class="main-container flex w-full h-full bg-white relative ">

        <div class="w-14 navBar relative h-screen border-r z-100 border-gray-400 ">

            <div class="side-bar-top flex w-14 h-1/5 bg-arkaplan " style="transition:1s !important;">
            </div>
            <div class="side-bar-bottom flex w-14 h-4/5 z-100 bg-white border-r-2 ">
                <div class="mega-x absolute top-1/2 left-1/2 flex">
                    <div class="first border-r-2 border-black h-8 mr-1 block" style="transition:.3s;"></div>
                    <div class="second border-r-2 border-black h-8 block" style="transition:.3s;"></div>
                </div>
                <i class="mega-circle fa-solid fa-circle absolute bottom-4 left-2 translate-x-1/2 text-arkaplan"></i>
            </div>
        </div>
        <div class="left w-full h-1/5 sm:h-full md:h-full sm:w-2/5 md:w-2/5 flex justify-center items-center border-r-2">
            <div class="content relative w-full h-full sm:h-full md:w-full md:h-full">
                <div class="show-swiper w-full h-full sm:w-full sm:h-full">
                    <div class="swiper-wrapper w-full !h-auto sm:h-auto flex sm:block">
                        @foreach ($news as $key => $new)
                            <div class="swiper-slide  w-auto h-auto border-b-2  sm:h-auto sm:w-full bg-white hover:bg-hover p-4 pt-6 sm:pt-12"
                                data-id="{{ $new->id }}">
                                <a href="/news/show/{{ $new->id }}" class="w-full relative flex gap-2">
                                    <div class="absolute left-4 -top-6 text-gray-500 font-bold z-30">
                                        <span class="text-5xl">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                    <div class="aspect-video w-1/2 2xl:w-1/2 z-30">
                                        <img src="{{ $new->image_url }}" alt="haberpng"
                                            class="w-full h-full object-cover sm:object-cover 2xl:object-cover">
                                    </div>
                                    <div class="w-1/2">
                                        <h3
                                            class="font-bold font-poppins text-12px md:text-14px 2xl:text-14px mb-2 line-clamp-3">
                                            {{ $new->description }}</h3>
                                        <span class="text-xs md:text-16px 2xl:text-18px">3 Saat Önce</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div id="details-area"
            class="right w-full sm:w-3/5 md:w-3/5 h-4/5 sm:h-full md:h-full lg:h-full xl:h-full 2xl:h-full p-12 pt-0 sm:p-0 bg-hover sm:relative absolute bottom-0 right-0 overflow-y-auto ">
            <div class="news-content px-5" data-id="{{ $selectedNews->id }}">
                <h1 class=" font-bold  font-poppins text-40px mt-16  ">{{ $selectedNews->title }} </h1> <br>
                <h2 class=" font-poppins italic  text-gray-500 text-16px md:text-18px border-dashed border-b-2 ">
                    {{ $selectedNews->description }}</h2> <br>
                <img src=" {{ $selectedNews->image_url }} " alt="haberpng" class=" w-full h-full p-4 "> </img>
                <br>
                <p class=" font-poppins italic text-gray-500 text-16px md:text-2xl">{{ $selectedNews->content }}</p>
            </div>
        </div>
    </div>

@endsection

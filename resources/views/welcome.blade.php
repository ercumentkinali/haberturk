<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Habertürk</title>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-opacity-50::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: inherit;
            opacity: 0.90;
            z-index: -1;
        }
    </style>
</head>

<body class="relative h-screen overflow-hidden">
    <div class="absolute top-0 left-0 w-16 mx-4 my-8 z-10 bg-arkaplan bg-opacity-50 ">
        <img src="{{ asset('images/haberturk_beyaz.png') }}" alt="Logo" class="h-full w-full relative z-20">
    </div>
    <div class="absolute bottom-0 left-0 w-14 h-4/5 bg-white z-40 ">
        <i class="fa-solid fa-circle absolute bottom-4 left-2 translate-x-1/2 text-arkaplan "></i>
    </div>
    <div class="first-page main-container sm:flex block w-full h-full bg-arkaplan relative">
        {{-- <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-5"
            style="background-image: url('/images/background.png');"></div> --}}
        <div class="left w-full md:w-8/12 h-full justify-between relative">
            {{-- <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-5"
                style="background-image: url('/images/background-image.png');"></div> --}}
            <div class="content w-full h-full flex flex-col justify-center p-20 sm:p-16 md:p-16 xl:p-24 ">
                <div
                    class="font-abril text-18px sm:text-28px md:text-24px xl:text-3xl text-white leading-tight justify-center">
                    24.07.2024
                </div> {{--  {{ $currentDate }} --}}
                <div>
                    <h1
                        class="text-white text-6xl sm:text-7xl md:text-7xl xl:text-8xl 2xl:text-9xl font-abril bg-arkaplan h-auto justify-center items-center">
                        Bugün <br> ne oldu?</h1>
                </div>
                <div>
                    <h2
                        class=" text-white font-poppins text-12px xl:text-sm 2xl:text-base text-clip overflow-hidden mb-4 leading-tight sm:line-clamp-2 line-clamp-4 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum porro ipsam voluptatibus quis ad
                        laboriosam animi, aliquid dignissimos. Mollitia dolores culpa labore quisquam esse voluptatem
                        expedita voluptates sint a quod!Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                        porro
                        ipsam voluptatibus quis ad
                        laboriosam animi, aliquid dignissimos. Mollitia dolores culpa labore quisquam esse voluptatem
                        expedita voluptates sint a quod!</h2>
                </div>

                <div class="flex gap-4 mb-4">
                    <div class="flex flex-col justify-between gap-1">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="bg-white w-10 h-[1px]"></div>
                        @endfor
                    </div>
                    <a href="/second-page" target="_blank"
                        class="text-arkaplan h-full font-poppins font-extrabold text-20px bg-white justify-center p-2 sm:p-3 ">GÖRÜNTÜLE</a>
                </div>

            </div>
            <p
                class="text-white absolute bottom-10 left-20  text-8px sm:text-8px md:text-8px xl:text-12px 2xl:text-18px">
                &copy; {{ date('Y') }} - Tüm hakları saklıdır.HaberTürk Gazetecelik A.Ş.
            </p>
        </div>
        <div
            class="right
                        w-0 sm:w-0 md:w-4/12 h-0 sm:h-0 md:h-full bg-white bottom-0 left-0 right-0 ">
            <div class="swiper h-full w-0 sm:w-2/5 md:w-0">
                <div class="swiper-wrapper ">
                    @foreach ($news as $key => $new)
                        <div
                            class="swiper-slide pt-16 relative bg-gradient-to-b from-white via-gradient to-gradient text-12px">
                            <div class="flex gap-2 items-center relative w-3/5  mb-2">
                                <span
                                    class="absolute -top-10 font-bold left-0 right-0 mx-auto text-6xl opacity-10 whitespace-nowrap overflow-y-hidden -z-10">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                {{-- <div
                                    class=" opacity-10 text-black transform -translate-y-12 translate-x-16 z-10 flex items-center text-center">

                                </div> --}}

                                <h3
                                    class="font-poppins text-6px xl:text-xl 2xl:text-2xl mb-2 border-b-2 bg-white line-clamp-3 flex-1">
                                    {{ $new->description }}
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 5,
            direction: 'vertical',
            centeredSlides: true,
            loop: true,
            freeMode: true,
            on: {
                resize: function() {
                    swiper.changeDirection(getDirection());
                },
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            mousewheel: true,
        });
    </script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Habertürk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>

<body class="relative h-screen overflow-hidden ">
    {{-- bir div daha açıp orayı kırmızı ekran yapıp touchable özelliğini kaldırmak işe yarar mı? --}}
    <a href="/second-page" class="p-1 absolute left-0 top-0 z-150">
        <img src="{{ asset('images/haberturk_beyaz.png') }}" alt="Logo" class="w-10 h-auto bg-arkaplan">
    </a>

    <div id="mega-menu"
        class="mega-menu bg-arkaplan transition duration-1000 sm:w-2/5 w-full h-full absolute -left-1326px top-0 z-40"
        style="transition:1s !important;">
        <div class="content p-32 text-white font-bold text-40px leading-tight absolute  ">
            <p class=" cursor-pointer hover:text-texthover">Anasayfa</p>
            <p class=" cursor-pointer hover:text-texthover">Gündem</p>
            <p class=" cursor-pointer hover:text-texthover">Ekonomi</p>
            <p class=" cursor-pointer hover:text-texthover">Spor</p>
            <p class=" cursor-pointer hover:text-texthover">Magazin</p>
            <p class=" cursor-pointer hover:text-texthover">Dünya</p>
            <p class=" cursor-pointer hover:text-texthover">Teknoloji</p>
            <p class=" cursor-pointer hover:text-texthover">Sağlık</p>
        </div>
        <div class=" mega-menu absolute bottom-0 w-14 h-4/5 bg-arkaplan -left-1326px top-0 "> </div>
        <div>
            {{-- <i id="mega-circle"
                class=" fa-solid fa-circle absolute bottom-4 translate-x-1/2 text-white -left-625px z-70"></i> --}}
        </div>
    </div>

    <div class="main-container sm:flex block w-full h-full bg-white relative  ">
        <div
            class="left w-full h-1/5 sm:h-full md:h-full sm:w-2/5 md:w-2/5  flex justify-center items-center border-r-2">
            <div
                class="w-1/12 sm:w-1/12 md:w-1/12 h-screen sm:h-screen md:h-screen navBar relative z-100 border-gray-400">
                <div class="h-full w-full">
                    <div class="side-bar-top border-r-2 h-1/5 bg-arkaplan " style="transition:1s !important;">
                    </div>
                    <div class="side-bar-bottom h-4/5 bg-white border-r-2 ">
                        {{-- <i class="mega-x fa-solid fa-bars  items-center justify-center text-xl rotate-90 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 "></i> --}}
                        <div class="mega-x absolute top-1/2 left-1/2 flex">
                            <div class="first border-r-2 border-black h-8 mr-1" style="transition:.3s;"></div>
                            <div class="second border-r-2 border-black h-8" style="transition:.3s;"></div>
                        </div>
                        <i
                            class="mega-circle fa-solid fa-circle absolute bottom-4 left-2 translate-x-1/2 text-arkaplan"></i>
                    </div>
                </div>
            </div>
            <div class="content w-11/12 h-1/5 sm:w-11/12  sm:h-full md:w-11/12 md:h-full ">
                <div class="mySwiper w-full h-full ">
                    <div class="swiper-wrapper">
                        {{-- @for ($i = 0; $i < 10; $i++) --}}

                        @foreach ($news as $key => $new)
                            <div class="swiper-slide border-b-2 sm:w-3/5 h-auto bg-white hover:bg-hover pt-12  "
                                data-id="{{ $new->id }}">
                                <div class="flex gap-2">
                                    <div
                                        class=" opacity-5 text-black font-bold transform -translate-y-8 translate-x-12 z-20">
                                        <span class="text-5xl">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                    <div class="aspect-video w-1/2 z-30">
                                        <img src="   {{ $new->image_url }} " alt="haberpng"
                                            class="w-full h-full object-cover pb-8 ">
                                    </div>
                                    <div class="w-1/2">
                                        <h3 class=" font-bold font-poppins text-12px mb-2 line-clamp-3">
                                            {{ $new->description }}
                                        </h3> <br>
                                        <span class="text-xs">3 Saat Önce</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- @endfor --}}
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>

            </div>

        </div>
        <div id="details-area"
            class="right  w-11/12 sm:w-3/5 md:w-3/5 h-4/5 sm:h-full md:h-full bg-hover sm:relative absolute bottom-0 right-0 overflow-y-auto ">
            @foreach ($news as $new)
                <div class="news-content px-5" data-id="{{ $new->id }}" style="display: none">
                    <h1 class=" font-bold  font-poppins text-40px mt-16  ">{{ $new->title }} </h1> <br>
                    <h2 class=" font-poppins italic  text-gray-500 text-16px border-dashed border-b-2 ">
                        {{ $new->description }}</h2> <br>
                    <img src=" {{ $new->image_url }} " alt="haberpng" class=" w-full h-full p-4 "> </img>
                    <br>
                    <p class=" font-poppins italic text-gray-500 text-16px">{{ $new->content }}</p>
                </div>
            @endforeach
            <div class="swiper-scrollbar"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="module">
            var swiper = new Swiper('.mySwiper', {
                slidesPerView: 4,
                direction: 'vertical',
                freeMode: true,
                speed: 500,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true,
                },
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
            swiper.on('slideChange', function() {
                if (swiper.activeIndex === swiper.slides.length - 1) {
                    setTimeout(function() {
                        swiper.autoplay.stop();
                        swiper.slideTo(0, 3000);
                        setTimeout(function() {
                            swiper.autoplay.start();
                        }, 2500);
                    }, 2500);
                }
            });


            function getDirection() {
                var windowWidth = window.innerWidth;
                var direction = window.innerWidth <= 760 ? 'horizontal' : 'vertical';

                return direction;

            }
            document.addEventListener("DOMContentLoaded", () => {
                const swiperSlides = document.querySelectorAll(".swiper-slide");
                const newsContents = document.querySelectorAll(".news-content");

                swiperSlides.forEach((slide) => {
                    slide.addEventListener("click", () => {
                        const id = slide.getAttribute("data-id");

                        newsContents.forEach((content) => {
                            if (content.getAttribute("data-id") === id) {
                                content.style.display = "block";
                            } else {
                                content.style.display = "none";
                            }
                        });
                    });
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                const urlParams = new URLSearchParams(window.location.search);
                const newsId = urlParams.get('id');
                if (newsId) {

                    const newsContent = document.querySelector(`.news-content[data-id='${newsId}']`);
                    if (newsContent) {
                        newsContent.style.display = 'block';
                    }
                }
            });
        </script>
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>


</body>

</html>

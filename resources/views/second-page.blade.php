<!DOCTYPE html>
<html lang="en">

<head>
    <title>Habertürk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>

<body class="relative h-screen overflow-hidden ">
    <div>
        <a href="/" class="p-2 absolute left-0 top-0 z-150">
            <img src="{{ asset('images/haberturk_beyaz.png') }}" alt="Logo" class="w-10 h-auto bg-arkaplan">
        </a>
    </div>

    <div id="mega-menu"
        class="mega-menu bg-arkaplan transition duration-1000 w-full sm:w-2/5 md:w-2/5 h-full absolute -left-1326px top-0 z-40"
        style="transition:1s !important;">
        <div class="content p-20 text-white font-bold text-40px leading-tight absolute  ">
            <p class=" cursor-pointer hover:text-texthover">Anasayfa</p>
            <p class=" cursor-pointer hover:text-texthover">Gündem</p>
            <p class=" cursor-pointer hover:text-texthover">Ekonomi</p>
            <p class=" cursor-pointer hover:text-texthover">Spor</p>
            <p class=" cursor-pointer hover:text-texthover">Magazin</p>
            <p class=" cursor-pointer hover:text-texthover">Dünya</p>
            <p class=" cursor-pointer hover:text-texthover">Teknoloji</p>
            <p class=" cursor-pointer hover:text-texthover">Sağlık</p>
        </div>
        <div class=" mega-menu absolute bottom-0 w-14 h-4/5 bg-arkaplan -left-625px top-0 "> </div>
        <div>
            {{-- <i id="mega-circle"
                class=" fa-solid fa-circle absolute bottom-4 translate-x-1/2 text-white -left-625px z-70"></i> --}}
        </div>
    </div>
    <div class="main-container flex w-full h-full bg-white relative  ">
        <div class="left w-full sm:w-2/5 md:w-2/5 h-full flex items-center border-r-2">

            <div class="w-14 navBar relative h-screen border-r z-100 border-gray-400 ">
                <div class="left h-full">
                    <div class="side-bar-top flex w-14 h-1/5 px-2 bg-arkaplan " style="transition:1s !important;"></div>
                    <div class="side-bar-bottom flex w-14 2xl:w-14 xl:x-14 h-4/5 z-100 bg-white border-r-2 ">
                        {{-- <i class="mega-x fa-solid fa-bars  items-center justify-center text-xl rotate-90 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 "></i> --}}
                        <div class="mega-x absolute top-1/2 left-1/2 flex">
                            <div class="first border-r-2 border-black h-8 mr-1 block" style="transition:.3s;"></div>
                            <div class="second border-r-2 border-black h-8 block" style="transition:.3s;"></div>
                        </div>
                        <i
                            class="mega-circle fa-solid fa-circle absolute bottom-4 left-2 translate-x-1/2 text-arkaplan"></i>
                    </div>
                </div>
            </div>
            <div class="content relative">
                <div class="content w-full h-full flex flex-col justify-center p-8 sm:p-14 md:p-14 xl:p-14 ">
                    <div>
                        <p class="font-abril max-sm:text-sm max-md:text-18px text-22px text-gray-500 ">
                            25.07.2024</p>
                    </div> <br>{{-- {{ $currentDate }}  --}} {{-- currentdate hatası ben sql bağlantısını yapınca verdiği için ayarlancak --}}
                    <div>
                        <h1
                            class="text-black font-bold text-xl sm:text-2xl md:text-3xl xl:text-4xl 2xl:text-4xl font-abril bg-white h-full ">
                            Bugün ne oldu?</h1> <br>
                    </div>
                    <div>
                        <h2
                            class="text-gray-600 font-poppins max-sm:text-sm max-md:text-md text-18px overflow-hidden  line-clamp-6 md:line-clamp-6 sm:line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi aspernatur voluptate error
                            est temporibus perspiciatis earum doloribus, dignissimos esse inventore expedita veritatis,
                            qui quasi sapiente neque explicabo commodi reiciendis.Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ab modi aspernatur voluptate error est temporibus perspiciatis earum
                            doloribus, dignissimos esse inventore expedita veritatis, qui quasi sapiente neque explicabo
                            commodi reiciendis.</h2>
                    </div>
                </div>

            </div>
            <p
                class="text-gray-500 absolute bottom-0 left-24 sm:left-125px md:left-125px text-8px sm:text-4px md:text-4px xl:text-12px 2xl:text-12px">
                &copy; {{ date('Y') }} - Tüm hakları saklıdır.<br> HaberTürk Gazetecelik A.Ş.
            </p>
        </div>
        <div
            class="right  sm: md:w-3/5 lg:w-3/5 xl:w-3/5  sm: md:h-full lg:h-full xl:h-full bg-white sm:relative absolute bottom-0  right-0 ">
            <div class="swiper h-full">
                <div class="swiper-wrapper ">
                    @foreach ($news as $key => $new)
                        <div class="swiper-slide border-r-2 hidden sm:w-3/5 md:w-3/5 h-full bg-white sm:relative absolute bottom-0 right-0 p-5 hover:bg-hover"
                            data-id="{{ $new->id }}">
                            <div class=" opacity-10 text-black">
                                <span class="text-5xl font-bold">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div class=" relative">

                                <p class="font-bold font-poppins text-24px mt-16 line-clamp-3  ">
                                    <span class="text-xs text-gray-800  ">3 Saat Önce</span> <br>
                                    {{ $new->content }}
                                </p>
                                <br>
                                <img src="{{ $new->image_url }}" alt="haberpng"> <br>
                                <p class=" font-poppins text-gray-500 text-16px line-clamp-4 ">
                                    {{ $new->description }}</p>
                                <br>
                                <a href="/detay?id={{ $new->id }}" target="_blank" rel=”noopener noreferrer
                                    class=" text-black h-full font-poppins font-bold text-12px border-detay border-2 justify-center p-1 px-4 ">DETAY</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script type="module">
                var swiper = new Swiper('.swiper', {
                    slidesPerView: 4,
                    direction: 'horizontal'
                });

                document.addEventListener('DOMContentLoaded', function() {
                    // Get the query parameter from the URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const newsId = urlParams.get('id');

                    if (newsId) {
                        // Find the news content with the matching ID
                        const newsContent = document.querySelector(`.news-content[data-id='${newsId}']`);

                        if (newsContent) {
                            // Display the matched news content
                            newsContent.style.display = 'block';
                        }
                    }
                });
            </script>

            <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
</body>

</html>

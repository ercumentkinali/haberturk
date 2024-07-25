<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel with Swiper.js')</title>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .swiper-container {
            width: calc(100% - 1326px); /* Ekran genişliğinden 1326px çıkararak hesaplama yapar */
            margin-left: 1326px; /* Sol taraftan 1326px boşluk bırakır */
            height: 100%; /* İstediğiniz yükseklik değerini ayarlayabilirsiniz */
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #f0f0f0; /* Slider arka plan rengi */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    @stack('scripts')
</body>
</html>

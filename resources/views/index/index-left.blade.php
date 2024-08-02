<div class="first-page main-container sm:flex block w-full h-full bg-arkaplan relative">
    <div class="  left w-full md:w-8/12 h-full justify-between relative">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-5 z-0"
            style="background-image: url('/images/background-image.png');"></div>
        <div class="content w-full h-full flex flex-col justify-center p-20 sm:p-16 md:p-16 xl:p-24 ">
            <div
                class="font-abril text-18px sm:text-28px md:text-24px xl:text-3xl text-white leading-tight justify-center">
                {{ $currentDate }}
            </div>
            <div>
                <h1
                    class="text-white text-6xl sm:text-7xl md:text-7xl  xl:text-8xl 2xl:text-9xl font-abril bg-arkaplan h-auto justify-center items-center">
                    Bugün <br> ne oldu?</h1>
            </div>
            <div>
                <h2
                    class=" text-white font-poppins text-12px md:text-14px xl:text-sm lg:text-2xl 2xl:text-base text-clip overflow-hidden mb-4 leading-tight sm:line-clamp-2 line-clamp-4 ">
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
                <a href="/news" target="_blank"
                    class="text-arkaplan h-full font-poppins font-extrabold text-20px bg-white justify-center p-2 sm:p-3 z-10 ">GÖRÜNTÜLE</a>
            </div>

        </div>
        <p
            class="text-white absolute bottom-10 left-20  text-8px sm:text-8px md:text-12px lg:text-12px xl:text-12px 2xl:text-18px">
            &copy; {{ date('Y') }} - Tüm hakları saklıdır.HaberTürk Gazetecelik A.Ş.
        </p>
    </div>

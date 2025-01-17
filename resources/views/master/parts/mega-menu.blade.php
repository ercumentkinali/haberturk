<div id="mega-menu"
    class="mega-menu bg-arkaplan transition duration-1000 w-full sm:w-full md:w-2/5 h-full absolute -left-1326px top-0 z-40"
    style="transition:1s !important;">
    <div
        class="content flex flex-col justify-center items-start h-full p-20 text-white font-bold text-3xl sm:text-40px leading-tight sm:leading-snug md:text-3xl md:leading-tight lg:text-5xl lg:leading-tight xl:text-5xl xl:leading-tight 2xl:text-5xl 2xl:justify-center 2xl:p-44 2xl:leading-tight ">
        <a href="/news">
            <p class="cursor-pointer hover:text-texthover">Anasayfa</p>
        </a>
        @foreach ($categories as $category)
            <p class="cursor-pointer hover:text-texthover"><a
                    href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></p>
        @endforeach
        <div class="flex space-x-4 mt-24">
            <a href="https://www.facebook.com/Haberturk" target="_blank" class="text-white hover:text-hover">
                <i class="fab fa-facebook-f fa-xs"></i>
            </a>
            <a href="https://x.com/Haberturk" target="_blank" class="text-white hover:text-hover">
                <i class="fab fa-twitter fa-xs"></i>
            </a>
            <a href="https://www.linkedin.com/company/haberturk/" target="_blank" class="text-white hover:text-hover">
                <i class="fab fa-linkedin-in fa-xs"></i>
            </a>
        </div>
    </div>

    <div class=" mega-menu absolute bottom-0 w-14 h-4/5 bg-arkaplan -left-1326px top-0 "> </div>
    <p
        class="text-white absolute bottom-0 left-20 sm:left-24 md:left-20 lg:left-24 xl:left-24 2xl:left-44 text-12px sm:text-4px md:text-12px xl:text-14px 2xl:text-18px">
        &copy; {{ date('Y') }} - Tüm hakları saklıdır.<br> HaberTürk Gazetecelik A.Ş.
    </p>
</div>

<div class="swiper-slide swiper-slide-show w-full h-auto border-b-2 sm:h-auto sm:w-full bg-white hover:bg-hover p-4 pt-6 sm:pt-12"
    style="flex-shrink: inherit">
    <a href="{{ $id ?? '' }}" class="w-full h-full relative flex gap-2">
        <div class="absolute left-4 -top-6 text-gray-500 font-bold z-30">
            <span class="text-5xl">{{ $order ?? '' }}</span>
        </div>
        <div class="aspect-video sm:w-1/2 md:w-1/2 lg:w-1/2 z-30">
            <img src="/{{ $image ?? '' }}" alt="haberjpg"
                class="w-full h-full object-cover mb-40 sm:mb-0 sm:object-cover 2xl:object-cover">
        </div>
        <div class="w-1/2">
            <h3 class="font-bold font-poppins text-12px md:text-14px 2xl:text-14px mb-5 sm:mb-20  line-clamp-3">
                {{ $description ?? '' }}</h3>
            <span class="text-xs  md:text-16px 2xl:text-18px">{{ $date ?? '' }}</span>
        </div>
    </a>
</div>

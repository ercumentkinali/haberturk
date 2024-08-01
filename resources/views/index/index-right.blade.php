<div class="right w-0 sm:w-0 md:w-4/12 h-0 sm:h-0 md:h-full bg-white bottom-0 left-0 right-0 ">
    <div class="index-swiper swiper h-full w-0 sm:w-2/5 md:w-0">
        <div class="swiper-wrapper ">
            @foreach ($news as $key => $new)
                <div
                    class="index-slide swiper-slide pt-16 relative bg-gradient-to-b from-white via-gradient to-gradient text-12px">
                    <div class="flex gap-2 items-center relative w-3/5  mb-2">
                        <span
                            class="absolute -top-10 font-bold left-0 right-0 mx-auto text-6xl opacity-10 whitespace-nowrap overflow-y-hidden -z-10">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3
                            class="font-poppins text-16px  xl:text-xl 2xl:text-2xl mb-2 border-black border-b bg-white line-clamp-3 flex-1">
                            {{ $new->description }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

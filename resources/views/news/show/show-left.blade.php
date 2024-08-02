@php
    use Carbon\Carbon;
@endphp
<div class="left w-full h-1/5 sm:h-full md:h-full sm:w-2/5 md:w-2/5 lg:w-2/5 xl:w-2/5 2xl:w-2/5   flex justify-center items-center border-r-2 overflow-hidden"
    class="content relative w-full h-full sm:h-full md:w-full md:h-full">
    <div class="show-swiper w-full h-full sm:w-full sm:h-full">
        <div class="swiper-wrapper w-full h-auto sm:h-full 2xl:h-auto 2xl:w-full  ">
            @foreach ($news as $key => $new)
                <div class="swiper-slide swiper-slide-show w-full h-auto border-b-2 sm:h-auto sm:w-full bg-white hover:bg-hover p-4 pt-6 sm:pt-12"
                    style="flex-shrink: inherit  " data-id="{{ $new->id }}">
                    <a href="/news/show/{{ $new->id }}" class="w-full h-full relative flex gap-2">
                        <div class="absolute left-4 -top-6 text-gray-500 font-bold z-30">
                            <span class="text-5xl">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <div class="aspect-video sm:w-1/2 md:w-1/2 lg:w-1/2 z-30">
                            <img src="{{ $new->image_url }}" alt="haberpng"
                                class="w-full h-full object-cover mb-40 sm:mb-0 sm:object-cover 2xl:object-cover">
                        </div>
                        <div class="w-1/2">
                            <h3
                                class="font-bold font-poppins text-12px md:text-14px 2xl:text-14px mb-5 sm:mb-20  line-clamp-3">
                                {{ $new->description }}</h3>
                            <span
                                class="text-xs  md:text-16px 2xl:text-18px">{{ Carbon::parse($new->created_at)->format('d-m-Y H:i') }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>

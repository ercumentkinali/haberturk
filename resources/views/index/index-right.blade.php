<div class="right w-0 sm:w-0 md:w-4/12 h-0 sm:h-0 md:h-full bg-white bottom-0 left-0 right-0 ">
    <div class="index-swiper swiper h-full w-0 sm:w-2/5 md:w-0">
        <div class="swiper-wrapper ">
            @foreach ($news as $key => $new)
                <x-box-index>
                    <x-slot name="description">{{ $new->description }}</x-slot>
                    <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                </x-box-index>
            @endforeach
        </div>
    </div>
</div>

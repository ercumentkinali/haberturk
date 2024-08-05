<div id="rightPanel"
    class="right w-full h-full sm:w-3/5 md:w-3/5 lg:w-3/5  xl:w-3/5  sm: md:h-full lg:h-full xl:h-full bg-white absolute bottom-0  right-0 ">
    <div class="news-swiper swiper h-full">
        <div class="swiper-wrapper ml-14 sm:ml-0">
            @foreach ($news as $key => $new)
                <x-box-vertical>
                    <x-slot name="id">/news/show/{{ $new->id }}</x-slot>
                    <x-slot name="title">{{ $new->title }}</x-slot>
                    <x-slot name="description">{{ $new->description }}</x-slot>
                    <x-slot name="image">/{{ $new->image_url }}</x-slot>
                    <x-slot name="date">{{ $new->created_at }}</x-slot>
                    <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                </x-box-vertical>
            @endforeach
        </div>
    </div>
</div>

@php
    use Carbon\Carbon;
@endphp
<div class="left w-full h-1/5 sm:h-full md:h-full sm:w-2/5 md:w-2/5 lg:w-2/5 xl:w-2/5 2xl:w-2/5   flex justify-center items-center border-r-2 overflow-hidden"
    class="content relative w-full h-full sm:h-full md:w-full md:h-full">
    <div class="show-swiper w-full h-full sm:w-full sm:h-full">
        <div class="swiper-wrapper w-full h-auto sm:h-full 2xl:h-auto 2xl:w-full  ">
            @foreach ($articles as $key => $article)
                <x-box-horizontal>
                    <x-slot name="id">/articles/show/{{ $article->id }}</x-slot>
                    <x-slot name="description">{{ $article->description }}</x-slot>

                    <x-slot name="image">{{ $article->image_url }}</x-slot>
                    <x-slot name="date">{{ $article->created_at }}</x-slot>
                    <x-slot name="order">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</x-slot>
                </x-box-horizontal>
            @endforeach
        </div>
    </div>
</div>
</div>

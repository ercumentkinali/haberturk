<div id="details-area"
    class="right w-full sm:w-3/5 md:w-3/5 h-4/5 sm:h-full md:h-full lg:h-full xl:h-full 2xl:h-full p-12 pt-0 sm:p-0 bg-hover sm:relative absolute bottom-0 right-0 overflow-y-auto overflow-hidden">
    <div class="news-content px-5" data-id="{{ $selectedNews->id }}">
        <h1 class="font-bold font-poppins text-40px mt-16">{{ $selectedNews->title }}</h1><br>
        <h2 class="font-poppins italic text-gray-500 text-16px md:text-18px border-dashed border-b-2">
            {{ $selectedNews->description }}</h2><br>
        <img src="{{ $selectedNews->image_url }}" alt="haberpng" class="w-full h-auto object-contain p-4"><br>
        <p class="font-poppins italic text-gray-500 text-16px md:text-2xl">{{ $selectedNews->content }}</p>
    </div>
</div>

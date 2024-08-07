<div id="details-area"
    class="right w-full sm:w-3/5 md:w-3/5 h-4/5 sm:h-full md:h-full lg:h-full xl:h-full 2xl:h-full p-12 pt-0 sm:p-0 bg-hover sm:relative absolute bottom-0 right-0 overflow-y-auto overflow-hidden">
    <div class="news-content px-5" ">
        <h1 class="font-bold font-poppins text-40px mt-16">{{ $selectedNews->title }}</h1><br>
        <h2 class="font-poppins italic text-gray-500 text-16px md:text-18px border-dashed border-b-2">
            {{ $selectedNews->description }}</h2><br>
        <img src="/{{ $selectedNews->image_url }}" alt="haberjpg" class="w-full h-auto object-contain p-4"><br>
        <p class="font-poppins italic text-gray-500 text-16px md:text-2xl">{{ $selectedNews->content }}</p>
    </div>
    @foreach ($youtubeVideos as $video)
            <div class="youtube-video my-4">
     <iframe width="850" height="400" class="p-4" src="{{ $video }}" ></iframe>
            </div>
     @endforeach
    <div class="related-news mt-8">
        <div class="text-center">
        <h3 class="font-bold text-5xl mb-4 justify-center text-gray-700">İlgili Haberler</h3>
        </div>
        @if($relatedNews->isNotEmpty())
            @foreach ($relatedNews as $news)
                <div class="related-news-item mb-2 justify-center">
                    @php
                        $categorySlug = $news->category->slug;
                        $titleSlug = Str::slug($news->title);
                    @endphp
                    <a href="{{ route('news.show', [$categorySlug, $news->id, $titleSlug]) }}" class="text-black ">
                        <h4 class="font-bold font-poppins text-40px mt-16 px-5">{{ $news->title }}</h4>
                    </a>
                    <img src="/{{ $news->image_url }}" alt="haberjpg" class="w-full h-auto object-contain p-4"><br>
                    <p class="font-poppins italic text-gray-500 text-16px md:text-18px px-5">{{ $news->description }}</p>
                    @foreach ($youtubeVideos as $video)
                            <div class="youtube-video my-4">
                                 <iframe width="850" height="400" class="p-4" src="{{ $video }}" ></iframe>
                            </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <p>Bu kategoride başka haber bulunmuyor.</p>
        @endif
    </div>
</div>



@php
    use Carbon\Carbon;
@endphp
<div id="rightPanel"
    class="right w-full h-full sm:w-3/5 md:w-3/5 lg:w-3/5  xl:w-3/5  sm: md:h-full lg:h-full xl:h-full bg-white absolute bottom-0  right-0 ">
    <div class="news-swiper swiper h-full">
        <div class="swiper-wrapper ml-14 sm:ml-0 ">
            @foreach ($news as $key => $new)
                <div class="swiper-slide border-r-2 border-l-2 h-full bg-white sm:relative absolute bottom-0 right-0 p-5 hover:bg-hover"
                    data-id="{{ $new->id }}">
                    <div class=" opacity-10 text-black">
                        <span
                            class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class=" flex  items-center w-full h-screen relative ">
                        <div class="flex-col w-full text-left">
                            <div>
                                <p
                                    class="font-bold font-poppins text-12px md:text-18px lg:text-16px xl:text-2xl 2xl:text-16px 2xl:leading-snug line-clamp-3  ">
                                    <span
                                        class="text-12px md:text-12px lg:text-16px xl:text-2xl 2xl:text-12px line-clamp-3 text-gray-800  ">
                                        {{ Carbon::parse($new->created_at)->format('d-m-Y H:i') }}</span> <br>
                                    {{ $new->content }}
                                </p>
                            </div>
                            <br>
                            <div>
                                <img src="{{ $new->image_url }}" alt="haberpng" class=" object-contain "> <br>
                                <p
                                    class=" font-poppins w-full text-gray-500 text-18px md:text-18px lg:text-18px xl:text-2xl 2xl:text-12px  line-clamp-2 2xl:leading-snug ">
                                    {{ $new->description }}</p>
                            </div>
                            <div class=" pt-3">
                                <a href="/news/show/{{ $new->id }}" target="_blank" rel=”noopener noreferrer
                                    class=" text-black h-full font-poppins font-bold text-12px md:text-12px lg:text-14px xl:text-18px 2xl:text-14px border-detay border-2 justify-center p-1 px-4 ">DETAY</a>

                                <button id="showLeftPanelButton"
                                    class="showLeftPanelButton block md:hidden fixed text-12px bottom-1 right-1 border-2 text-black p-2 rounded-full">Sol
                                    Ekranı Göster</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

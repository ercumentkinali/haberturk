<div class="swiper-slide border-r-2 border-l-2 h-full bg-white sm:relative absolute bottom-0 right-0 p-5 hover:bg-hover">
    <div class=" opacity-10 text-black">
        <span class="text-3xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-5xl font-bold">
            {{ $order ?? '' }}
        </span>
    </div>
    <div class=" flex  items-center w-full h-screen relative ">
        <div class="flex-col w-full text-left">
            <div>
                <p
                    class="font-bold font-poppins text-12px md:text-18px lg:text-16px xl:text-2xl 2xl:text-16px 2xl:leading-snug line-clamp-2  ">
                    <span
                        class="text-12px md:text-12px lg:text-16px xl:text-2xl 2xl:text-12px line-clamp-3 text-gray-800 mb-4">
                        {{ $date ?? '' }}
                    </span>
                    {{ $title ?? '' }}
                </p>
            </div>
            <br>
            <div>
                <img src="{{ $image ?? '' }}" alt="haberjpg" class=" object-contain "> <br>
                <p
                    class=" font-poppins w-full text-gray-500 text-18px md:text-18px lg:text-18px xl:text-2xl 2xl:text-12px  line-clamp-2 2xl:leading-snug ">
                    {{ $description ?? '' }}</p>
            </div>
            <div class=" pt-3">
                <a href="{{ $id ?? '' }}" target="_blank" rel=”noopener noreferrer
                    class=" text-black h-full font-poppins font-bold text-12px md:text-12px lg:text-14px xl:text-18px 2xl:text-14px border-detay border-2 justify-center p-1 px-4 ">DETAY</a>

                <button id="showLeftPanelButton"
                    class="showLeftPanelButton block md:hidden fixed text-12px bottom-1 right-1 border-2 text-black p-2 rounded-full">Sol
                    Ekranı Göster</button>
            </div>
        </div>
    </div>
</div>

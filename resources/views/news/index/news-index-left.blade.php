<div class="left w-full sm:w-full md:w-full h-full  flex items-center border-r-2 ">

    <div class="w-14 navBar relative h-screen border-r z-100 border-gray-400 ">
        <div class="left h-full">
            <div class="side-bar-top flex w-14  h-1/5 px-2 bg-arkaplan " style="transition:1s !important;">
            </div>
            <div class="side-bar-bottom flex w-14  h-4/5 z-100 bg-white border-r-2 ">
                <div class="mega-x absolute top-1/2 left-1/2 flex">
                    <div class="first border-r-2 border-black h-8 mr-1 block" style="transition:.3s;"></div>
                    <div class="second border-r-2 border-black h-8 block" style="transition:.3s;"></div>
                </div>
                <i class="mega-circle fa-solid fa-circle absolute bottom-4 left-2 translate-x-1/2 text-arkaplan"></i>
            </div>
        </div>
    </div>
    <div id="leftPanel" class="content w-full h-full relative flex ">
        <div
            class="content w-full sm:w-2/5 md:w-2/5 2xl:w-2/5 xl:w-2/5 h-full flex flex-col justify-center p-8 sm:p-14 md:p-3 xl:p-14 border-r-2 -space-y-3 ">
            <div>
                <p
                    class="font-poppins text-12px sm:text-18 md:text-12px lg:text-12px xl:text-xl 2xl:text-2xl text-gray-500 ">
                    {{ $currentDate }}</p>
            </div> <br>
            <div>
                <h1
                    class="text-black  text-xl sm:text-2xl md:text-xl lg:text-2xl xl:text-4xl 2xl:text-6xl font-abril bg-white h-full ">
                    Bugün ne oldu?</h1> <br>
            </div>
            <div>
                <h2
                    class="text-gray-600 font-poppins text-8px sm:text-18px md:text-12px lg:text-14px xl:text-18px 2xl:text-xl overflow-hidden line-clamp-6 md:line-clamp-8 sm:line-clamp-8 md:pr-11 pr-11">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi aspernatur voluptate error
                    est temporibus perspiciatis earum doloribus, dignissimos esse inventore expedita veritatis,
                    qui quasi sapiente neque explicabo commodi reiciendis.Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Ab modi aspernatur voluptate error est temporibus perspiciatis earum
                    doloribus, dignissimos esse inventore expedita veritatis, qui quasi sapiente neque explicabo
                    commodi reiciendis.</h2>
            </div>
            <div>
                <button id="showRightPanelButton"
                    class="block md:hidden fixed bottom-4 right-4 border-2 text-black p-2 rounded-full">Sağ
                    Ekranı Göster</button>
            </div>

        </div>

    </div>
    <p
        class="text-gray-500 absolute bottom-0 left-24 sm:left-24 md:left-20 lg:left-24 xl:left-24 2xl:left-24 text-8px sm:text-4px md:text-12px xl:text-12px 2xl:text-18px">
        &copy; {{ date('Y') }} - Tüm hakları saklıdır.<br> HaberTürk Gazetecelik A.Ş.
    </p>
</div>

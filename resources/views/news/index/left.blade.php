<div id="leftPanel" class="content w-full h-full relative flex ">
    <div
        class="content w-full sm:w-2/5 md:w-2/5 2xl:w-2/5 xl:w-2/5 h-full flex flex-col justify-center p-8 sm:p-14 md:p-3 xl:p-14 border-r-2 -space-y-3 ">
        <div>
            <p
                class="font-poppins text-18px sm:text-18 md:text-18px lg:text-18px xl:text-xl 2xl:text-2xl text-gray-500 ">
                {{ $currentDate }}</p>
        </div> <br>
        <div>
            <h1
                class="text-black  text-3xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-4xl 2xl:text-6xl font-abril bg-white h-full ">
                Bugün ne oldu?</h1> <br>
        </div>
        <div>
            <h2
                class="text-gray-600 font-poppins text-xl sm:text-18px md:text-18px lg:text-18px xl:text-18px 2xl:text-xl overflow-hidden line-clamp-6 md:line-clamp-8 sm:line-clamp-8 md:pr-11 pr-11">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi aspernatur voluptate error
                est temporibus perspiciatis earum doloribus, dignissimos esse inventore expedita veritatis,
                qui quasi sapiente neque explicabo commodi reiciendis.Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ab modi aspernatur voluptate error est temporibus perspiciatis earum
                doloribus, dignissimos esse inventore expedita veritatis, qui quasi sapiente neque explicabo
                commodi reiciendis.</h2>
        </div>
        <div>
            <button id="showRightPanelButton"
                class="block md:hidden fixed bottom-2 right-4 border-2 text-black text-12px p-1 rounded-full">Sağ
                Ekranı Göster</button>
        </div>

    </div>


    <p
        class="text-gray-500 absolute bottom-0 left-8 sm:left-20 md:left-4 lg:left-4 xl:left-20 2xl:left-14 text-12px sm:text-4px md:text-16px lg:text-16px xl:text-12px 2xl:text-18px">
        &copy; {{ date('Y') }} - Tüm hakları saklıdır.<br> HaberTürk Gazetecelik A.Ş.
    </p>
</div>

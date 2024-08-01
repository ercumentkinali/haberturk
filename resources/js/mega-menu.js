const sideBar = document.querySelector(".sideBar");
const sideBarTop = document.querySelector(".sideBar .side-bar-top");
const sideBarBottom = document.querySelector(".sideBar .side-bar-bottom");

if (sideBar && sideBarTop && sideBarBottom) {
    sideBarTop.addEventListener("click", () => {
        toggleMenu();
    });
    sideBarBottom.addEventListener("click", () => {
        toggleMenu();
    });

    const toggleMenu = () => {
        let megaMenu = document.querySelector(".mega-menu");
        let megaCircle = document.querySelector(".mega-circle");
        let megaX = document.querySelector(".mega-x");

        if (megaMenu) {
            megaMenu.classList.toggle("-left-1326");
            megaMenu.classList.toggle("left-8");
        }
        if (megaCircle) {
            megaCircle.classList.toggle("text-arkaplan");
            megaCircle.classList.toggle("text-white");
        }
        if (megaX) {
            megaX.querySelector(".first").classList.toggle("rotate-45");
            megaX.querySelector(".second").classList.toggle("-rotate-45");
            megaX.querySelector(".first").classList.toggle("mr-1");
            megaX.querySelector(".first").classList.toggle("border-white");
            megaX.querySelector(".second").classList.toggle("border-white");
        }

        sideBarTop.classList.toggle("h-1/5");
        sideBarTop.classList.toggle("h-full");
    };
}

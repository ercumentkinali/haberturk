document.addEventListener("DOMContentLoaded", () => {
    const swiperSlides = document.querySelectorAll(".swiper-slide-show");
    const newsContents = document.querySelectorAll(".news-content");

    swiperSlides.forEach((slide) => {
        slide.addEventListener("click", () => {
            const id = slide.getAttribute("data-id");

            newsContents.forEach((content) => {
                if (content.getAttribute("data-id") === id) {
                    content.style.display = "block";
                } else {
                    content.style.display = "none";
                }
            });
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const newsId = urlParams.get("id");
    if (newsId) {
        const newsContent = document.querySelector(
            `.news-content[data-id='${newsId}']`
        );
        if (newsContent) {
            newsContent.style.display = "block";
        }
    }
});

const leftPanel = document.getElementById("leftPanel");
const rightPanel = document.getElementById("rightPanel");
document.querySelectorAll(".showLeftPanelButton").forEach((elementBtn) => {
    elementBtn.addEventListener("click", function () {
        leftPanel.classList.remove("hidden");
        rightPanel.classList.add("hidden");
    });
});

if (document.getElementById("showRightPanelButton") != undefined) {
    document
        .getElementById("showRightPanelButton")

        .addEventListener("click", function () {
            rightPanel.classList.remove("hidden");
            leftPanel.classList.add("hidden");
        });
}

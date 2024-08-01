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

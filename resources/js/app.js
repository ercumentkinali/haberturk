// import "./bootstrap";

// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();
import Swiper from "swiper";

import { Navigation, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "./mega-menu";

const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],
    slidesPerView: 4,
    direction: "horizontal",

    on: {
        resize: function () {
            swiper.changeDirection(getDirection());
        },
    },
});

function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? "vertical" : "horizontal";

    return direction;
}
function closeModal() {
    document.getElementById("details-modal").classList.add("hidden");
}

function showDetails(id) {
    console.log("Tıklanan ID:", id);

    // Detayları almak için AJAX isteği gönderebilirsiniz
    // Örnek AJAX isteği
    fetch(`/news/${id}`)
        .then((response) => response.json())
        .then((data) => {
            // Modal içeriğini güncelleyin
            document.getElementById("modal-body").innerHTML = `
                <h2>${data.title}</h2>
                <p>${data.description}</p>
                <img src="${data.image_url}" alt="haberpng" class="w-full h-full object-cover">
            `;
            document.getElementById("details-modal").classList.remove("hidden");
        });
    function showDetails(id) {
        // AJAX isteği ile detayları al
        fetch(`/news/${id}`)
            .then((response) => response.json())
            .then((data) => {
                // Detayları göstermek için HTML içeriğini oluştur
                const detailsHtml = `
                        <h1 class="font-bold font-poppins text-40px mt-16">${data.title}</h1><br>
                        <h2 class="font-poppins italic text-gray-500 text-16px">${data.description}</h2><br>
                        <img src="${data.image_url}" alt="haberpng" class="w-auto h-auto"><br>
                        <p class="font-poppins italic text-gray-500 text-16px">${data.content}</p>
                    `;

                // Detayları görüntüleme alanına ekle
                document.getElementById("details-area").innerHTML = detailsHtml;
            })
            .catch((error) => console.error("Error:", error));
    }
}

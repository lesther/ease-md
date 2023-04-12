//Menu Toggle Script
$(".menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("menu-active");
});

$(".side-panel-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("side-panel-active");
});


const trigger = document.querySelector("#navtriggerbg");
const navLinks = document.querySelector("#navLinks");
const menu = document.querySelector("#mainNav")

const navBtn = document.querySelector("#menuCloseLabel");

trigger.addEventListener("click",function() {
    menu.classList.remove("nav_active");
    navLinks.classList.remove("nav__links_active");
});

navBtn.addEventListener("click", function() {
    menu.classList.add("nav_active");
    navLinks.classList.add("nav__links_active");
});

if(document.querySelector("#swiper-testimonials")){
    const swiper = new Swiper('#swiper-testimonials', {
        speed: 400,
        spaceBetween: 10,
        grabCursor: true,
        slidesPerView: 1.5,
        breakpoints: {
        992: {
            slidesPerView: 2.5,
        }
      }
    });
}

if(document.querySelector("#swiper-testimonials-sm")){
    const swiper = new Swiper('#swiper-testimonials-sm', {
        speed: 400,
        spaceBetween: 10,
        grabCursor: true,
        slidesPerView: 1.5,
        breakpoints: {
        768: {
            slidesPerView: 2.5,
        },
        968:{
            slidesPerView: 3.5,
        },
        1200: {
            slidesPerView: 5,
        }
      }
    });
}

if(document.querySelector("#swiper-organizations")){
    const swiper = new Swiper('.swiper', {
        speed: 400,
        spaceBetween: 10,
        grabCursor: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            400: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 3,
            }
        }
    });
    
}


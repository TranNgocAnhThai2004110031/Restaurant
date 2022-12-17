// const menuBar = document.querySelector(".menubar")
// menuBar.addEventListener("click",function(){
//     menuBar.classList.toggle("active")
//     document.querySelector(".menu_items").classList.toggle("active")
// })
// const toP = document.querySelector(".top")
// window.addEventListener("scroll",function(){
//     const x = this.pageYOffset;
//     if (x > 100) {
//         document.querySelector(".top").classList.add("active")
//     } else {
//         document.querySelector(".top").classList.remove("active")
//     }
// })
$(document).ready(function(){
    $('.image-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        // slidesToScroll: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        // draggable: false, // chỉnh ko cho dùng chuột kéo ảnh 

        prevArrow:"<button type='button' class='slick-prev slick-arow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next slick-arow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>", // muốn đổi icon thì thay thẻ i

        responsive: [
            {
                breakpoint: 1024, // khi bé hơn kích thước này thì sẽ setting lại
                setting: {
                    slidesToShow: 3,
                    arrows: false,
                }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                // infinite: false, // khi kéo đến cuối sẽ kho cho kéo đc nữa
              }
            }
        ]
      });
})
$(document).ready(function(){
    $('#toggle').click(function(){
        $('nav').slideToggle();
    });
  })
$(document).ready(function(){
    $('#toggle_user').click(function(){
        $('aside').slideToggle();
    });
})
flatpickr("#date", {
    // altInput: true,
    // altFormat: "F j, Y", // kiểu tiếng anh
    // dateFormat: "Y-m-d",
    dateFormat: "d/m/Y",
})

var btnContainer = document.getElementById("nav");
var btns = btnContainer.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
    })
    
}

// const menu_dish_items = document.querySelector(".menu_dish_title");
// menu_dish_items.addEventListener("click", function(x){
//     if (x.target.classList.contains("links")) {
//         const Target = x.target.getAttribute("data-title");
//         menu_dish_items.querySelector(".active").classList.remove("active");
//         x.target.classList.add("active");
//         const menuItem = document.querySelector(".menu_dish");
//         menuItem.querySelector(".menu-item-content.active").classList.remove("active");
//         menuItem.querySelector(Target).classList.add("active");
//     }
// })

const li=document.querySelectorAll(".links");
const sec=document.querySelectorAll("section");

function activeMenu(){
    let len=sec.length;
    while(--len && window.scrollY + 97 < sec[len].offsetTop){}
    li.forEach(ltx => ltx.classList.remove("active"));
    li[len].classList.add("active");
}
activeMenu();
window.addEventListener("scroll", activeMenu);
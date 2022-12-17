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
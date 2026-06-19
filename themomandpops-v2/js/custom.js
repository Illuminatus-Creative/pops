    $("#team-slid2").owlCarousel({
        items: 4,
        nav: true,
        dots: true,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                margin: 20
            },
            600: {
                items: 2,
                nav: false,
                margin: 20
            },


            1000: {
                items:4,
                nav: false,
                loop: true,
                margin: 20
            }
        },

        navText: ["<span></span>", "<span></span>"]



    });




    $("#team-slid3").owlCarousel({
        items: 4,
        nav: true,
        dots: true,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                margin: 20
            },
            600: {
                items: 2,
                nav: false,
                margin: 20
            },


            1000: {
                items:4,
                nav: false,
                loop: true,
                margin: 20
            }
        },

        navText: ["<span></span>", "<span></span>"]



    });
















// navbar

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.up').fadeIn(400);
        } else { $('.up').fadeOut(400); }
    });

    $('.up').click(function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
    });

});
const header = document.querySelector(".page-header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 90) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});
// end





jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >=400) {
        jQuery('header').addClass('fixed-nav');
    } else {
        jQuery('header').removeClass('fixed-nav');
    }
});


jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >=400) {
        jQuery('maybe').addClass('fixed-nav');
    } else {
        jQuery('maybe').removeClass('fixed-nav');
    }
});














// navbar



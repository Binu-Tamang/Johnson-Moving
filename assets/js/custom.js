let navbar = document.querySelector(".navbar");

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}

// navbar sticky
$(document).ready(function(){
  $(window).bind('scroll', function() {
  var navHeight = $( window ).height() - 460;
  console.log(navHeight);
    if ($(window).scrollTop() > navHeight) {
      console.log($( window ).height());
      $('.menu-list-header').addClass('fixed');
    }
    else {
      $('.menu-list-header').removeClass('fixed');
    }
 });
});

// sidebar submenu open close js code
let htmlcssArrows = document.querySelectorAll(".htmlcss-arrow");

htmlcssArrows.forEach(function(htmlcssArrow) {
    htmlcssArrow.onclick = function () {
        var parentLi = htmlcssArrow.closest('li');
        if (parentLi) {
          parentLi.classList.toggle('show1');
        }
    }
});


// Header carousel
$(".header-carousel").owlCarousel({
  autoplay: true,
  smartSpeed: 1500,
  items: 1,
  dots: true,
  loop: true,
  nav: true,
  navText: [
    '<i class="fa-solid fa-angle-left"></i>',
    '<i class="fa-solid fa-angle-right"></i>',
  ],
});

$(function () {
  $("#main-menu").smartmenus();
});

// wow js
new WOW().init();

// ========js for the counter
const counterUp = window.counterUp.default;

let counterItems = document.querySelectorAll(".n-counter");
let counterItemsObserver = new IntersectionObserver(function (
  entries,
  observer
) {
  entries.forEach(function (entry) {
    let counterItem = entry.target;

    if (entry.isIntersecting && !counterItem.classList.contains("is-visible")) {
      counterUp(counterItem, {
        duration: 2000,
        delay: 16,
      });
      counterItem.classList.add("is-visible");
      counterItemsObserver.unobserve(counterItem);
    }
  });
});
counterItems.forEach(function (counterItem) {
  counterItemsObserver.observe(counterItem);
});

// testimonial owl slider reviews
$(".owl-carousel.testimonial-owl").owlCarousel({
  loop: true,
  autoplay: true,
  items: 1,
  margin: 20,
  stagePadding: 5,
  nav: false,
  center: false,
  responsive: {
    0: {
      items: 1,
    },
    800: {
      items: 2,
    },
  },
});

// credentials owl slider
$(".owl-carousel.owl-carousel-credential").owlCarousel({
  loop: true,
  autoplay: true,
  margin: 10,
  nav: true,
  dots: false,
  center: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

// scroll up to button js
$(document).ready(function () {
  const $scrollToTopButton = $("#scrollToTopButton");

  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $scrollToTopButton.fadeIn();
    } else {
      $scrollToTopButton.fadeOut();
    }
  });

  $scrollToTopButton.click(function () {
    $("html, body").animate({ scrollTop: 0 }, 300);
    return false;
  });
});

// accordion js
// Toggle Collapse
$('.faq li .question').click(function () {
  $(this).find('.plus-minus-toggle').toggleClass('collapsed');
  $(this).parent().toggleClass('active');
});
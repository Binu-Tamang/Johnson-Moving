// ========js for the counter
const counterUp = window.counterUp.default;

  let counterItems = document.querySelectorAll(".n-counter");
  let counterItemsObserver = new IntersectionObserver(function (
    entries,
    observer
  ) {
    entries.forEach(function (entry) {
      let counterItem = entry.target;

      if (
        entry.isIntersecting &&
        !counterItem.classList.contains("is-visible")
      ) {
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
$('.owl-carousel.testimonial-owl').owlCarousel({
    loop: true,
      autoplay: true,
      items: 1,
    margin:20,
      stagePadding: 5,
      nav: false,
    center:false,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:2
        }
    }
  })

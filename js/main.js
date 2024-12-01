function initializeSlider() {
  $(".slider-holder").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplaySpeed: 2000,
    speed: 700,
    easing: "linear",
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 800,
        settings: {
          arrows: false,
          slidesToShow: 1,
        },
      },
    ],
  });
}

// accordion
function toggleFaqItem(item) {
  const icon = item.find(".icon");
  const answer = item.next(".answer");
  
  $(".faq .question-wrapper").not(item).removeClass("is-open");
  $(".faq .icon").not(icon).removeClass("is-open");
  $(".answer").not(answer).slideUp();

  item.toggleClass("is-open");
  icon.toggleClass("is-open");
  answer.slideToggle();
}

function headerToggle() {
  let header = document.querySelector("header");
  header.classList.toggle("responsive");
  document.body.classList.toggle("header-open");
}

function headerClose() {
  let header = document.querySelector("header");
  if (window.innerWidth > 900) {
    header.classList.remove("responsive");
    document.body.classList.remove("header-open");
  }
}
window.addEventListener('load', headerClose);
window.addEventListener('resize', headerClose);

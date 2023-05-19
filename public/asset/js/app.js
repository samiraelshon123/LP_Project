$("#owl-carousel1").owlCarousel({
  loop: true,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1.5,
    },
    1000: {
      items: 1.5,
    },
  },
});
$("#owl-carousel2").owlCarousel({
  loop: true,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2.2,
    },
    1000: {
      items: 2.2,
    },
  },
});
$("#owl-carousel3").owlCarousel({
  loop: true,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});
$("#owl-carousel4").owlCarousel({
  loop: true,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});
function clickImageHandle(smallImg) {
  var fullImg = document.getElementById("imagebox");
  fullImg.src = smallImg.src;
}

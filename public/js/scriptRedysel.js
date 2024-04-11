// NAVEGADOR

const nav = document.querySelector(".nav"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");

navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});


// PAQUETES


document.addEventListener("DOMContentLoaded", function () {
  const iconLeft = document.querySelector('.icon-left');
  const iconRight = document.querySelector('.icon-right');
  const pricingContainer = document.querySelector('.pricing');

  iconLeft.addEventListener('click', function (event) {
    event.preventDefault();
    pricingContainer.scrollBy({
      left: -250, // ajusta este valor según tu diseño y preferencias
      behavior: 'smooth'
    });
  });

  iconRight.addEventListener('click', function (event) {
    event.preventDefault();
    pricingContainer.scrollBy({
      left: 250, // ajusta este valor según tu diseño y preferencias
      behavior: 'smooth'
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let isDown = false;
  let startX;
  let scrollLeft;

  const pricingContainer = document.querySelector('.pricing');

  pricingContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    pricingContainer.style.cursor = 'grabbing'; // Cambia el cursor cuando se agarra
    startX = e.pageX - pricingContainer.offsetLeft;
    scrollLeft = pricingContainer.scrollLeft;
  });

  pricingContainer.addEventListener('mouseleave', () => {
    isDown = false;
    pricingContainer.style.cursor = 'grab'; // Restaura el cursor
  });

  pricingContainer.addEventListener('mouseup', () => {
    isDown = false;
    pricingContainer.style.cursor = 'grab'; // Restaura el cursor
  });

  pricingContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - pricingContainer.offsetLeft;
    const walk = (x - startX) * 2; // Ajusta la velocidad de desplazamiento
    pricingContainer.scrollLeft = scrollLeft - walk;
  });
});


// SECTION CONTRATO

$(document).ready(function () {
  $(".contrato .indicators li").click(function () {
    var i = $(this).index();
    var targetElement = $(".contrato .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
  });
  $(".contrato .tabs li").click(function () {
    var targetElement = $(".contrato .tabs li");
    targetElement.addClass('active');
    targetElement.not($(this)).removeClass('active');
  });
});
$(document).ready(function () {
  $(".slider .swiper-pagination span").each(function (i) {
    $(this).text(i + 1).prepend("0");
  });
});


var rutaActual = window.location.href;

if (rutaActual.includes("/seguridad")) {
  document.getElementById("nav").classList.add("seguridad-dark");
  document.getElementById("miCuenta").classList.add("modal-dark");
  document.getElementById("footer-dark").classList.add("footer-dark");
  document.getElementById("dudas").classList.add("dudas-dark");
  var imgLogo = document.querySelector('.navbar-brand img');
  imgLogo.src = "img/logo-white.png";
}

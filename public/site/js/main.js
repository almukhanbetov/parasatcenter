(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);

document.addEventListener("DOMContentLoaded", function() {

  // 🔹 1. Первый блок
  const btn = document.getElementById('toggleBtn');
  const content = document.getElementById('content');

  if (btn && content) { // ← проверка, чтобы не было ошибок
    btn.addEventListener('click', () => {
      const isOpen = content.classList.toggle('open');

      if (isOpen) {
        content.style.maxHeight = content.scrollHeight + "px";
        btn.textContent = "Скрыть";
      } else {
        content.style.maxHeight = 0;
        btn.textContent = "Показать больше";
      }
    });

    content.addEventListener('transitionend', () => {
      if (content.classList.contains('open')) {
        content.style.maxHeight = "none";
      }
    });
  }

  // 🔹 2. Второй блок
  const bt = document.getElementById('bt');
  const content1 = document.getElementById('content-1');

  if (bt && content1) { // ← и тут тоже проверка
    bt.addEventListener('click', function() {
      const isOpen = content1.classList.toggle('open');

      if (isOpen) {
        content1.style.maxHeight = content1.scrollHeight + "px";
        bt.textContent = "Скрыть";
      } else {
        content1.style.maxHeight = 0;
        bt.textContent = "Подробнее";
      }
    });

    content1.addEventListener('transitionend', function() {
      if (content1.classList.contains('open')) {
        content1.style.maxHeight = "none";
      }
    });
  }

});

 
  
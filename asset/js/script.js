(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  //ubah scroll navbar
  $(window).scroll(function(){
        if($(window).scrollTop() > 10){
          $('#mainNav').addClass('navbar-scroll');
          $('#img-logo').fadeIn();
          $('.nav-brand').fadeIn();
        }else{
          $('#mainNav').removeClass('navbar-scroll');
          $('#img-logo').fadeOut();
          $('.nav-brand').fadeOut();
        }
      }) ;



window.sr = ScrollReveal({ reset: true });
sr.reveal('#Structure', {opacity: 0});
sr.reveal('#gallery', { duration: 500 }, {opacity: 0});
sr.reveal('h1', { duration: 200 });
sr.reveal('.img-thumbnail', {transform: translateY(0)});
})(jQuery); // End of use strict

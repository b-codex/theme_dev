/*!
    * Start Bootstrap - Creative v6.0.1 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-creative/blob/master/LICENSE)
    */
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
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
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  // $('#resume').magnificPopup({
  //   delegate: 'a',
  //   type: 'image',
  //   tLoading: 'Loading image #%curr%...',
  //   mainClass: 'mfp-img-mobile',
  //   gallery: {
  //     enabled: true,
  //     navigateByImgClick: true,
  //     preload: [0, 1]
  //   },
  //   image: {
  //     tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
  //   }
  // });

})(jQuery); // End of use strict


$(window).scroll(function(){
  $('svg.radial-progress').each(function( index, value ) { 
  // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
  if ( 
    $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
    $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
  ) {
    // Get percentage of progress
    percent = $(value).data('percentage');
    // Get radius of the svg's circle.complete
    radius = $(this).find($('circle.complete')).attr('r');
    // Get circumference (2πr)
    circumference = 2 * Math.PI * radius;
    // Get stroke-dashoffset value based on the percentage of the circumference
    strokeDashOffset = circumference - ((percent * circumference) / 100);
    // Transition progress for 1.25 seconds
    $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
  }
  });
  }).trigger('scroll');


  function showblog1(){
    // document.querySelector('#blog2').style.display = 'none'
    // document.querySelector('#blog3').style.display = 'none'
    document.querySelector('#blog1-full').style.display = 'block'
  }

  function hideblog1(){
    document.querySelector('#blog1-full').style.display = 'none'
  }
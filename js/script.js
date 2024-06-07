(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
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
    offset: 56
  });

})(jQuery); // End of use strict

function isInViewport(el, partially) {

  if (typeof(partially) === 'undefined') {
    var partially = 0;
  }

  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }

  var rect = el.getBoundingClientRect();
  var windowHeight = (window.innerHeight || document.documentElement.clientHeight);
  var windowWidth = (window.innerWidth || document.documentElement.clientWidth);

  partialCoeff = 1;

  if (partially == 1) {
    var vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
    var horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);
    return (vertInView && horInView);
  } else if (partially > 1)
    partialCoeff = partially;

  return ((rect.left >= 0) && (rect.top >= 0) && 
  ((rect.left + rect.width) <= windowWidth) && 
  ((rect.top + rect.height/partialCoeff) <= windowHeight));
}

var countersVisible = false;

function increment(){
  if(isInViewport($('#counters'), 1)){
    if(countersVisible) return;
    countersVisible = true;

    umami.track('scroll_counters');

    $('.counting').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');

      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },
      {
        duration: 1000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
        }
      });
    });
  }
}

var recensioniVisible = false;
var testimonianzeVisible = false;
var percorsoVisible = false;
var comparaVisible = false;

function track_scroll(){
  if(isInViewport($('#recensioni'), 1)){
    if(recensioniVisible) return;
    recensioniVisible = true;
    umami.track('scroll_recensioni');
    return;
  }
  if(isInViewport($('#testimonianze'), 1)){
    if(testimonianzeVisible) return;
    testimonianzeVisible = true;
    umami.track('scroll_testimonianze');
    return;
  }
  if(isInViewport($('#percorso'), 1)){
    if(percorsoVisible) return;
    percorsoVisible = true;
    umami.track('scroll_percorso');
    return;
  }
  if(isInViewport($('#compara'), 1)){
    if(comparaVisible) return;
    comparaVisible = true;
    umami.track('scroll_compara');
    return;
  }
}

$('.yt_video').fitVids();

$(window).scroll(function(){
  track_scroll();
  increment();
});

$(document).ready(function(){
  track_scroll();
  increment();
});

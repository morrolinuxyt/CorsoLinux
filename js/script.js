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


function increment(){
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


function drawChart(){
  // create and animate charts only when they become visible
  if(!isInViewport($('#lf-statistics'), 2)) return;

  // loop over all html-defined doughnut charts
  var charts = document.getElementsByClassName("doughnut");
  for (var i = 0; i < charts.length; i++) {
    var canva = document.createElement("canvas");
    var desc = charts[i].getAttribute("desc");
    var inputColor = charts[i].getAttribute("color");
    var inputValue = charts[i].getAttribute("value");
    charts[i].appendChild(canva);

    // set data
    data = {
      datasets:
      [{
        data: [inputValue, 100-inputValue],
        backgroundColor: [inputColor,"#FFFFFF00"],
      }],
    }
  
    // create chart
    var promisedDeliveryChart = new Chart(canva, {
      type: 'doughnut',
      data: data,
      options: {
        elements: {arc: {borderWidth: 0}},
        cutoutPercentage: 80,
        tooltips: {enabled: false},
        hover: {mode: null},
        responsive: true,
        legend: {display: false}
      }
    });

    // override chart with percentage value
    Chart.plugins.register({
      id: desc,
      beforeDraw: function(chart) {
        var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;
        ctx.restore();
        var fontSize = (height / 114).toFixed(2);
        ctx.font = fontSize + "em sans-serif";
        ctx.textBaseline = "middle";
        var text = chart.data.datasets[0]["data"][0] + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
    });

    // append the chart to the DOM
    var description = document.createElement("p");
    var spacer = document.createElement("br");
    var h5 = document.createElement("h5");
    description.appendChild(spacer);
    description.appendChild(h5);
    h5.innerHTML = desc;
    charts[i].appendChild(description);
  }
}

var recensioniVisible = false;
var testimonianzeVisible = false;
var percorsoVisible = false;
var comparaVisible = false;
var LFStatsChartsVisible = false;
var countersVisible = false;

function track_scroll(){
  if(!isInViewport($('#lf-statistics'), 2)){
  } else {
    if(LFStatsChartsVisible) return;
    drawChart();  
    LFStatsChartsVisible = true;
    umami.track('scroll_doughnut-chart');
    return;
  }
  if(isInViewport($('#recensioni'), 1)){
    if(recensioniVisible) return;
    recensioniVisible = true;
    umami.track('scroll_recensioni');
    return;
  }
  if(isInViewport($('#counters'), 1)){
    if(countersVisible) return;
    countersVisible = true;
    increment();
    umami.track('scroll_counters');
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
});

$(document).ready(function(){
  track_scroll();
  // increment();
  drawChart();
});

var countersVisible = false;
var programmaVisible = false;

function track_scroll(){
  var $counters = $('#counters');
  if($counters.length && isInViewport($counters, 1)){
    if(countersVisible) return;
    countersVisible = true;
    increment();
    umami.track('scroll_kubernetes_counters');
    return;
  }
  if(isInViewport($('#programma'), 1)){
    if(programmaVisible) return;
    programmaVisible = true;
    umami.track('scroll_kubernetes_programma');
    return;
  }
}

$('.yt_video').fitVids();


$(window).scroll(function(){
  track_scroll();
});

$(document).ready(function(){
  track_scroll();
});

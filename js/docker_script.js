var recensioniVisible = false;
var programmaVisible = false;
var countersVisible = false;

function track_scroll(){
  if(isInViewport($('#recensioni'), 1)){
    if(recensioniVisible) return;
    recensioniVisible = true;
    umami.track('scroll_docker_recensioni');
    return;
  }
  if(isInViewport($('#programma'), 1)){
    if(programmaVisible) return;
    programmaVisible = true;
    umami.track('scroll_docker_programma');
    return;
  }
  if(isInViewport($('#counters'), 1)){
    if(countersVisible) return;
    countersVisible = true;
    increment();
    umami.track('scroll_docker_counters');
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

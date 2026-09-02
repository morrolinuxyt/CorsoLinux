var programmaVisible = false;
var countersVisible = false;

function track_scroll(){
  if(isInViewport($('#counters'), 1)){
    if(countersVisible) return;
    countersVisible = true;
    increment();
    umami.track('scroll_proxmox_counters');
    return;
  }
  if(isInViewport($('#programma'), 1)){
    if(programmaVisible) return;
    programmaVisible = true;
    umami.track('scroll_proxmox_programma');
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

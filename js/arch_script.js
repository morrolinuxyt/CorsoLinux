var programmaVisible = false;
var countersVisible = false;

// Ogni sezione ha il suo controllo indipendente: con i return in cascata
// bastava che una sezione più in alto fosse ancora a schermo per non
// arrivare mai a quelle sotto.
function track_scroll(){
  if(!programmaVisible && isInViewport($('#programma'), 1)){
    programmaVisible = true;
    umami.track('scroll_arch_programma');
  }

  if(!countersVisible && isInViewport($('#counters'), 1)){
    countersVisible = true;
    increment();
    umami.track('scroll_arch_counters');
  }
}

$('.yt_video').fitVids();

$(window).scroll(function(){
  track_scroll();
});

$(document).ready(function(){
  track_scroll();
});

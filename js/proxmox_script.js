var programmaVisible = false;
var countersVisible = false;

// Ogni sezione ha il suo controllo indipendente: prima ciascun ramo faceva
// "return", quindi bastava che una sezione più in alto fosse ancora anche solo
// parzialmente a schermo per non arrivare mai a quelle sotto. I contatori, che
// stanno in fondo alla catena, partivano così con parecchio ritardo.
function track_scroll(){
  if(!programmaVisible && isInViewport($('#programma'), 1)){
    programmaVisible = true;
    umami.track('scroll_proxmox_programma');
  }

  if(!countersVisible && isInViewport($('#counters'), 1)){
    countersVisible = true;
    increment();
    umami.track('scroll_proxmox_counters');
  }
}

$('.yt_video').fitVids();


$(window).scroll(function(){
  track_scroll();
});

$(document).ready(function(){
  track_scroll();
});

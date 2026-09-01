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


// "Torcia" sull'hero con teaser scuro: il velo si buca sotto al cursore e
// lascia vedere il video com'è. A riposo il raggio è 0, quindi senza mouse
// (o senza JS) l'hero resta esattamente com'era.
(function() {
  var hero = document.querySelector('.landing--dark');
  if (!hero) return;
  if (!window.matchMedia || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

  var RADIUS = 250;                       // raggio del faro, in px
  var TEXT_MARGIN = 40;                   // quanto "prima" il testo si fa da parte
  var text = hero.querySelector('h1');
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var x = 0, y = 0, r = 0, target = 0, pending = false, running = false;

  // rettangolo che avvolge il testo effettivo di h1 + .lead
  function textRect() {
    var nodes = [text, hero.querySelector('.lead')], box = null;
    for (var i = 0; i < nodes.length; i++) {
      if (!nodes[i]) continue;
      var range = document.createRange();
      range.selectNodeContents(nodes[i]);
      var b = range.getBoundingClientRect();
      range.detach && range.detach();
      if (!b.width && !b.height) continue;
      box = box ? {
        left: Math.min(box.left, b.left), right: Math.max(box.right, b.right),
        top: Math.min(box.top, b.top), bottom: Math.max(box.bottom, b.bottom)
      } : { left: b.left, right: b.right, top: b.top, bottom: b.bottom };
    }
    return box || { left: 0, right: 0, top: 0, bottom: 0 };
  }

  function paint() {
    running = false;
    // avvicina r al target: entrata e uscita morbide invece che a scatto
    var d = target - r;
    r = Math.abs(d) < 0.5 ? target : r + d * (reduced ? 1 : 0.18);

    hero.style.setProperty('--torch-x', x + 'px');
    hero.style.setProperty('--torch-y', y + 'px');
    hero.style.setProperty('--torch-r', r + 'px');

    if (r !== target) tick();
  }

  function tick() {
    if (running) return;
    running = true;
    window.requestAnimationFrame(paint);
  }

  // Suggerimento: un passaggio del faro poco dopo il caricamento, per far
  // capire che l'hero si può illuminare. Passa sotto al testo, così non fa
  // scattare la sfumatura, e si interrompe appena l'utente muove il mouse.
  var hinted = false, hintTimer = null, hintRAF = null;

  function cancelHint() {
    if (hinted) return;
    hinted = true;
    clearTimeout(hintTimer);
    if (hintRAF) window.cancelAnimationFrame(hintRAF);
    hero.classList.remove('is-peeking');
  }

  function runHint() {
    if (hinted || reduced || window.pageYOffset > 100) { hinted = true; return; }
    var box = hero.getBoundingClientRect();
    // passa per la fascia centrale: è l'unica parte del teaser che ha
    // davvero contenuto da scoprire (le altre sono quasi sempre nere).
    var y0 = box.height * 0.5;
    var x0 = box.width * 0.38, x1 = box.width * 0.62;
    var DUR = 2600, start = null;

    hintRAF = window.requestAnimationFrame(function step(ts) {
      if (hinted) return;
      if (start === null) start = ts;
      var p = Math.min((ts - start) / DUR, 1);
      // apre, tiene, richiude
      var env = p < 0.25 ? p / 0.25 : (p > 0.75 ? (1 - p) / 0.25 : 1);

      x = x0 + (x1 - x0) * p;
      y = y0;
      r = RADIUS * env;
      hero.style.setProperty('--torch-x', x + 'px');
      hero.style.setProperty('--torch-y', y + 'px');
      hero.style.setProperty('--torch-r', r + 'px');
      // passando sul titolo il testo si fa da parte, come farebbe col mouse
      hero.classList.toggle('is-peeking', p > 0.15 && p < 0.85);

      if (p < 1) hintRAF = window.requestAnimationFrame(step);
      else { r = 0; target = 0; hinted = true; hero.classList.remove('is-peeking'); }
    });
  }

  hintTimer = setTimeout(runHint, 800);

  var firstPos = null;

  hero.addEventListener('mousemove', function(e) {
    // Un cursore fermo sopra la pagina genera comunque qualche mousemove
    // (assestamenti del layout, sobbalzi di un pixel): non deve annullare il
    // suggerimento, altrimenti non lo vedrebbe quasi nessuno. Serve uno
    // spostamento vero, che significa "l'utente sta guardando da solo".
    if (!hinted) {
      if (!firstPos) { firstPos = { x: e.clientX, y: e.clientY }; return; }
      if (Math.abs(e.clientX - firstPos.x) + Math.abs(e.clientY - firstPos.y) < 8) return;
      cancelHint();
    }

    var box = hero.getBoundingClientRect();
    x = e.clientX - box.left;
    y = e.clientY - box.top;
    target = RADIUS;

    // il testo sfuma solo quando il faro lo sta effettivamente investendo.
    // Serve il rettangolo del testo renderizzato, non quello dell'elemento:
    // h1 e .lead sono blocchi larghi quanto il contenitore.
    if (text) {
      var t = textRect();
      var near = e.clientX > t.left - TEXT_MARGIN && e.clientX < t.right + TEXT_MARGIN &&
                 e.clientY > t.top - TEXT_MARGIN && e.clientY < t.bottom + TEXT_MARGIN;
      hero.classList.toggle('is-peeking', near);
    }

    if (!pending) { pending = true; tick(); }
    else tick();
  });

  hero.addEventListener('mouseleave', function() {
    target = 0;
    hero.classList.remove('is-peeking');
    tick();
  });
})();

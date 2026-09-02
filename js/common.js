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

  // selettore che non trova nulla (sezione commentata o assente da questa
  // pagina): non è in viewport, e soprattutto non deve far esplodere il resto
  // dei controlli in track_scroll().
  if (!el) return false;

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


// "Torcia" sull'hero: il velo si buca sotto al cursore e lascia vedere il
// video che ci sta dietro. A riposo il raggio è 0, quindi senza mouse (o
// senza JS) l'hero resta esattamente com'era.
//
// Due usi: su un teaser scuro il velo è la patina nera (.scrim), sull'hero di
// Kubernetes è il logo che gira sul fondo blu (.veil). Il meccanismo è lo
// stesso, cambia solo cosa si buca.
(function() {
  var hero = document.querySelector('.landing--torch');
  if (!hero) return;
  if (!window.matchMedia || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

  // Il video sotto al velo si vede solo con la torcia, che qui sopra abbiamo
  // già escluso su touch: lì scaricarlo sarebbe qualche megabyte buttato.
  // Per questo la sorgente sta in data-src e la si monta solo adesso.
  var teaser = hero.querySelector('video[data-src]');
  if (teaser && !teaser.getAttribute('src')) {
    teaser.src = teaser.getAttribute('data-src');
  }

  // Il faro si "carica" muovendo il mouse: parte piccolo, cresce quanto più lo
  // si agita, resta grande qualche secondo e poi torna piano alla misura di
  // partenza. Chi passa di lì distrattamente vede un fascio discreto; chi ci
  // gioca si apre una finestra grande sul teaser.
  var R_BASE = 20;                       // raggio a riposo, in px
  var R_MAX  = 3000;                       // raggio col faro completamente carico
  // Il suggerimento iniziale cresce insieme al massimo: se restasse fisso e
  // piccolo, chi guarda solo quella passata non immaginerebbe quanto si può
  // aprire il faro giocandoci.
  var R_HINT = R_MAX * 0.55;              // raggio del suggerimento iniziale
  var GAIN   = 1 / 4000;                  // px di mouse per passare da base a massimo
  var HOLD   = 2000;                      // ms di tenuta prima di iniziare a calare
  var FADE   = 2500;                      // ms per tornare alla misura di partenza

  var TEXT_MARGIN = 40;                   // quanto "prima" il testo si fa da parte
  var text = hero.querySelector('h1');
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var x = 0, y = 0, r = 0, target = 0, pending = false, running = false;
  var energia = 0, ultimoMovimento = 0, ultimoFrame = 0, dentro = false, puntoPrec = null;

  function raggioTarget() {
    return dentro ? R_BASE + (R_MAX - R_BASE) * energia : 0;
  }

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

  function paint(ts) {
    running = false;
    if (!ultimoFrame) ultimoFrame = ts;
    // un fotogramma saltato (scheda in secondo piano) non deve consumare
    // di colpo tutta l'energia accumulata
    var dt = Math.min(ts - ultimoFrame, 100);
    ultimoFrame = ts;

    if (energia > 0 && ts - ultimoMovimento > HOLD) {
      energia = Math.max(0, energia - dt / FADE);
    }
    target = raggioTarget();

    // avvicina r al target: entrata e uscita morbide invece che a scatto
    var d = target - r;
    r = Math.abs(d) < 0.5 ? target : r + d * (reduced ? 1 : 0.18);

    hero.style.setProperty('--torch-x', x + 'px');
    hero.style.setProperty('--torch-y', y + 'px');
    hero.style.setProperty('--torch-r', r + 'px');

    if (r !== target || energia > 0) tick();
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
    // var x0 = box.width * 0.38, x1 = box.width * 0.62;
    var x0 = box.width * 0.5;
    var DUR = 2600, start = null;

    hintRAF = window.requestAnimationFrame(function step(ts) {
      if (hinted) return;
      if (start === null) start = ts;
      var p = Math.min((ts - start) / DUR, 1);
      // apre, tiene, richiude
      var env = p < 0.25 ? p / 0.25 : (p > 0.75 ? (1 - p) / 0.25 : 1);

      x = x0; // + (x1 - x0) * p;
      y = y0;
      r = R_HINT * env;
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
    dentro = true;

    // l'energia si accumula con la strada percorsa dal puntatore: una
    // passata tranquilla la alza appena, qualche scrollata avanti e indietro
    // la porta al massimo.
    var ora = window.performance && performance.now ? performance.now() : Date.now();
    if (puntoPrec) {
      var passo = Math.abs(e.clientX - puntoPrec.x) + Math.abs(e.clientY - puntoPrec.y);
      energia = Math.min(1, energia + passo * GAIN);
    }
    puntoPrec = { x: e.clientX, y: e.clientY };
    ultimoMovimento = ora;
    target = raggioTarget();

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
    // uscendo il faro si spegne e si scarica: rientrando si riparte piccoli
    dentro = false;
    energia = 0;
    puntoPrec = null;
    target = 0;
    hero.classList.remove('is-peeking');
    tick();
  });
})();


// Selettore del tema: automatico -> chiaro -> scuro -> automatico.
// "automatico" non salva nulla, così la pagina continua a seguire il sistema
// anche se la preferenza cambia. La classe sta su <html>: snippets/theme-init.php
// la applica già in <head>, questo qui si limita a sincronizzare l'icona.
(function() {
  var btn = document.getElementById('theme-toggle');
  if (!btn) return;

  var root  = document.documentElement;
  var ORDER = ['auto', 'light', 'dark'];
  var ICON  = { auto: 'fa-adjust', light: 'fa-sun-o', dark: 'fa-moon-o' };
  var LABEL = { auto:  'Tema: automatico (segue il sistema)',
                light: 'Tema: chiaro',
                dark:  'Tema: scuro' };

  function current() {
    for (var i = 0; i < ORDER.length; i++) {
      if (root.classList.contains('theme-' + ORDER[i])) return ORDER[i];
    }
    return 'auto';
  }

  function apply(theme, save) {
    for (var i = 0; i < ORDER.length; i++) root.classList.remove('theme-' + ORDER[i]);
    root.classList.add('theme-' + theme);

    var icon = btn.querySelector('i');
    if (icon) icon.className = 'fa ' + ICON[theme];
    btn.title = LABEL[theme];
    btn.setAttribute('aria-label', LABEL[theme]);

    // Chi disegna su canvas (i grafici a ciambella) non è raggiunto dal CSS:
    // deve rileggere la tavolozza da sé quando il tema cambia.
    document.dispatchEvent(new CustomEvent('themechange', { detail: theme }));

    if (!save) return;
    try {
      if (theme === 'auto') localStorage.removeItem('theme');
      else localStorage.setItem('theme', theme);
    } catch (e) { /* storage non disponibile: la scelta vale solo per questa pagina */ }
  }

  apply(current(), false);   // allinea l'icona a quanto già applicato in <head>

  btn.addEventListener('click', function() {
    apply(ORDER[(ORDER.indexOf(current()) + 1) % ORDER.length], true);
  });

  // La pastiglia compare solo quando l'hero è uscito di scena: lì sopra non
  // serve, e su un hero scuro in tema chiaro è il punto in cui stona di più.
  // La classe che abilita il comportamento la mette lo script: senza JS, o
  // senza IntersectionObserver, il pulsante resta sempre visibile invece di
  // sparire per sempre. Con threshold 0 la soglia scatta quando l'hero è
  // completamente fuori dalla finestra.
  var hero = document.querySelector('.landing');
  if (hero && 'IntersectionObserver' in window) {
    btn.classList.add('auto-hide');
    new IntersectionObserver(function(entries) {
      btn.classList.toggle('is-visible', !entries[0].isIntersecting);
    }, { threshold: 0 }).observe(hero);
  }
})();

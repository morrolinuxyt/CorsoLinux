// Ancore storiche della home.
//
// Fino ad agosto 2026 la home conteneva anche tutta la landing Linux/LPI, e
// alcuni suoi anchor sono finiti nelle descrizioni dei video e nei link su
// morrolinux.it: /#dazero, /#novita e /#corsi da soli valevano un centinaio di
// visite al mese. Ora quelle sezioni vivono in linux.php.
//
// L'hash non arriva al server, quindi la rimappatura va fatta qui. Si esegue
// solo se in pagina non esiste già un elemento con quell'id: se un domani la
// home tornasse ad avere quella sezione, questo script si fa da parte.

(function () {
  var MAPPA = {
    // sezioni che hanno traslocato in linux.php
    corsi:         'linux.php#corsi',
    lavoro:        'linux.php#lavoro',
    compara:       'linux.php#compara',
    lpi:           'linux.php#lpi',
    percorso:      'linux.php#percorso',
    dazero:        'linux.php#dazero',
    esame:         'linux.php#esame',
    testimonianze: 'linux.php#testimonianze',
    video_lpi:     'linux.php#video_lpi',
    'lf-statistics': 'linux.php#lf-statistics',

    // la vetrina "Novità" è diventata il catalogo, che sta ancora qui
    novita: '#catalogo'
  };

  function rimappa() {
    var hash = window.location.hash.replace(/^#/, '');
    if (!hash) return;

    var destinazione = MAPPA[hash];
    if (!destinazione) return;

    // se la sezione esiste ancora in questa pagina, non c'è niente da rimappare
    if (document.getElementById(hash)) return;

    if (destinazione.charAt(0) === '#') {
      var locale = document.querySelector(destinazione);
      if (locale) locale.scrollIntoView();
      return;
    }

    window.location.replace(destinazione);
  }

  rimappa();
  window.addEventListener('hashchange', rimappa);
})();

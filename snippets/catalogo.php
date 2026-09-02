<?php
/**
 * Rendering delle schede del catalogo, a partire da data/corsi.php.
 *
 * Da includere una volta sola per pagina; le funzioni sono protette da
 * function_exists perché i vari snippet del catalogo lo includono a loro volta.
 */

require_once 'data/corsi.php';

if (!function_exists('catalogo_pagina')) {
  /** Slug della pagina corrente: prefissa gli eventi Umami, così i click
   *  vengono attribuiti alla pagina da cui arrivano davvero. */
  function catalogo_pagina() {
    $slug = basename($_SERVER['SCRIPT_NAME'], '.php');
    return $slug !== '' ? $slug : 'pagina';
  }
}

if (!function_exists('catalogo_corsi')) {
  /** Le voci del catalogo, eventualmente filtrate per famiglia ('pcm', 'lpi')
   *  ed escludendo gli slug passati in $escludi. */
  function catalogo_corsi($famiglia = null, $escludi = array()) {
    global $CORSI;
    $out = array();
    foreach ($CORSI as $slug => $corso) {
      if ($famiglia !== null && $corso['famiglia'] !== $famiglia) continue;
      if (in_array($slug, $escludi, true)) continue;
      $out[$slug] = $corso;
    }
    return $out;
  }
}

if (!function_exists('catalogo_url')) {
  /** L'URL Udemy con l'eventuale coupon del giorno lo prepara
   *  snippets/udemy-coupons.php in variabili globali: qui si legge la sua. */
  function catalogo_url($corso) {
    $var = $corso['coupon'];
    return isset($GLOBALS[$var]) ? $GLOBALS[$var] : '';
  }
}

if (!function_exists('catalogo_scheda')) {
  /**
   * Una scheda corso.
   *
   * Due pulsanti: "Approfondisci" porta alla landing, "Vai al corso" alla
   * pagina d'acquisto. La scheda NON è più avvolta in <a class="invisible-link">:
   * quell'ancora ne conteneva altre, l'HTML non ammette ancore annidate e il
   * parser lasciava in pagina copie vuote che rompevano il layout a griglia.
   */
  function catalogo_scheda($slug, $corso, $col = 'col-lg-6 col-md-6 mb-4', $posizione = null) {
    global $show_promo, $promo_cta_text;

    $pagina  = catalogo_pagina();
    $evento  = isset($corso['evento']) ? $corso['evento'] : $slug;

    // Una pagina lunga può ripetere lo stesso catalogo in fondo, come secondo
    // invito all'acquisto: la posizione entra nel nome dell'evento, così in
    // Umami si continua a distinguere chi compra subito da chi compra dopo
    // aver letto tutto. Se c'è un testo esteso, in fondo si usa quello.
    if ($posizione !== null) {
      $evento .= '_' . $posizione;
      if ($posizione === 'late' && !empty($corso['testo_esteso'])) {
        $corso['testo'] = $corso['testo_esteso'];
      }
    }
    $url     = catalogo_url($corso);
    $landing = isset($corso['landing']) ? $corso['landing'] : null;

    // La landing della pagina su cui siamo già non è un approfondimento.
    if ($landing !== null && basename($landing, '.php') === $pagina) {
      $landing = null;
    }

    $novita = !empty($corso['novita']);
    ?>
      <div class="<?php echo $col; ?>">
        <div class="card">
          <?php if ($novita): ?><span class="card-badge">Novità</span><?php endif ?>
          <img src="<?php echo $corso['immagine']; ?>" class="card-img-top" alt="<?php echo $corso['alt']; ?>" title="<?php echo $corso['title']; ?>">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title"><?php echo $corso['nome']; ?></h3>

            <?php /* Come nella scheda orizzontale: l'approfondimento è un link
                      in coda al testo, e il pulsante d'acquisto resta l'unica
                      azione forte, a tutta larghezza. */ ?>
            <p class="card-text">
              <?php echo $corso['testo']; ?><?php if ($landing !== null): ?>
              <a data-umami-event="<?php echo $pagina; ?>_landing_<?php echo $evento; ?>" title="<?php echo $corso['nome']; ?>" href="<?php echo $landing; ?>">leggi di più</a><?php endif ?>
            </p>

            <div class="card-actions mt-auto">
              <?php if ($show_promo): ?>
              <a data-umami-event="<?php echo $pagina; ?>_goto_<?php echo $evento; ?>_SPECIAL_OFFER" title="<?php echo $corso['nome']; ?>" href="<?php echo $url; ?>" class="btn btn-special-offer"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="<?php echo $pagina; ?>_goto_<?php echo $evento; ?>" title="<?php echo $corso['nome']; ?>" href="<?php echo $url; ?>" class="btn btn-primary"><b>Vai al corso</b></a>
              <?php endif ?>
            </div>

          </div>
        </div>
      </div>
    <?php
  }
}

if (!function_exists('catalogo_griglia')) {
  /** Una griglia di schede: card-deck + colonne, così le schede della stessa
   *  riga restano alte quanto la più alta (vedi .card-deck in css/style.css). */
  function catalogo_griglia($famiglia = null, $escludi = array(), $col = 'col-lg-6 col-md-6 mb-4', $posizione = null) {
    echo '    <div class="card-deck row">' . "\n";
    foreach (catalogo_corsi($famiglia, $escludi) as $slug => $corso) {
      catalogo_scheda($slug, $corso, $col, $posizione);
    }
    echo '    </div>' . "\n";
  }
}

if (!function_exists('catalogo_scheda_orizzontale')) {
  /**
   * Scheda in orizzontale: copertina a sinistra, testo a destra.
   *
   * È il formato del catalogo, dove le schede sono tante e servono soprattutto
   * a smistare: qui si usa il sommario breve, non la descrizione completa che
   * vive nella scheda verticale delle landing.
   */
  function catalogo_scheda_orizzontale($slug, $corso) {
    global $show_promo, $promo_cta_text;

    $pagina  = catalogo_pagina();
    $evento  = isset($corso['evento']) ? $corso['evento'] : $slug;
    $url     = catalogo_url($corso);
    $landing = isset($corso['landing']) ? $corso['landing'] : null;
    if ($landing !== null && basename($landing, '.php') === $pagina) {
      $landing = null;
    }
    $testo = !empty($corso['sommario']) ? $corso['sommario'] : $corso['testo'];
    ?>
      <div class="card card-h">
        <?php if (!empty($corso['novita'])): ?><span class="card-badge">Novità</span><?php endif ?>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?php echo $corso['immagine']; ?>" class="card-img" alt="<?php echo $corso['alt']; ?>" title="<?php echo $corso['title']; ?>">
          </div>
          <div class="col-md-8">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title"><?php echo $corso['nome']; ?></h3>

              <?php /* L'approfondimento è un link in coda al testo, non un
                        secondo pulsante: nella scheda orizzontale due pulsanti
                        affiancati lasciavano mezza riga vuota alla loro destra,
                        e nessuna delle due azioni aveva la precedenza. */ ?>
              <p class="card-text">
                <?php echo $testo; ?><?php if ($landing !== null): ?>
                <a data-umami-event="<?php echo $pagina; ?>_landing_<?php echo $evento; ?>" title="<?php echo $corso['nome']; ?>" href="<?php echo $landing; ?>">leggi di più</a><?php endif ?>
              </p>

              <div class="card-actions mt-auto">
                <?php if ($show_promo): ?>
                <a data-umami-event="<?php echo $pagina; ?>_goto_<?php echo $evento; ?>_SPECIAL_OFFER" title="<?php echo $corso['nome']; ?>" href="<?php echo $url; ?>" class="btn btn-special-offer"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="<?php echo $pagina; ?>_goto_<?php echo $evento; ?>" title="<?php echo $corso['nome']; ?>" href="<?php echo $url; ?>" class="btn btn-primary"><b>Vai al corso</b></a>
                <?php endif ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    <?php
  }
}

if (!function_exists('catalogo_elenco')) {
  /** Elenco di schede orizzontali, una per riga. */
  function catalogo_elenco($famiglia = null, $escludi = array()) {
    echo '    <div class="card-list">' . "\n";
    foreach (catalogo_corsi($famiglia, $escludi) as $slug => $corso) {
      catalogo_scheda_orizzontale($slug, $corso);
    }
    echo '    </div>' . "\n";
  }
}

if (!function_exists('catalogo_statistiche')) {
  /**
   * Numeri aggregati dei corsi (iscrizioni, lezioni, recensioni) presi
   * dall'API pubblica di Udemy.
   *
   * Tollerante ai guasti: se una chiamata fallisce quel corso non viene
   * contato, ma la pagina esce lo stesso. Prima le chiamate erano cablate in
   * index.php senza rete di sicurezza, e un'API lenta bloccava tutta la home.
   */
  function catalogo_statistiche($famiglia = null) {
    $tot = array('subs' => 0, 'lessons' => 0, 'reviews' => 0);

    foreach (catalogo_corsi($famiglia) as $corso) {
      if (empty($corso['udemy_id'])) continue;

      $url = 'https://www.udemy.com/api-2.0/courses/' . $corso['udemy_id']
           . '?fields[course]=title,num_subscribers,num_lectures,num_reviews';

      $ctx  = stream_context_create(array('http' => array('timeout' => 4)));
      $json = @file_get_contents($url, false, $ctx);
      if ($json === false) continue;

      $dati = json_decode($json);
      if (!$dati || !isset($dati->num_subscribers)) continue;

      $tot['subs']    += $dati->num_subscribers;
      $tot['lessons'] += $dati->num_lectures;
      $tot['reviews'] += $dati->num_reviews;
    }

    return $tot;
  }
}

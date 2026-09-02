<!DOCTYPE html>
<html lang="it" class="theme-auto">

<head>
  <script defer src="https://analytics.morrolinux.it/script.js" data-website-id="a24a12a5-ee97-49b1-8fb0-ff80b73816f1"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Chrome Mobile Top Bar Color-->
  <meta name="theme-color" content="#343a40" />

  <meta name="description" content="Corsi Linux, Docker, Proxmox e Kubernetes in italiano: dalle basi alla certificazione professionale LPI. Scegli il corso adatto al tuo livello di partenza.">

  <link rel="canonical" href="https://corsolinux.com/">

  <title>CorsoLinux.com | Corsi Linux, container e infrastruttura in italiano</title>

<?php include 'snippets/theme-init.php';?>
</head>

<body id="page-top" class="landing-page" style="--accent: #ff651c;">

  <?php include 'snippets/promo-banner.php';?>
  <?php include 'snippets/udemy-coupons.php';?>
  <?php include_once 'snippets/catalogo.php';?>

  <?php
    // Numeri aggregati su tutti i corsi pubblicati, non più solo sui tre LPI:
    // questa è la home di tutto il catalogo.
    $stats   = catalogo_statistiche();
    $subs    = $stats['subs'];
    $lessons = $stats['lessons'];
    $reviews = $stats['reviews'];
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger font-weight-light" href="#page-top"><b>CorsoLinux</b>.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a data-umami-event="home_navbar_catalogo" class="nav-link js-scroll-trigger" href="#catalogo">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="home_navbar_inizia" class="nav-link js-scroll-trigger" href="#inizia">Da dove comincio</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="home_navbar_linux" class="nav-link" href="linux.php">Linux e LPI</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="home_navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="home_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="home_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php include 'snippets/theme-toggle.php';?>

  <header class="landing">
    <div class="bg"></div>
    <video src="assets/landing_video.mp4" autoplay loop muted></video>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Impara Linux, i container e l'infrastruttura</h1>
          <p class="lead">Corsi in italiano, dalle basi alla certificazione professionale.</p>
          <?php if($show_promo): ?>
            <a data-umami-event="home_header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#catalogo"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="home_header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#catalogo">Scopri i corsi</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section id="catalogo">
    <div class="container">
      <h2 class="section-title">Tutti i corsi</h2>

      <p class="section-claim">
        Due famiglie di corsi, <b>un solo modo di insegnare</b>:<br>
        partire da dove sei e arrivare a <b class="marker">farlo come si deve</b>.
      </p>

      <h3 class="section-subtitle">Per Comuni Mortali</h3>
      <p class="section-note text-justify">
        Corsi pensati per <b>rendere accessibili a tutti anche i concetti più tecnici</b>: gli argomenti vengono trattati
        in un ordine naturale all'apprendimento, <b>introducendo i concetti chiave al momento del bisogno</b>, invece di
        seguire il classico approccio "a compartimenti stagni" della didattica vecchia scuola.
      </p>

      <?php catalogo_elenco('pcm'); ?>

      <h3 class="section-subtitle">Certificazioni LPI</h3>
      <p class="section-note text-justify">
        Percorsi che seguono fedelmente il programma ufficiale del <b>Linux Professional Institute</b>, per attestare le
        proprie competenze con una <b>certificazione riconosciuta internazionalmente</b>. Trovi il percorso completo,
        gli sbocchi occupazionali e il confronto fra i corsi nella <a data-umami-event="home_link_linux" href="linux.php">pagina dedicata</a>.
      </p>

      <?php catalogo_elenco('lpi'); ?>
    </div>
  </section>

  <section id="inizia" class="section-alt">
    <div class="container">
      <h2 class="section-title">Da dove comincio?</h2>

      <p class="section-lead text-center">
        Tre punti di partenza a seconda di dove sei adesso. Nessuno esclude gli altri: sono percorsi, non compartimenti.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-play-circle-o mr-2" aria-hidden="true"></i>Parto da zero</h5>
            <p class="card-text">
              Non hai mai usato Linux, o l'hai solo sfiorato. Si comincia dall'anatomia di una distribuzione
              e dalla riga di comando, senza pensare agli esami.
            </p>
            <ul class="icon-list">
              <li><a data-umami-event="home_percorso_zero_arch" href="arch.php">Arch Linux Per Comuni Mortali</a></li>
              <li><a data-umami-event="home_percorso_zero_linux" href="linux.php#dazero">Cerchi un approccio più graduale?</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-certificate mr-2" aria-hidden="true"></i>Voglio una certificazione</h5>
            <p class="card-text">
              Ti serve un attestato spendibile sul lavoro. Il percorso LPI parte da Linux Essentials
              e arriva a Linux System Administrator.
            </p>
            <ul class="icon-list">
              <li><a data-umami-event="home_percorso_lpi_corsi" href="linux.php#corsi">Scegli il tuo corso Linux</a></li>
              <li><a data-umami-event="home_percorso_lpi_percorso" href="linux.php#percorso">Il percorso formativo LPI</a></li>
              <li><a data-umami-event="home_percorso_lpi_lavoro" href="linux.php#lavoro">Sbocchi occupazionali</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-cubes mr-2" aria-hidden="true"></i>Linux lo so già usare</h5>
            <p class="card-text">
              Vuoi passare all'infrastruttura: container, virtualizzazione, orchestrazione.
              L'ordine consigliato è Docker, poi Proxmox e Kubernetes.
            </p>
            <ul class="icon-list">
              <li><a data-umami-event="home_percorso_infra_docker" href="docker.php">Docker Per Comuni Mortali</a></li>
              <li><a data-umami-event="home_percorso_infra_proxmox" href="proxmox.php">Proxmox Per Comuni Mortali</a></li>
              <li><a data-umami-event="home_percorso_infra_kubernetes" href="kubernetes.php">Kubernetes Per Comuni Mortali</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-umami-event="home_section_statistiche" id="statistiche" class="callout-flat">
    <div class="container text-center">
      <p class="mb-5">
        Unisciti agli oltre <b>quarantamila studenti</b> già iscritti ai miei corsi, costruisci solide basi e
        <b>inizia la tua carriera come professionista in un settore in rapida crescita!</b>
      </p>
      <div id="counters" class="row">
        <div class="col-lg-4 stats">
          <i class="fa fa-users" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $subs; ?>">0</div>
          <h5>Iscrizioni</h5>
        </div>
        <div class="col-lg-4 stats">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $lessons; ?>">0</div>
          <h5>Lezioni</h5>
        </div>
        <div class="col-lg-4 stats">
          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $reviews; ?>">0</div>
          <h5>Recensioni</h5>
        </div>
      </div>
    </div>
  </section>

  <section id="recensioni">
    <div class="text-center">
      <h2 class="section-title">Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel" data-interval="8000" style="width:100%;">
        <div class="carousel-inner col-sm-9 ml-auto mr-auto">

          <div class="carousel-item active">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              È stato un video corso molto utile nello studio contestuale della guida ufficiale. <br>
              Con il voucher fornito da Moreno ho usufruito di un piccolo sconto <br>
              per sostenere l’esame, che è andato alla grande. 
              Consigliato.              
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Chiara, studentessa "Linux Essentials"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Ottimo Corso!! Grazie Moreno di tutto.
              Ora ho capito e fatto mie tante nozioni che prima mi erano ostiche!!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Roberto, studente "LPIC 101"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Riesce a far comprendere in maniera semplice argomenti difficili. <br>Corso completo. Dà sempre una risposta esauriente ai quesiti posti.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Michele, studente "LPIC 102"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Docente preparatissimo e molto simpatico! Ho imparato molto senza annoiarmi un secondo!<br>
              Corso consigliatissimo per chi, come me, parte da zero!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Luca, studente "Arch Linux Per Comuni Mortali"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Ho trovato un sacco di cose che non sapevo e adesso ho tante idee per la testa che cercherò di realizzare. Grazie Moreno, è un corso davvero ben fatto.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Dog, studente "LPIC 102"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Il corso è stato splendido, divertente e anche molto più interessante di quanto mi aspettassi.<br>
              Questo perchè c'è passione in chi spiega e si nota! Penso proprio che continuerò con i prossimi corsi Linux :D
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Marco, studente "Linux Essentials"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Consiglio questo corso e lo metto nei preferiti. Morro ti trasmette la sua passione per Linux. <br>
              Il corso è conforme al 100% agli argomenti d'esame, e non solo, ogni tanto ti regala dei fuori programma.<br>
              P.S. l'esame l'ho passato.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Paolo, studente "LPIC 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Ottimo corso, piacevole da seguire. Morro ha una grande capacità divulgativa che si adatta<br>
               ad utenti con esperienza e a chi come me di esperienza ne ha da fare. <br>
              Mai troppo prolisso o troppo conciso, è l'equilibrio che caratterizza questo percorso: grazie Moreno.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Alessandro, studente "Arch Linux Per Comuni Mortali"</i></p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

        </div>
          <a style="margin-top: -3rem;" class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a style="margin-top: -3rem;" class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  </section>

  <?php include 'snippets/generic-faq.php';?>
  <?php include 'snippets/docente.php';?>
  <?php include 'snippets/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/common.js"></script>
  <script src="js/script.js"></script>
  <script src="js/home-anchors.js"></script>

</body>

</html>

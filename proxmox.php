<!DOCTYPE html>
<html lang="it">

<head>
  <script defer src="https://analytics.morrolinux.it/script.js" data-website-id="c3d595bf-aa00-4953-8d69-5e3b8878793a"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Chrome Mobile Top Bar Color-->
  <meta name="theme-color" content="#343a40" />

  <meta name="description" content="Proxmox Per Comuni Mortali è il modo più semplice per imparare Proxmox dalle basi senza essere sopraffatti dalla complessità.">

  <title>Proxmox Per Comuni Mortali | Corso Linux</title>
</head>

<body id="page-top">

  <?php

    //UDEMY STATS
    ini_set("allow_url_fopen", 1);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/6836885?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $PPCM_STATS = json_decode($json);

    $subs = $PPCM_STATS->num_subscribers;
    $reviews = $PPCM_STATS->num_reviews;
    $lessons = $PPCM_STATS->num_lectures;

  ?>

  <?php include 'snippets/promo-banner.php';?>
  <?php include 'snippets/udemy-coupons.php';?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger font-weight-light" href="index.php"><b>CorsoLinux</b>.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a data-umami-event="proxmox_navbar_corsi" class="nav-link js-scroll-trigger" href="#proxmox">Proxmox</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_faq" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>

          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="landing">
    <div class="bg"></div>
    <video style="filter: brightness(25%);" autoplay loop muted>
      <source src="assets/teaser-proxmox.mp4" width="100%">
    </video>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Impara Proxmox divertendoti</h1>
          <p class="lead">E prendi il controllo della tua infrastruttura!</p>
          <?php if($show_promo): ?>
            <a data-umami-event="proxmox_header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#proxmox"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="proxmox_header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#proxmox">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section> <!-- style="margin-top: -9rem;"> -->
    <div class="container text-center">
      <h2 id="proxmox" class="my-5">Perché imparare Proxmox</h2>
      <p class="mb-1 text-justify">

      Proxmox è una piattaforma di virtualizzazione <b>Open Source</b> incredibilmente <b>versatile e potente</b>, ma se non hai mai affrontato tematiche 
      come <i>storage distribuito, SDN</i> e <i>containerizzazione</i>, <b>potresti pensare che sia troppo difficile</b> e riservato solo a sysadmin esperti 
      e professionisti del settore.
      <br><br>
      </p>

      <p class="mb-1 text-center">
      Bene, io non la penso così. <br>
      Benvenuto su Proxmox Per Comuni Mortali. <br><br>
      </p>

      <p class="mb-1 text-justify">

      Questo corso è progettato per <i>homelabbers, sistemisti</i> e appassionati di informatica e <i>self-hosting</i> 
      che vogliono imparare a <b>gestire la propria infrastruttura</b> in maniera affidabile e <b>sicura</b>, senza downtime e senza perdite di dati.<br><br>
      Partendo dalle basi, ti guiderò attraverso la creazione della tua prima macchina virtuale fino al deploy su un <b>cluster in Alta Disponiblità</b> (HA). Insieme, vedremo anche implementare <b>backup automatici</b>, accessi controllati e misure di <i>sicurezza infrastrutturale</i> per un setup <b>a prova di ransomware</b>.
	    </p>
	  </div>

    <div class="container text-center" style="margin-top: 3rem;>
      <div class="card-deck row">
        <div class="col-md-6" style="margin: 10px auto;">
          <a data-umami-event="proxmox_goto_Proxmox" class="invisible-link" href="<?php echo $PPCM; ?>">
            <div class="card">
              <img src="assets/proxmox-per-comuni-mortali-notext.png" class="card-img-top" alt="Copertina corso Proxmox Per Comuni Mortali" title="Proxmox Per Comuni Mortali">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Proxmox Per Comuni Mortali</h3>
                <p class="card-text">
                  Questo corso adatto a tutti ti guiderà passo passo nella <b>gestione di una infrastruttura IT</b>, dal semplice <i>nodo singolo</i> al <i>cluster iperconvergente</i> in Alta Disponiblità.<br><br>

                  Dopo ogni lezione, potrai replicare quanto visto nel tuo <i>homelab</i> o <i>in azienda</i>, per mettere in produzione servizi in modo <b>sicuro e affidabile</b> sulla tua infrastruttura.<br><br>

                  L'obbiettivo di questo è migliorare le tue skill sistemistiche integrando competenze professionali spendibili lavorativamente.<br><br>
                </p>
                <?php if($show_promo): ?>
                <a data-umami-event="proxmox_goto_proxmox_SPECIAL_OFFER" title="Proxmox Per Comuni Mortali" href="<?php echo $PPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="proxmox_goto_Proxmox" title="Proxmox Per Comuni Mortali" href="<?php echo $PPCM; ?>" class="btn btn-primary mt-auto"><b>Vai al corso</b></a>
                <?php endif ?>

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </section>

  <!--
  <section id="recensioni">
    <div class="text-center">
      <h2>Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel" data-interval="8000" style="width:100%; height: 130px !important;">
        <div class="carousel-inner col-sm-9 ml-auto mr-auto">

          <div class="carousel-item active">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Tutti nell'Internet sanno già che Morro è molto bravo a spiegare le cose e anche questa volta non si smentisce.<br> 
              Il contenuto del corso è molto utile nei casi reali.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Michele, studente "Docker Per Comuni Mortali"</i></p>
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
              Corso molto interessante. Cercavo una panoramica su Docker ma qui trovo molto di più di quello che mi serve.<br>
              Complimenti anche al docente che è davvero molto preparato ed espone con una giusta tempistica.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Stefano, studente "Docker Per Comuni Mortali"</i></p>
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
              Tanta qualità in ogni aspetto. C’è molto lavoro personale nel esporre determinati argomenti rendendoli semplici ma allo stesso tempo rimanendo professionale
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Giuseppe, studente "Docker Per Comuni Mortali"</i></p>
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
              Ringrazierò sempre moreno, grazie alla sua passione e alla sua dote innata nello spiegare 
              in modo semplice, conciso ed efficace ho potuto inserirmi in un contesto lavorativo estremamente innovativo!
              ho comprato tutti i suoi corsi e comprerò qualsiasi suo corso in futuro!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Ivan, studente "Docker Per Comuni Mortali"</i></p>
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
              Spiegazione lineare e comprensibile. Animazioni che aiutano la comprensione
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>610v4nn1, studente "Docker Per Comuni Mortali"</i></p>
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
              Morro si conferma un insegnate fantastico; chiaro, preciso e con la capacità di tenere alta l'attenzione.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Alessio, studente "Docker Per Comuni Mortali"</i></p>
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
              Corso molto esaustivo per il primo approccio ai container. Il docente è molto preparato e coinvolgente nella spiegazione.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Enrico, studente "Docker Per Comuni Mortali"</p>
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
              Moreno è un istruttore fantastico, spiega concetti complessi rendendoli chiari e fruibili, il tutto in modo piacevole e accogliente.<br> 
              Devo tutto a lui la mia passione per l'Open Source e Linux. Il primo step della LPIC essentials l'ho passato grazie al suo corso, <br>
              il migliore tra tutti quelli trovati in rete.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i>Patrizio, studente "Docker Per Comuni Mortali"</i></p>
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
  -->

  <section id="batterie" style="margin-top: -6rem;">
    <div class="container text-center">
      <h2 class="my-5">BATTERIE INCLUSE</h2>
      <p class="mb-2 text-justify">

      Qui imparerai tutto ciò che c'è da sapere su Proxmox, dalla gestione di un singolo nodo fino al cluster <i>iperconvergente</i> in <i>Alta Disponiblità</i> (HA) seguendo tutte le <b>best practice</b>.<br><br>

      Non tralasceremo proprio niente: dalla <b>sicurezza infrastrutturale</b> alla gestione di utenti e ruoli secondo il <i>principio del minimo privilegio</i>, oltre ai backup automatici secondo la <i>regola 3-2-1</i> con <b>Proxmox Backup Server</b> (PBS).<br><br>

      Allegato a ciascuna lezione troverai <b>link per approfondire</b> e risorse utilizzate. Inoltre, potrai verificare il tuo apprendimento tramite gli appositi <b>quiz di fine capitolo</b>.<br><br>

      A differenza dei corsi più avanzati, il focus è sull'accessibilità e la comprensione. <i>Il tono è discorsivo e rilassato</i>, ogni argomento viene trattato quando più opportuno e approfondito successivamente negli appositi capitoli.
      <br><br>
      </p>
  </section>

  <!--
  <section data-umami-event="proxmox_section_statistiche" id="statistiche" style="background-color: #2495ed">
    <div class="container text-center">
    <h2>Numeri che parlano<br></h2>
      <p class="mb-5">
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
  -->


  <?php include 'snippets/generic-faq.php';?>
  <?php include 'snippets/corsi-per-comuni-mortali.php';?>
  <?php include 'snippets/corsi-per-certificazioni.php';?>
  <?php include 'snippets/docente.php';?>
  <?php include 'snippets/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/docker_script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

  
</body>

</html>

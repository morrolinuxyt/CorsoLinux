<!DOCTYPE html>
<html lang="it">

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

  <meta name="description" content="Docker Per Comuni Mortali è il modo più semplice per imparare Docker dalle basi senza essere sopraffatti dalla complessità.">

  <title>Impara Linux: il corso bestseller in italiano di Morrolinux | Corso Linux</title>
</head>

<body id="page-top">

  <?php

    //UDEMY STATS
    ini_set("allow_url_fopen", 1);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/6190731?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $DPCM_STATS = json_decode($json);

    $subs = $DPCM_STATS->num_subscribers;
    $reviews = $DPCM_STATS->num_reviews;
    $lessons = $DPCM_STATS->num_lectures;

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
            <a data-umami-event="docker_navbar_corsi" class="nav-link js-scroll-trigger" href="#docker">Docker</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="docker_navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="docker_navbar_faq" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="docker_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>

          <li class="nav-item">
            <a data-umami-event="docker_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="landing">
    <div class="bg"></div>
    <video style="filter: brightness(25%);" autoplay loop muted>
      <source src="assets/teaser-docker.mp4" width="100%" media="(min-width: 600px)">
      <source src="assets/teaser-docker-mobile.mp4" width="100%">
    </video>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Impara Docker divertendoti</h1>
          <p class="lead">Familiarizza con Docker senza temere la complessità!</p>
          <?php if($show_promo): ?>
            <a data-umami-event="docker_header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#docker"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="docker_header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#docker">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section> <!-- style="margin-top: -9rem;"> -->
    <div class="container text-center">
      <h2 id="docker" class="my-5">Perché imparare Docker</h2>
      <p class="mb-1 text-justify">

      Docker è uno strumento <b>potente</b> e versatile, in grado di <b>semplificare</b> i processi di <i>sviluppo</i>, <i>distribuzione</i> e <i>manutenzione</i> del software. 
      Ma se non hai mai affrontato la <i>containerizzazione</i>, potresti pensare che sia riservato solo a sistemisti, sviluppatori esperti e "addetti ai lavori".
      <br><br>
      </p>

      <p class="mb-1 text-center">
      Bene, io non la penso così. <br>
      Benvenuto su Docker Per Comuni Mortali. <br><br>
      </p>

      <p class="mb-1 text-justify">
      Questo corso è progettato per <b>sviluppatori</b>, <b>sistemisti</b> e appassionati di informatica e <b>self-hosting</b> che vogliono imparare Docker tramite esempi pratici e concreti. 
      Partendo dalle basi, ti guiderò attraverso la <b>creazione delle tue prime immagini</b>, la <b>gestione dei container</b> e la <b>distribuzione</b> delle tue applicazioni senza la complessa gestione delle dipendenze o di complicate configurazioni.<br><br>
	    </p>
	  </div>

    <div class="container text-center">
      <div class="card-deck row">
        <div class="col-md-6" style="margin: 10px auto;">
          <a data-umami-event="docker_goto_Docker" class="invisible-link" href="<?php echo $DPCM; ?>">
            <div class="card">
              <img src="assets/docker-per-comuni-mortali-notext.png" class="card-img-top" alt="Copertina corso Docker Per Comuni Mortali" title="Docker Per Comuni Mortali">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Docker Per Comuni Mortali</h3>
                <p class="card-text">
                  Questo corso si rivolge a chi ha <b>poca o nessuna esperienza</b> e vuole imparare Docker con un approccio pratico e stimolante.<br><br>

                  Affronteremo <b>teoria e pratica</b>, con animazioni ed esempi concreti che potrai applicare in tutti i tuoi progetti di sviluppo o self-hosting per semplificare il tuo modo di lavorare.<br><br>

                  L'obbiettivo di questo corso è rendere Docker alla portata di tutti riducendo il più possibile la curva di apprendimento.<br><br>
                </p>
                <?php if($show_promo): ?>
                <a data-umami-event="docker_goto_Docker_SPECIAL_OFFER" title="Docker Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="docker_goto_Docker" title="Docker Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-primary mt-auto"><b>Vai al corso</b></a>
                <?php endif ?>

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </section>

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

  <section id="batterie" style="margin-top: -3rem;">
    <div class="container text-center">
      <h2 class="my-5">BATTERIE INCLUSE</h2>
      <p class="mb-2 text-justify">

      Qui imparerai tutto ciò che c'è da sapere su Docker e l'ecosistema dei <i>container OCI</i> tramite <b>spiegazioni semplici</b> ed esempi.
      <br><br>

      Esploreremo Docker con un <b>approccio pratico</b>: dopo aver spiegato le basi, <b>ogni lezione sarà costruita intorno a un mini progetto funzionante</b>, e ti illustrerò ogni dettaglio rilevante strada facendo.<br><br>

      Allegato a ciascuna lezione troverai <b>codice</b> e risorse utilizzate, <b>appunti riassuntivi</b> e link di approfondimento, e potrai verificare il tuo apprendimento tramite gli appositi <b>quiz di fine capitolo</b>.<br><br>

      A differenza dei corsi più avanzati, il focus è sull'accessibilità e la comprensione. <i>Il tono è discorsivo e rilassato</i>, ogni argomento viene trattato quando più opportuno e approfondito successivamente negli appositi capitoli.
      <br><br>
      </p>
  </section>

  <section data-umami-event="docker_section_statistiche" id="statistiche" style="background-color: #2495ed">
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

  <?php include 'snippets/corsi-per-comuni-mortali.php';?>
  <?php include 'snippets/corsi-per-certificazioni.php';?>
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
  <script src="js/docker_script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

  
</body>

</html>

<!DOCTYPE html>
<html lang="it">

<head>
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

    // SHOW PROMO BANNER?
    // promo.json example: {"promo_str": "Offerta a tempo limitato!<br>Tutti i corsi in <b>offerta speciale</b> a 9,99 €<br>termina venerdì 8 marzo", "expire_date": "07-03-2024 23:59:59"}
    $show_promo = false;
    if (file_exists('promo.json')){
      $json_data = file_get_contents('promo.json');
      $data = json_decode($json_data, true);

      $promo_str = $data["promo_str"];
      $promo_expire_date = strtotime($data["expire_date"]);
      $now = date(time());

      if ($now <= $promo_expire_date && $promo_str != "") {
        $show_promo = true;
      }

      $promo_cta_text = "Vai all'offerta!";
    } 

    //UDEMY COUPONS
    $archlinux = $DPCM = "";

    $json_data = file_get_contents('udemy_coupons.json');
    $data = json_decode($json_data, true);

    $DPCM = $data["Docker"];
    $archlinux = $data["Arch"];

    if(empty($archlinux)){
      $archlinux = "https://www.udemy.com/course/arch-linux-per-comuni-mortali/?referralCode=34016D9C6656A83ABF5D";
    }
    if(empty($DPCM)){
      $DPCM = "https://www.udemy.com/course/docker-per-comuni-mortali/?referralCode=6E99545A195DEC330347"; // TODO: check if this is correct
    }

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
            <a data-umami-event="docker_navbar_corsi" class="nav-link js-scroll-trigger" href="#docker">Docker</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="docker_navbar_faq" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="docker_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <!--
          <li class="nav-item">
            <a data-umami-event="docker_navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          -->
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
                <a data-umami-event="docker_goto_Docker_SPECIAL_OFFER" title="Arch Linux Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="docker_goto_Docker" title="Arch Linux Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
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
-->
  
<!--
  <section id="lavoro" style="margin-top: -3rem;">
    <div class="container text-center">

      <h2 class="my-5">SBOCCHI OCCUPAZIONALI</h2>
      <p class="my-5 text-justify">
        Secondo l'<a data-umami-event="docker_link_OSJB" target="_blank" href="https://www.linuxfoundation.org/tools/the-2021-open-source-jobs-report/">Open Source Jobs Report 2021</a>, 
        il 97% dei responsabili delle assunzioni indica 
        <b>assumere talenti Open Source</b> come una priorità e il 92% afferma di riscontrare difficoltà 
        nel reperire personale qualificato.
        L'88% dei responsabili intervistati ha dichiarato di prioritizzare l'assunzione 
        di <b>professionisti certificati</b> per svolgere il lavoro ed il 39% delle aziende dichiara di aver fornito 
        maggiori <b>aumenti salariali</b> rispetto ad altre aree di business come forma di ritenzione del personale.
        Tra le competenze Open Source più richieste, Linux risulta al secondo posto con il 32% di domanda complessiva,
        surclassato soltanto dalle tecnologie <b>Cloud</b> per cui <i>Linux è tipicamente un prerequisito</i>.
        Il dominio di applicazione delle competenze Linux e Open Source più in generale non è limitato 
        all'amministrazione di sistemi e infrastrutture IT: Un numero sempre crescente di aziende sta adottando
        approcci e metodologie <b>DevOps</b> richiedendo agli sviluppatori software competenze trasversali in ambito sistemistico 
        o di sviluppo sulla piattaforma.
      </p>

      <div id="lf-statistics" class="container text-center">
        <div class="row">

          <div style="line-height:50%;" class="col-lg-4 stats doughnut" id="statsChart1" value="97" color="#6960C4" desc="dei responsabili delle assunzioni indica assumere <b>talenti Open Source</b> come una priorità">
          </div>

          <div style="line-height:50%;" class="col-lg-4 stats doughnut" id="statsChart2" value="92" color="#F4BD47" desc="afferma di riscontrare <b>difficoltà nel reperire personale</b> qualificato da mettere sul campo">
          </div>

          <div style="line-height:50%;" class="col-lg-4 stats doughnut" id="statsChart3" value="88" color="#D1509F" desc="dei responsabili intervistati ha dichiarato di prioritizzare l'assunzione di <b>professionisti certificati">
          </div>

        </div>
      </div>

      <br><br><br>
      <div id="video_lpi" class="yt_video">
        <iframe src="https://www.youtube-nocookie.com/embed/N-7Uan8tML0?rel=0" frameborder="0" allowfullscreen></iframe><br /><br />
      </div>
    </div>
  </section>

  <section data-umami-event="docker_section_statistiche" id="statistiche">
    <div class="container text-center">
      <p class="mb-5">
        Unisciti agli oltre novemila studenti già iscritti al <b>corso bestseller italiano su Linux</b>, costruisci solide basi e <b>inizia la tua carriera come professionista in un settore in rapida crescita!</b>
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


  <section id="batterie" style="margin-top: -9rem;">
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

  <section id="corsi">
    <div class="container" style="margin-top: -9rem;">
      <h2 class="mb-5 text-center">Scopri tutti i corsi Per Comuni Mortali</h2>
      <p class="mb-2 text-justify">
        La linea "Per Comuni Mortali" è pensata per <b>rendere accessibili a tutti anche i concetti più tecnici.</b> <br>
        A differenza degli altri corsi, gli argomenti vengono trattati in un ordine più naturale all'apprendimento, <b>introducendo i concetti chiave al momento del bisogno</b>, anzichè seguire il classico approccio "a compartimenti stagni" tipico della didattica vecchia scuola. <br>
        Se ti piace questo stile di insegnamento, non puoi perderti gli altri miei corsi Per Comuni Mortali!
        <br><br><br>
      </p>

    <div class="card-deck"> 
      <a data-umami-event="docker_goto_Arch_INVISIBLE" class="invisible-link" href="<?php echo $archlinux; ?>">
          <div class="card">
            <img src="assets/arch-linux-per-comuni-mortali.png" class="card-img-top" alt="Copertina corso Arch Linux Per Comuni Mortali" title="Arch Linux Per Comuni Mortali">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Arch Linux Per Comuni Mortali</h3>
              <p class="card-text">
                Questo corso si rivolge a chi ha poca o nessuna esperienza e vuole imparare Linux su una distribuzione fresca, <b>stimolante</b> e sfidante al punto giusto.<br><br>

                Ti insegnerò <b>teoria e pratica</b>, con illustrazioni animate ed esempi concreti che potrai applicare alla tua installazione per ottenere il massimo dalla tua distro preferita.<br><br>

                L'obbiettivo di questo corso è rendere la curva di apprendimento meno ripida possibile per tutti i nuovi utenti.<br><br>
              </p>
              <?php if($show_promo): ?>
              <a data-umami-event="docker_goto_Arch_SPECIAL_OFFER" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="docker_goto_Arch" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>

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
              <a data-umami-event="docker_goto_Docker_SPECIAL_OFFER" title="Arch Linux Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="docker_goto_Docker" title="Arch Linux Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
    </div>
    </div>
  </section>


  <section id="faq" style="margin-top: -3rem;">
    <div class="container">
      <h2 class="my-5 text-center">FAQ - Domande Frequenti</h2>
      <div class="tab-content" id="faq-tab-content">
        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
            <div class="accordion" id="accordion-tab-1">

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                              Dove si svolge il corso?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
			      Il corso si svolge completamente <b>on-line</b> in modalità <b>on-demand</b>: 
			      potrai seguire le lezioni comodamente da casa e quando vuoi. <br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-9">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-9" aria-expanded="false" aria-controls="accordion-tab-1-content-9">
			      Quanto dura l'accesso al corso?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-9" aria-labelledby="accordion-tab-1-heading-9" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
			      Una volta acquistato, <b>il corso è tuo per sempre</b>:
			      potrai studiare con calma e tornare quando vuoi per ripassare.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-2">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                              A chi posso rivolgermi in caso di dubbi?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Il docente è sempre a disposizione nella sezione "Domande e Risposte" del corso per qualsiasi domanda inerente al corso.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-6">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-6" aria-expanded="false" aria-controls="accordion-tab-1-content-6">
                              Dove trovo l'argomento X?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-6" aria-labelledby="accordion-tab-1-heading-6" data-parent="#accordion-tab-1">
                        <div class="card-body">
			    <p>
				Puoi trovare l'elenco degli argomenti trattati in ciascun corso nella scaletta della relativa pagina di presentazione prima dell'acquisto.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-8">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-8" aria-expanded="false" aria-controls="accordion-tab-1-content-8">
                              Il corso è fruibile anche offline?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse " id="accordion-tab-1-content-8" aria-labelledby="accordion-tab-1-heading-8" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Il corso è sempre disponibile offline su dispositivi iOS e Android. Tramite l'app potrai scaricare i video per vederli sucessivamente offline.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>

  </section>


  <section style="margin-top: -9rem;">
    <div class="container text-center">
      <h2 id="docker" class="my-5">Corsi orientati alle certificazioni</h2>
      <p class="mb-1 text-justify">
        Le certificazioni professionali sono il miglior modo per facilitare l'inserimento lavorativo, attestare competenze già acquisite, o appianare le tipiche lacune della formazione autodidatta.<br>
        Scopri di più sulle certificazioni ufficiali <b>Linux Professional Institute</b> (LPI) in <a href="https://corsolinux.com"> questa pagina</a>.
	    </p>
	  </div>
  </section>

  <section id="docente" style="margin-top: -6rem;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center my-5">IL DOCENTE<br>
            <a href="https://www.linkedin.com/in/morenorazzoli/" target="_blank"><i class="fa fa-linkedin-square mx-2" aria-hidden="true" style="color:#3c5a99;"></i></a>
            <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true" style="color:#00acee;"></i></a>
            <a href="https://telegram.me/morrolinux_feed" target="_blank"><i class="fa fa-comment mx-2" aria-hidden="true" style="color:#0088cc;"></i></a>
          </h2>
          <img class="avatar float-left rounded-circle mr-4" src="assets/docente-corso-linux-moreno-razzoli.jpg" alt="avatar docente corso linux: Moreno Razzoli" title="Docente del corso Linux: Moreno Razzoli">
          <div class="text-center my-5 socials">

          </div>
          <p>
                        Mi chiamo <b>Moreno Razzoli</b>,<br>
                        Sono laureato in Scienze Informatiche, ho conseguito le certificazioni Linux <b>LPI</b>, <b>CompTIA Linux+</b>, <b>Suse CLA</b>
                        e sono un <b>Training Partner autorizzato</b> Linux Professional Institute.<br>
                        Ho realizzato diversi <a href="https://morrolinux.it/progetti">progetti Open Source</a>,
                        contribuito ad altrettanti progetti già avviati su GitHub e
                        realizzo <b>video didattici dal 2008</b> su <a href="https://www.youtube.com/user/morrolinux/">YouTube</a>.
          </p>
          <p>
                        <b><br>Credo nella formazione di qualità.</b><br>
                        Saper trasmettere le proprie competenze in modo efficace è importante tanto quanto avere delle competenze in primo luogo.
                        Durante il mio corso di studi ho imparato che essere massimo esperto di qualcosa non ti rende automaticamente capace di insegnare.<br><br>

                        Numerosi studi hanno dimostrato che il picco dell'attenzione dura soltanto 15 minuti, perciò <b>non sprecherò il tuo tempo prezioso</b>
                        con inutili giri di parole e prolissi monologhi.
                        Ho uno stile molto diretto: mi piace andare dritto al punto, accompagnando le spiegazioni con <b>esempi pratici ed efficaci</b>.<br><br>

                        Insegnare non significa recitare un elenco di nozioni sparse:
                        è importante collocare ogni argomento come un tassello al proprio posto e dare allo studente una <b>visione d'insieme</b> sulla disciplina.<br><br>

                        Se condividi i miei valori sono sicuro che apprezzerai i miei corsi.

          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container footer">
      <p class="m-0 text-center text-white">
        Made with ❤️ by <a href="https://github.com/r-carissimi" target="_blank">Riccardo Carissimi</a> <br>
        <a style="opacity:0.5;color:white;" href="https://it.freepik.com/vettori/infografica">Infografica vettore creata da pikisuperstar - it.freepik.com</a><br>
        Parte del progetto <a href="https://morrolinux.it">morrolinux.it</a><br><br>
        <a href="https://github.com/morrolinuxyt/CorsoLinux" target="_blank"><i class="fa fa-github-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-square mx-2" aria-hidden="true"></i></a>
        <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/user/morrolinux/" target="_blank"><i class="fa fa-youtube-square mx-2" aria-hidden="true"></i></a>
        <br>
        <br>
        <a style="opacity:0.5;color:white;" >Moreno Razzoli<br>P.IVA IT04063670360</a> <br>
        <a style="opacity:0.5;color:white;" target="_blank" href="http://morrolinux.it/privacy_policy" title="Privacy Policy">Privacy Policy</a>
        <br>
      </p>

    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

  <script type="text/javascript">
            document.getElementById("altre_testimonianze").style.display = "none";
            function hideMyDiv(){
              document.getElementById("altre_testimonianze").style.display = "block";
              document.getElementById("testimonials_load_more").style.display = "none";
            }
  </script>
  
</body>

</html>

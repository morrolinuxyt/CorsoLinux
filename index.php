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

  <meta name="description" content="Ottieni la certificazione Linux e inizia la tua carriera come professionista IT in un settore in rapida crescita grazie al corso bestseller italiano su Linux. Scopri la nostra selezione di corsi ideati su misura per te!">

  <title>Impara Linux: il corso bestseller in italiano di Morrolinux | Corso Linux</title>
</head>

<body id="page-top">

  <?php

    //UDEMY STATS
    ini_set("allow_url_fopen", 1);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/1705118?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $lpic101 = json_decode($json);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/1894304?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $lpic102 = json_decode($json);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/1912136?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $essentials = json_decode($json);

    $subs = $lpic101->num_subscribers + $lpic102->num_subscribers + $essentials->num_subscribers;

    $reviews = $lpic101->num_reviews + $lpic102->num_reviews + $essentials->num_reviews;

    $lessons = $lpic101->num_lectures + $lpic102->num_lectures + $essentials->num_lectures;


  ?>

  <?php include 'snippets/promo-banner.php';?>
  <?php include 'snippets/udemy-coupons.php';?>

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
            <a data-umami-event="navbar_docker" class="nav-link js-scroll-trigger" href="#docker">Docker</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_corsi" class="nav-link js-scroll-trigger" href="#corsi">Linux</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_lavoro" class="nav-link js-scroll-trigger" href="#lavoro">Lavoro</a>
          </li>
          <!-- <li class="nav-item">
            <a data-umami-event="navbar_esame" class="nav-link js-scroll-trigger" href="#esame">Esame</a>
          </li> -->
          <li class="nav-item">
            <a data-umami-event="navbar_compara" class="nav-link js-scroll-trigger" href="#compara">Compara</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="landing">
    <div class="bg"></div>
    <video src="assets/landing_video.mp4" autoplay loop muted></video>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Il corso bestseller italiano su Linux</h1>
          <p class="lead">inizia la tua carriera come professionista in un settore in rapida crescita!</p>
          <?php if($show_promo): ?>
            <a data-umami-event="header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#corsi"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#docker">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section id="docker" tyle="margin-top: -9rem; margin-bottom: -12rem;">
    <div class="container text-left">
      <div class="card mb-3" style="margin-top: 2rem;"> <!-- style="max-width: 540px;"> -->
      <div class="row no-gutters">
          <div class="col-md-4">
          <a data-umami-event="goto_docker_INVISIBLE" class="invisible-link" href="<?php echo $DPCM; ?>">
            <img src="assets/docker-per-comuni-mortali-notext.png" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><b>Qualcuno ha detto Docker?</b></h5>
              <p class="card-text text-left">
                <br> Docker Per Comuni Mortali si rivolge a chi ha <b>poca o nessuna esperienza</b> e vuole imparare con un <b>approccio pratico</b> e stimolante... <a data-umami-event="goto_docker-page" href="docker.php">Leggi di più</a><br>
              </p>
              <a data-umami-event="goto_docker" href="<?php echo $DPCM; ?>" class="btn btn-primary mt-auto"><b>Vai al corso</b></a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section style="margin-top: -9rem;"> 
    <div class="container text-center">
      <h2 id="corsi" class="my-5">SCEGLI IL TUO CORSO LINUX</h2>
      <p class="mb-1 text-justify">
		Qualunque sia il tuo livello di partenza e il tuo obiettivo, in questa pagina troverai il corso che fa per te. <br>
		Ciascuna delle seguenti schede è relativa ad un corso di <b><a data-umami-event="link_intro_LPI" class="js-scroll-trigger" href="#lpi">certificazione LPI</a></b>.
		Consulta <a data-umami-event="link_percorso" class="js-scroll-trigger" href="#percorso"> questo diagramma</a> e guarda il <a data-umami-event="link_LPI_video" class="js-scroll-trigger" href="#video_lpi"> video dedicato</a> per saperne di più sul percorso formativo completo.
		<br><br>
        <b>Se parti da zero</b> e non ti interessano le certificazioni professionali, ti consiglio di cominciare con un <a data-umami-event="link_dazero" class="js-scroll-trigger" href="#dazero">approccio più graduale</a>.
        <br>
        <b>Se non sai scegliere</b> il corso più adatto a te, leggi questa breve <a data-umami-event="link_compara" class="js-scroll-trigger" href="#compara"> comparativa</a> e sarà tutto più chiaro :)
		<br><br><br>
	  </p>
	</div>

    <?php include 'snippets/schede-corsi-lpi.php';?>

  </section>

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
  <!---
  <section id="why" style="margin-top: -9rem;">
    <div class="container text-center">
      <h2 class="my-5">PERCHÈ IMPARARE LINUX?</h2>
      <p class="my-5 text-justify">
        Grazie alla sua grande versatilità e snellezza, GNU/Linux può funzionare su qualunque genere di dispositivo, scalando verticalmente <span class="keeptogether">dal <i>server</i> in un <i>datacenter</i></span> al router multifunzione domestico. 
        Non è quindi un caso che Linux sia oggi lo <b>standard "de facto"</b> su innumerevoli dispositivi per le più disparate applicazioni, dai sistemi di <i>infotainment</i> in ambito <i>automotive</i> all'<b>IoT</b> e alla <b>domotica</b>. Linux è nei nostri smartphone e perfino nei nostri <b>elettrodomestici</b>, senza tralasciare il suo <b>importante ruolo nei sistemi industriali di ultima generazione</b>. 
        <br>Per questo motivo <b>la sua conoscenza è un requisito </b>per una vastissima varietà di ambiti tecnologici e posizioni lavorative.<br>
        Linux è anche molto in voga tra hobbisti e makers grazie alla popolarità di piattaforme di sviluppo <i>embedded</i> come <b>Raspberry Pi</b>, per la realizzazione di progetti "fai da te" spesso in accoppiata con Arduino.
      </p>
    </div>
  </section>
  --->

  <section id="lavoro" style="margin-top: -3rem;">
    <div class="container text-center">

      <h2 class="my-5">SBOCCHI OCCUPAZIONALI</h2>
      <p class="my-5 text-justify">
        Secondo l'<a data-umami-event="link_OSJB" target="_blank" href="https://www.linuxfoundation.org/tools/the-2021-open-source-jobs-report/">Open Source Jobs Report 2021</a>, 
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

  <section data-umami-event="section_statistiche" id="statistiche">
    <div class="container text-center">
      <p class="mb-5">
        Unisciti agli oltre ventimila studenti già iscritti al <b>corso bestseller italiano su Linux</b>, costruisci solide basi e <b>inizia la tua carriera come professionista in un settore in rapida crescita!</b>
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


  <section id="esame" style="margin-top: -6rem;">
    <div class="container text-center">
        <h2 class="my-5"><br>Il tuo successo è il mio successo.</h2>
        <p class="mb-2 text-center">
          Guarda questo video con i miei consigli su come <b>affrontare al meglio l'esame</b> di certificazione:
        </p>
        <br><br>
        <div class="yt_video">
          <iframe src="https://www.youtube-nocookie.com/embed/uH5UxNDhEgw?rel=0" frameborder="0" allowfullscreen></iframe><br /><br />
      </div>
    </div>

    <br>
    <div class="container text-center">
      <div class="my-5" style="padding: 1em; background:#FEC224;">
          <h2>Pronto per l'esame?</h2>
          <p  class="mb-2 text-center">
            <br>
            Tutti i miei studenti hanno diritto ad uno speciale <b>COUPON</b> per affrontare l'esame ad un prezzo molto vantaggioso.
            Compila questo modulo per ottenere subito la riduzione: 
          </p>
          <br>
          <a data-umami-event="coupon_request_LPI" target="_blank" style="margin: 0 auto;" href="https://budibase.morrolinux.it/app/lpi-form" class="btn btn-primary mt-auto js-scroll-trigger">Richiedi il tuo COUPON</a>
        </div>
    </div>
  </section>


  <section id="testimonianze">
    <div class="container" style="margin-top: -6rem; margin-bottom: -3rem;">
      <h2 class="mb-5 text-center">TESTIMONIANZE</h2>
      <p class="text-justify">
      Una domanda che ricevo spesso: 
      <blockquote>
        <p>il video corso è davvero sufficiente per superare l'esame?</p>
        <footer><cite><b>Assolutamente sì!</b></cite></footer>
      </blockquote>
      <br>
      In qualità di <b>training partner autorizzato</b> della Linux Professional Institute (LPI)
      è mio compito garantire la <b>piena copertura</b> degli obbiettivi d'esame e mantenere il corso <b>sempre aggiornato</b>.<br><br>
      Per levare ogni dubbio, ti lascio alcune testimonianze dei miei studenti.
      </p>
      <div class="testimonial">
        <img class="rounded-corners" src="assets/testimonianze/Michele-LE.png" width="100%">
      </div>

      <div class="testimonial">
          <img class="rounded-corners" src="assets/testimonianze/Fil-LPIC-1.png" width="100%">
        </div>

      <div class="testimonial">
        <img class="rounded-corners" src="assets/testimonianze/Ruggiero-LE.png" width="100%">
      </div>

      <div id="altre_testimonianze">
        <div class="testimonial">
          <img class="rounded-corners" src="assets/testimonianze/Ivan-LPIC-1.png" width="100%">
        </div>

      <div class="testimonial">
        <img class="rounded-corners" src="assets/testimonianze/Matteo-LE.png" width="100%">
      </div>

        <div class="testimonial">
          <img class="rounded-corners" src="assets/testimonianze/Odo-LPIC-1.png" width="100%">
        </div>
      </div>

      <div class="mb-5 text-center">
        <br>
          <button id="testimonials_load_more" data-umami-event="testimonials_load_more" class="text-center btn btn-primary mt-auto js-scroll-trigger" onclick="hideMyDiv()">Carica ancora</button> 
      </div>

    </div>
  </section>

  <section id="lpi" style="margin-top: -9rem;">
    <div class="container text-center">
      <h2 class="my-5">BATTERIE INCLUSE</h2>
      <p class="mb-2 text-justify">
        Qui imparerai tutto ciò che c'è da sapere su GNU/Linux e l'ecosistema Open Source tramite <b>spiegazioni approfondite</b> e comprensibili ed <b>esempi pratici</b> ad accompagnare ogni concetto teorico.
        <br><br>
        Al termine, se vorrai, potrai affrontare gli esami ufficiali di <b><a data-umami-event="link_LPI_exams" target=”_blank” href="https://www.lpi.org/it">Linux Professional Institute</a></b>
        e conseguire una <b>certificazione professionale riconosciuta internazionalmente</b>.<br><br>

        I corsi a marchio LPI (<b>Linux Professional Institute</b>) sono realizzati appositamente <b>per l'inserimento lavorativo</b> in ambito professionale 
        e seguono fedelmente il programma di certificazione ufficiale: ti fornirò la giusta preparazione per superare ogni test, <b>non sono necessarie risorse aggiuntive!</b>  
        <br><br>
        Consulta le <a data-umami-event="link_FAQ" class="js-scroll-trigger" href="#faq">FAQ</a> e il <a data-umami-event="link_LPI_video" class="js-scroll-trigger" href="#video_lpi"> video dedicato</a> per saperne di più. 
        <!-- Se parti da zero</b> e non ti interessano le certificazioni professionali, ti consiglio di cominciare con un <a href="#dazero">approccio più graduale</a>. --->
        <br><br><br><br>
      </p>

    <div class="container text-center">
      <div class="card-deck">
      <a data-umami-event="goto_LE_late_INVISIBLE" class="invisible-link" href="<?php echo $essentials; ?>">
          <div class="card">
            <img src="assets/corso-lpi-linux-essentials-cover.jpg" class="card-img-top" alt="Copertina corso LPI Linux Essentials" title="Corso per certificazione LPI Linux Essentials online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Linux Essentials</h3>
              <p class="card-text">
                Il corso LPI Linux Essentials parte "da zero" e introduce a GNU/Linux e al mondo dell'Open Source.<br><br>
                Si rivolge ad un pubblico di utenti alle prime armi con Linux, ma anche a chi ha qualche lacuna da appianare.<br><br>
                Il programma completo del corso è diviso in 5 sezioni, e spazia su tutti gli aspetti generali di una distribuzione Linux.<br><br>
              </p>

              <?php if($show_promo): ?>
              <a data-umami-event="goto_LE_late_SPECIAL_OFFER" title="Corso LPI Linux Essentials" href="<?php echo $essentials; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="goto_LE_late" title="Corso LPI Linux Essentials" href="<?php echo $essentials; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
        <a data-umami-event="goto_LPIC-1_late_INVISIBLE" class="invisible-link" href="<?php echo $e101; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-101-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 101" title="Corso per certificazione LPIC-1 esame 101">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 101</h3>
              <p class="card-text">
                LPIC-1 è il corso di certificazione professionale LPI di primo livello.<br><br>
                Partendo dalle conoscenze di base, arriverai a conoscere Linux in ogni suo aspetto,
                dalla diagnostica dei problemi più comuni all'amministrazione di Server e PC Desktop.<br><br>
                Questo corso parte dalle basi, ma si rivolge ad una utenza leggermente più consapevole.<br><br>
              </p>

              <?php if($show_promo): ?>
              <a data-umami-event="goto_LPIC-101_late_SPECIAL_OFFER" title="Corso LPIC-1 | Exam 101" href="<?php echo $e101; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="goto_LPIC-101_late" title="Corso LPIC-1 | Exam 101" href="<?php echo $e101; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
        <a data-umami-event="goto_LPIC-102_late_INVISIBLE" class="invisible-link" href="<?php echo $e102; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-102-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 102" title="Corso per certificazione LPIC-1 esame 102">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 102</h3>
              <p class="card-text">
                Seconda parte del programma di certificazione LPI di primo livello. <br><br>
                Questo modulo ti dà la preparazione necessaria a passare il secondo e ultimo
                esame per la certificazione professionale di primo livello<br><br>
                Al superamento degli esami 101 e 102 presso un centro autorizzato Pearson VUE,
                otterai la certificazione professionale in ambito Linux<br><br>
              </p>

              <?php if($show_promo): ?>
              <a data-umami-event="goto_LPIC-102_late_SPECIAL_OFFER" title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="goto_LPIC-102_late" title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>
              
            </div>
          </div>
        </a>
      </div>

    </div>
  </section>

  <section id="percorso">
    <div class="container" style="margin-top: -6rem;">
      <h2 class="mb-5 text-center">PERCORSO FORMATIVO</h2>
      <p class="text-justify">
        Ogni corso del programma LPI è caratterizzato da un livello di partenza, un <b>set di competenze</b> e una serie di <b>requisiti d'accesso</b>.<br>
        Ad esempio, non è possibile sostenere la certificazione LPIC-2 senza aver sostenuto LPIC-1, mentre non è necessario "Linux Essentials" per accedere ad LPIC-1.
        Lo schema seguente riassume queste caratteristiche per aiutarti a decidere quale corso fa per te.
      </p>
      <!-- <img src="assets/courses-comparison.png" width="100%" class="mt-5 text-center"> -->

      <br><br>
      <picture>
        <source srcset="assets/lpi-path.png" width="100%" media="(min-width: 600px)">
        <img src="assets/lpi-path-mobile.png" width="100%" alt="LPI Path (mobile)">
      </picture>
    </div>
  </section>

  <section id="dazero">
    <div class="container" style="margin-top: -6rem;">
      <h2 class="mb-5 text-center">Cerchi un approccio più graduale?</h2>
      <p class="mb-2 text-justify">
        Lo sappiamo, il mondo delle certificazioni professionali può risultare ostico e scoraggiante <b>per chi parte da zero.</b><br>
        Se non ti senti pronto, dà un'occhiata a questo <b>corso introduttivo</b> non orientato alle certificazioni.
        È pensato per <b>guidarti passo passo</b> attraverso ogni aspetto di una distribuzione GNU/Linux: dalla sua <b>anatomia</b>
        all'installazione accanto a Windows, fino all'utilizzo come <b>sistema operativo principale</b>!
        <br><br>
        <div class="card-deck row">
          <div class="col-md-6" style="margin: 10px auto;">
          <a data-umami-event="goto_Arch_INVISIBLE" class="invisible-link" href="<?php echo $archlinux; ?>">
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
                  <a data-umami-event="goto_Arch_SPECIAL_OFFER" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                  <?php else: ?>
                  <a data-umami-event="goto_Arch" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
                  <?php endif ?>

                </div>
              </div>
            </a>
        </div>
      </p>
    </div>
  </section>
  <section id="compara">
    <div class="container" style="margin-top: -3rem;">
      <h2 class="mb-5 text-center">Quale corso scegliere?</h2>
      <p class="text-justify">
        La scelta del corso più adatto a te dipende dal tuo livello di partenza e da cosa vuoi imparare: 
        <br><br>
        <h5><b><a class="js-scroll-trigger" href="#dazero">Arch Linux Per Comuni Mortali</a></b> </h5>
        È un corso teorico e pratico rivolto a chi ha <b>poca o nessuna esperienza</b> e vuole imparare ad installare, configurare e gestire un sistema Linux flessibile e moderno sul proprio PC. 
        Studiamo assieme l’<b>anatomia</b> di una distribuzione Linux per capirne a fondo il funzionamento e iniziamo a mettere le mani in pasta con una serie di <b>lezioni pratiche</b> 
        che spaziano dalle <b>basi della riga di comando</b> al backup, ripristino e <b>modifica delle configurazioni</b> software, <b>monitoraggio</b> delle risorse e gestione delle applicazioni in <b>avvio automatico</b>. 
        Infine, viene dedicato un intero capitolo alla <b>risoluzione dei problemi</b> in ambiente Linux. 
        L'obiettivo di questo corso è rendere la curva di apprendimento meno ripida possibile <a data-umami-event="goto_Arch_COMPARE" href="<?php echo $archlinux; ?>">per tutti i nuovi utenti</a>.
        <br><br>

        <h5><b><a class="js-scroll-trigger" href="#corsi">Linux Essentials</a></b></h5> È un corso introduttivo a GNU/Linux ed il panorama Free & Open Source: facciamo una breve panoramica su <b>tecnologie e software Open Source popolari</b>, 
        ci soffermiamo sulla distinzione tra <b>licenze</b> Open Source, Copyleft e Permissive, studiamo i <b>business model</b> dell'Open Source, le <b>opportunità lavorative</b> 
        e naturalmente tutte le basi per la <b>gestione personale di un sistema LINUX</b>.<br>
        Il <a data-umami-event="goto_LE_COMPARE" href="<?php echo $essentials; ?>">programma del corso</a> segue fedelmente l'omonimo percorso LPI, perciò al termine, se vorrai, potrai sostenere l'esame <a data-umami-event="link_LE-EXAM-OBJ" target=blank href="https://www.lpi.org/our-certifications/exam-010-objectives">010 - Linux Essentials</a> 
        ed ottenere un certificato che attesta le tue competenze linux in ambito lavorativo.
        <br><br>

        <h5><b><a class="js-scroll-trigger" href="#corsi">LPIC-1</a></b></h5> È un corso orientato all’amministrazione di sistemi GNU/Linux. Qui imparerai tutto ciò che c’è da sapere sull’<b>amministrazione di server</b> e ambienti multi-utente, 
        dalla gestione delle <b>quote</b> e dei limiti sulle risorse condivise all’<b>automazione</b>, senza tralasciare i concetti fondamentali di <b>sicurezza</b> informatica 
        e <b>networking</b> che caratterizzano questo tipo di sistemi. Il livello di partenza è più alto rispetto ai precedenti e si presuppone la conoscenza della terminologia di base. <br>
        Il percorso è diviso in due moduli, <a data-umami-event="goto_LPIC-101_COMPARE" target=blank href="<?php echo $e101; ?>">101</a> e <a data-umami-event="goto_LPIC-102_COMPARE" target=blank href="<?php echo $e102; ?>">102</a>, al termine dei quali potrai sostenere i rispettivi esami LPI  
        (<a data-umami-event="link_LPIC-101-OBJ" target=blank href="https://www.lpi.org/our-certifications/exam-101-objectives">LPIC-1 101</a> ed <a data-umami-event="link_LPIC-102-OBJ" target=blank href="https://www.lpi.org/our-certifications/exam-102-objectives">LPIC-1 102</a>) 
        ed ottenere una <b>certificazione professionale</b> riconosciuta internazionalmente come <b>Linux System Administrator</b>.
      </p>
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
                    <div class="card-header" id="accordion-tab-1-heading-3">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                              Come posso ottenere la certificazione? 
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Per ottenere la certificazione LPI relativa al corso frequentato ("Linux Essentials" o "LPIC-1") devi sostenere il rispettivo esame on-line o presso un centro esami autorizzato Pearson VUE. Visita <a data-umami-event="link_Pearson-test-center_FAQ" target=blank href="https://home.pearsonvue.com/lpi"> questo link</a> per saperne di più e trovare il test center più vicino a casa tua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-11">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-11" aria-expanded="false" aria-controls="accordion-tab-1-content-11">
                              Dove si svolge l'esame di certificazione?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-11" aria-labelledby="accordion-tab-1-heading-11" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Gli esami LPI possono essere sostenuti on-line tramite la piattaforma onVUE oppure presso un centro esami autorizzato Pearson VUE. Visita <a target=blank href="https://home.pearsonvue.com/lpi"> questo link</a> per saperne di più e trovare il test center più vicino a casa tua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-12">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-12" aria-expanded="false" aria-controls="accordion-tab-1-content-12">
                              Come si prenota l'esame?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-12" aria-labelledby="accordion-tab-1-heading-12" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Per prenotare l'esame è sufficiente collegarsi al <a data-umami-event="link_Pearson-test-center_FAQ" target=blank href="https://home.pearsonvue.com/lpi"> portale Pearson VUE</a> e selezionare "Schedule your exam", poi "View Exams" e selezionare il tipo di esame (ad es: Linux Professionals - LPIC-1). Qui è possibile selezionare l'esame desiderato sia in modalità "classica" che on-line (con suffisso "v").
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-4">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                              Come si svolge l'esame di certificazione?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
			      L'esame "Linux Essentials" è composto di 40 domande da rispondere in 60 minuti, mentre tutti gli esami LPIC comprendono 60 domande da rispondere in 90 minuti.<br>
				Per superare l'esame dovrai rispondere correttamente almeno all'80% delle domande.
                              <br>Tutti gli esami comprendono domande aperte non discorsive (es: "con quale comando creo un nuovo file vuoto?") e a scelta multipla.
                              <br>Per maggiori informazioni su esami e certificazioni LPI visita le FAQ sul sito ufficiale <a data-umami-event="link_LPI-FAQ_FAQ" target=blank href="https://www.lpi.org/it/about-lpi/frequently-asked-questions">lpi.org</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-10">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-10" aria-expanded="false" aria-controls="accordion-tab-1-content-10">
                              Quanto costa l'esame di certificazione?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-10" aria-labelledby="accordion-tab-1-heading-10" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
			      Per ottenere la certificazione LPI devi sostenere un esame per ciascun modulo di apprendimento. <br>
			      Ad esempio, LPIC-1 è composto da due moduli: 101 e 102, mentre Linux Essentials è costituito da un solo esame.<br>
            Gli esami Essentials hanno un costo di 110€ e gli LPIC di 176€, ma puoi richiedere un <b>COUPON sconto studente</b> scrivendomi al termine del corso, oppure un <b>COUPON generico</b> tramite <a data-umami-event="coupon_request_LPI_FAQ" href=https://budibase.morrolinux.it/app/lpi-form> questo modulo </a>.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-5">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                              A quando risale l'ultimo aggiornamento? Il corso diventerà obsoleto?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              <b>Il corso è in continuo aggiornamento!</b>
                              <br>Il programma LPI viene aggiornato <i>ogni 5 anni</i>. Ad ogni aggiornamento del programma, il corso viene aggiornato di conseguenza.
                              <br>Ad esempio a inizio 2019 c'è stato un aggiornamento degli obiettivi d'esame per "LPIC-1" dalla versione "4" alla versione "5", ed il corso è stato aggiornato per coprire le nuove competenze.
                              <br>Il prossimo aggiornamento cadrà nel corso del 2024 e per 1 anno sarà possibile sostenere l'esame sia nella vecchia che nella nuova versione.
                              <br><br>Per maggiori dettagli su programma del corso e obiettivi d'esame visita:
                              <br>LPIC-1: Exam 101: <a target=blank href="https://www.lpi.org/our-certifications/exam-101-objectives">https://www.lpi.org/our-certifications/exam-101-objectives</a>
                              <br>Exam 102: <a target=blank href="https://www.lpi.org/our-certifications/exam-102-objectives">https://www.lpi.org/our-certifications/exam-102-objectives</a>
                              <br>Linux Essentials: <a target=blank href="https://www.lpi.org/our-certifications/exam-010-objectives">https://www.lpi.org/our-certifications/exam-010-objectives</a>
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
				Per i corsi orientati alle certificazioni (LPI) è anche disponibile un elenco dettagliato di tutti i termini e concetti trattati sul sito ufficiale della certificazione in questione:
                              <br>LPIC-1 Exam 101: <a target=blank href="https://www.lpi.org/our-certifications/exam-101-objectives">https://www.lpi.org/our-certifications/exam-101-objectives</a>
                              <br>LPIC-1 Exam 102: <a target=blank href="https://www.lpi.org/our-certifications/exam-102-objectives">https://www.lpi.org/our-certifications/exam-102-objectives</a>
                              <br>Linux Essentials: <a target=blank href="https://www.lpi.org/our-certifications/exam-010-objectives">https://www.lpi.org/our-certifications/exam-010-objectives</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-7">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-7" aria-expanded="false" aria-controls="accordion-tab-1-content-7">
                              Come posso individuare il mio livello di partenza?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-7" aria-labelledby="accordion-tab-1-heading-7" data-parent="#accordion-tab-1">
                        <div class="card-body">
			    <p>
				Ti consiglio di leggere attentamente il programma di ciascun corso, partendo dal più semplice,
				fino a trovare i primi argomenti a te sconosciuti.
				Terminato questo inquadramento saprai perfettamente da quale corso iniziare.
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

  <?php include 'snippets/docente.php';?>
  <?php include 'snippets/footer.php';?>

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

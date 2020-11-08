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

  <meta name="description" content="Ottieni la certificazione Linux e inizia la tua carriera come professionista IT in un settore in rapida crescita grazie al corso bestseller italiano su Linux. Scopri la nostra selezione di corsi ideati su misura per te!">

  <title>Impara Linux: il corso bestseller in italiano | Corso Linux</title>
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

    //UDEMY COUPONS
    $essentials = $e101 = $e102 = "";

    $json_data = file_get_contents('udemy_coupons.json');
    $data = json_decode($json_data, true);

    $essentials = $data["Essentials"];
    $e101 = $data["EXAM 101"];
    $e102 = $data["EXAM 102"];

    if(empty($essentials)){
      $essentials = "https://www.udemy.com/course/impara-linux-da-zero-lpi-linux-essentials/?referralCode=9F2C500B1DC009224ABD";
    }
    if(empty($e101)){
      $e101 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione/?referralCode=51B7A99838177C89C187";
    }
    if(empty($e102)){
      $e102 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione-lpi-exam-102/?referralCode=7018A3D9DC7C34281A3F";
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
            <a class="nav-link js-scroll-trigger" href="#courses">Corsi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#reviews">Recensioni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
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
          <a class="btn btn-lg btn-outline-light js-scroll-trigger" href="#courses">Scopri</a>
        </div>
      </div>
    </div>
  </header>

  <section id="why">
    <div class="container text-center">
      <h2 class="my-5">PERCHÈ IMPARARE LINUX?</h2>
      <p class="my-5 text-justify">
        Grazie alla sua grande versatilità e snellezza, GNU/Linux può funzionare su qualunque genere di dispositivo, dal <i>server</i> in un <i>datacenter</i>, al mini router di casa nostra.
        Non è quindi un caso che Linux sia oggi lo <b>standard "de facto"</b> su innumerevoli dispositivi per le più disparate applicazioni: dall'<i>automotive</i> (sistemi di <i>infotainment</i>) all'<b>IoT</b> e alla <b>domotica</b>, passando per le nostre tasche (Android) e perfino nei nostri <b>elettrodomestici</b> (televisori, frigoriferi, e molto altro) senza tralasciare il suo <b>importante ruolo nei sistemi <i>real-time</i></b> come la guida autonoma ed i nuovi sistemi di controllo industriali, rendendo la sua conoscenza <b>un requisito per una vastissima varietà di ambiti</b> tecnologici e posizioni lavorative.<br>
        Linux è anche molto in voga fra gli hobbisti/makers grazie alla popolarità di piattaforme di sviluppo <i>embedded</i> come <b>Raspberry Pi</b>, per la realizzazione di progetti "fai da te" spesso in accoppiata con Arduino.
      </p>
      <div class="yt_video">
         <iframe src="https://www.youtube-nocookie.com/embed/IpfcahnPknM" frameborder="0" allowfullscreen></iframe><br /><br />
      </div>
    </div>
  </section>

  <section id="statistics">
    <div class="container text-center">
      <p class="mb-5">
        Pronto per entrare in classe?<br>
        Unisciti agli oltre duemila studenti già iscritti al <b>corso bestseller italiano su Linux</b>, Costruisci solide basi e <b>inizia la tua carriera come professionista in un settore in rapida crescita!</b>
      </p>
      <div class="row">
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

  <section id="courses">
    <div class="container">
      <p class="mb-5 text-justify">
        Tutti possono imparare Linux. Qualunque sia il tuo livello di partenza e il tuo obiettivo, troverai di seguito il corso che fa per te.<br>
        Qui imparerai tutto ciò che c'è da sapere su Linux ed il suo ecosistema, tramite spiegazioni ed <b>esempi concreti</b> di utilizzo. Al termine, se vorrai, potrai anche affrontare gli <b>esami ufficiali LPI</b> e conseguire una <b>certificazione professionale riconosciuta internazionalmente</b>.<br>
        Preoccupato per l'esame?<br>
        Nei miei corsi troverai tutte le risorse necessarie a coprire ogni argomento del programma, dandoti la giusta preparazione a superarlo.
      </p>
      <div class="card-deck">
        <a class="invisible-link" href="<?php echo $essentials; ?>">
          <div class="card">
            <img src="assets/corso-lpi-linux-essentials-cover.jpg" class="card-img-top" alt="Copertina corso LPI Linux Essentials" title="Corso per certificazione LPI Linux Essentials online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Linux Essentials</h3>
              <p class="card-text">
                Il corso LPI Linux Essentials parte "da zero" e introduce a GNU/Linux e al mondo dell'Open Source.<br><br>
                Si rivolge ad un pubblico di utenti alle prime armi con Linux, ma anche a chi ha qualche lacuna da appianare.<br><br>
                Il programma completo del corso è diviso in 5 sezioni, e spazia su tutti gli aspetti generali di una distribuzione Linux.
              </p>
              <a title="Corso LPI Linux Essentials" href="<?php echo $essentials; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
        <a class="invisible-link" href="<?php echo $e101; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-101-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 101" title="Corso per certificazione LPIC-1 esame 101">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 101</h3>
              <p class="card-text">
            		LPIC-1 è il corso di certificazione professionale LPI di primo livello.<br><br>
            		Partendo dalle conoscenze di base, arriverai a conoscere Linux in ogni suo aspetto,
            		dalla diagnostica dei problemi più comuni all'amministrazione di Server e PC Desktop.<br><br>
            		Questo corso parte dalle basi, ma si rivolge ad una utenza leggermente più consapevole.
  	          </p>
              <a title="Corso LPIC-1 | Exam 101" href="<?php echo $e101; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
        <a class="invisible-link" href="<?php echo $e102; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-102-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 102" title="Corso per certificazione LPIC-1 esame 102">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 102</h3>
              <p class="card-text">
            		Seconda parte del programma di certificazione LPI di primo livello. <br><br>
            		Questo modulo ti dà la preparazione necessaria a passare il secondo e ultimo
            		esame per la certificazione professionale di primo livello<br>(Exam 102)<br><br>
            		Al superamento degli esami 101 e 102 presso un centro autorizzato Pearson VUE,
            		otterai la certificazione professionale in ambito Linux
  	          </p>
              <a title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="comparison">
    <div class="container">
      <h2 class="mb-5 text-center">Indeciso?</h2>
      <p class="text-justify">
        Ogni corso del programma LPI è caratterizzato da un livello di partenza, un set di competenze e una serie di requisiti d'accesso.
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

  <section id="faq">
    <div class="container">
      <h2 class="my-5 text-center">FAQ</h2>
      <div class="tab-content" id="faq-tab-content">
        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
            <div class="accordion" id="accordion-tab-1">

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                              Ci sono limitazioni alla consultazione? Una volta terminato il corso posso continuare a consultarlo o scade l'accesso?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Non c'è nessun limite di tempo per l'accesso ai corsi. Puoi studiare con calma e ritornare quando vuoi per ripassare: le video lezioni rimangono a tua disposizione per sempre.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-2">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                              A chi posso rivolgermi in caso di dubbi durante il corso?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Il docente è sempre a disposizione sulla piattaforma via messaggistica privata o nella sezione D&amp;R per qualsiasi dubbio/domanda/perplessità inerente al corso.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-3">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                              Ho seguito il corso, come posso ottenere la certificazione?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Per ottenere la certificazione LPI relativa al corso frequentato ("Linux Essentials" o "LPIC-1") devi sostenere l'esame in un centro esami autorizzato Pearson VUE. Ce ne sono in ogni città, per trovare il centro più vicino a casa tua visita <a href="http://www.pearsonvue.com/servlet/vue.web2.core.Dispatcher?webContext=CandidateSite&webApp=TestCenterLocator&requestedAction=register&cid=374"> questo link</a>.
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
                              L'esame "Linux Essentials" è composto di 40 domande da rispondere in 60 minuti, mentre tutti gli esami LPIC sono 60 domande in 90 minuti.
                              <br>Tutti gli esami consistono in domande aperte (es: "con quale comando creo un nuovo file vuoto?") e a scelta multipla.
                              <br>Per maggiori informazioni su esami e certificazioni LPI visita le FAQ sul sito ufficiale lpi.org: <a href="https://www.lpi.org/it/about-lpi/frequently-asked-questions">https://www.lpi.org/it/about-lpi/frequently-asked-questions</a>
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
                              Il programma LPI si aggiorna ogni 5 anni. Ad ogni aggiornamento vengono aggiunti nuovi video integrativi per mantenere il corso aggiornato.
                              <br>Ad esempio a inizio 2019 c'è stato un aggiornamento degli obiettivi d'esame per "LPIC-1" dalla versione "4" alla versione "5", ed il corso è stato aggiornato per coprire le nuove competenze. Il prossimo aggiornamento cadrà entro il 2024.
                              <br><br>Per maggiori dettagli su programma del corso e obiettivi d'esame visita:
                              <br>LPIC-1: Exam 101: <a href="https://www.lpi.org/our-certifications/exam-101-objectives">https://www.lpi.org/our-certifications/exam-101-objectives</a>
                              <br>Exam 102: <a href="https://www.lpi.org/our-certifications/exam-102-objectives">https://www.lpi.org/our-certifications/exam-102-objectives</a>
                              <br>Linux Essentials: <a href="https://www.lpi.org/our-certifications/exam-010-objectives">https://www.lpi.org/our-certifications/exam-010-objectives</a>
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
                              <br>LPIC-1 Exam 101: <a href="https://www.lpi.org/our-certifications/exam-101-objectives">https://www.lpi.org/our-certifications/exam-101-objectives</a>
                              <br>LPIC-1 Exam 102: <a href="https://www.lpi.org/our-certifications/exam-102-objectives">https://www.lpi.org/our-certifications/exam-102-objectives</a>
                              <br>Linux Essentials: <a href="https://www.lpi.org/our-certifications/exam-010-objectives">https://www.lpi.org/our-certifications/exam-010-objectives</a>
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

            </div>
        </div>
      </div>
    </div>

  </section>

  <section id="reviews">
    <div class="text-center">
      <h2>Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner col-sm-9 ml-auto mr-auto">

          <div class="carousel-item active">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Il Corso è molto ben organizzato, e copre tutti gli argomenti essenziali per apprendere le basi di Linux. Le spiegazioni sono chiare, e permettono di comprendere anche i concetti più complessi. Per esempio, ho finalmente compreso
              meglio il funzionamento dei file log e dei permessi. Sicuramente continuerò con i corsi successivi!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Raffaele, studente "Linux Essentials"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Ottima esposizione, fluida e senza pause. Preciso e completo nella spiegazione degli argomenti, che forniscono una ottima e solida base di conoscenza del mondo Linux.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Daniele, studente "Linux Essentials"</p>
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
              Il corso è di buon livello. Affronta i comandi base di Linux e gli esempi sono facilmente riproducibili.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Emanuele, studente "Linux Essentials"</p>
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
              Le spiegazioni sono ben fatte, fluide e ricche di esempi.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Nazzareno, studente "Linux Essentials"</p>
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
            <p class="review-name">Dog, studente "LPIC 102"</p>
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
              Morro è un ottimo insegnante, molto chiaro e preciso, da molti esempi e sa spiegare.<br>
              Una piccola nota: sarebbe stato forse da 5 stelle invece di 4,5 se ci fossero stati anche dei compiti da fare per lezione, con output spiegato brevemente a fine lezione, ma in se il resto è perfetto!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Andrea, studente "LPIC 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Ho imparato molto dai due corsi LPI di Moreno e sono molto soddisfatto del livello a cui portano. Mi sono riguardato tutti i video più di una volta ed è ottimo averli sempre a disposizione per ripassare gli argomenti al volo. Non posso
              che dargli 5 stelle per la modalità di esposizione e per gli argomenti trattati.
              <br>Soddisfattissimo.
              <br>Grazie
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Simone, studente "LPIC 101"</p>
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
              Un ottimo corso, spiegato in maniera chiara e ricco di appunti per lo studio. Complimenti all'insegnante!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Giovanni, studente "LPIC 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center my-5">IL DOCENTE<br>
            <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-official mx-2" aria-hidden="true" style="color:#3c5a99;"></i></a>
            <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true" style="color:#00acee;"></i></a>
            <a href="https://telegram.me/morrolinux_feed" target="_blank"><i class="fa fa-comment mx-2" aria-hidden="true" style="color:#0088cc;"></i></a>
          </h2>
          <img class="avatar float-left rounded-circle mr-4" src="assets/docente-corso-linux-moreno-razzoli.jpg" alt="avatar docente corso linux: Moreno Razzoli" title="Docente del corso Linux: Moreno Razzoli">
          <div class="text-center my-5 socials">

          </div>
          <p>
                        Mi chiamo <b>Moreno Razzoli</b>,<br>
                        Sono laureato in Scienze Informatiche, ho conseguito le certificazioni Linux <b>LPI</b>, <b>CompTIA Linux+</b> e <b>Suse CLA</b>,
                        ho realizzato diversi <a href="https://morrolinux.it/progetti">progetti Open Source</a>,
                        contribuito allo sviluppo di nuove funzionalità in altrettanti progetti già avviati su GitHub e 
                        realizzo <b>video didattici dal 2008</b> su <a href="https://www.youtube.com/user/morrolinux/">YouTube</a> e sul
                        mio <a href="https://morrolinux.it"> sito ufficiale.</a><br><br>
          </p>
          <p> 
                        <b>Credo nella formazione di qualità.</b><br>
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
        Made with ❤️ by <a href="https://github.com/mrriky54" target="_blank">Riccardo Carissimi</a> <br> 
        <a style="opacity:0.5;color:white;" href="https://it.freepik.com/vettori/infografica">Infografica vettore creata da pikisuperstar - it.freepik.com</a><br>
        Parte del progetto <a href="https://morrolinux.it">morrolinux.it</a><br><br>
        <a href="https://github.com/morrolinuxyt/CorsoLinux" target="_blank"><i class="fa fa-github-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-square mx-2" aria-hidden="true"></i></a>
        <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/user/morrolinux/" target="_blank"><i class="fa fa-youtube-square mx-2" aria-hidden="true"></i></a>
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


</body>

</html>

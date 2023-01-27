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
    $archlinux = $essentials = $e101 = $e102 = "";

    $json_data = file_get_contents('udemy_coupons.json');
    $data = json_decode($json_data, true);

    $essentials = $data["Essentials"];
    $e101 = $data["EXAM 101"];
    $e102 = $data["EXAM 102"];
    $archlinux = $data["Arch"];

    if(empty($archlinux)){
      $archlinux = "https://www.udemy.com/course/arch-linux-per-comuni-mortali/?referralCode=34016D9C6656A83ABF5D";
    }
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
            <a class="nav-link js-scroll-trigger" href="#lavoro">Lavoro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#docente">Docente</a>
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
          <a class="btn btn-lg btn-outline-light js-scroll-trigger" href="#corsi">Scopri</a>
        </div>
      </div>
    </div>
  </header>

  <section id="why">
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

  <section id="lavoro" style="margin-top: -12rem;">
    <div class="container text-center">

      <h2 class="my-5">SBOCCHI OCCUPAZIONALI</h2>
      <p class="my-5 text-justify">
        Secondo l'<a href="https://www.linuxfoundation.org/tools/the-2021-open-source-jobs-report/">Open Source Jobs Report 2021</a>, 
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
        approcci e metodolige <b>DevOps</b> richiedendo agli sviluppatori software competenze trasversali in ambito sistemistico 
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
      <div class="yt_video">
         <iframe src="https://www.youtube-nocookie.com/embed/N-7Uan8tML0" frameborder="0" allowfullscreen></iframe><br /><br />
      </div>
    </div>
  </section>

  <section id="statistiche">
    <div class="container text-center">
      <p class="mb-5">
        Pronto per entrare in classe?<br>
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

  <section id="lpi">
    <div class="container text-center">
      <h2 class="my-5">BATTERIE INCLUSE</h2>
      <p class="mb-2 text-justify">
        Qui imparerai tutto ciò che c'è da sapere su GNU/Linux e l'ecosistema Open Source tramite <b>spiegazioni approfondite</b> e comprensibili ed <b>esempi pratici</b> ad accompagnare ogni concetto teorico.<br>  
        <br>
        Al termine, se vorrai, potrai affrontare gli esami ufficiali di <b><a target=”_blank” href="https://www.lpi.org/it">Linux Professional Institute</a></b>
        e conseguire una <b>certificazione professionale riconosciuta internazionalmente</b>.<br><br>
        Tutti i miei corsi marchiati <b>LPI</b> seguono fedelmente il programma di certificazione ufficiale: ti fornirò la giusta preparazione per superare ogni test, <b>non sono necessarie risorse aggiuntive!</b>  
        Consulta le <a href="#faq">FAQ</a> e il <a target=”_blank” href="https://www.youtube.com/watch?v=N-7Uan8tML0"> video dedicato</a> per saperne di più.
      </p>

      <br><br>
      <h4>Pronto per l'esame?</h4>
      <br>
      <p class="mb-2 text-justify">
        Tutti i miei studenti hanno diritto ad uno speciale <b>COUPON</b> per affrontare l'esame ad un prezzo molto vantaggioso.
        <b>Non sei mio studente?</b> Puoi comunque richiedere una riduzione qui:
      </p>
      <div class="mb-5 text-center">
        <br>
        <a target=”_blank” style="margin: 0 auto;" title="Arch Linux Per Comuni Mortali" href="https://forms.gle/9vxTEVDftBzioDat8" class="btn btn-primary mt-auto js-scroll-trigger">Richiedi il tuo COUPON</a>
      </div>
    </div>
  </section>


  <section id="corsi" style="margin-top: -9rem;">
    <div class="container text-center">
      <h2 class="my-5">TUTTI POSSONO IMPARARE LINUX</h2>
      <p class="mb-1 text-justify">
        Qualunque sia il tuo livello di partenza e il tuo obiettivo, in questa pagina troverai il corso che fa per te. <br>
        Ciascuna delle seguenti schede è relativa ad un corso di <b><a href="#lpi">certificazione LPI</a></b>.
        Consulta <a href="#percorso"> questo diagramma</a> e guarda il <a target=”_blank” href="https://www.youtube.com/watch?v=N-7Uan8tML0"> video dedicato</a> per saperne di più sul percorso formativo completo.
        <br>
        <b>Se parti da zero</b> e non ti interessano le certificazioni professionali, ti consiglio di cominciare con un <a href="#dazero">approccio più graduale</a>.
        <br>
        <b>Se non sai scegliere</b> il corso più adatto a te, leggi questa breve <a href="#compara"> comparativa</a> e sarà tutto più chiaro :)

        <br><br><br>
      </p>
    </div>

    <div class="container text-center">
      <div class="card-deck">
        <a class="invisible-link" href="<?php echo $essentials; ?>">
          <div class="card">
            <img src="assets/corso-lpi-linux-essentials-cover.jpg" class="card-img-top" alt="Copertina corso LPI Linux Essentials" title="Corso per certificazione LPI Linux Essentials online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Linux Essentials</h3>
              <p class="card-text">
                Il corso LPI Linux Essentials parte "da zero" e introduce a GNU/Linux e al mondo dell'Open Source.<br><br>
                Si rivolge ad un pubblico di utenti alle prime armi con Linux, ma anche a chi ha qualche lacuna da appianare.<br><br>
                Il programma completo del corso è diviso in 5 sezioni, e spazia su tutti gli aspetti generali di una distribuzione Linux.<br><br>
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
                Questo corso parte dalle basi, ma si rivolge ad una utenza leggermente più consapevole.<br><br>
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
                esame per la certificazione professionale di primo livello<br><br>
                Al superamento degli esami 101 e 102 presso un centro autorizzato Pearson VUE,
                otterai la certificazione professionale in ambito Linux<br><br>
              </p>
              <a title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="percorso">
    <div class="container">
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
    <div class="container">
      <h2 class="mb-5 text-center">Cerchi un approccio più graduale?</h2>
      <p class="mb-2 text-justify">
        Lo sappaimo, il mondo delle certificazioni professionali può risultare ostico e scoraggiante <b>per chi parte da zero.</b><br>
        Se non ti senti pronto, dà un'occhiata a questo <b>corso introduttivo</b> non orientato alle certificazioni.
        È pensato per <b>guidarti passo passo</b> attraverso ogni aspetto di una distribuzione GNU/Linux: dalla sua <b>anatomia</b>
        all'installazione accanto a Windows, fino all'utilizzo come <b>sistema operativo principale</b>!
        <br><br>
        <div class="card-deck row">
          <div class="col-md-6" style="margin: 10px auto;">
            <a class="invisible-link" href="<?php echo $archlinux; ?>">
              <div class="card">
                <img src="assets/arch-linux-per-comuni-mortali.png" class="card-img-top" alt="Copertina corso Arch Linux Per Comuni Mortali" title="Arch Linux Per Comuni Mortali">
                <div class="card-body d-flex flex-column">
                  <h3 class="card-title">Arch Linux Per Comuni Mortali</h3>
                  <p class="card-text">
                    Questo corso si rivolge a chi ha poca o nessuna esperienza e vuole imparare Linux su una distribuzione fresca, <b>stimolante</b> e sfidante al punto giusto.<br><br>

                    Ti insegnerò <b>teoria e pratica</b>, con illustrazioni animate ed esempi concreti che potrai applicare alla tua installazione per ottenere il massimo dalla tua distro preferita.<br><br>

                    L'obbiettivo di questo corso è rendere la curva di apprendimento meno ripida possibile per tutti i nuovi utenti.<br><br>
                  </p>
                  <a title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
                </div>
              </div>
            </a>
        </div>
      </p>
    </div>
  </section>

  <section id="compara">
    <div class="container">
      <h2 class="mb-5 text-center">Quale corso scegliere?</h2>
      <p class="text-justify">
        La scelta del corso più adatto a te dipende dal tuo livello di partenza e da cosa vuoi imparare: 
        <br><br>
        <h5><b><a href="#dazero">Arch Linux Per Comuni Mortali</a></b> </h5>
        È un corso teorico e pratico rivolto a chi ha <b>poca o nessuna esperienza</b> e vuole imparare ad installare, configurare e gestire un sistema Linux flessibile e moderno sul proprio PC. 
        Studiamo assieme l’<b>anatomia</b> di una distribuzione Linux per capirne a fondo il funzionamento e iniziamo a mettere le mani in pasta con una serie di <b>lezioni pratiche</b> 
        che spaziano dalle <b>basi della riga di comando</b> al backup, ripristino e <b>modifica delle configurazioni</b> software, <b>monitoraggio</b> delle risorse e gestione delle applicazioni in <b>avvio automatico</b>. 
        Infine, viene dedicato un intero capitolo alla <b>risoluzione dei problemi</b> in ambiente Linux. 
        L'obiettivo di questo corso è rendere la curva di apprendimento meno ripida possibile <a href="<?php echo $archlinux; ?>">per tutti i nuovi utenti</a>.
        <br><br>
        
        <h5><b><a href="#corsi">Linux Essentials</a></b></h5> È un corso introduttivo a GNU/Linux ed il panorama Free & Open Source: facciamo una breve panoramica su <b>tecnologie e software Open Source popolari</b>, 
        ci soffermiamo sulla distinzione tra <b>licenze</b> Open Source, Copyleft e Permissive, studiamo i <b>business model</b> dell'Open Source, le <b>opportunità lavorative</b> 
        e naturalmente tutte le basi per la <b>gestione personale di un sistema LINUX</b>.<br>
        Il <a href="<?php echo $essentials; ?>">programma del corso</a> segue fedelmente l'omonimo percorso LPI, perciò al termine, se vorrai, potrai sostenere l'esame <a target=blank href="https://www.lpi.org/our-certifications/exam-010-objectives">010 - Linux Essentials</a> 
        ed ottenere un certificato che attesta le tue competenze linux in ambito lavorativo.
        <br><br>
        
        <h5><b><a href="#corsi">LPIC-1</a></b></h5> È un corso orientato all’amministrazione di sistemi GNU/Linux. Qui imparerai tutto ciò che c’è da sapere sull’<b>amministrazione di server</b> e ambienti multi-utente, 
        dalla gestione delle <b>quote</b> e dei limiti sulle risorse condivise all’<b>automazione</b>, senza tralasciare i concetti fondamentali di <b>sicurezza</b> informatica 
        e <b>networking</b> che caratterizzano questo tipo di sistemi. Il livello di partenza è più alto rispetto ai precedenti e si presuppone la conoscenza della terminologia di base. <br>
        Il percorso è diviso in due moduli, <a target=blank href="<?php echo $e101; ?>">101</a> e <a target=blank href="<?php echo $e102; ?>">102</a>, al termine dei quali potrai sostenere i rispettivi esami LPI  
        (<a target=blank href="https://www.lpi.org/our-certifications/exam-101-objectives">LPIC-1 101</a> ed <a target=blank href="https://www.lpi.org/our-certifications/exam-102-objectives">LPIC-1 102</a>) 
        ed ottenere una <b>certificazione professionale</b> riconosciuta internazionalmente come <b>Linux System Administrator</b>.
      </p>
    </div>
  </section>

  <section id="faq">
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
                              Ho seguito il corso, come posso ottenere la certificazione?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                              Per ottenere la certificazione LPI relativa al corso frequentato ("Linux Essentials" o "LPIC-1") devi sostenere il rispettivo esame on-line o presso un centro esami autorizzato Pearson VUE. Ce ne sono in ogni città, per trovare il centro più vicino, visita <a target=blank href="https://www.pearsonvue.com/servlet/vue.web2.core.Dispatcher?webContext=CandidateSite&webApp=TestCenterLocator&requestedAction=register&cid=374"> questo link</a>.
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
                              L'esame "Linux Essentials" è composto di 40 domande da rispondere in 60 minuti, mentre tutti gli esami LPIC comprendono 60 domande da rispondere in 90 minuti.
                              <br>Tutti gli esami comprendono domande aperte non discorsive (es: "con quale comando creo un nuovo file vuoto?") e a scelta multipla.
                              <br>Per maggiori informazioni su esami e certificazioni LPI visita le FAQ sul sito ufficiale <a target=blank href="https://www.lpi.org/it/about-lpi/frequently-asked-questions">lpi.org</a>
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
			      Gli esami LPIC hanno un costo di 140€ mentre gli Essentials di 85€, ma puoi richiedere un <b>COUPON sconto studente</b> scrivendomi al termine del corso, oppure un <b>COUPON generico</b> tramite <a href=https://forms.gle/9vxTEVDftBzioDat8> questo modulo </a>.

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

  <section id="recensioni">
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
	      Ottima esposizione, fluida e senza pause. <br>
	      Preciso e completo nella spiegazione degli argomenti, che forniscono una ottima e solida base di conoscenza del mondo Linux.
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
		Utilizzo Linux già da molti anni e questo corso mi ha aiutato a comprendere nuovi aspetti
		e ad approfondire quelli che già conoscevo.<br>
		Queste 13 ore di video sono super consigliate sia al novizio che si avvicina a Linux per la prima volta,
		sia all'utente più esperto che vuole consolidare le proprie basi.<br>
		Insegnante sempre disponibile a chiarire ogni dubbio e tempi di risposta molto rapidi.<br>
		Bravo Morro! Non vedo l'ora di iniziare la sezione 102!
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Manuel, studente "LPIC 101"</p>
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

  <section id="docente">
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
        Made with ❤️ by <a href="https://github.com/r-carissimi" target="_blank">Riccardo Carissimi</a> <br>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="js/doughnut.js"></script>     

</body>

</html>

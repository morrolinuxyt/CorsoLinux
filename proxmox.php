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

  <meta name="description" content="Proxmox Per Comuni Mortali è il modo più semplice per imparare Proxmox dalle basi senza essere sopraffatti dalla complessità.">

  <link rel="canonical" href="https://corsolinux.com/proxmox">

  <title>Proxmox Per Comuni Mortali | Corso Linux</title>

<?php include 'snippets/theme-init.php';?>
</head>

<body id="page-top" class="landing-page" style="--accent: #e57000;">

  <?php
    // Statistiche pubbliche del corso su Udemy. Passano dal catalogo, che
    // conosce gli id e sa cavarsela se l'API non risponde: prima erano tre
    // chiamate nude, e bastava un timeout per riempire la pagina di Warning.
    include_once 'snippets/catalogo.php';

    $stats   = catalogo_statistiche(null, array('proxmox'));
    $subs    = $stats['subs'];
    $lessons = $stats['lessons'];
    $reviews = $stats['reviews'];
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
          <!-- <li class="nav-item">
            <a data-umami-event="proxmox_navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li> -->
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_programma" class="nav-link js-scroll-trigger" href="#programma">Programma</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_altri_corsi" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="proxmox_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php include 'snippets/theme-toggle.php';?>

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

  <section>
    <div class="container">
      <h2 id="proxmox" class="section-title">Perché imparare Proxmox</h2>

      <p class="section-note text-justify">
      Proxmox è una piattaforma di virtualizzazione <b>Open Source</b> incredibilmente <b>versatile e potente</b>, ma se non hai mai affrontato tematiche
      come <i>storage distribuito, SDN</i> e <i>containerizzazione</i>, <b>potresti pensare che sia troppo difficile</b> e riservato solo a sysadmin esperti
      e professionisti del settore.
      </p>

      <p class="section-claim">
      Bene, io non la penso così. <br>
      <b>Benvenuto su Proxmox Per Comuni Mortali.</b>
      </p>

      <p class="section-note text-justify">
      Questo corso è progettato per <i>homelabbers, sistemisti</i> e appassionati di informatica e <i>self-hosting</i>
      che vogliono imparare a <b>gestire la propria infrastruttura</b> in maniera affidabile e <b>sicura</b>, senza downtime e senza perdite di dati.<br><br>
      Partendo dalle basi, ti guiderò attraverso la creazione della tua prima macchina virtuale fino al deploy su un <b>cluster in Alta Disponibilità</b> (HA). Insieme, vedremo anche come implementare <b>backup automatici</b>, accessi controllati e misure di <i>sicurezza infrastrutturale</i> per un setup <b>a prova di ransomware</b>.
      </p>

      <div class="row justify-content-center" style="margin-top: 3.5rem;">
        <div class="col-lg-7 col-md-9">
            <div class="card">
              <?php /* Superficie cliccabile della scheda: qui la landing è la pagina
                       stessa, quindi porta al corso come il pulsante. Ancora vuota
                       stesa sopra, non un wrapper (conterrebbe il pulsante, e le
                       ancore annidate non sono valide). Vedi .card-link nel CSS. */ ?>
              <a data-umami-event="proxmox_goto_Proxmox_INVISIBLE" class="card-link" href="<?php echo $PPCM; ?>"
                 tabindex="-1" aria-hidden="true" title="Proxmox Per Comuni Mortali"></a>
              <img src="assets/proxmox-per-comuni-mortali.png" class="card-img-top" alt="Copertina corso Proxmox Per Comuni Mortali" title="Proxmox Per Comuni Mortali">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Proxmox Per Comuni Mortali</h3>
                <p class="card-text">
                  Questo corso adatto a tutti ti guiderà passo passo nella <b>gestione di una infrastruttura IT</b>, dal semplice <i>nodo singolo</i> al <i>cluster iperconvergente</i> in Alta Disponibilità.<br><br>

                  Dopo ogni lezione, potrai replicare quanto visto nel tuo <i>homelab</i> o <i>in azienda</i>, per mettere in produzione servizi in modo <b>sicuro e affidabile</b> sulla tua infrastruttura.<br><br>

                  L'obbiettivo di questo corso è migliorare le tue skill sistemistiche integrando competenze professionali spendibili lavorativamente.<br><br>
                </p>
                <?php if($show_promo): ?>
                <a data-umami-event="proxmox_goto_proxmox_SPECIAL_OFFER" title="Proxmox Per Comuni Mortali" href="<?php echo $PPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="proxmox_goto_Proxmox" title="Proxmox Per Comuni Mortali" href="<?php echo $PPCM; ?>" class="btn btn-primary mt-auto"><b>Vai al corso</b></a>
                <?php endif ?>

              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!--
  <section id="recensioni">
    <div class="text-center">
      <h2 class="section-title">Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel" data-interval="8000" style="width:100%;">
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

  <section id="imparerai" class="section-alt">
    <div class="container">
      <h2 class="section-title">Cosa imparerai</h2>

      <p class="section-lead text-center">
        Affronteremo Proxmox con un <b>approccio pratico</b>: si parte dal singolo nodo e si arriva al <b>cluster iperconvergente</b>,
        introducendo ogni concetto nel momento in cui serve davvero per andare avanti.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span>Scegliere l'<b>hardware</b> giusto e installare <b>Proxmox VE</b> da zero</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-clone" aria-hidden="true"></i>
            <span>Creare <b>VM</b> e <b>container</b>, con <i>snapshot</i>, <i>template</i> e <b>cloud-init</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-hdd-o" aria-hidden="true"></i>
            <span>Gestire lo <b>storage</b>: dischi, <b>LVM</b>, <b>ZFS</b> e NAS di rete</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-shield" aria-hidden="true"></i>
            <span><b>Backup</b> e ripristino con <b>Proxmox Backup Server</b>, anche <i>offsite</i></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-sitemap" aria-hidden="true"></i>
            <span>Costruire un <b>cluster</b> con <b>Ceph</b> e <b>Alta Disponibilità</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            <span><b>Monitorare</b> l'infrastruttura con <b>Zabbix</b> e le <i>best practice</i></span>
          </div>
        </div>
      </div>

      <p class="section-note text-justify" style="margin-top: 2rem;">
        Allegato a ciascuna lezione troverai <b>link per approfondire</b> e le risorse utilizzate, e potrai verificare il tuo apprendimento tramite gli appositi <b>quiz di fine capitolo</b>.<br><br>
        Il focus è sull'<b>accessibilità</b> e la <b>comprensione</b>: <i>il tono è discorsivo e rilassato</i>, gli argomenti vengono introdotti con gradualità e approfonditi nei capitoli dedicati, man mano che il quadro d'insieme diventa più chiaro.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-users mr-2" aria-hidden="true"></i>A chi è rivolto</h5>
            <ul class="icon-list">
              <li>Appassionati di informatica e <i>self-hosting</i></li>
              <li><i>Homelabber</i> che vogliono fare sul serio</li>
              <li>Sistemisti e professionisti IT</li>
              <li>Chi deve mandare in produzione servizi <b>affidabili</b></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>Prerequisiti</h5>
            <ul class="icon-list">
              <li>Conoscenza base di <a data-umami-event="proxmox_prereq_linux" href="linux.php"><b>Linux</b></a></li>
              <li>Fondamenti di <a href="https://corsoreti.it"><b>networking</b></a></li>
              <li>Un PC o server da dedicare a <b>Proxmox</b> (anche virtualizzato)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="esperti">
    <div class="container">
      <h2 class="section-title">Affidati agli esperti</h2>

      <p class="section-note text-justify">
        Ho realizzato questo corso con la partnership di <a href="https://axolserver.com/?utm_source=morrolinux&utm_medium=corso&utm_campaign=proxmox"><b>AXOL Server</b></a>, che vanta 15 anni di esperienza sul campo.
        Insieme vedremo ciò che c'è da sapere su Proxmox, dalla gestione di un singolo nodo fino al cluster <i>iperconvergente</i> in <i>Alta Disponibilità</i> (HA) seguendo tutte le <b>best practice</b>.
      </p>

      <img src="assets/axol-blade-crop.jpg" class="section-figure" alt="AXOL Server">

      <p class="section-note text-justify">
        Non tralasceremo proprio niente: dalla <b>sicurezza infrastrutturale</b> alla gestione di utenti e ruoli secondo il <i>principio del minimo privilegio</i>, oltre ai backup automatici secondo la <i>regola 3-2-1</i> con <b>Proxmox Backup Server</b> (PBS).<br><br>

        Vedremo anche come si <b>mantiene</b> un cluster nel tempo: aggiornamenti senza downtime, <b>metriche da tenere d'occhio</b> in produzione e diagnostica dei guasti, perché un'infrastruttura non si costruisce una volta sola.
      </p>
    </div>
  </section>

  <section id="programma" class="section-alt">
    <div class="container">
      <h2 class="section-title">Programma del corso</h2>

      <p class="section-lead text-center">
        Nove moduli, dalla scelta dell'hardware al cluster in Alta Disponibilità monitorato.
      </p>

      <div class="syllabus" id="syllabus">
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-1" aria-expanded="true" aria-controls="modulo-1">
            <span class="syllabus-num">1</span>
            <span class="syllabus-name">Introduzione</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse show" id="modulo-1" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Abstract e panoramica del corso</li>
            <li>Perché usare Proxmox</li>
            <li>Per chi è questo corso</li>
            <li>Ottenere il massimo dal corso</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-2" aria-expanded="false" aria-controls="modulo-2">
            <span class="syllabus-num">2</span>
            <span class="syllabus-name">Scelta ottimale dell'hardware</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-2" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Introduzione</li>
            <li>Compute</li>
            <li>Storage</li>
            <li>Networking</li>
            <li>Creazione di un Homelab con hardware di base</li>
            <li>Creazione di un Cluster di livello Enterprise</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-3" aria-expanded="false" aria-controls="modulo-3">
            <span class="syllabus-num">3</span>
            <span class="syllabus-name">Primi passi</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-3" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Installazione di Proxmox</li>
            <li>Operazioni post-installazione</li>
            <li>La Web UI di Proxmox</li>
            <li>Utenti e ruoli</li>
            <li>Macchine virtuali vs Container: pro e contro</li>
            <li>Creare una VM</li>
            <li>VM: Snapshot e Template</li>
            <li>VM: Opzioni avanzate</li>
            <li>Cloud-init</li>
            <li>Container su Proxmox</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-4" aria-expanded="false" aria-controls="modulo-4">
            <span class="syllabus-num">4</span>
            <span class="syllabus-name">Storage e backup</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-4" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Tipi di storage e gestione dei dischi</li>
            <li>Storage LVM e Directory</li>
            <li>Usare un NAS come storage</li>
            <li>ZFS</li>
            <li>Backup e ripristino</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-5" aria-expanded="false" aria-controls="modulo-5">
            <span class="syllabus-num">5</span>
            <span class="syllabus-name">Proxmox Backup Server</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-5" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Introduzione a PBS</li>
            <li>Installazione di PBS</li>
            <li>Configurazione e opzioni di backup e ripristino</li>
            <li>Backup offsite con PBS</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-6" aria-expanded="false" aria-controls="modulo-6">
            <span class="syllabus-num">6</span>
            <span class="syllabus-name">Networking di base</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-6" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Bridge: il mattoncino fondamentale in PVE</li>
            <li>Bonding delle interfacce</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-7" aria-expanded="false" aria-controls="modulo-7">
            <span class="syllabus-num">7</span>
            <span class="syllabus-name">Clustering e Alta Disponibilità (HA)</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-7" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Tipi di Cluster Proxmox</li>
            <li>Ceph: lo storage distribuito del cluster</li>
            <li>Componenti e terminologia di Ceph</li>
            <li>Corosync: il coordinatore del cluster</li>
            <li>Creazione del cluster Proxmox</li>
            <li>Configurazione del cluster con Ceph</li>
            <li>Configurazione dell'HA</li>
            <li>Diagnostica e riparazione del cluster Ceph</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-8" aria-expanded="false" aria-controls="modulo-8">
            <span class="syllabus-num">8</span>
            <span class="syllabus-name">Networking avanzato</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-8" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>SDN in Proxmox</li>
            <li>Il Firewall di Proxmox</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-9" aria-expanded="false" aria-controls="modulo-9">
            <span class="syllabus-num">9</span>
            <span class="syllabus-name">Monitoraggio e Best Practices</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-9" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Best practices</li>
            <li>Come aggiornare Proxmox</li>
            <li>Metriche da monitorare in un cluster di produzione</li>
            <li>Installazione e configurazione di Zabbix</li>
            <li>Setup di Zabbix + HAProxy</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-umami-event="proxmox_section_statistiche" id="statistiche" class="callout-flat">
    <div class="container text-center">
    <h2 class="section-title">Numeri che parlano</h2>
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
  <script src="js/common.js"></script>
  <script src="js/proxmox_script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

  
</body>

</html>

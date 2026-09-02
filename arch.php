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

  <meta name="description" content="Arch Linux Per Comuni Mortali: impara Linux partendo da zero su una distribuzione che non nasconde niente, dall'installazione accanto a Windows alla riparazione del sistema.">

  <link rel="canonical" href="https://corsolinux.com/arch">

  <title>Arch Linux Per Comuni Mortali | Corso Linux</title>

<?php include 'snippets/theme-init.php';?>
</head>

<body id="page-top" class="landing-page" style="--accent: #1793d1;">

  <?php
    // Statistiche pubbliche del corso su Udemy. Finché non c'è un id in
    // data/corsi.php il catalogo restituisce zero e la fascia dei contatori
    // resta nascosta.
    include_once 'snippets/catalogo.php';

    $stats   = catalogo_statistiche(null, array('arch'));
    $subs    = $stats['subs'];
    $lessons = $stats['lessons'];
    $reviews = $stats['reviews'];

    $show_counters = ($subs > 0 || $lessons > 0 || $reviews > 0);
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
            <a data-umami-event="arch_navbar_corsi" class="nav-link js-scroll-trigger" href="#arch">Arch Linux</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="arch_navbar_programma" class="nav-link js-scroll-trigger" href="#programma">Programma</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="arch_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="arch_navbar_altri_corsi" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="arch_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php include 'snippets/theme-toggle.php';?>

  <?php /* Per questo corso non c'è un teaser: l'hero è a tinta piena
             sull'accento della pagina. */ ?>
  <header class="landing landing--tinta">
    <div class="bg"></div>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <div class="hero-logo" aria-hidden="true">
            <img src="assets/arch-linux-logo.png" alt="">
          </div>
          <h1 class="font-weight-light">Impara Linux divertendoti</h1>
          <p class="lead">Dalla prima installazione alla riparazione del sistema, su una distro che non nasconde niente.</p>
          <?php if($show_promo): ?>
            <a data-umami-event="arch_header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#arch"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="arch_header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#arch">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <h2 id="arch" class="section-title">Perché imparare Linux con Arch</h2>

      <p class="section-note text-justify">
      Arch Linux ha la fama di essere una distribuzione <b>per esperti</b>: si installa a mano, non nasconde nulla e
      ti lascia decidere ogni pezzo del sistema. Detta così sembra il posto meno adatto dove <i>cominciare</i>.
      </p>

      <p class="section-claim">
      Bene, io non la penso così. <br>
      <b>Benvenuto su Arch Linux Per Comuni Mortali.</b>
      </p>

      <p class="section-note text-justify">
      Proprio perché non nasconde niente, Arch è la distribuzione che <b>ti insegna come funziona Linux davvero</b>:
      ogni cosa che configuri la capisci, invece di subirla.<br><br>
      Partiremo dall'installazione <b>accanto a Windows</b> (o in macchina virtuale, se preferisci non rischiare),
      passando per la riga di comando, i permessi, i pacchetti e i servizi, fino a <b>rimettere in piedi il sistema</b>
      quando qualcosa va storto &mdash; perché prima o poi succede, e saperlo riparare è metà del mestiere.
      </p>

      <div class="row justify-content-center" style="margin-top: 3.5rem;">
        <div class="col-lg-7 col-md-9">
          <div class="card">
            <img src="assets/arch-linux-per-comuni-mortali.png" class="card-img-top" alt="Copertina corso Arch Linux Per Comuni Mortali" title="Arch Linux Per Comuni Mortali">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Arch Linux Per Comuni Mortali</h3>
              <p class="card-text">
                Questo corso si rivolge a chi ha <b>poca o nessuna esperienza</b> e vuole imparare Linux su una
                distribuzione fresca, <b>stimolante</b> e sfidante al punto giusto.<br><br>

                Ti insegnerò <b>teoria e pratica</b>, con illustrazioni animate ed esempi concreti che potrai
                applicare alla tua installazione per ottenere il massimo dalla tua distro preferita.<br><br>

                L'obbiettivo di questo corso è rendere la curva di apprendimento <b>meno ripida possibile</b>
                per tutti i nuovi utenti.<br><br>
              </p>
              <div class="card-actions mt-auto">
                <?php if($show_promo): ?>
                <a data-umami-event="arch_goto_Arch_SPECIAL_OFFER" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-special-offer"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="arch_goto_Arch" title="Arch Linux Per Comuni Mortali" href="<?php echo $archlinux; ?>" class="btn btn-primary"><b>Vai al corso</b></a>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="imparerai" class="section-alt">
    <div class="container">
      <h2 class="section-title">Cosa imparerai</h2>

      <p class="section-lead text-center">
        Si parte dal significato di "sistema operativo" e si arriva a rimettere in sesto una macchina che non si avvia.
        Ogni concetto arriva <b>quando serve</b>, non prima.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-desktop" aria-hidden="true"></i>
            <span>Installare Linux <b>accanto a Windows</b>, o al sicuro in <i>macchina virtuale</i></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-terminal" aria-hidden="true"></i>
            <span>Muoverti nella <b>shell</b>: file, ricerca, redirezioni e struttura del filesystem</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Gestire <b>utenti</b>, <b>gruppi</b> e <b>permessi</b> su file e cartelle</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-archive" aria-hidden="true"></i>
            <span>Installare e aggiornare software con <b>pacman</b> e con l'<b>AUR</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            <span><b>Monitorare</b> CPU, GPU, rete, I/O e spazio su disco</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-wrench" aria-hidden="true"></i>
            <span><b>Riparare il sistema</b>: log, snapshot, downgrade, avvio che non parte</span>
          </div>
        </div>
      </div>

      <p class="section-note text-justify" style="margin-top: 2rem;">
        Il corso è completamente <b>pratico</b>: ogni argomento è accompagnato da <b>casi d'uso reali</b> e da esempi
        che puoi replicare sulla tua installazione mentre guardi.<br><br>
        Il tono è quello di tutti i corsi <i>Per Comuni Mortali</i>: nessuna scorciatoia o comando da copiare senza capire, ma
        nemmeno pagine di teoria prima di aver visto qualcosa funzionare.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-users mr-2" aria-hidden="true"></i>A chi è rivolto</h5>
            <ul class="icon-list">
              <li>Chi parte <b>da zero</b> con Linux</li>
              <li>Chi arriva da <b>Windows</b> e vuole provare senza buttarsi</li>
              <li>Chi usa già Linux ma non ha mai capito <b>come funziona sotto</b></li>
              <li>Chi vuole passare a Linux come <b>sistema principale</b></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>Prerequisiti</h5>
            <ul class="icon-list">
              <li><b>Nessuna esperienza</b> con Linux</li>
              <li>Un PC con Windows, oppure una <i>macchina virtuale</i></li>
              <li>Voglia di mettere le mani sulla <b>riga di comando</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="programma">
    <div class="container">
      <h2 class="section-title">Programma del corso</h2>

      <p class="section-lead text-center">
        Dieci moduli, dal "cos'è un sistema operativo" alla riparazione di un Arch che non si avvia.
      </p>

      <div class="syllabus" id="syllabus">
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-1" aria-expanded="true" aria-controls="modulo-1">
            <span class="syllabus-num">1</span>
            <span class="syllabus-name">Background</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse show" id="modulo-1" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Cos'è un sistema operativo?</li>
            <li>Nascita di GNU/Linux</li>
            <li>Alternative Open Source</li>
            <li>Cos'è una distro</li>
            <li>Scegliere la derivata di Arch</li>
            <li>Processo di boot di GNU/Linux</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-2" aria-expanded="false" aria-controls="modulo-2">
            <span class="syllabus-num">2</span>
            <span class="syllabus-name">Muovere i primi passi</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-2" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Configurazione di VirtualBox</li>
            <li>Preparazione di Windows per l'installazione di Linux</li>
            <li>Preparazione del LIVE CD</li>
            <li>Installazione di Manjaro accanto a Windows</li>
            <li>Installazione di Endeavour accanto a Windows</li>
            <li>Installazione di Arch Linux con archinstall</li>
            <li>E la SWAP?</li>
            <li>Installazione di Arch Linux ARM su Mac M1</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-3" aria-expanded="false" aria-controls="modulo-3">
            <span class="syllabus-num">3</span>
            <span class="syllabus-name">Le basi della shell</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-3" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Il prompt</li>
            <li>Ottenere aiuto dalla linea di comando</li>
            <li>Gestione dei file da riga di comando</li>
            <li>Gestione file: casi speciali</li>
            <li>Shell I/O e operazioni di redirezione</li>
            <li>Cercare un file con il comando find</li>
            <li>Risorse del computer? No, FHS</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-4" aria-expanded="false" aria-controls="modulo-4">
            <span class="syllabus-num">4</span>
            <span class="syllabus-name">Utenti, gruppi e permessi</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-4" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Elencare gli utenti</li>
            <li>Modifica della password</li>
            <li>Creare un nuovo utente</li>
            <li>Cambiare utente</li>
            <li>Utenti standard e privilegiati</li>
            <li>Aggiungere o rimuovere un utente da un gruppo</li>
            <li>Eliminare un utente</li>
            <li>Gestione dei permessi su file e cartelle</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-5" aria-expanded="false" aria-controls="modulo-5">
            <span class="syllabus-num">5</span>
            <span class="syllabus-name">Package manager</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-5" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Aggiornare il sistema</li>
            <li>Installare nuovi software</li>
            <li>AUR e PKGBUILD</li>
            <li>Installazione di un AUR helper</li>
            <li>Installare software di terze parti con AUR</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-6" aria-expanded="false" aria-controls="modulo-6">
            <span class="syllabus-num">6</span>
            <span class="syllabus-name">Configurazioni software</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-6" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Dove si trovano FISICAMENTE le impostazioni?</li>
            <li>Manjaro: abilitare gli snapshot</li>
            <li>Arch ed Endeavour: abilitare gli snapshot</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-7" aria-expanded="false" aria-controls="modulo-7">
            <span class="syllabus-num">7</span>
            <span class="syllabus-name">Monitoraggio delle risorse</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-7" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>CPU</li>
            <li>GPU</li>
            <li>Network</li>
            <li>I/O</li>
            <li>Spazio libero su disco</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-8" aria-expanded="false" aria-controls="modulo-8">
            <span class="syllabus-num">8</span>
            <span class="syllabus-name">Avvio automatico e servizi</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-8" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Avvio automatico di un'applicazione</li>
            <li>systemd: gestione dei servizi</li>
            <li>Attività ricorrenti con systemd</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-9" aria-expanded="false" aria-controls="modulo-9">
            <span class="syllabus-num">9</span>
            <span class="syllabus-name">Risoluzione dei problemi</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-9" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Risolvere conflitti tra i pacchetti</li>
            <li>Leggere i log</li>
            <li>Pacman: impossibile bloccare il database</li>
            <li>Ripristino del sistema da snapshot</li>
            <li>Downgrade degli aggiornamenti problematici</li>
            <li>Riparare Arch anche quando non si avvia</li>
            <li>Pacman: impossibile aggiornare il sistema (unknown trust)</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-10" aria-expanded="false" aria-controls="modulo-10">
            <span class="syllabus-num">10</span>
            <span class="syllabus-name">Extra</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-10" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Pulizia del sistema</li>
            <li>Installazione manuale di Arch</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if($show_counters): ?>
  <section data-umami-event="arch_section_statistiche" id="statistiche" class="callout-flat">
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
  <?php endif ?>

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
  <script src="js/arch_script.js"></script>

</body>

</html>

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

  <meta name="description" content="Kubernetes Per Comuni Mortali è il modo più semplice per passare da Docker all'orchestrazione dei container, senza essere sopraffatti dalla complessità.">

  <title>Kubernetes Per Comuni Mortali | Corso Linux</title>
</head>

<body id="page-top" class="landing-page" style="--accent: #326ce5; --accent-soft: rgba(50, 108, 229, .09);">

  <?php

    //UDEMY STATS
    ini_set("allow_url_fopen", 1);

    // TODO: sostituire con l'ID Udemy definitivo di "Kubernetes Per Comuni Mortali"
    $KPCM_COURSE_ID = "";

    $subs = $reviews = $lessons = 0;

    if ($KPCM_COURSE_ID != "") {
      $json = @file_get_contents('https://www.udemy.com/api-2.0/courses/' . $KPCM_COURSE_ID . '?fields[course]=title,num_subscribers,num_lectures,num_reviews');
      $KPCM_STATS = json_decode($json);

      if ($KPCM_STATS) {
        $subs = $KPCM_STATS->num_subscribers;
        $reviews = $KPCM_STATS->num_reviews;
        $lessons = $KPCM_STATS->num_lectures;
      }
    }

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
            <a data-umami-event="kubernetes_navbar_corsi" class="nav-link js-scroll-trigger" href="#kubernetes">Kubernetes</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="kubernetes_navbar_programma" class="nav-link js-scroll-trigger" href="#programma">Programma</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="kubernetes_navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="kubernetes_navbar_altri_corsi" class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="kubernetes_navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="landing landing--dark">
    <div class="bg"></div>
    <video autoplay loop muted>
      <source src="assets/teaser-kpcm.mp4" width="100%">
    </video>
    <div class="scrim"></div>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Impara Kubernetes divertendoti</h1>
          <p class="lead">Dal singolo container all'orchestrazione vera e propria!</p>
          <?php if($show_promo): ?>
            <a data-umami-event="kubernetes_header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#kubernetes"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="kubernetes_header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#kubernetes">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <h2 id="kubernetes" class="section-title">Perché imparare Kubernetes</h2>

      <p class="section-note text-justify">
      Kubernetes è la piattaforma di <b>orchestrazione dei container</b> più diffusa al mondo, ma se hai appena mosso i primi passi con <i>Docker</i>,
      <b>potresti pensare che sia roba da grandi aziende</b> con team <i>DevOps</i> dedicati e infrastrutture complesse.
      </p>

      <p class="section-note text-center my-4">
      Bene, io non la penso così. <br>
      <b>Benvenuto su Kubernetes Per Comuni Mortali.</b>
      </p>

      <p class="section-note text-justify">
      Questo corso è progettato per <i>sviluppatori, sistemisti</i> e appassionati di informatica e <i>self-hosting</i>
      che vogliono <b>fare il salto di qualità</b> dalla gestione di singoli container all'<b>orchestrazione vera e propria</b>, attraverso esempi pratici e concreti.<br><br>
      Partendo dalle basi, ti guiderò attraverso i concetti fondamentali di Kubernetes: dai <i>Pod</i> ai <i>Deployment</i>, dai <i>Service</i> agli <i>Ingress</i>, fino alla gestione della <b>configurazione</b> e della <b>persistenza dei dati</b>, senza perderti in astrazioni inutili o terminologie ostiche.
      </p>

      <div class="row justify-content-center" style="margin-top: 3.5rem;">
        <div class="col-lg-7 col-md-9">
          <a data-umami-event="kubernetes_goto_Kubernetes" class="invisible-link" href="<?php echo $KPCM; ?>">
            <div class="card">
              <img src="assets/kubernetes-per-comuni-mortali.png" class="card-img-top" alt="Copertina corso Kubernetes Per Comuni Mortali" title="Kubernetes Per Comuni Mortali">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Kubernetes Per Comuni Mortali</h3>
                <p class="card-text">
                  Questo corso si rivolge a chi ha già <b>familiarità con Docker</b> e vuole fare il passo successivo, imparando a orchestrare i propri container su un <i>cluster</i> vero.<br><br>

                  Affronteremo <b>teoria e pratica</b>: ogni lezione è costruita intorno a un <b>mini progetto funzionante</b> che potrai replicare nel tuo <i>homelab</i> o <i>in azienda</i>.<br><br>

                  L'obbiettivo di questo corso è rendere Kubernetes uno strumento <b>alla portata di tutti</b>, abbattendo la barriera d'ingresso che troppo spesso scoraggia chi vuole crescere.<br><br>
                </p>
                <?php if($show_promo): ?>
                <a data-umami-event="kubernetes_goto_kubernetes_SPECIAL_OFFER" title="Kubernetes Per Comuni Mortali" href="<?php echo $KPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="kubernetes_goto_Kubernetes" title="Kubernetes Per Comuni Mortali" href="<?php echo $KPCM; ?>" class="btn btn-primary mt-auto"><b>Vai al corso</b></a>
                <?php endif ?>

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="imparerai" class="section-alt">
    <div class="container">
      <h2 class="section-title">Cosa imparerai</h2>

      <p class="section-lead text-center">
        Esploreremo Kubernetes con un <b>approccio pratico</b>: ogni lezione è costruita intorno a un <b>mini progetto funzionante</b>,
        e ti illustrerò ogni dettaglio rilevante strada facendo, nel momento in cui diventa necessario capirlo davvero.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span>Installare e configurare un <b>cluster k3s</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-terminal" aria-hidden="true"></i>
            <span>Gestire i workload con <b>kubectl</b> e approccio <b>dichiarativo</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>Esporre applicazioni con <b>Service</b>, <b>Ingress</b> e <b>TLS automatico</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span>Gestire <b>configurazione</b>, <b>segreti</b> e <b>storage persistente</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span>Installare e pacchettizzare applicazioni con <b>Helm</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-wrench" aria-hidden="true"></i>
            <span><b>Diagnosticare e risolvere</b> i problemi più comuni nel cluster</span>
          </div>
        </div>
      </div>

      <p class="section-note text-justify" style="margin-top: 2rem;">
        Allegato a ciascuna lezione troverai <b>codice</b>, <b>appunti</b> e link di approfondimento, e potrai verificare il tuo apprendimento tramite gli appositi <b>quiz</b>.<br><br>
        A differenza dei corsi più avanzati, il focus è sull'<b>accessibilità</b> e la <b>comprensione</b>. <i>Il tono è discorsivo e rilassato</i>, gli argomenti vengono introdotti con gradualità e approfonditi nei capitoli dedicati, man mano che il quadro d'insieme diventa più chiaro.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-users mr-2" aria-hidden="true"></i>A chi è rivolto</h5>
            <ul class="icon-list">
              <li>Appassionati di informatica e <i>self-hosting</i></li>
              <li>Sistemisti</li>
              <li>Sviluppatori</li>
              <li>Chi ha già familiarità con <b>Docker</b> e vuole fare il passo successivo</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>Prerequisiti</h5>
            <ul class="icon-list">
              <li>Conoscenza base di <b>Linux</b></li>
              <li>Buona conoscenza di <b>Docker</b> o <b>Podman</b></li>
              <li>Fondamenti di <b>networking</b></li>
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
        Anche questo corso è realizzato con la partnership di <a href="https://axolserver.com/?utm_source=morrolinux&utm_medium=corso&utm_campaign=kubernetes"><b>AXOL Server</b></a>, che vanta 15 anni di esperienza sul campo.
      </p>

      <div class="row justify-content-center" style="margin-top: 2.5rem; margin-bottom: 2.5rem;">
        <div class="col-lg-10">
          <img src="assets/axol-blade-crop.jpg" class="img-fluid rounded shadow" alt="AXOL Server">
        </div>
      </div>

      <p class="section-note text-justify">
        Costruiremo il nostro cluster su <b>Proxmox VE</b>, così da poter creare, clonare e ripristinare i nodi in pochi istanti e sperimentare <b>senza paura di rompere nulla</b>.<br><br>

        Non ci fermeremo al "deploy che funziona": vedremo anche come <b>mantenere</b> il cluster nel tempo, dagli <i>upgrade</i> di Kubernetes e del sistema operativo sottostante fino al <b>troubleshooting</b> dei problemi più comuni, con <i>snapshot</i> e <i>backup</i> preventivi a farci da rete di sicurezza.<br><br>

        Affronteremo infine il tema dell'<b>Alta Disponibilità</b> (HA) con onestà intellettuale: quando conviene appoggiarsi all'HA infrastrutturale di Proxmox, quali sono i suoi <b>limiti reali</b> e quando invece serve davvero un cluster Kubernetes in HA.
      </p>
    </div>
  </section>

  <section id="programma" class="section-alt">
    <div class="container">
      <h2 class="section-title">Programma del corso</h2>

      <p class="section-lead text-center">
        Undici moduli, dal primo <i>Pod</i> alla manutenzione del cluster nel tempo.
      </p>

      <div class="syllabus" id="syllabus">
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-1" aria-expanded="true" aria-controls="modulo-1">
            <span class="syllabus-num">1</span>
            <span class="syllabus-name">Benvenuto</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse show" id="modulo-1" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Presentazione del corso</li>
            <li>A chi si rivolge questo corso e prerequisiti</li>
            <li>Cosa imparerai e cosa NON copriremo</li>
            <li>Lo sponsor: AXOL Server e perché useremo Proxmox</li>
            <li>Come ottenere il massimo dal corso</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-2" aria-expanded="false" aria-controls="modulo-2">
            <span class="syllabus-num">2</span>
            <span class="syllabus-name">Installiamo k3s su Proxmox e prendiamo confidenza</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-2" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Come funziona k3s</li>
            <li>Setup dell'ambiente su Proxmox: VM con template e cloud-init</li>
            <li>Installazione di k3s e configurazione di kubectl</li>
            <li>Join di altri nodi worker al cluster</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-3" aria-expanded="false" aria-controls="modulo-3">
            <span class="syllabus-num">3</span>
            <span class="syllabus-name">Gli oggetti fondamentali: Pod, ReplicaSet, Deployment</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-3" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Deployment, Pod e ReplicaSet</li>
            <li>Approccio dichiarativo e reconciliation loop</li>
            <li>Namespace: organizzare e isolare i workload</li>
            <li>Labels e annotations: il collante invisibile di Kubernetes</li>
            <li>Lab completo: deploy, scale, update, rollback</li>
            <li>Multi-container Pod e sidecar pattern</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-4" aria-expanded="false" aria-controls="modulo-4">
            <span class="syllabus-num">4</span>
            <span class="syllabus-name">Esporre le applicazioni: Service e Ingress</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-4" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Service ClusterIP, NodePort e LoadBalancer</li>
            <li>App frontend + backend con Service per entrambi</li>
            <li>Ingress: il reverse proxy nativo del cluster</li>
            <li>HTTP vs DNS challenge</li>
            <li>TLS automatico con cert-manager e Let's Encrypt</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-5" aria-expanded="false" aria-controls="modulo-5">
            <span class="syllabus-num">5</span>
            <span class="syllabus-name">Storage: volumi, PV, PVC e StorageClass</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-5" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Come funziona lo storage su Kubernetes (CSI, PVC e modalità di accesso)</li>
            <li>Deployment con dati persistenti (PVC su local-path)</li>
            <li>SMB StorageClass</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-6" aria-expanded="false" aria-controls="modulo-6">
            <span class="syllabus-num">6</span>
            <span class="syllabus-name">Configurazione e segreti: ConfigMap e Secret</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-6" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>ConfigMap: cos'è e come si usa (env, envFrom)</li>
            <li>Montare una ConfigMap come un file</li>
            <li>Montare una ConfigMap come una cartella</li>
            <li>Secret: cosa sono e come funzionano</li>
            <li>Best practice sui Secret</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-7" aria-expanded="false" aria-controls="modulo-7">
            <span class="syllabus-num">7</span>
            <span class="syllabus-name">Health, risorse e ciclo di vita dei Pod</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-7" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Probe: liveness e readiness spiegate con esempi</li>
            <li>Monitoraggio base delle risorse (get pods -w, top pods, top nodes)</li>
            <li>Resource requests e limits: cosa succede se non li metti</li>
            <li>Init container</li>
            <li>Lifecycle hooks (postStart, preStop)</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-8" aria-expanded="false" aria-controls="modulo-8">
            <span class="syllabus-num">8</span>
            <span class="syllabus-name">Workload oltre i Deployment: Job, CronJob, DaemonSet, StatefulSet</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-8" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Job: task una tantum (migrazioni, batch)</li>
            <li>CronJob: schedulare task in modo nativo</li>
            <li>DaemonSet: un Pod per nodo, casi d'uso reali</li>
            <li>StatefulSet: identità, ordering e storage stabile</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-9" aria-expanded="false" aria-controls="modulo-9">
            <span class="syllabus-num">9</span>
            <span class="syllabus-name">Helm e Kustomize</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-9" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Deployment di un'app completa</li>
            <li>Kustomize: quale problema risolve</li>
            <li>Deployment di un'app con Helm (e comandi essenziali)</li>
            <li>Anatomia di un chart Helm</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-10" aria-expanded="false" aria-controls="modulo-10">
            <span class="syllabus-num">10</span>
            <span class="syllabus-name">HA infrastrutturale con Proxmox: la scorciatoia onesta</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-10" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Il dilemma dell'HA: Kubernetes nativo vs Proxmox VE</li>
            <li>Cosa serve a Proxmox per farlo: quorum, Corosync e storage condiviso o replicato</li>
            <li>Lab: configurazione HA, simulazione di guasto e analisi dei limiti</li>
            <li>HA applicativo vs infrastrutturale: cosa Proxmox non può fare per te</li>
            </ul>
          </div>
        </div>
        <div class="syllabus-module">
          <button class="syllabus-toggle" type="button" data-toggle="collapse" data-target="#modulo-11" aria-expanded="false" aria-controls="modulo-11">
            <span class="syllabus-num">11</span>
            <span class="syllabus-name">Manutenzione e troubleshooting</span>
            <i class="fa fa-chevron-down syllabus-chevron" aria-hidden="true"></i>
          </button>
          <div class="collapse" id="modulo-11" data-parent="#syllabus">
            <ul class="syllabus-lessons">
            <li>Upgrade di Kubernetes con System Upgrade Controller</li>
            <li>Upgrade del sistema operativo sottostante</li>
            <li>Upgrade di Proxmox stesso</li>
            <li>Debugging: leggere describe e capire gli errori comuni</li>
            <li>kubectl debug ed ephemeral container</li>
            <li>Rimozione e sostituzione di un nodo dal cluster: cordon e drain</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if($show_counters): ?>
  <section data-umami-event="kubernetes_section_statistiche" id="statistiche" style="color: #FFFFFF; background-color: var(--accent);">
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
  <script src="js/kubernetes_script.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>


</body>

</html>

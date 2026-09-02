<?php
/**
 * Catalogo unico dei corsi.
 *
 * Aggiungere un corso vuol dire aggiungere una voce qui: le schede del
 * catalogo, in ogni pagina che lo include, si generano da questo array.
 * Prima ogni scheda era markup copiato in più file, con i nomi degli eventi
 * Umami cablati a mano — e infatti un click sulla scheda Arch da kubernetes.php
 * veniva registrato come evento di Docker.
 *
 * Campi:
 *   nome      titolo della scheda
 *   famiglia  'pcm' (Per Comuni Mortali) | 'lpi' (certificazioni)
 *   immagine  copertina, path relativo alla root del sito
 *   alt       testo alternativo dell'immagine
 *   title     tooltip dell'immagine (usato anche dai motori di ricerca)
 *   udemy_id  id del corso su Udemy, per le statistiche pubbliche (null se
 *             il corso non è ancora pubblicato o l'id non è noto)
 *   coupon    nome della variabile preparata da snippets/udemy-coupons.php,
 *             che contiene l'URL Udemy con l'eventuale coupon del giorno
 *   landing   pagina di approfondimento, oppure null se non esiste ancora
 *   evento    suffisso storico usato negli eventi Umami, per non spezzare le
 *             serie già raccolte; se assente si usa lo slug
 *   novita    true per mostrare il corso come nuova uscita
 *   testo     corpo della scheda (HTML)
 *   testo_esteso  variante più lunga, usata quando la scheda ricompare in
 *             fondo a una pagina lunga come secondo invito all'acquisto
 *
 * L'ordine dell'array è l'ordine in cui le schede compaiono: dal più recente.
 */

$CORSI = array(

  'kubernetes' => array(
    'nome'     => 'Kubernetes Per Comuni Mortali',
    'famiglia' => 'pcm',
    'immagine' => 'assets/kubernetes-per-comuni-mortali-notext.png',
    'alt'      => 'Copertina corso Kubernetes Per Comuni Mortali',
    'title'    => 'Kubernetes Per Comuni Mortali',
    'udemy_id' => null,
    'coupon'   => 'KPCM',
    'landing'  => 'kubernetes.php',
    'evento'   => 'Kubernetes',
    'novita'   => true,
    'testo'    => 'Questo corso si rivolge a chi ha già <b>familiarità con Docker</b> e vuole fare il salto dalla gestione di singoli container all\'<i>orchestrazione</i> vera e propria.<br><br>

                Affronteremo <b>teoria e pratica</b>: ogni lezione è costruita intorno a un <b>mini progetto funzionante</b> che potrai replicare nel tuo <i>homelab</i> o <i>in azienda</i>.<br><br>

                L\'obbiettivo di questo corso è rendere Kubernetes <b>alla portata di tutti</b>, abbattendo la barriera d\'ingresso di uno strumento solo all\'apparenza ostico.',
  ),

  'proxmox' => array(
    'nome'     => 'Proxmox Per Comuni Mortali',
    'famiglia' => 'pcm',
    'immagine' => 'assets/proxmox-per-comuni-mortali-notext.png',
    'alt'      => 'Copertina corso Proxmox Per Comuni Mortali',
    'title'    => 'Proxmox Per Comuni Mortali',
    'udemy_id' => 6836885,
    'coupon'   => 'PPCM',
    'landing'  => 'proxmox.php',
    'evento'   => 'Proxmox',
    'novita'   => false,
    'testo'    => 'Questo corso adatto a tutti ti guiderà passo passo nella <b>gestione di una infrastruttura IT</b>, dal semplice <i>nodo singolo</i> al <i>cluster iperconvergente</i> in Alta Disponibilità.<br><br>

                Dopo ogni lezione, potrai replicare quanto visto nel tuo <i>homelab</i> o <i>in azienda</i>, per mettere in produzione servizi in modo <b>sicuro e affidabile</b> sulla tua infrastruttura.<br><br>

                L\'obbiettivo di questo corso è migliorare le tue skill sistemistiche integrando competenze professionali spendibili lavorativamente.',
  ),

  'docker' => array(
    'nome'     => 'Docker Per Comuni Mortali',
    'famiglia' => 'pcm',
    'immagine' => 'assets/docker-per-comuni-mortali-notext.png',
    'alt'      => 'Copertina corso Docker Per Comuni Mortali',
    'title'    => 'Docker Per Comuni Mortali',
    'udemy_id' => 6190731,
    'coupon'   => 'DPCM',
    'landing'  => 'docker.php',
    'evento'   => 'Docker',
    'novita'   => false,
    'testo'    => 'Questo corso si rivolge a chi ha <b>poca o nessuna esperienza</b> e vuole imparare Docker con un approccio pratico e stimolante.<br><br>

                Affronteremo <b>teoria e pratica</b>, con animazioni ed esempi concreti che potrai applicare in tutti i tuoi progetti di sviluppo o self-hosting per semplificare il tuo modo di lavorare.<br><br>

                L\'obbiettivo di questo corso è rendere Docker alla portata di tutti riducendo il più possibile la curva di apprendimento.',
  ),

  'arch' => array(
    'nome'     => 'Arch Linux Per Comuni Mortali',
    'famiglia' => 'pcm',
    'immagine' => 'assets/arch-linux-per-comuni-mortali.png',
    'alt'      => 'Copertina corso Arch Linux Per Comuni Mortali',
    'title'    => 'Arch Linux Per Comuni Mortali',
    'udemy_id' => null,
    'coupon'   => 'archlinux',
    'landing'  => null,
    'evento'   => 'Arch',
    'novita'   => false,
    'testo'    => 'Questo corso si rivolge a chi ha poca o nessuna esperienza e vuole imparare Linux su una distribuzione fresca, <b>stimolante</b> e sfidante al punto giusto.<br><br>

                Ti insegnerò <b>teoria e pratica</b>, con illustrazioni animate ed esempi concreti che potrai applicare alla tua installazione per ottenere il massimo dalla tua distro preferita.<br><br>

                L\'obbiettivo di questo corso è rendere la curva di apprendimento meno ripida possibile per tutti i nuovi utenti.',
  ),

  // I corsi di certificazione condividono la stessa landing.
  'essentials' => array(
    'nome'     => 'Linux Essentials',
    'famiglia' => 'lpi',
    'immagine' => 'assets/corso-lpi-linux-essentials-cover.jpg',
    'alt'      => 'Copertina corso LPI Linux Essentials',
    'title'    => 'Corso per certificazione LPI Linux Essentials online in italiano',
    'udemy_id' => 1912136,
    'coupon'   => 'essentials',
    'testo_esteso' => 'Il corso LPI Linux Essentials parte "da zero" e introduce a GNU/Linux e al mondo dell\'Open Source.<br><br>
                Si rivolge ad un pubblico di utenti alle prime armi con Linux, ma anche a chi ha qualche lacuna da appianare.<br><br>
                Il programma completo del corso è diviso in 5 sezioni, e spazia su tutti gli aspetti generali di una distribuzione Linux.',
    'landing'  => 'linux.php',
    'evento'   => 'LE',
    'novita'   => false,
    'testo'    => 'Perfetto per utenti <b>alle prime armi con Linux</b>, ma anche per chi ha qualche lacuna da appianare.<br><br>
                Al termine del corso è possibile ottenere il certificato "Linux Essentials" sostenendo il relativo esame LPI.',
  ),

  'lpic-101' => array(
    'nome'     => 'LPIC-1 | Exam 101',
    'famiglia' => 'lpi',
    'immagine' => 'assets/corso-lpic-1-exam-101-cover.jpg',
    'alt'      => 'Copertina corso LPIC-1 Exam 101',
    'title'    => 'Corso per certificazione LPIC-1 esame 101',
    'udemy_id' => 1705118,
    'coupon'   => 'e101',
    'testo_esteso' => 'LPIC-1 è il corso di certificazione professionale LPI di primo livello.<br><br>
                Partendo dalle conoscenze di base, arriverai a conoscere Linux in ogni suo aspetto, dalla diagnostica dei problemi più comuni all\'amministrazione di Server e PC Desktop.<br><br>
                Questo corso parte dalle basi, ma si rivolge ad una utenza leggermente più consapevole.',
    'landing'  => 'linux.php',
    'evento'   => 'LPIC-101',
    'novita'   => false,
    'testo'    => 'Certificazione professionale LPI di primo livello, per aspiranti <span class="keeptogether"><b>System Administrator</b>.</span><br><br>
                Conoscerai Linux in ogni suo dettaglio e potrai eseguire la diagnostica di sistemi server e desktop.',
  ),

  'lpic-102' => array(
    'nome'     => 'LPIC-1 | Exam 102',
    'famiglia' => 'lpi',
    'immagine' => 'assets/corso-lpic-1-exam-102-cover.jpg',
    'alt'      => 'Copertina corso LPIC-1 Exam 102',
    'title'    => 'Corso per certificazione LPIC-1 esame 102',
    'udemy_id' => 1894304,
    'coupon'   => 'e102',
    'testo_esteso' => 'Seconda parte del programma di certificazione LPI di primo livello.<br><br>
                Questo modulo ti dà la preparazione necessaria a passare il secondo e ultimo esame per la certificazione professionale di primo livello.<br><br>
                Al superamento degli esami 101 e 102 presso un centro autorizzato Pearson VUE, otterai la certificazione professionale in ambito Linux.',
    'landing'  => 'linux.php',
    'evento'   => 'LPIC-102',
    'novita'   => false,
    'testo'    => 'Secondo e ultimo esame per la <b>certificazione professionale</b> di primo livello.<br><br>
                Al superamento degli esami 101 e 102, otterai la certificazione professionale di Linux System Administrator.',
  ),

);

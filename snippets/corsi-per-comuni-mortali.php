  <section id="corsi">
    <div class="container" style="margin-top: 0rem;">
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
              <a data-umami-event="docker_goto_Docker_SPECIAL_OFFER" title="Docker Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="docker_goto_Docker" title="Docker Per Comuni Mortali" href="<?php echo $DPCM; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>

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
  </section>
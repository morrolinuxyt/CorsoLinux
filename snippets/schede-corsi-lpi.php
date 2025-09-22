<div class="container text-center">
      <div class="card-deck"> 
        <a data-umami-event="goto_LE_early_INVISIBLE" class="invisible-link" href="<?php echo $essentials; ?>">
          <div class="card">
            <img src="assets/corso-lpi-linux-essentials-cover.jpg" class="card-img-top" alt="Copertina corso LPI Linux Essentials" title="Corso per certificazione LPI Linux Essentials online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Linux Essentials</h3>
              <p class="card-text">
                Perfetto per utenti <b>alle prime armi con Linux</b>, ma anche per chi ha qualche lacuna da appianare.<br><br>
                Al termine del corso è possibile ottenere il certificato "Linux Essentials" sostenendo il relativo esame LPI.<br><br>
              </p>

              <?php if($show_promo): ?>
                <a data-umami-event="goto_LE_early_SPECIAL_OFFER" title="Corso LPI Linux Essentials" href="<?php echo $essentials; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
                <a data-umami-event="goto_LE_early" title="Corso LPI Linux Essentials" href="<?php echo $essentials; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
        <a data-umami-event="goto_LPIC-101_early_INVISIBLE" class="invisible-link" href="<?php echo $e101; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-101-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 101" title="Corso per certificazione LPIC-1 esame 101">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 101</h3>
              <p class="card-text">
                Certificazione professionale LPI di primo livello, per aspiranti <span class="keeptogether"><b>System Administrator</b>.</span><br><br>
                Conoscerai Linux in ogni suo dettaglio e potrai eseguire la diagnostica di sistemi server e desktop.<br><br>
              </p>

              <?php if($show_promo): ?>
              <a data-umami-event="goto_LPIC-101_early_SPECIAL_OFFER" title="Corso LPIC-1 | Exam 101" href="<?php echo $e101; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="goto_LPIC-101_early" title="Corso LPIC-1 | Exam 101" href="<?php echo $e101; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
          <a data-umami-event="goto_LPIC-102_early_INVISIBLE" class="invisible-link" href="<?php echo $e102; ?>">
          <div class="card">
            <img src="assets/corso-lpic-1-exam-102-cover.jpg" class="card-img-top" alt="Copertina corso LPIC-1 Exam 102" title="Corso per certificazione LPIC-1 esame 102">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">LPIC-1 | Exam 102</h3>
              <p class="card-text">
                Secondo e ultimo esame per la <b>certificazione professionale</b> di primo livello.<br><br>
                Al superamento degli esami 101 e 102, otterai la certificazione professionale di Linux System Administrator.<br><br>
              </p>

              <?php if($show_promo): ?>
              <a data-umami-event="goto_LPIC-102_early_SPECIAL_OFFER" title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-special-offer mt-auto"><?php echo $promo_cta_text; ?></a>
              <?php else: ?>
              <a data-umami-event="goto_LPIC-102_early" title="Corso LPIC-1 | Exam 102" href="<?php echo $e102; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
              <?php endif ?>

            </div>
          </div>
        </a>
      </div>
    </div>
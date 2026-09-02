  <?php include_once 'snippets/catalogo.php'; ?>
  <section id="<?php echo isset($corsi_section_id) ? $corsi_section_id : 'corsi'; ?>">
    <div class="container" style="margin-top: 0rem;">
      <h2 class="section-title">Scopri tutti i corsi Per Comuni Mortali</h2>
      <p class="section-note text-justify">
        La linea "Per Comuni Mortali" è pensata per <b>rendere accessibili a tutti anche i concetti più tecnici.</b> <br>
        A differenza degli altri corsi, gli argomenti vengono trattati in un ordine più naturale all'apprendimento, <b>introducendo i concetti chiave al momento del bisogno</b>, anzichè seguire il classico approccio "a compartimenti stagni" tipico della didattica vecchia scuola. <br>
        Se ti piace questo stile di insegnamento, non puoi perderti gli altri miei corsi Per Comuni Mortali!
      </p>

      <?php catalogo_griglia('pcm'); ?>
    </div>
  </section>

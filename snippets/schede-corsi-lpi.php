  <?php include_once 'snippets/catalogo.php'; ?>
  <div class="container text-center">
    <?php catalogo_griglia('lpi', array(), 'col-lg-4 col-md-6 mb-4', isset($schede_lpi_posizione) ? $schede_lpi_posizione : null); ?>
  </div>

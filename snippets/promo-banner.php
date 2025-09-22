  <?php
    // SHOW PROMO BANNER?
    // promo.json example: {"promo_str": "Offerta a tempo limitato!<br>Tutti i corsi in <b>offerta speciale</b> a 9,99 €<br>termina venerdì 8 marzo", "expire_date": "07-03-2024 23:59:59"}
    $show_promo = false;
    if (file_exists('promo/promo.json')){
      $json_data = file_get_contents('promo/promo.json');
      $data = json_decode($json_data, true);

      $promo_str = $data["promo_str"];
      $promo_expire_date = strtotime($data["expire_date"]);
      $now = date(time());

      if ($now <= $promo_expire_date && $promo_str != "") {
        $show_promo = true;
      }

      $promo_cta_text = "Vai all'offerta!";
    } 

    if (isset($_GET['promo-fiera'])) {
        $show_promo = true;
        $promo_str = "Offerta FIERA a tempo limitato!<br>Clicca qui per riscattare.";
        $promo_cta_text = "Vai all'offerta!";
    }
  
  ?>
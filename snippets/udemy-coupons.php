<?php

  // COUPON UDEMY
  //
  // Il servizio interno "udemy-coupon-dump" espone i link con lo sconto del
  // giorno. Se non risponde — non raggiungibile, lento, o con un JSON storto —
  // si usano i link normali: il sito continua a funzionare e non stampa un
  // rigo di errore in pagina.
  //
  // Prima qui c'era un file_get_contents() nudo seguito da sette accessi a un
  // array che poteva essere null: fuori dalla rete di produzione la pagina si
  // apriva con otto Warning in cima, percorsi del filesystem inclusi.

  $CORSO_FALLBACK = array(
    'archlinux'  => 'https://www.udemy.com/course/arch-linux-per-comuni-mortali/?referralCode=34016D9C6656A83ABF5D',
    'essentials' => 'https://www.udemy.com/course/impara-linux-da-zero-lpi-linux-essentials/?referralCode=9F2C500B1DC009224ABD',
    'e101'       => 'https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione/?referralCode=51B7A99838177C89C187',
    'e102'       => 'https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione-lpi-exam-102/?referralCode=7018A3D9DC7C34281A3F',
    'DPCM'       => 'https://www.udemy.com/course/docker-per-comuni-mortali/?referralCode=6E99545A195DEC330347',
    'PPCM'       => 'https://www.udemy.com/course/proxmox-per-comuni-mortali/?referralCode=3FEA50A193EC484BB14A',
    // TODO: aggiungere il referralCode una volta pubblicato il corso
    'KPCM'       => 'https://www.udemy.com/course/kubernetes-per-comuni-mortali/',
  );

  // Nome della variabile => chiave nel dump dei coupon
  $CORSO_COUPON = array(
    'archlinux'  => 'Arch',
    'essentials' => 'Essentials',
    'e101'       => 'EXAM 101',
    'e102'       => 'EXAM 102',
    'DPCM'       => 'Docker',
    'PPCM'       => 'Proxmox',
    'KPCM'       => 'Kubernetes Per Comuni Mortali',
  );

  $coupons = array();
  $ctx  = stream_context_create(array('http' => array('timeout' => 3)));
  $json = @file_get_contents('http://udemy-coupon-dump', false, $ctx);

  if ($json !== false) {
    $decodificato = json_decode($json, true);
    if (is_array($decodificato)) {
      $coupons = $decodificato;
    }
  }

  foreach ($CORSO_COUPON as $var => $chiave) {
    $$var = (isset($coupons[$chiave]) && $coupons[$chiave] !== '')
          ? $coupons[$chiave]
          : $CORSO_FALLBACK[$var];
  }

?>

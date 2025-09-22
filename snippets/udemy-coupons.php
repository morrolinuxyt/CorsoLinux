<?php

    //UDEMY COUPONS
    $archlinux = $essentials = $e101 = $e102 = $DPCM = $PPCM = "";

    $json_data = file_get_contents('http://udemy-coupon-dump');
    $data = json_decode($json_data, true);

    $archlinux = $data["Arch"];
    $essentials = $data["Essentials"];
    $e101 = $data["EXAM 101"];
    $e102 = $data["EXAM 102"];
    $DPCM = $data["Docker"];
    $PPCM = $data["Proxmox"];

    if(empty($archlinux)){
      $archlinux = "https://www.udemy.com/course/arch-linux-per-comuni-mortali/?referralCode=34016D9C6656A83ABF5D";
    }
    if(empty($essentials)){
      $essentials = "https://www.udemy.com/course/impara-linux-da-zero-lpi-linux-essentials/?referralCode=9F2C500B1DC009224ABD";
    }
    if(empty($e101)){
      $e101 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione/?referralCode=51B7A99838177C89C187";
    }
    if(empty($e102)){
      $e102 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione-lpi-exam-102/?referralCode=7018A3D9DC7C34281A3F";
    }
    if(empty($DPCM)){
      $DPCM = "https://www.udemy.com/course/docker-per-comuni-mortali/?referralCode=6E99545A195DEC330347";
    }
    if(empty($PPCM)){
      $DPCM = "https://www.udemy.com/course/proxmox-per-comuni-mortali/?referralCode=3FEA50A193EC484BB14A";
    }
  ?>
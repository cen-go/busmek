<?php
  function isim() {
    echo "ahmet";
  }

  isim();

  echo "<br>";

  function yeniIsim($isim) {
    echo "merhaba".$isim;
  }

  yeniIsim("Mahmut");

  echo "<br>";

  function tanimli($isim = "Necmi") {
    echo $isim;
  }

  tanimli();
  echo "<br>";
  tanimli("Rıza");

  echo "<br>";

  function son($a, $b) {
    echo $a.$b;
  }

  son("ahmet", "mehmet");

  echo "<br>";

  $ilkSayi = 5;

  function carp($deger) {
    global $ilkSayi;
    return $deger * $ilkSayi;
  }

  echo carp(25);

  echo "<br>";

  function sayac() {
    static $sayi = 0;
    $sayi++;
    return $sayi;
  }

  echo sayac();
  echo "<br>";
  echo sayac();
  echo "<br>";
  echo sayac();
  echo "<br>";

  $dene = function() {
    return "merhaba";
  };

  echo $dene();

  echo "<br>";
  
  function diziToplami($dizi) {
    $toplam = 0;
    foreach ($dizi as $i) {
      $toplam += $i;
    }
    return $toplam;
  }

  $degerlerim = [3, 5, 7, 12, 25];
  
  echo diziToplami($degerlerim);

  echo "<br>";

  $sayi = 10;
  function sayiyicarp(&$deger) {
    $deger *= 2;     
  }

  sayiyicarp($sayi);
  echo $sayi;

  echo "<br>";

  function topla($a, $b) {
    return $a + $b;
  }

  function carpim($x, $y, $z) {
    $carpma = $x * $y;
    return topla($carpma, $z);
  }

  echo carpim(3, 5, 7);


?>
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



?>
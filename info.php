<?php
  // phpinfo();
  // echo $name = "Cengiz";
  // echo $age = 35;
  // echo $isWorking = false;
  // echo $pi = 3.14;
  // $dizi = array("Ahmet", 25, false, 5.25);

  // foreach($dizi as $d) {
  //   echo $d;
  // }

  // $yas = 15;
  // if ($yas >= 18) {
  //   echo "yetişkin";
  // } else {
  //   echo "çocuk";
  // }

  $gun = "Pazar";
  // if ($gun === "Cumartesi" || $gun === "Pazar") {
  //   echo "haftasonu";
  // } else {
  //   echo "haftaiçi";
  // }

  // switch ($gun) {
  //   case 'Pazartesi':
  //   case 'Salı':
  //   case 'Çarşamba':
  //   case 'Perşembe':
  //   case 'Cuma':
  //     echo "Haftaiçi";
  //     break;
  //   case 'Cumartesi':
  //   case 'Pazar':
  //     echo "Haftasonu";
  //     break;
  //   default:
  //     echo "Lütfen gün giriniz";
  //     break;
  // }
  
  // $a = 5;
  // $b = 6;
  // $c = 4;

  // if ($a === $b && $b === $c) {
  //   echo "eş kenar üçgen";
  // } elseif ($a !== $b && $a !== $c && $b !== $c) {
  //   echo "çeşit kenar üçgen";
  // } else {
  //   echo "ikiz kenar üçgen";
  // }

  // $a = "5";
  // $yeniA = intval($a);  // ya da =>  (int)$a; floatval => float a dönüştürme, strval => stringe dönüstürme

  // for ($i = 0; $i <= 100; $i += 2) {
  //   echo $i."<br>";
  // }

  // for ($i = 1; $i < 10; $i++) {
  //   for ($y = 1; $y < 10; $y++) {
  //     $carpim = $i * $y;
  //     echo "{$i} x {$y} = {$carpim}"."<br>";
  //   }
  // }
  
  // $a = 0;
  // while ($a <= 100) {
  //   echo $a."<br>";
  //   $a += 2;
  // }

  // $i = 1; 
  // $y = 1;
  // while ($i < 10) {
  //   while ($y < 10) {
  //    $sonuc = $i * $y;
  //    echo "{$i} x {$y} = {$sonuc}"."<br>";
  //    $y++;
  //   }
  //   $i++;
  // }

  $dizi = array(3, 5, 8, 15, 20);
  $dizi.= [25];

  foreach ($dizi as $i) {
    echo $i."<br>";
  }
  

  // $d = array(
  //   "Ad" => "Ahmet",
  //   "Yaş" => 25,
  //   "Eğitim" => "Lisans"
  // ); 

  // foreach ($d as $key => $value) {
  //   echo "$key = $value"."<br>";
  // }
 

?>
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

  // $dizi = array(3, 5, 8, 15, 20);
  

  // foreach ($dizi as $i) {
  //   echo $i."<br>";
  // }
  

  // $d = array(
  //   "Ad" => "Ahmet",
  //   "Yaş" => 25,
  //   "Eğitim" => "Lisans"
  // ); 

  // foreach ($d as $key => $value) {
  //   echo "$key = $value"."<br>";
  // }

  // $d = ["ahmet", 54, "mehmet", 25];

  // $d2 = ["ad" => "ahmet", "yas" => 54];

  // var_dump($d);

  // print_r($d);

  // echo "<pre>";
  //   print_r($d);
  // echo "</pre>";

  // var_dump($d2);

  // print_r($d2);

  // echo "<pre>";
  //   print_r($d2);
  // echo "</pre>";
 
  // // echo $d[3]."<br>";
  // // echo $d2["ad"];

  // foreach ($d as $a) {
  //   echo $a."<br>";
  // }
  
  // foreach ($d2 as $k => $a) {
  //   echo $k." = ".$a."<br>";
  // }


  // $d1 = ["ahmet", "mehmet", "fikret"];
  // $d2 = [5, 7, 15, 25, 42, 5, 15, 7];
  // $d3 = ["ad" => "ahmet", "yas" => 54];

  // $sonuc1 = in_array("fikret", $d1);
  // $sonuc2 = array_key_exists("yas", $d3);
  // $sonuc3 = in_array("ahmet", $d3);
  // $sonuc4 = array_key_exists("meslek", $d3);
  
  // var_dump($sonuc1);
  // var_dump($sonuc2);
  // var_dump($sonuc3);
  // var_dump($sonuc4);

  // $sorgu = is_array($d2);

  // var_dump($sorgu);

  // $birlestir = array_merge($d1, $d2);
  // var_dump($birlestir);

  // $unique = array_unique($birlestir);
  // var_dump($unique);

  /* ------------ ÇOKLU DİZİLER ------------- */

//   $d = array(
//     array(1, 2, 3),
//     array(4, 5, 6),
//     array(7, 8, 9)
//   );

//   for ($i=0; $i < 3; $i++) { 
//     for ($j=0; $j < 3; $j++) { 
//       echo "d dizisinin <strong>$i</strong> indexindeki, alt dizinin <strong>$j</strong> indexindeki elmanı = ".$d[$i][$j]."<br>";
//     }
//   }

//   $a = array(
//     array(
//       array(1, 2),
//       array(3, 4)
//     ),
//     array(
//       array(5, 6),
//       array(7, 8)
//     )
//   );

// echo "<br>";

//   for ($i=0; $i < 2; $i++) { 
//     for ($j=0; $j < 2; $j++) { 
//       for ($k=0; $k < 2; $k++) { 
//         echo "a dizisi => <strong>$i
//         </strong> indexindeki alt dizi => <strong>$j
//         </strong> indexindeki alt dizinin <strong>$k
//         </strong> 'nci elemanı = ".$a[$i][$j][$k]."<br>";
//       }
//     }
//   }


  $urunler = array(
    "elektronik" => array(
      "bilgisayar" => array(
        array("marka" => "Acer", "fiyat" => 1000)
      ),
      "telefon" => array(
        array("marka" => "iphone", "fiyat" => 1500)
      )
    ),
    "giyim" => array(
      "erkek" => array(
        array("marka" => "Nike", "fiyat" => 500)
      ),
      "kadın" => array(
        array("marka" => "Zara", "fiyat" => 800)
      )
    )
  );

  $urunler["elektronik"]["bilgisayar"][] = ["marka" => "Lenovo", "fiyat" => 1200];
  $urunler["elektronik"]["tablet"][] = ["marka" => "ipad", "fiyat" => 1500];


  foreach ($urunler as $key1 => $kategoriler) {
    echo '<h2 style="font-family: arial; padding: 0; margin-bottom: 0; color: navy;">'.$key1."</h2>"."<br>";
    foreach ($kategoriler as $key2 => $altKategoriler) {
      echo '<h3 style="font-family: arial; text-decoration: underline; padding: 0; margin: 2px 0; color: darkslategray;">'.$key2."</h3>"."<br>";
      foreach ($altKategoriler as $key3) {
        echo '<p style="margin: 0; padding: 0;">Marka = '.$key3["marka"].'</p>'."<br>";
        echo '<p style="margin: 0; padding: 0;">Fiyat = '.$key3["fiyat"].'</p>'."<br>";
      }
    }
  }



  
?>
<?php

$dsn = 'mysql:host=localhost;dbname=portal;charset=utf8';
$username = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p style='color: green;'>Bağlantı sağlandı.</p>";
} catch (PDOException $e) {
  echo "Bağlantı koptu!".$e->getMessage();
}

echo "<h1>Tüm Haberler</h1>";
$sql = 'SELECT title, content FROM news';
$stmt = $pdo->query($sql);
//$stmt = $pdo->query('SELECT * FROM news');
$haberler = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($haberler as $haber) {
  echo "<li>";
  echo $haber["title"];
  echo "<br>";
  echo $haber["content"];
  echo "<br>";
  echo "</li>";
  echo "<hr>";
}
echo "</ul>";

echo "<div style='background-color: gray; height: 10px;'></div>";
echo "<h2>Tek Haber</h2>";

$sql = 'SELECT title, content FROM news WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 3]);
$haberler = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($haberler as $haber) {
  echo "<li>";
  echo $haber["title"];
  echo "<br>";
  echo $haber["content"];
  echo "<br>";
  echo "</li>";
  echo "<hr>";
}
echo "</ul>";

/*------------------------------------ KAYIT EKLEME-----------------------------------------*/

echo "<div style='background-color: gray; height: 10px;'></div>";
echo "<h2>Kayıt Ekleme</h2>";

//Formdan gelen verilerin alınması
$title = "Örnek Başlık";
$slug = "ornek_baslik";
$content = "bu bir örnek içeriktir";
$image = "ornek-gorsel.jpg";
$categoryId = 1;

//Parametreli sorgu ile kayıt ekle
$sql = 'INSERT INTO 
  `news`(`title`, `content`, `image`, `slug`, `category_id`, `created_at`, `updated_at`) 
  VALUES (:title, :content, :image, :slug, :category_id, now(), now())';
$smt = $pdo->prepare($sql);

//Gelen verilerle tablodaki değerlerin eşleştirilmesi
$params = [
  ":title" => $title,
  ":slug" => $slug,
  ":content" => $content,
  ":image" => $image,
  ":category_id" => $categoryId,
];

//kayıt işleminin gerçekleştirilmesi ve anında kontrolü
if ($smt->execute($params)) {
  echo "<p style='color: green;'>Kayıt başarıyla eklendi.</p>";
} else {
  echo "<p style='color: red;'>Kayıt eklenirken bir hata oluştu!</p>";
}


/*-----------------------------------UPDATE------------------------------------*/

$title = "Yeni Başlık";
$slug = "yeni_baslik";
$content = "bu yeni içeriktir";
$image = "yeni-gorsel.jpg";

$sql = 'UPDATE `news` SET title=:title, content=:content, 
  image=:image, slug=:slug,updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);

$guncellenenIcerik = [
  ":title" => $title,
  ":slug" => $slug,
  ":content" => $content,
  ":image" => $image,
  ":id" => 9,
];

if ($stmt->execute($guncellenenIcerik)) {
  echo "<p style='color: green;'>Kayıt başarıyla güncellendi.</p>";
} else {
  echo "<p style='color: red;'>Kayıt güncellenemedi!</p>";
}


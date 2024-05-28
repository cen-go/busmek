<?php

$dsn = 'mysql:host=localhost;dbname=portal;charset=utf8';
$username = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Bağlantı sağlandı.";
} catch (PDOException $e) {
  echo "Bağlantı koptu!".$e->getMessage();
}

$sql = 'SELECT * FROM news';
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
}
echo "</ul>";




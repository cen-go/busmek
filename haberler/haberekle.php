<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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


//Parametreli sorgu ile kayıt ekle
$sql = 'INSERT INTO news(title, content, image, slug, created_at, updated_at) 
  VALUES (:title, :content, :image, :slug, now(), now())';
$smt = $pdo->prepare($sql);

//Gelen verilerle tablodaki değerlerin eşleştirilmesi
$params = [
  ":title" => $_POST["title"],
  ":slug" => $_POST["slug"],
  ":content" => $_POST["content"],
  ":image" => "",  
];

//kayıt işleminin gerçekleştirilmesi ve anında kontrolü
if ($smt->execute($params)) {
  echo "<p style='color: green;'>Kayıt başarıyla eklendi.</p>";
} else {
  echo "<p style='color: red;'>Kayıt eklenirken bir hata oluştu!</p>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles/style.css">
  <title>Haber Ekle</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 sol-sutun shadow">
        <a href="index.php" class="btn btn-dark shadow mb-2 btn-left">Haberler</a>
        <a href="haberekle.php" class="btn btn-outline-dark d-block shadow btn-left">Haber Ekle</a>
      </div>
      <div class="col-lg-9">
        <div class="row ps-5">
          <h1 class="text-decoration-underline my-5">Haber Ekle</h1>
          <form action="" method="post">
            <div class="row ps-5">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Başlık</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">İçerik</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="8"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-dark ms-5">Kaydet</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
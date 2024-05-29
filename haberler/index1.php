<?php

$dsn = 'mysql:host=localhost;dbname=portal;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "bağlantı sağlandı";
} catch (PDOException $e) {
    echo "Bağlantı Koptu: ". $e->getMessage();
}

$sql = 'SELECT id, title FROM news';
$stmt = $pdo->query($sql);
//$stmt = $pdo->query('SELECT * FROM news');
$haberler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles/style.css">
  <title>Haberler</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 sol-sutun shadow">
        <button type="button" class="btn btn-outline-dark shadow mb-2 btn-left">Haberler</button>
        <button type="button" class="btn btn-dark d-block shadow btn-left">Haber Ekle</button>
      </div>
      <div class="col-lg-9">
        <div class="row ps-5">
          <h1 class="text-decoration-underline my-5">Haberler</h1>
          <div class="row ps-5">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" class="col-1">Id</th>
                  <th scope="col" class="col-8">Başlık</th>
                  <th scope="col" class="col-3">İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($haberler as $haber) {
                ?>
                <tr>
                  <th scope="row"><?php echo $haber["id"] ;?></th>
                  <td><?php echo $haber["title"] ;?></td>
                  <td><button class="btn btn-link">Düzenle</button></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
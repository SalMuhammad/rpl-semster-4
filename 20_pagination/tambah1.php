<?php
require 'functions.php';

session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
if (isset($_POST["submit"])) {
  // var_dump($_POST);
  if (tambah1($_POST) > 0) {
    echo "<script>
            alert('data berhasil di simpan')
            document.location.href = 'index.php'
          </script>
          ";
    // alertt("data berhasil di simpan", "index.php");
  } else {
    echo "
      <script>
        alert('data gagal simpan')
        // document.location.href = 'index.php'
      </script>
    ";
    //  alertt("data gagal di simpan", "index.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data</title>
</head>

<body>
  <a href="index.php">kembali</a>
  <h1>form tambah data</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li><input type="file" accept="image/*" onchange="loadFile(event)" name="gambar" id="file_gambar"></li> <br>
      <img alt="" id="img" height="100px">
      <li><input type="text" placeholder="nama buah" name="nama" required></li>
      <li><input type="text" placeholder="rasa" name="rasa"></li>
      <li><input type="text" placeholder="asal negara" name="asal_negara"></li>
      <li><input type="text" placeholder="tanda matang" name="tanda_matang"></li>
      <li><input type="text" placeholder="kebebasan makan" name="kebebasan_makan"></li>
      <li><input type="text" placeholder="di temukan pada" name="ditemukan_pada"></li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>
  <script src="../../js/script.js"></script>
</body>

</html>
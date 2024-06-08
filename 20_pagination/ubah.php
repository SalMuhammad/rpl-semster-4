<?php 
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


// mengambil data dari URL
$id = $_GET["id"];
$buah_ = ambil_tabel("SELECT * FROM buah_buahan WHERE id = $id")[0];

if(isset($_POST["submit"])) {  
  if(ubah($_POST) > 0) {
    echo "
    <script>
      alert('data telah di rubah')
      document.location.href = 'index.php'
    </script>
    ";
      // alertt("data berhasi di rubah", "index.php");
    } else {
      echo "
      <script>
      alert('data belum di rubah')
      // document.location.href = 'index.php'
      </script>
      ";
      // alertt("data gagal di rubah", "index.php");
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
  <a href="index.php"> kembali</a>
  <h1>form tambah data</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <input type="hidden" name="id" value="<?= $id; ?>"> 
      <input type="hidden" name="gambar_lama" value="<?= $buah_["gambar"]; ?>"> 
      
      <li><input type="text" placeholder="nama buah_" name="nama" value="<?= $buah_['nama'] ?>"></li>
      <li><input type="text" placeholder="rasa" name="rasa" value="<?= $buah_['rasa'] ?>"></li>
      <li><input type="text" placeholder="asal negara" name="asal_negara" value="<?= $buah_['asal_negara'] ?>"></li>
      <li><input type="text" placeholder="tanda matang" name="tanda_matang" value="<?= $buah_['tanda_matang'] ?>"></li>
      <li><input type="text" placeholder="kebebasan makan" name="kebebasan_makan" value="<?= $buah_['kebebasan_makan'] ?>"></li>
      <li><input type="text" placeholder="di temukan pada" name="ditemukan_pada" value="<?= $buah_['ditemukan_pada'] ?>"></li>
      
      <li>
        <input type="file" accept="image/*" onchange="loadFile(event)" placeholder="ling gambar" name="gambar" value="<?= $buah_['gambar'] ?>" /> <br>
        <img id="img" src="<?= $buah_["gambar"]?>" alt="gambar" width="100px">
      </li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>

  <script src="../../js/script.js"></script>
</body>
</html>
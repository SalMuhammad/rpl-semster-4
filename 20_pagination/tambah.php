<?php 
$koneksi_ke_db = mysqli_connect("localhost", "root","", "belajar_php_mysql");
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
if(isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $gambar = $_POST["gambar"];
  $rasa = $_POST["rasa"];
  $asal_negara = $_POST["asal_negara"];
  $tanda_matang = $_POST["tanda_matang"];
  $kebebasan_makan = $_POST["kebebasan_makan"];
  $ditemukan_pada = $_POST["ditemukan_pada"];

  $que = "INSERT INTO buah_buahan
           VALUES 
            ('$nama', '', '$gambar', '$rasa', '$asal_negara', '$tanda_matang',
             '$kebebasan_makan', '$ditemukan_pada')
          ";
  // simpan data ke tabel 
  mysqli_query($koneksi_ke_db, $que);

  // cek apakah data berhasil di simpan?
  echo mysqli_affected_rows($koneksi_ke_db);
  if(mysqli_affected_rows($koneksi_ke_db) > 0) { ?>
     <script>alert('data berhasil di simpana')</script>
 <?php  } else {
    echo "<script>alert('data gagal di simpan)</script>";
    mysqli_error($koneksi_ke_db, $que);
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
  <form action="" method="post">
    <ul>
      <li><textarea placeholder="ling gambar" name="gambar" cols="50" rows="5"></textarea></li>
      <li><input type="text" placeholder="nama buah" name="nama"></li>
      <li><input type="text" placeholder="rasa" name="rasa"></li>
      <li><input type="text" placeholder="asal negara" name="asal_negara"></li>
      <li><input type="text" placeholder="tanda matang" name="tanda_matang"></li>
      <li><input type="text" placeholder="kebebasan makan" name="kebebasan_makan"></li>
      <li><input type="text" placeholder="di temukan pada" name="di_temukan_pada"></li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>
</body>
</html>
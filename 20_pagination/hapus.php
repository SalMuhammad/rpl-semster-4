<?php 
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET["id"];
$gambar = $_GET["gambar"];;
if(hapus($id, $gambar) > 0) { ?>
  <script>
        alert('data berhasil di hapus👌')
        document.location.href = 'index.php'
      </script>
    <?php 
}

?>
<?php
require 'functions.php';

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

// ambil data dari tabel dabases (buah_buahan)


$jmlDtPerhalaman = 3;
$jmlData = count(ambil_tabel("SELECT * FROM buah_buahan"));
$jmlHalaman = ceil($jmlData / $jmlDtPerhalaman);
$halamanAktiff = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jmlDtPerhalaman * $halamanAktiff) - $jmlDtPerhalaman;

$buah_buahan = ambil_tabel("SELECT * FROM buah_buahan LIMIT $awalData, $jmlDtPerhalaman");

// ketika tombol cari di klik
if (isset($_POST["cari"])) {
  $buah_buahan = cari($_POST["keyword"], $awalData, $jmlDtPerhalaman);
}
?>












<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  </style>
</head>

<body>
  <main>
    <div class="bg-[var(--warnaDasar)]">
      <header class="p-4 flex justify-between items-center gap-3">
        <div style="width: var(--lebarLayar);" class="uppercase mx-auto flex justify-between items-center">
          <div class="logo flex items-center ">
            <div class="rounded-full h-10 w-10 bg-red-500"></div>
            <p class="text-white pl-4 font-semibold">
              Pondok Pesantren <br>Attaufiqurobi
            </p>
          </div>
          <div class="">
            <ul class="text-white flex">
              <li class="mx-2"><a href="index.html">home</a></li>
              <li class="mx-2 font-bold"><a href="">daftar santri</a></li>
              <li class="mx-2"><a href="tunggakan.php">tunggakan</a></li>
          </div>
          <a href="logout.php" class="bi bi-arrow-bar-right text-white font-bold text-3xl cursor-pointer"></a>
        </div>
    </div>
    </header>
    </div>

    <!-- !bagian hero -->
    <div class="flex">
      <div id="sidebar" class="w-40 bg-[var(--warnaDasar)] p-2 h-[calc(100vh-90px)]">
      </div>

      <!-- !bagain pencarian -->
      <div class="container m-7">
        <figure id="pencarian" class="rounded-lg overflow-hidden inline-block">
          <i class="p-1 text-white bi bi-search bg-[var(--warnaDasar)]"></i><input type="text" class="border p-1 w-44">
        </figure>

        <!-- !fagination -->
        <div id="pagination" class="text-cyan-900 cursor-pointer mt-5">
          <i class="bi bi-chevron-left"></i>
          <a href="">1</a>
          <a href="" class="font-bold">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">...</a>
          <i class="bi bi-chevron-right"></i>
        </div>

        <!-- !bagian tabel -->
        <table class="mt-1" border="1" cellspacing="5" cellpadding="5">
          <thead class="capitalize text-teal-800">
            <tr class="bg-[var(--warnaDasar)] text-white">
              <th>no absen</th>
              <th>nama</th>
              <th>kontak</th>
              <th>detail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7485845</td>
              <td>m sahrul</td>
              <td>0934544545</td>
              <td class="text-white"><a href="" class="bg-teal-700 rounded-lg px-4">lihat</a></td>
            </tr>
            <tr>
              <td>534534</td>
              <td>ismiaringsig</td>
              <td>0934544545</td>
              <td class="text-white"><a href="" class="bg-teal-700 rounded-lg px-4">lihat</a></td>
            </tr>
            <tr>
              <td>365658</td>
              <td>kg omen</td>
              <td>0934544545</td>
              <td class="text-white"><a href="" class="bg-teal-700 rounded-lg px-4">lihat</a></td>
            </tr>
          </tbody>
        </table>

<!--
        <h1 style="text-transform: capitalize;">daftar buah-buahan </h1>
        <a href="tambah1.php">tambah data</a>
        <br><br>
        <form action="" method="post">
          <input style="align-items: center;" type="search" name="keyword" autofocus autocomplete="off" placeholder="masukan keyword pencarian..." size="40">
          <button type="submit" name="cari">Cari</button>
        </form>

         mempunculkan tombol halaman sebelumnya hanya jika halaman bukan halaman 1 --
        <?php if ($halamanAktiff > 1) : ?>
          <a href="?halaman=<?= $halamanAktiff - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $jmlHalaman; $i++) : ?>
          <?php if ($i == $halamanAktiff) : ?>
            <a style="border: 1px solid; display:inline-block; padding: 2px 4px;" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
          <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
          <?php endif ?>
        <?php endfor; ?>
        <?php if ($halamanAktiff < $jmlHalaman) : ?>
          <a href="?halaman=<?= $halamanAktiff + 1; ?>">&raquo;</a>
        <?php endif ?>
        <table cellspacing="0" cellpadding="2">
          <tr>
            <th>no</th>
            <th>gambar</th>
            <th>nama</th>
            <th>rasa</th>
            <th>asal negara</th>
            <th>tanda matang</th>
            <th>kebebasan makan</th>
            <th>di temukan</th>
            <th rowspan="2">aksi</th>
          </tr>
          <tbody>
            <?php
            $i = 1;
            foreach ($buah_buahan as $buah) :
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><img src="<?= $buah["gambar"]; ?>" height="50px" alt="gambar buah"></td>
                <td><?= $buah["nama"]; ?></td>
                <td><?= $buah["rasa"]; ?></td>
                <td><?= $buah["asal_negara"]; ?></td>
                <td><?= $buah["tanda_matang"]; ?></td>
                <td><?= $buah["kebebasan_makan"]; ?></td>
                <td><?= $buah["ditemukan_pada"]; ?></td>
                <td><a href="hapus.php?id=<?= $buah["id"]; ?>&gambar=<?= $buah["gambar"]; ?>" onclick="return confirm('apakah yakin menghapus?')">hapus</a> || <a href="ubah.php?id=<?= $buah["id"] ?>">ubah</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
            -->



    </div>

  </main>





















</body>

</html>
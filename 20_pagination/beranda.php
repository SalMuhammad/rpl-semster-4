<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --lebarLayar: 85%;
      --warnaDasar: #008550;
    }
  </style>
</head>

<body>
  <main class="bg-[var(--warnaDasar)]">
    <header class="p-4 flex justify-between items-center gap-3">
      <div style="width: var(--lebarLayar);" class=" uppercase mx-auto flex justify-between items-center">
        <div class="logo flex items-center ">
          <div class="rounded-full h-10 w-10 bg-red-500"></div>
          <p class="text-white pl-4 font-semibold">
            Pondok Pesantren <br>Attaufiqurobi
          </p>
        </div>
        <div class="">
          <ul class="text-white flex">
            <li class="mx-2 font-bold"><a href="">beranda</a></li>
            <li class="mx-2"><a href="#sejarah">sejarah</a></li>
            <li class="mx-2"><a href="#fasilitas">fasilitas</a></li>
            <li class="mx-2"><a href="#kontak">kontak</a></li>
            <li class="mx-2"><a href="index.php">admin/santri</a></li>
          </ul>
        </div>

        <?php
      if (isset($_COOKIE['id']) && isset($_COOKIE['fr_aria'])) { ?>
            <a href="logout.php">
              <i class="text-white block text-center bi  bi-person-fill text-3xl"></i>
              <i class="text-white block text-center bi  bi-box-arrow-right text-lg"></i>
            </a>
          <?php } else { ?>

        <div class="login">
          <a href="register.php" class="inline-block text-white">Daftar</a>
          <a href="/20_pagination/index.php" class="inline-block border border-white px-4 py-2 rounded-md text-white">masuk</a>
        </div>
      </div>
        <?php }
            ?>
    </header>
    <div style="height: calc(100vh - 167px);" class="mx-auto h-[100vh -] w-[var(--lebarLayar)] text-white">
      <h3 class="mt-32 capitalize text-5xl font-bold">membantu temukan <br> jalan surga.</h3>
      <p style="line-height: 1.4;" class="mt-3 text-lg w-96">Attaufiqu robi hadir untuk sebagai rumah sendiri
        dalam perjalanan menuju keridoanNya.
        menjadi tameng gempuran modern</p>
      <a href="register.php" class="inline-block capitalize mt-9 p-3 font-bold rounded-sm bg-white text-[var(--warnaDasar)]">daftar
        sekarang</a>
      <i class="bi bi-chevron-compact-right font-bold text-3xl"></i>
    </div>

  </main>
  <section id="sejarah">
    <div class="w-[95%] mx-auto h-svh">

      <h3 class="text-center font-bold uppercase text-3xl my-2">sejarah</h3>
      <div class="flex justify-between gap-2">
        <div class="bg-slate-500 flex-1"> gambar</div>
        <p class="flex-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero adipisci enim illo hic tempore
          similique totam! Odit esse veniam, sit ipsa id tenetur aspernatur aliquid voluptate explicabo quod, sint,
          minima molestiae distinctio iste quaerat voluptatum ipsum dolor quo. Incidunt aliquid impedit dolore eligendi
          omnis cum in harum, iure numquam quaerat?</p>
      </div>
    </div>
    <section id="fasilitas" class="h-svh bg-teal-700 px">
      <div class="w-[95%] mx-auto">
        <div class="flex justify-between">
          <span class="text-white text-[1.4em] font-extrabold">Fasilitas</span>
          <button class="bg-teal-500 px-4 py-1 rounded-md text-white">lihat semua</button>
        </div>

        <div class="flex justify-between gap-2 h-32 items-stretch">
          <div class="flex-1 bg-gradient-to-bl from-violet-800 to-blue-700">ruangan <img src="" alt="ini gambar"></div>
          <div class="flex-1 bg-gradient-to-bl from-violet-800 to-blue-700">madrasah <img src="" alt="ini gambar"></div>
          <div class="flex-1 bg-gradient-to-bl from-violet-800 to-blue-700">listrik <img src="" alt="ini gambar"></div>
          <div class="flex-1 bg-gradient-to-bl from-violet-800 to-blue-700">kamar mandi <img src="" alt="ini gambar">
          </div>
          <div class="flex-1 bg-gradient-to-bl from-violet-800 to-blue-700">ngaji 2 sehari <img src="" alt="ini gambar">
          </div>
        </div>
    </section>
</body>
</div>
</section>

<section id="kontak" class="bg-teal-700 h-96">
  <div class="flex items-stretch w-[95%] mx-auto justify-between gap-2 h-32">
    <div class="flex-1">
      <h3 class="font-bold uppercase text-1xl text-white">butuh konsultasi ...?, <br> silahkan kontak kami <br> siap
        membantu</h3>
      <div class="text-white mt-5 mb-2 font-bold uppercase">kontak</div>

      <div class="flex gap-2 text-white">
        <i class="bi bi-geo-alt-fill"></i>
        <div class="konten">jalan pelajaran perjuangan</div>
      </div>
      <div class="flex gap-2 text-white">
        <i class="bi bi-person-lines-fill"></i>
        <div class="konten">083734763234</div>
      </div>
      <div class="flex gap-2 text-white">
        <i class="bi bi-envelope-at-fill"></i>
        <div class="konten">Attaufiqurobi@gmail.com</div>
      </div>
    </div>

    <div class="flex justify-between gap-2 flex-1 text-teal-700">
      <div class="p-4 bg-red-50 flex-1 h-48">
        <h3 class="font-bold uppercase text-center mb-3 text-1xl ">Ada Pertanyaan?</h3>
        <form action="">
          <label for="email" class=" mt-4" <input id="email" class="p-1 rounded-sm w-full bg-gray-300" type="email" placeholder="masukan email anda disini">
          </label>
          <label for="pertanyaan" class="mx-4">
            <input id="pertanyaan" class="p-1 rounded-sm w-full bg-gray-300" type="email" placeholder="masukan pertanyaan anda ..">
          </label>
          <button class="bg-teal-700 capitalize px-4 py-1 rounded-md mt-4 text-white">lihat semua</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  console.log(document.cookie);
</script>
</body>

</html>
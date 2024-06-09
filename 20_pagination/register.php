<?php 
require 'functions.php';

// session_start();
// if(!isset($_SESSION["login"])) {
//   header("Location: login.php");
//   exit;
// }

if(isset($_POST["register"])) {
  if(registrasi($_POST) > 0) {
    echo "
    <script>
      alert('user baru berhasil di tambahkan')
    </script>
    ";
  } 
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="capitalize">
  <div class="grid h-[100vh] place-items-center bg-slate-800 backdrop-blur-3xl">
    <div class="layer w-[600px] bg-zinc-400 h-auto">
      <div class="relative h-full py-20 overflow-hidden bg-blue-800 w-[60%] pl-4 float-right">
        <p class="text-[.9em] absolute right-3 top-3">Sudah punya akun, login <a href="login.php">disini</a>.</p>

        <h3 class="absolute font-bold text-xl text-teal-80 top-12">registrasi calon santri</h3>

        <div class="wadah-form bg-green-70 w-full">
          <form class="bg-red-70 w-full" action="">
            <div id="geser" class="flex justify-between w-[1000px] border- border-yellow-70 gap-5 duration-1000 transition-all">
              <!-- !bagian data login -->
              <div class="flex-1 bg-fuchsia-90 -ml-[200px" id="data-login">
                <div clas="w-full">
                  <label class="text-white text-[.9em]" for="nama">Nama</label><br>
                  <input class="w-full" type="text" id="nama">
                </div>
                <div clas="w-full">
                  <label class="w-full text-white text-[.9em]" for="email">email</label> <br>
                  <input class="w-full" type="email" id="email">
                </div>
                <div clas="w-full">
                  <label class="w-full text-white text-[.9em]" for="password">password</label><br>
                  <input class="w-full" type="text" id="password">
                </div>
                <div clas="w-full">
                  <label class="w-full text-white text-[.9em]" for="konfir-password">konfirmasi password</label> <br>
                  <input class="w-full" type="text" id="konfir-password">
                </div>
              </div>
              <!-- !identitas santri -->
              <div style="width: calc(this + 50px)" class="bg-indigo-60 w-full flex-1" id="identitas-santri">
                <div>
                  <label class="w-full text-white text-[.9em]" for="no-hp">no hp/wa</label><br>
                  <input type="text" id="no-hp" class="w-full">
                </div>
                <div>
                  <label class="w-full text-white text-[.9em]" for="alamat">alamat lengkap</label> <br>
                  <input class="w-full" type="alamat" id="alamat">
                </div>
                <div>
                  <label class="w-full text-white text-[.9em]" for="ttl">tempat tanggal lahir</label> <br>
                  <input class="w-full" type="text" id="ttl">
                </div>
                <div>
                  <label class="w-full text-white text-[.9em]" for="jenis-kelamin">jenis kelamin</label> <br>
                  <input class="w-full" type="text" id="jenis-kelamin">
                </div>
              </div>
              <!-- !persyaratan -->
              <div class="flex-1 bg-lime-60" id="persyaratan pl-5">
                <div>
                  <label class="w-full text-white text-[.9em]" for="photo-KK">mengunggah photo KK</label><br>
                  <input type="file" id="photo-KK">
                </div>
                <div>
                  <label class="w-full text-white text-[.9em]" for="alamat">alamat lengkap</label> <br>
                  <input type="alamat" id="alamat">
                </div>
              </div>
            </div>

            <button class="absolute bottom-4 right-130px] bg-teal-700 text-white px-5 p-1 rounded font-medium hidden" id="btn-sebelumnya">Berikutnya</button>
            <button class="btn absolute bottom-4 right-[25px] bg-teal-700 text-white px-5 p-1 rounded font-medium " id="btn-register">Berikutnya</button>
          </form>
        </div>

        
      </div>
    
    </div>
  </div>
  <script src="../file.js"></script>
</body>

</html>










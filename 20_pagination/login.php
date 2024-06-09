<?php
require 'functions.php';
session_start();

// // cek session login
// if(isset($_COOKIE['login'])) {
//   if($_COOKIE['login'] === 'true') {
//     // echo 'ada';
//     $_SESSION['login'] = true;
//   }
// }

// cek cookie id dan fr_aria
if (isset($_COOKIE['id']) && isset($_COOKIE['fr_aria'])) {
  $id = $_COOKIE['id'];
  $fr_aria = $_COOKIE['fr_aria'];
  // cari username berdasarkan id dari cookie
  $hasil = mysqli_query($koneksi_ke_db, "SELECT username FROM users WHERE '$id'");
  $ngaran = mysqli_fetch_assoc($hasil);

  // cek id dan fr_aria di database dengan yang berada di cookie
  if ($fr_aria === hash('sha256', $ngaran['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}




// ketika tombol login di klik.
if (isset($_POST["login"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  global $koneksi_ke_db;

  // cek ambil data di database yang usernamenya sama dengan yang di inputkan user.
  $result = mysqli_query($koneksi_ke_db, "SELECT * FROM users WHERE username = '$user'");
  if (strlen($user) < 1 || strlen($pass) < 1) {
    echo "
    <script>
    alert('username atau password tidak boleh kosong!')
    </script>
    ";
  } else {
    // cek apakah ada usrname yang sama di database dengan yang di tuliskan user?
    if (mysqli_num_rows($result) === 1) {
      $rows = mysqli_fetch_assoc($result);
      // jika ada, cek password nya sama gak dengan yang di tulis user?
      if (password_verify($pass, $rows["password"])) {
        // cek apakah remember di centang?
        if (isset($_POST["remember"])) {
          
          // setcookie("username", "JohnDoe", time() + 3600, "/", "", false, false);

          setcookie('id', $rows['id'], time() + 31622400, "/", "", false, false);
          setcookie('fr_aria', hash('sha256', $rows['username']), time() + 31622400, "", false, false);
        }
        $_SESSION["login"] = true;
        header('Location: index.php');
        exit;
      }
    }
    $error = true;
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

<body class="">
  <div class="grid h-[100vh] justify-center items-center bg-slate-800 backdrop-blur-3xl">
    <div class="layer w-[500px] h-auto flex">
      <div class="bg-emerald-70 bg-gradient-to-br from-emerald-950 to-emerald-400 w-[150px]"></div>
      <div class="bg-white p-16  w-[400px] ">
        <h3 class="text-[var(--warnaDasar)] text-3xl font-semibold">Selamat Datang</h3>
        <div class="text-[.9em]">
          <?php if (isset($error)) { ?>
            <p style="color: red; font-style: italic;">username atau password salah!! <span>x</span></p>
          <?php } ?>
          <p class="capitalize">janan lupa ngajinya..</p>

          <!-- !bagian  -->
          <form action="" method="post">
            <div class="mt-3">
              <label for="" form="email">Email :</label> <br>
              <input name="username" placeholder="Masukan email" class="border w-full border-teal-600 rounded-md px-3 py-1 outline-sky-600 text-[1.2] mt-1" type="text" id="email">
            </div>
            <div class="mt-3">
              <label for="" form="password">Password :</label> <br>
              <input name="password" placeholder="Masukan password" class="border w-full border-teal-600 rounded-md px-3 py-1 outline-sky-600 text-[1.2] mt-1" type="text" id="password">
            </div>
            <li>
              <input type="checkbox" name="remember" id="remember">
              <label style="display: inline-block;" for="remember">ingat saya</label>
            </li>
            <div class="mt-6">
              <a href="">Lupa password</a>
            </div>
            <div class="pilihan font-bold mt-1">
              <a href="register.php" class="border capitalize px-4 py-1 rounded border-teal-500 text-teal-800 mr-3" type="submit">registrasi</a>
              <button class="border capitalize px-4 py-1 rounded border-teal-500 bg-teal-700 text-white" name="login" type="submit">login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
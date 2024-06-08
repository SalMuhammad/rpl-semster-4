<script>
  alert('log out berhasil!!')
</script>


<?php 
session_start();
session_destroy();
$_SESSION = [];
session_unset();

setcookie('id', '', time() -3600);
setcookie('fr_aria', '', time() -3600);


header("Location: login.php");
?>
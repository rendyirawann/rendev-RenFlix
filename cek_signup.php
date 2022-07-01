<?php
require "defines/koneksi.php";

if (isset($_POST["submit"])) {

   if (signup($_POST) > 0) {
      echo "<script>
          alert('User Baru Berhasil Registrasi!');
          document.location.href = 'login.php';
        </script>";
   } else {
      echo mysqli_error($koneksi);
   }
}

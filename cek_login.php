<?php
    session_start();

    include "defines/koneksi.php";
    include "defines/helper.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $login = mysqli_query($koneksi, $query);
        $cek = mysqli_num_rows($login);
      }

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        if ($data['level']=="admin") {  
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            echo "<script>
            alert('Login Successfull');
            document.location.href = 'pages/admin.php';
            </script>";
        }elseif ($data['level']=="user") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            echo "<script>
            alert('Login Successfull');
            document.location.href = 'user/index.php';
            </script>";
        }else {
            header("location:login.php");
        }
    }else {
        header("location:login.php");
    }
<?php
session_start();
include "../defines/koneksi.php";
$movie = query ("SELECT * FROM movie");
$new_movie = query ("SELECT * FROM new_movie");
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="admin"){
}elseif($_SESSION['level']=="user") {
}else {
    header("location:../login.php");
}
?>

<!-- Source PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenFlix</title>
    <!-- Css Custom -->
    <link rel="stylesheet" href="../assets/css/index-user.css">

    <!-- Css Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <!-- Boxicons -->
    <link rel="stylesheet" href="../assets/vendor/boxicons/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>

    <!-- Header Start -->
    <!-- Navbar Start -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <i class="bx bxs-movie"></i>
                RenFlix
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="menu-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?p=#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=#movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=#coming">Coming Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=#subs">Subscription</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Movie..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
                </form>
                <a href="../logout.php"><button type="submit" class="btn btn-logout">
                        <?= $_SESSION["username"];?> | Logout &#8594;
                    </button></a>
            </div>
        </nav>
    </header>

    <!-- Navbar End -->
    <!-- Header End -->

    <div class="renflix">
        <?php
        $pages_dir = '../user';
        if(!empty($_GET['p'])){
           $pages = scandir($pages_dir, 0);
           unset($pages[0], $pages[1]);
           $p = $_GET['p'];
           if(in_array($p.'.php', $pages)){
              include($pages_dir.'/'.$p.'.php');
           } else {
              echo 'Halaman tidak ditemukan! :(';
           }
        } else {
           include($pages_dir.'/navigation.php');
        }
        ?>
        <footer>
        <span>Copyright &copy; 2022
            <a href="www.youtube.com/c/STech04">RenFlix</a> | All rights
            reserved</span>
    </footer>
    </div> 
    <script src="./script.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>

</body>

</html>
<?php
include "defines/koneksi.php";
$movie = query ("SELECT * FROM movie");
$new_movie = query ("SELECT * FROM new_movie");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenFlix</title>
    <!-- Css Custom -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Css Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <!-- Boxicons -->
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">

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
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#coming">Coming Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#subs">Subscription</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Movie..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
                </form>
                <a href="login.php"><button type="submit" class="btn btn-login">Login</button></a>
                <a href="signup.php"><button type="submit" class="btn btn-signup">Sign Up</button></a>
            </div>
        </nav>
    </header>

    <!-- Navbar End -->
    <!-- Header End -->

    <!-- Home Content Start -->
    <section class="home swiper container-fluid" id="home">
        <div class="swiper-wrapper">
            <!-- Home 1 -->
            <div class="swiper-slide container">
                <img src="assets/img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br> Be Carnage</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="swiper-slide container">
                <img src="assets/img/home2.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br> Infinity Wars</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="swiper-slide container">
                <img src="assets/img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man : <br> Far From Home</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Home Content End -->

    <!-- Movie Start -->
    <section style="background-color : black;" class="movies" id="movies">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading">Opening This Week</h2>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($movie as $row ) : ?>
                <div class="col-sm-4 mt-4 mov">
                    <div class="card" style="width: 15rem;">
                        <img height="240px" width="auto" src="assets/img/<?php echo $row['img'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['mv_name'];?>
                            </h5>
                            <p class="card-text"><?php echo $row['genre_name'];?></p>
                            <a href="user/index.php" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!-- Row End -->
        </div>
    </section>

    <!-- Movie End -->

    <!-- Coming Soon Start -->
    <section style="background-color : black;" class="coming" id="coming">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading">Coming Soon This Year's</h2>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($new_movie as $row ) : ?>
                <div class="col-sm-4 mt-4 mov">
                    <div class="card" style="width: 15rem;">
                        <img height="240px" width="auto" src="assets/img/<?php echo $row['img'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['mv_name'];?>
                            </h5>
                            <p class="card-text"><?php echo $row['genre_name'];?></p>
                            <a href="user/index.php" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!-- Row End -->
        </div>
    <!-- Coming Soon End -->
        </section>

    <section class="subs" id="subs">
        <form class="form-inline my-2 my-lg-0 subscription">
            <input class="form-control mr-sm-2" type="search" placeholder="Enter Your Email..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Subscription</button>
        </form>
    </section>

    <!-- Footer Start -->
    <footer>
        <span>Copyright &copy; 2022
            <a href="www.youtube.com/c/STech04">RenFlix</a> | All rights
            reserved</span>
    </footer>
    <!-- Footer End -->

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>
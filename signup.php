<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RenFlix - Rendy Irawan (192350150</title>

    <!-- CSS Custom -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

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
                        <a class="nav-link" href="index.php#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <a href="login.php"><button type="submit" class="btn btn-login">Login</button></a>
                <a href="signup.php"><button type="submit" class="btn btn-signup">Sign Up</button></a>
            </div>
        </nav>
    </header>

    <!-- Navbar End -->
    <!-- Header End -->

    <!-- Form Login Start-->
    <section clas="form-login">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form style="width: 23rem;" action="cek_signup.php" method="POST">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register Your Account</h3>
            <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
              <input type="username" name="username" id="username" placeholder="Enter Username" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
            <label class="form-label" for="passwordConfirmation">Password Confirmation</label>
              <input type="password" name="passwordConfirmation" id="passwordConfirmation" placeholder="Enter Password Confirmation" class="form-control form-control-lg" />
            </div>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit" name="submit" type="button">Create Your Account</button>
            </div>
            <p>Already have an account? <a href="login.php" class="link-info">Login here</a></p>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block bg-img">
        <img src="assets/img/logo.png"
          alt="Login image" class="w-100 vh-100" style="object-fit: fill; object-position: left;">
      </div>
    </div>
  </div>
</section>

    <!-- Form Login End -->


</body>

</html>
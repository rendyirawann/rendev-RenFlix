<?php
session_start();
include "../defines/koneksi.php";
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="admin"){
}else{
    echo "<script>
            alert('You Must Login First');
            document.location.href = '../login.php';
            </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - RenFlix</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />


    <!-- Custom CSS -->
    <link href="../assets/css/admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="position:sticky; border:none;" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <ul class="dropdown-menu message-dropdown">

                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>
                                                <?php echo $_SESSION['username']; ?>
                                            </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php echo $_SESSION['username']; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <div class="navbar-header" style="margin-bottom: 1.5em;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a class="navbar-brand" href="../user/index.php"><img src="../assets/img/logo.png" width="30"
                                height="30" alt="">RenFlix Admin</a>
                    </div>
                    <li class="active">
                        <a href="admin.php?p="><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-book"></i>
                            Panel Admin <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="admin.php?p=registry-admin"><i class="fa fa-fw fa-vcard"></i> Register
                                    Account</a>
                            </li>
                            <li>
                                <a href="admin.php?p=registry-genre"><i class="fa fa-fw fa-edit"></i> Registry Genre</a>
                            </li>
                            <li>
                                <a href="admin.php?p=registry-category"><i class="fa fa-fw fa-desktop"></i> Registry
                                    Category</a>
                            </li>
                            <li>
                                <a href="admin.php?p=registry-movie"><i class="fa fa-fw fa-film"></i> Movie List</a>
                            </li>
                            <li>
                                <a href="admin.php?p=registry-newmovie"><i class="fa fa-fw fa-film"></i> Coming Soon Movie</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#default"><i
                                class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="default" class="collapse">
                            <li>
                                <a href="admin.php?p=charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                            </li>
                            <li>
                                <a href="admin.php?p=tables"><i class="fa fa-fw fa-table"></i> Tables</a>
                            </li>
                            <li>
                                <a href="admin.php?p=forms"><i class="fa fa-fw fa-edit"></i> Forms</a>
                            </li>
                            <li>
                                <a href="admin.php?p=bootstrap-elements"><i class="fa fa-fw fa-desktop"></i> Bootstrap
                                    Elements</a>
                            </li>
                            <li>
                                <a href="admin.php?p=bootstrap-grid"><i class="fa fa-fw fa-wrench"></i> Bootstrap
                                    Grid</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="admin.php?p=project-info"><i class="fa fa-fw fa-file"></i> Project Information</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <?php
         $pages_dir = '../pages';
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
            include($pages_dir.'/dashboard.php');
         }
      ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- Footer -->
        <footer>
            <p>Copyright &copy; 2022. RenFlix.</p>
        </footer>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="../assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../assets/js/plugins/morris/raphael.min.js"></script>
    <script src="../assets/js/plugins/morris/morris.min.js"></script>
    <script src="../assets/js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="../assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../assets/js/plugins/flot/flot-data.js"></script>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

</body>

</html>
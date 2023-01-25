<?php
  $cast = $_GET['cast'] ?? null;
  $film = $_GET['film'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP Native</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="Asset/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Asset/dist/css/adminlte.min.css">
    <link href="Asset/logo.jpg" rel="SHORTCUT ICON"/>
    <!-- @stack('style') -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Rezha Ganteng
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="Asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="Asset/dist/img/alex.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">Rezha Ganteng</a>
                    </div>
                </div>
                <?php include "sidebar.php"; ?>      
            </div>

        </aside>

        <div class="content-wrapper">
            <!-- @yield('breadcrumb') -->
            <?php
                if (isset($cast)) {
                    include "cast/". $cast. ".php";
                }elseif (isset($film)) {
                    include "film/". $film. ".php";
                }else {
                    include "home.php";  }  ?>
            <!-- <section class="content">
            </section> -->
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

<!-- @stack('script') -->
<script src="Asset/plugins/jquery/jquery.min.js"></script>
<script src="Asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Asset/dist/js/adminlte.min.js"></script>
<script src="Asset/dist/js/demo.js"></script>

</body>
</html>

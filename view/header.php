<?php 
    session_start();
    error_reporting(0);


?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DURABBAG</title>
    <script src="https://kit.fontawesome.com/29164d6ab6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="../assets/css/style.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body style="font-family: Courier;">
    <nav class="navbar navbar-expand-lg bg-body-primary">
        <div class="container">
            <a class="navbar-brand" href="beranda.php"><b>DURABBAG</b> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="produk.php">Produk</a>
                </li>
              <?php if($_SESSION['role']=="admin"){ ?>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bagian Admin
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admin_user.php">User</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="admin_produk.php">Produk</a></li>
                  </ul>
                </li>

              <?php } ?>


                <li class="nav-item">
                <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                </li>
            </ul>
            <span class="navbar-text">
              <?php if(isset($_SESSION['email'])){ ?>
                <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['nama'] ?>
                  </button>
                  <ul class="dropdown-menu dropdown-menu">
                    <li><a class="dropdown-item active" href="profil.php">Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../model/logout.php">Logout</a></li>
                  </ul>
                </div>
                
                <?php }else{ ?>
                <a href="masuk.php" class="btn btn-dark" style="color: white;">Masuk</a>
                <a href="daftar.php" class="btn btn-light" >Daftar</a>
              <?php } ?>
            </span>
            </div>
        </div>
    </nav>
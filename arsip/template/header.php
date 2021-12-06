<?php
session_start();
//mengatasi jika user langsung masuk menggunakan link, tanpa login
if(empty($_SESSION['id_user']) or empty($_SESSION['username']))
{
  echo "<script>
      alert('Maaf, untuk mengakses halaman ini, silakan Login terlebih dahulu..!!');
      document.location='index.php';
      </script>";
}

?>
<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="shortcut icon" href="img/icon.png">

    <title>SI-Arsip | Harjo Makmur </title>
  </head>
  <body>
    <!-- Awal Nav / Menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<h class="navbar-brand" href="index.php"><strong>ARSIP Kelompok Tani Harjo Makmur</strong></h>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
				<a class="nav-link" aria-current="page" href="admin.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="?halaman=arsip_surat">Surat Masuk</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?halaman=surat_keluar">Surat keluar</a>
			</li>
		</ul>
		<a class="btn btn-danger" href="logout.php" role="button">Keluar</a>
	</div>
</div>
</div>
</nav>
      
    </nav>
    <!-- Akhir Nav/Menu -->
    <!-- Awal Container -->
    <div class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

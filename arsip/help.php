<?php
session_start();
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arsip Surat PokTan Harjo Makmur</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
<!--HEADER-->

<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<h class="navbar-brand" href="index.php"><strong>ARSIP Kelompok Tani Harjo Makmur</strong></h>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#feature">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="help.php">Bantuan</a>
			</li>
		</ul>
		<a class="btn btn-warning" href="login.php" role="button">Masuk</a>
	</div>
</div>
</div>
</nav>
<!--/ HEADER-->
<!---->
<br></br>
<br></br>

<div class="shadow card mx-5 mb-5 px-5 pt-3">
<section id="feature" class="section-padding wow fadeIn delay-05s">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
        <hr class="bottom-line">
			<h2 class="service-title pad-bt15"><strong>Selamat Datang di Web SI-Arsip Kelompok Tani Desa Toto Harjo</strong></h2>
            <hr class="bottom-line">
			<p class="sub-title pad-bt15"><br></br>
				 Website ini berguna untuk mengelola arsip pada Kelompok Tani Harjo Makmur Desa Toto Harjo, Kec.Purbolinggo, Kab. Lampung Timur.
			</p>
			<p>
				 Surat diarsipkan berdasarkan kategori surat masuk dan surak keluar agar mempermudah penyimpanan dokumen..
			</p><br></br>
			<hr class="bottom-line">
			<h3 class="sub-title pad-bt15"><strong>Bantuan</strong></h3>
			<hr class="bottom-line"></div>
            <div style="overflow-x:auto;">
				<p>Setiap pengunjung hanya dapat melihat halaman utama dan halaman bantuan dan tidak diperkenankan untuk masuk ke sistem kecuali administrator.
                Untuk dapat masuk ke sistem harus memiliki akun administrator yang telah disetujui agar dapat mengelola data arsip. Jika telah memiliki akun aktif, maka dapat mengikuti langkah berikut:
                </p>
                <li>Masuk halaman utama</li>
                <li>Klik tombol masuk pada pojok kanan atas (berwarna kuning) atau jika menggunakan smartphone dapat menglik garis 3 pada pojok kiri atas kemudian klik masuk</li>
                <li>Masukkan username dan password, kemudian klik masuk</li>
                <li>Klik fitur surat masuk atau surat keluar pada bilah navigasi</li>
                <li>Klik tambah data untuk menambahkan data</li>
                <li>Klik edit untuk mengedit data</li>
                <li>Klik hapus untuk menghapus data</li>
                <li>Klik lihat file untuk melihat berkas</li><br></br>
            

	</div>
</div>
</div>
                </div>
</section>
<!---->
<!---->

    <div class="footer-dark">
        <footer>
            <div class="container">
            <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="facebook.com/kurniaanggii"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="github.com/kurniaanggii"><span class="icon mdi mdi-instagram"></span><span>Github</span></a></div>
          <div class="col"><a class="social-inner" href="freecodecamp.com/anggidk"><span class="icon mdi mdi-twitter"></span><span>Freecodecamp</span></a></div>
          <div class="col"><a class="social-inner" href="Twitter.com/anggidkr"><span class="icon mdi mdi-youtube-play"></span><span>Twitter</span></a></div>
        </div>
		<p class="mt-5 mb-3 text-muted text-center">&copy; <?=date('Y')?> Desa Toto Harjo</p>
            </div>
        </footer>
    </div>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
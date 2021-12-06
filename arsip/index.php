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
					<a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
<!-- Slide Show -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/1.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/2.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/3.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/4.png" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
	</button>
</div>
<!-- End Slide Show -->
<!---->
<br></br>
<div class="shadow card mx-5 mb-5 px-5 pt-3">
	<section id="feature" class="section-padding wow fadeIn delay-05s">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<hr class="bottom-line">
				<h1 class="service-title pad-bt15"><strong>Tentang</strong></h1>
				<p class="sub-title pad-bt15">
					<hr class="bottom-line">
					<br></br>
					<p>
						Gabungan Kelompok Tani (GAPOKTAN) Harjo Makmur yang terletak di Desa toto Harjo, Kec. Purboolinggo, Kab. Lampung Timur, merupakan organisasi bidang pertanian tingkat desa di bawah naungan Desa Toto Harjo dan Kementrian Pertanian.
					</p>
					<br></br>
					<hr class="bottom-line">
					<br></br>
				</div>
				<h1>Kegiatan</h1>
				<ol>
					<li>
						Gapoktan wajib merekaps RDKK yang dibuat Kelompok sebagai bentuk pesanan pupuk kepada pemerintah melalui distributor dan pengecer setiap awal musim tanam untuk kebutuhan pupuk satu tahun.
					</li>
					<li>
						Mengikuti dan menghadiri undangan rapat dari dinas terkait, untuk menerima informasi dan teknologi pertanian, kemudian disampaikan kepada para kelompok dan para petani.
					</li>
					<li>
						Mengikuti kegiatan pemerintah deşa (musdus) yang diadakan setiap tahun oleh Kepala Desa, sebagai bentuk partisipasi kelompok tani dan para petani untuk ikut serta membangun perekonomian deşa melalui sektorpertanian
					</li>
					<br></ol>
				</br>
				<h2>Kemitraan</h2>
				<ol>
					<li>
						Gapoktan menjalin hubungan kerja dengan kelompok penggerak perekonomian yang lain dan bekerjasama selalu diciptakan Gapoktan, P3A, Pengecer pupuk yang masing-masing kelompok ini selalu di bina oleh dinasnya masing-masing. Tiga kelompok ini mempunyai sasaran yang sama yaitu bagaimana pendapatan petani meningkat. Oleh şebab itü tiga wadah ini menjadi bagian dari kegiatan LPMD, yang semua ini menjadi binaan Bapak Kepala Desa.
					</li>
					<li>
						Gapoktan mencari kemitraan pihak ketiga agar prodüksi petani meningkat
					</li>
				</ol>
			</p>
			<div class="col-md-12 text-center">
				<hr class="bottom-line">
				<h2 class="sub-title pad-bt15"><strong>Struktur Organisasi</strong></h2>
				<hr class="bottom-line"></div>
			<div style="overflow-x:auto;">
				<table>
				<tr>
					<td>Ketua</td>
					<td>:</td>
					<td>Suwaji</td>
				</tr>
				<tr>
					<td>Sekretaris</td>
					<td>:</td>
					<td>Legiman</td>
				</tr>
				<tr>
					<td>Bendahara</td>
					<td>:</td>
					<td>Nasirun</td>
				</tr>
				</table>
				<br></br>
				<h3 class="sub-title pad-bt15">Anggota terdiri dari 16 kelompok</h3>
				<div style="overflow-x:auto;">
					<table>
					<tr>
						<li>Kelompok Tani Usaha Maju</li>
					</tr>
					<tr>
						<li>Kelompok Tani Usaha Maju I</li>
					</tr>
					<tr>
						<li>Kelompok Tani Usaha Maju II</li>
					</tr>
					<tr>
						<li>Kelompok Tani Usaha Maju III</li>
					</tr>
					<tr>
						<li>Kelompok Tani Teguh Raharjo</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Raharjo</li>
					</tr>
					<tr>
						<li>Kelompok Tani Raharjo</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Rejeki</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Makmur</li>
					</tr>
					<tr>
						<li>Kelompok Tani Rejeki Makmur</li>
					</tr>
					<tr>
						<li>Kelompok Tani Rejeki Jaya</li>
					</tr>
					<tr>
						<li>Kelompok Tani Makmur Jaya</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Rahayu</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Rahayu I</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Rahayu II</li>
					</tr>
					<tr>
						<li>Kelompok Tani Sri Rahayu III</li>
					</tr>
					<br/>
					</table>
				</div>
				<p>
					 Masing-masing kelompok mempunyai kepengurusan lengkap dengan
				</p>
				<div style="overflow-x:auto;">
					<table>
					<tr>
						<td>Jumlah anggota</td>
						<td>:</td>
						<td>415 Orang</td>
					</tr>
					<tr>
						<td>Hamparan sawah</td>
						<td>:</td>
						<td>208 Ha</td>
					</tr>
					<tr>
						<td>Hamparan darat</td>
						<td>:</td>
						<td>27 Ha</td>
					</tr>
					</table>
					<br/>
					<br/>
				</div>
			</div>
		</div>
	</div>
	</section>
	<hr class="bottom-line"></div>
<!---->
<!---->
<div class="footer-dark">
	<footer>
	<div class="container">
		<div class="row no-gutters social-container">
			<div class="col">
				<a class="social-inner" href="facebook.com/kurniaanggii"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a>
			</div>
			<div class="col">
				<a class="social-inner" href="github.com/kurniaanggii"><span class="icon mdi mdi-instagram"></span><span>Github</span></a>
			</div>
			<div class="col">
				<a class="social-inner" href="freecodecamp.com/anggidk"><span class="icon mdi mdi-twitter"></span><span>Freecodecamp</span></a>
			</div>
			<div class="col">
				<a class="social-inner" href="Twitter.com/anggidkr"><span class="icon mdi mdi-youtube-play"></span><span>Twitter</span></a>
			</div>
		</div>
		<p class="mt-5 mb-3 text-muted text-center">
			&copy; <?=date('Y')?>Desa Toto Harjo</p>
	</div>
	</footer>
</div>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>

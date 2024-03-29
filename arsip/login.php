<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<title>SI Arsip - Login</title>
<link rel="shortcut icon" href="img/icon.png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style
<link href="assets/css/floating-labels.css" rel="stylesheet">
</head>
<body>
<form class="form-signin" method="post" action="cek_login.php">
	<div class="text-center mb-4">
		<img class="mb-4" src="img/icon.png" width="100">
		<h1 class="h3 mb-3 font-weight-normal"><strong>Masuk SI-Arsip</strong></h1>
		<p>
			Silahkan masukkan username dan password Anda
		</p>
	</div>
	<div class="form-label-group">
		<input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
		<label for="username">Username</label>
	</div>
	<div class="form-label-group">
		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
		<label for="password">Password</label>
	</div>
	<button class="btn btn-lg btn-warning btn-block" type="submit">Masuk</button>
	<p class="mt-5 mb-3 text-muted text-center">
		&copy; <?=date('Y')?>Desa Toto Harjo</p>
</form>
</body>
</html>

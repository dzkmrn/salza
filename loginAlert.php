<?php
session_start();
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
	<title>Masuk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/x-icon" href="img/salza.png" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	<style type="text/css">
		.wrongPass {
			color: red;
		}
	</style>

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/salzabg.png);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="alert alert-danger" role="alert" style="text-align: center;">
								Silahkan login terlebih dahulu!
							</div>
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="text-align: center;">Masuk</h3>
								</div>
							</div>
							<form method="post" class="signin-form" action="prosesLogin.php">
								<div class="form-group mt-3">
									<input type="text" name="username" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="username">Username/email</label>
								</div>
								<div class="form-group">
									<input id="password-field" name="password" type="password" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
								</div>

								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
							</form>
							<p class="text-center">Tidak memiliki akun? <a href="register.php"> Daftar</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>



</body>

</html>
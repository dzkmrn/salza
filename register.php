<?php
session_start();
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
	<title>Daftar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" type="image/x-icon" href="images/salza.png" />

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
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="text-align: center;">Daftar</h3>
								</div>
							</div>
							<form method="post" class="signin-form">
								<div class="form-group mt-3">
									<input type="text" name="fullname" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="username">Nama lengkap</label>
								</div>
								<div class="form-group mt-3">
									<input type="email" name="email" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="username">Email</label>
								</div>
								<div class="form-group mt-3">
									<input type="name" name="username" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
								<div class="form-group">
									<input id="password-field" name="password" type="password" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input id="password-field2" name="confirmpassword" type="password" autocomplete="off" class="form-control" required>
									<label class="form-control-placeholder" for="password">Konfirmasi Password</label>
									<span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
								</div>
								<?php
								$wrongBoth = "Maaf, konfirmasi password tidak sesuai<br><br>";
									if (isset($_POST['username'])) {
										$fullname = $_POST['fullname'];
										$email = $_POST['email'];
										$username = $_POST['username'];
										$password = $_POST['password'];
										$password = md5($_POST['password']);
										$confirmpw = md5($_POST['confirmpassword']);
										$qry = "insert into tb_login (email, username, password) values ('$email', '$username', '$password')";
										$qry2 = "insert into tb_user (fullname, email) values ('$fullname', '$email')";
											if ($password == $confirmpw) {
												mysqli_query($koneksi, $qry);
												mysqli_query($koneksi, $qry2);
												echo "<script>
												alert('Pendaftaran akun telah berhasil!');
												window.location = 'login.php';
												</script>";
									}else if ($password != $confirmpw){
									echo "<span style='color:red';>" . $wrongBoth . "</span>";
									}	
								}
								
								?>
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
							<p class="text-center">Sudah memiliki akun? <a href="login.php">Masuk</a></p>
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
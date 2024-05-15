<?php
session_start();

include "koneksi.php";
	$wrongBoth = "Maaf, username atau password yang anda masukkan salah<br><br>";
	$username = $_POST['username'];
	$password = md5($_POST['password']);
								
	$query = mysqli_query($koneksi, "select * from tb_login where username = '$username'");
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query) > 0) {
		echo "<script>
		alert('Berhasil Masuk!');
		window.location = 'indexLog.php';
		</script>";
			if ($password == $row["password"]) {
				echo "<script>
				alert('Berhasil Masuk!');
				window.location = 'indexLog.php';
				</script>";
			} else {
				echo "<script>
				alert('Gagal masuk!');
				window.location = 'login.php';
				</script>";
			}
	} else {
		echo "<script>
		alert('Gagal masuk!');
		window.location = 'login.php';
		</script>";
		exit();
	}

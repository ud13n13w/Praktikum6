<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database dengan MySQL</title>
</head>
<body>

	<h1>Demo Koneksi database MySQL</h1>

	<?php

		$con = mysqli_connect("localhost", "root", "", "db_pemrogramanweb");

		if( mysqli_connect_errno()  ){
			echo "Gagal terkoneksi dengan MySQL", mysqli_connect_error();
			exit();
		}else{
			echo "Berhasil Connect Database";
		}

	?>

</body>
</html>


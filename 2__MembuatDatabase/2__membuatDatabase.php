<!DOCTYPE html>
<html>
<head>
	<title>Membuat Database</title>
</head>
<body>

	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";

		//1. Membuat Koneksi
		$conn = mysqli_connect($servername, $username, $password);

		if( !$conn ){
			die("Koneksi ke MySQL Gagal " . mysqli_connect_error() );
		}else{
			//echo "Koneksi ke MySQL Berhasil! <br>";
		}

		//2. Membuat Database
		$sql = "CREATE DATABASE db_pemrogramanweb";

		if( mysqli_query($conn, $sql) ){
			echo "Database Berhasil Dibuat";
		}else{
			echo "GAGAL MEMBUAT DATABASE, ERROR :" . mysqli_error($conn);
		}

		//3. Menutup Koneksi Database
		mysqli_close($conn);

	?>

</body>
</html>
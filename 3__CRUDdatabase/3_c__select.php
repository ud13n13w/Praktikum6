<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";

		$database = "db_pemrogramanweb";

		//1. Membuat Koneski
		$conn = mysqli_connect($servername, $username, $password, $database);

		if( !$conn ){
			die("Koneksi ke database GAGAL, ERROR:" . mysqli_connect_error() );
		}else{
			//echo "Koneksi ke database BERHASIL";
		}

		//2. Membuat dan Menjalankan Query
		$sql = "  SELECT kode,negara,champion FROM liga  ";
		$result = mysqli_query($conn,$sql);

		if(  mysqli_num_rows($result) > 0 ){

			//3. Menampilkan Semua Data
			while(  $row = mysqli_fetch_assoc($result)  ){
				echo "Kode: " . $row["kode"] . " - Negara: " . $row["negara"] . " " . $row["champion"] . "<br>";
			}

		}else{
			echo "database TIDAK MEMILIKI DATA";
		}

		//4. Menutup Koneksi
		mysqli_close($conn);


	?>

</body>
</html>
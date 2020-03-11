<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "db_pemrogramanweb";

	//1. Membuat Koneksi
	$conn = mysqli_connect($servername, $username, $password, $database);

	if( !$conn ){
		die("Koneksi GAGAL, ERROR:" . mysqli_connect_error() );
	}else{
		//echo "Koneksi BERHASIL";
	}

	//2. Membuat Query
	$sql = "  INSERT INTO liga(kode, negara, champion) VALUES ('Jer','Jerman','4')  ";

	if(  mysqli_query($conn, $sql)  ){
		echo "insert data BERHASIL";
	}else{
		echo "insert data GAGAL, ERROR:" . mysqli_error($conn) ;
	}

	//3. Menutup Koneksi
	mysqli_close($conn);

?>
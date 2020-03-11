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

?>
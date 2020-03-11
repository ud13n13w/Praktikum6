<!DOCTYPE html>
<html>
<head>
	<title>Tugas : Tambah Tamu</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div>
		<form method="POST">
			<table class="tabel">
				<tr>
					<td class="tbl_hd" id="tbl_jdl2">Nama Lengkap</td>
					<td><input type="text" name="nama" size="40" required></td>
				</tr>
				<tr>
					<td class="tbl_hd" id="tbl_jdl2">Email</td>
					<td><input type="email" name="email" size="40" required></td>
				</tr>
				<tr>
					<td class="tbl_hd" id="tbl_jdl2">Isi Keterangan</td>
					<td><textarea name="isi" rows="2" cols="50" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" id="con_button">
						<input type="submit" class="btn_login" name="btn_login" value="Tambah Tamu">
					</td>
				</tr>
				<tr>
					<td colspan="2" id="con_button">
						<input type="reset" class="btn_reset" name="btn_reset" value="Reset">
					</td>
				</tr>
				<tr>
					<td colspan="2"  id="con_button">
						<a href="bukutamu.php"><input type="button" class="btn_reset" value="Kembali Ke Halaman Awal"></a>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<?php

	//1. Membuat Koneksi
	include('koneksi.php');

	//GET DATA FROM FORM
	if(  isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['isi'])  ){
		$nama 			= $_POST['nama'];
		$email 			= $_POST['email'];
		$isi 			= $_POST['isi'];

			//echo $nama . " " . $email . " " . $isi;

		//2. Query Input
		$sql = "    INSERT INTO tbl_bukutamu(nama,email,isi) VALUES ('$nama','$email','$isi')  ";
			//echo $sql;

		if( mysqli_query($conn,$sql) ){
			echo "<script type='text/javascript'> alert('Pendaftaran Tamu Baru BERHASIL'); </script>";
			echo "<script type='text/javascript'> window.location='bukutamu.php'; </script>";
		}else{
			echo "<script type='text/javascript'>alert('Pendaftaran Tamu Baru GAGAL');</script>";
		}
	
	}
	

	

	?>

</body>
</html>
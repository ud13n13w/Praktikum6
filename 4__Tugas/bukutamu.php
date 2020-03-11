<!DOCTYPE html>
<html>
<head>
	<title>Tugas : Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php

	include('koneksi.php');

		//SELECT CODE START
		$sql = "SELECT * FROM tbl_bukutamu";
		$result = mysqli_query($conn, $sql);

		$i = 1;

		if(  mysqli_num_rows($result) > 0  ){

		//2. OUTPUT SELECT

			echo "<table class=tabel border=1>";
				echo "<tr>";
					echo "<td class=tbl_hd id=tbl_jdl> No </td>";
					echo "<td class=tbl_hd id=tbl_jdl> Nama </td>";
					echo "<td class=tbl_hd id=tbl_jdl> Email </td>";
					echo "<td class=tbl_hd id=tbl_jdl> Isi </td>";
				echo "</tr>";
			while(  $row = mysqli_fetch_assoc($result)  ){
				echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $row['nama'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['isi'] . "</td>";
				echo "</tr>";

				$i++;
			}

		}

	?>

		<tr>
			<td colspan="4" id="con_button">
				<a href="tamubaru.php"><input type="button" name="btn_tambah" class="btn_login" value="Tambah Tamu Baru"></a>
			</td>
		</tr>

		</table>

</body>
</html>


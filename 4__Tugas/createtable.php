<?php

include('koneksi.php');

$sql = "  CREATE TABLE tbl_bukutamu(
								id_bt INT(10) AUTO_INCREMENT PRIMARY KEY,
								nama VARCHAR(200) NOT NULL,
								email VARCHAR(50) NOT NULL,
								isi TEXT NOT NULL
								)  ";

if( mysqli_query($conn, $sql) ){
			echo "TABEL Berhasil Dibuat";
}else{
			echo "GAGAL MEMBUAT TABEL, ERROR :" . mysqli_error($conn);
}

?>
<?php
session_start();
include 'engine/dbconfig.php';

if(isset($_POST['submit-update-tiket'])){
	 $nama = $_POST['nama'];
	 $id = $_POST['dataid'];
	 $harga = $_POST['harga'];
	 
	 $query = "update bsm.tbl_tiket set nama = '$nama', harga = '$harga' where id = $id";
	 mysql_query($query);
	
	 $_SESSION['notification'] = "<div class='alert alert-success animated bounceIn' style='position:fixed;top:90px;left:250px;z-index:1;'>
								  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								  <strong>Sukses!</strong> Data Berhasil diubah.
								</div>";
								
	 header("Location: index.php?id=3");
}


if(isset($_POST['submit-insert-tiket'])){
	 $nama = $_POST['nama'];
	 $harga = $_POST['harga'];
	 
	 $query = "INSERT INTO tbl_tiket (nama, harga) VALUES ('$nama', '$harga')";
	 mysql_query($query);
	
	 $_SESSION['notification'] = "<div class='alert alert-success animated bounceIn' style='position:fixed;top:90px;left:250px;z-index:1;'>
								  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								  <strong>Sukses!</strong> Data Berhasil Ditambahkan.
								</div>";
								
	 header("Location: index.php?id=3");
}



?>
<?php
session_start();
include 'engine/dbconfig.php';
if(isset($_GET['action'])){
	$action = $_GET['action']; 
}else{
	$_SESSION['notification'] = "<div class='alert alert-danger animated bounceIn' style='position:fixed;top:90px;left:250px;z-index:1;'>
								  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								  <strong>Error!</strong> URL tidak valid.
								</div>";
	$action = "";
}

if($action == 'deletetiket'){
	if(isset($_GET['action'])){
		$data = $_GET['dataid'];
		mysql_query("delete from tbl_tiket where id=$data");
		
		$_SESSION['notification'] = "<div class='alert alert-success animated bounceIn' style='position:fixed;top:90px;left:250px;z-index:1;'>
								  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								  <strong>Sukses!</strong> Data Berhasil dihapus.
								</div>";
		
		header("Location: index.php?id=3");
	}
}
?>
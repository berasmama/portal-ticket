<?php
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

if($action == 'edittiket'){
	if(isset($_GET['id'])){
		echo "<h1>Update Data Tiket</h1>";
		$id = $_GET['dataid'];
		$query = "SELECT * FROM tbl_tiket where id = $id"; //You don't need a ; like you do in SQL
		$result = mysql_query($query);
		if($result === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		while($row = mysql_fetch_array($result)){
			echo "
			<table class='table table-responsive'>
				<form action='submit.php' method='post'>
				<tr hidden>
					<td>ID</td>
					<td>:</td>
					<td><input type='text' name='dataid' value='".$row['id']."' readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type='text' name='nama' value='".$row['nama']."' required></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type='text' name='harga' value='".$row['harga']."' required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type='submit' name='submit-update-tiket' class='btn btn-success'><i class='fa fa-check'></i> Submit</button></td>
				</tr>
			</table>
	
			";
		}
	}
}
?>
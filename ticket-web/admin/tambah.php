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

if($action == 'tambahtiket'){
		echo "<h1>Insert Data Tiket</h1>
		
			<table class='table table-responsive'>
				<form action='submit.php' method='post'>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type='text' name='nama' required></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type='text' name='harga' required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type='submit' name='submit-insert-tiket' class='btn btn-success'><i class='fa fa-check'></i> Submit</button></td>
				</tr>
			</table>
	
			";
}
?>
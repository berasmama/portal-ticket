<?php
	include '../dbconfig.php';
	
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
		echo implode(array_keys($_POST), ", "); 
		echo implode($_POST, ", ");
	 }
	
?>
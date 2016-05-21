<?php
	include '../dbconfig.php';
	
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$keys = array_keys($_POST);
		$keys[0] = $keys[0]." = '".$_POST['id']."',";
		$keys[1] = $keys[1]." = '".$_POST['title']."',";
		$keys[2] = $keys[2]." = '".$_POST['icon']."',";
		$keys[3] = $keys[3]." = '".$_POST['href']."'";
		 
		 $comma = ",";
		 $val = "";
		 for($i = 0; $i < 4; $i++){
			 $val .= $keys[$i];
		 }
		 
		 $update->updateRecord("navbar_".$_POST['field'], $val, $_POST['id']);
		 
		 header ('location: ../../list-menu.php');
	 }
	
?>
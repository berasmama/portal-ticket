<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "bsm";

try{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo $e->getMessage();
}

include 'create-class.php';
include 'read-class.php';
include 'update-class.php';
include 'delete-class.php';

$create = new dataCreate($DB_con);
$select = new dataRead($DB_con);
$update = new dataUpdate($DB_con);
$delete = new dataDelete($DB_con);

?>
<?php
/*
$host="mysql.idhostinger.com";  //diisi nama host apache
        $user="u925912222_bsm";       //diisi username apache, default root
        $db="u925912222_bsm";   //nama database yang anda buat
 */
 $host="localhost";  //diisi nama host apache
        $user="root";       //diisi username apache, default root
        $db="bsm";   //nama database yang anda buat
        $conn=@mysql_connect($host,$user,"");
        mysql_select_db($db,$conn);
 
        if ($conn) {
            //echo "Koneksi Berhasil";
        } else {
            echo "Koneksi Gagal";
        }
/*
include 'create-class.php';
include 'read-class.php';
include 'update-class.php';
include 'delete-class.php';

$create = new dataCreate($DB_con);
$select = new dataRead($DB_con);
$update = new dataUpdate($DB_con);
$delete = new dataDelete($DB_con);
*/
?>
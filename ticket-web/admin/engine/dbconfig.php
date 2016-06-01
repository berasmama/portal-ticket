<?
        $host="localhost";  //diisi nama host apache
        $user="root";       //diisi username apache, default root
        $db="bsm";   //nama database yang anda buat
 
        $conn=mysql_connect($host,$user,"");
        mysql_select_db($db,$conn);
 
        if ($conn) {
            //echo "Koneksi Berhasil";
        } else {
            echo "Koneksi Gagal";
        }
?>
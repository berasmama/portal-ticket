<?
        $host="localhost";  //diisi nama host apache
        $user="root";       //diisi username apache, default root
        $db="BSM_Portal_Ticket";   //nama database yang anda buat
 
        $conn=mysql_connect($host,$user,"");
        mysql_select_db($db,$conn);
 
        if ($conn) {
            //echo "Koneksi Berhasil";
        } else {
            echo "Koneksi Gagal";
        }
?>
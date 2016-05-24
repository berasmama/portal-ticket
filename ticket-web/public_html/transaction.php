    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
<?php
include "dbconfig.php";
if(isset($_POST['submit_booking'])){
	echo $nama = $_POST['name'];
	echo $email = $_POST['email'];
	echo $kat = $_POST['kat'];
	echo $jumlah = $_POST['jumlah'];
	
	
$text = 'abcdefghijklmnopqrstuvwxyz123457890';
$panj = 10;
$txtl = strlen($text)-1;
$kode = '';
for($i=1; $i<=$panj; $i++){
 $kode .= $text[rand(0, $txtl)];
}
echo $kode;

	
	$query = "INSERT INTO tbl_transaksi values('','$kode','$nama','$email','$kat','$jumlah','','book')";
	mysql_query($query);
	echo 'oke';
}else{
	?>
	 <div class="row">
        <div class="col offset-l3 l6 s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Information</span>
              <p>Terima kasih telah memesan tiket. Setelah melakukan pembayaran jangan lupa untuk melakukan konfirmasi.</p>
            </div>
            <div class="card-action">
              <a href="index.html">OKE!</a>
              
            </div>
          </div>
        </div>
      </div>
  <?php
}
?>
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    
<?php
include 'dbconfig.php';
if(isset($_POST['submit_booking'])){
	 $nama = $_POST['name'];
	 $email = $_POST['email'];
	 $kat = $_POST['kat'];
	 $jumlah = $_POST['jumlah'];
	 $bulan = date('F');
	 $tahun = date('Y');
	
$text = 'abcdefghijklmnopqrstuvwxyz123457890';
$panj = 10;
$txtl = strlen($text)-1;
$kode = '';
for($i=1; $i<=$panj; $i++){
 $kode .= $text[rand(0, $txtl)];
}

	
$query = "INSERT INTO tbl_transaksi values('','$kode','$nama','$email','$kat','$jumlah','$bulan','$tahun','','book')";
	mysql_query($query);
//Configuration for email Body and Send email
	require_once('emailSender.php');
	$categ='';
	if($kat==1){
		$categ='Bronze';
	}else if($kat==2){
		$categ='Silver';
	}else{
		$categ='Gold';
	}
	$totalCateg = 'kategori '."<b>".$categ ."</b>".' sejumlah '."<b>". $jumlah ."</b>".' tiket.';
	sendEmail($email,$nama,$kode,$totalCateg);
//End Configuration for email Body and Send email
	?>
	<div class="row">
        <div class="col offset-l3 l6 s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Terima kasih telah memesan tiket.</span>
              <p> Kode booking telah kami kirim melalui email ke alamat <?php  echo $email;?>. Apabila dalam waktu 2 Jam anda belum menerima email, hubungi Administrator.</p>
            </div>
            <div class="card-action">
              <a href="index.html">OKE!</a>
              
            </div>
          </div>
        </div>
      </div>
      <?php
}else if(isset($_POST['submit_confirm'])){
	$kode_booking = $_POST['kode_booking'];
	$fileName = $_FILES['file']['name'];
	
	move_uploaded_file($_FILES['file']['tmp_name'], "img/confirmation/".$_FILES['file']['name']);
	
	$query2 = "UPDATE tbl_transaksi SET foto_konfirm = '$fileName' , status ='confirm' WHERE kode_booking = '$kode_booking' ";
	mysql_query($query2);
	?>
    <div class="row">
        <div class="col offset-l3 l6 s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Terima kasih telah melakukan konfirmasi.</span>
              <p> Kode booking ada adalah <i><?php  echo $kode_booking;?> </i>telah terkonfirmasi.</p>
            </div>
            <div class="card-action">
              <a href="index.html">OKE!</a>
              
            </div>
          </div>
        </div>
      </div>
    <?php
}else{
	
	?>
	 <h1>Gagal</h1>
  <?php
}
?>
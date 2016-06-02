<?php
include('engine/dbconfig.php');
?>
<h1>Rekap Data</h1>
<?php


?>
<form class="form-inline" action="" method="post">
<div class="form-group">
<select class="form-control" name="bulan">
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>
</div>
<div class="form-group">
    <input type="number" class="form-control" name="tahun" placeholder="Tahun">
</div>
<div class="form-group">
<select class="form-control" name="status">
  <option value="book">Booking</option>
  <option value="confirm">Confirm</option>
  <option value="paid">Paid</option>
</select>
</div>
<div class="form-group">
<input type="submit" class="btn btn-theme btn-block" value="Search" name="search">
</div>
</form>
<table class="table .table-striped .table-responsive">
    <tr>
    	<th>ID</th>
        <th>Kode Booking</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Tiket</th>
        <th>Jumlah</th>
        <th>Bulan - Tahun</th>
        
    </tr>
<?php
if(isset($_POST['search'])){
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$status = $_POST['status'];
	$query = "SELECT * FROM tbl_transaksi WHERE bulan='$bulan' AND tahun = '$tahun' AND status='$status'";
}else{
	$query = "SELECT * FROM tbl_transaksi";
}
$result = mysql_query($query);
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
while($row = mysql_fetch_array($result)){
	?>
    <tr>
    	<td><?php echo $row['id_trans']?></td>
        <td><?php echo $row['kode_booking']?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['id_kat']?></td>
        <td><?php echo $row['jumlah']?></td>
        <td><?php echo $row['bulan']?> - <?php echo $row['tahun']?></td>
        
    </tr>
    <?php
}
?>
</table>

<?php
if(isset($_GET['paid'])){
	$kode_paid = $_GET['paid'];
	mysql_query("Update tbl_transaksi SET status = 'paid' WHERE kode_booking = '$kode_paid'");
}
?>

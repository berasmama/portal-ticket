<?php
include('engine/dbconfig.php');
?>
<h1>Konfirmasi Tiket</h1>
<?php
$query = "SELECT * FROM tbl_transaksi WHERE status ='confirm'"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
?>
<table class="table .table-striped .table-responsive">
    <tr>
    	<th>ID</th>
        <th>Kode Booking</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Tiket</th>
        <th>Jumlah</th>
        <th>Bulan - Tahun</th>
        <th>Foto Pembayaran</th>
        <th>Konfirmasi</th>
    </tr>
<?php
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
        <td><?php echo $row['foto_konfirm']?></td>
        <td><a href="?paid=<?php echo $row['kode_booking']?>"><button type="button" class="btn btn-success"><i class='fa fa-check'></i></button></a></td>
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

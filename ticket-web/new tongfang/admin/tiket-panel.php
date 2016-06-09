<?php
include('engine/dbconfig.php');
?>
<?php
$query = "SELECT * FROM tbl_tiket"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
?>
<h1>Update Harga Tiket 
<a href="?id=5&action=tambahtiket">
	<button type="button" class="btn btn-md btn-primary">
		<i class='fa fa-plus'></i> Tambah Data
	</button>
</a>
</h1>
<table class="table .table-striped .table-responsive">
    <tr>
    	<th>ID</th>
        <th>Jenis Tiket</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
<?php
while($row = mysql_fetch_array($result)){
	?>
    <tr>
    	<td><?php echo $row['id']?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['harga']?></td>
        <td><a href="?id=4&action=edittiket&dataid=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-warning"><i class='fa fa-pencil'></i></button></a>
		<a href="delete.php?action=deletetiket&dataid=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-danger"><i class='fa fa-times'></i></button></a></td>
    </tr>
    <?php
}
?>
</table>


<?php

   session_start();
class dataUpdate{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function updateRecord($tb, $val, $id){
		try{
			$stmt = $this->db->prepare("UPDATE $tb
										SET
										$val
										WHERE id = $id; ");
			$count = $stmt->rowCount();
			$stmt->execute();
			$_SESSION['notification'] = "<div class='alert alert-success fade in'>
										  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										  Data Updated Succesfully.
										</div>";
		}catch(PDOException $e){
			$_SESSION['notification'] = "<div class='alert alert-danger fade in'>
									  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									  ".$e->getMessage()."
									</div>";
		}
	}
}
?>
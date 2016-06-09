<?php

class dataDelete{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function deleteRecord($tb, $field, $val){
		try{
			$stmt = $this->db->prepare("DELETE FROM $tb
										WHERE $field = $val");
			$stmt->execute();
			$_SESSION['notification'] = "<div class='alert alert-danger fade in'>
										  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										  Data Deleted Succesfully.
										</div>";
		}catch(PDOException $e){
			$_SESSION['notification'] = "<div class='alert alert-warning fade in'>
										  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										  ".$e->getMessage()."
										</div>";
		}
	}
}
?>
<?php

class dataUpdate{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function updateRecord($tb, $val, $id){
		$stmt = $this->db->prepare("UPDATE $tb
									SET
									$val
									WHERE id = $id; ");
		$stmt->execute();
		$count = $stmt->rowCount();
		return "$count row(s) affected.";
	}
}
?>
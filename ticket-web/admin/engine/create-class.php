<?php

class dataCreate{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function top10Assignee(){
		$stmt = $this->db->prepare("");
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
?>
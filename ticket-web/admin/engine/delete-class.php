<?php

class dataDelete{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function top10Assignee(){
		$stmt = $this->db->prepare("SELECT COUNT(*) as count, b.id, b.login, b.first_name, b.last_name 
									FROM otrs.ticket a, otrs.users b 
									WHERE a.responsible_user_id = b.id
									AND a.create_time BETWEEN '".date("Y")."/1/1' AND '".(date("Y")+1)."/1/1'
									GROUP BY b.login
									ORDER BY count DESC
									LIMIT 0, 10");
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
?>
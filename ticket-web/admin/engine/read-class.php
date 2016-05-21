<?php

class dataRead{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function login($uname, $paswd){
		$stmt = $this->db->prepare("SELECT * FROM user where username ='".$uname."' and password = '".$paswd."'");
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getAll($tb){
		$stmt = $this->db->prepare("SELECT * FROM ".$tb);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function getMenu($menu, $user){
		$stmt = $this->db->prepare("SELECT a.* FROM navbar_menu a, user_menu b
									WHERE a.id = b.id_menu 
									AND a.id = ".$menu."
									AND b.id_user = ".$user);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	
	public function getChild($tb, $fk_tb, $fk, $fk_pk, $fk_id){
		$stmt = $this->db->prepare("SELECT a.* FROM ".$tb." a, ".$fk_tb." b
									WHERE a.".$fk." = b.".$fk_pk." 
									AND a.".$fk." =".$fk_id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
?>
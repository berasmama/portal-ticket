<?php

class dataCreate{
	private $db;
	
	function __construct($DB_con){
		$this->db = $DB_con;
	}
	
	public function insertSubmenu($parent, $title, $icon, $href){
		try{
		$stmt = $this->db->prepare("INSERT INTO navbar_submenu (id_parent, title, icon, href) 
									VALUES (".$parent.", '".$title."', '".$icon."', '".$href."')");
		$stmt->execute();
		$_SESSION['notification'] = "<div class='alert alert-success fade in'>
									  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									  Insert Data Success.
									</div>";
		}catch(PDOException $e){
			$_SESSION['notification'] = "<div class='alert alert-danger fade in'>
									  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									  ".$e->getMessage()."
									</div>";
		}
	}
	
	public function insertMenu($title, $icon, $href){
		try{
		$stmt = $this->db->prepare("INSERT INTO navbar_menu (title, icon, href) 
									VALUES ('".$title."', '".$icon."', '".$href."')");
		$stmt->execute();
		$_SESSION['notification'] = "<div class='alert alert-success fade in'>
									  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									  Insert Data Success.
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
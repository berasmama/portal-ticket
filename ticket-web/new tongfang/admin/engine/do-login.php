<?php
   session_start();
   
   include 'dbconfig.php';
   if(isset($_POST['submit'])){
	   $user = $_POST['username'];
	   $pass = $_POST['password'];
	   $result = mysql_query("select password from user where  username = '$user'");
   $row = mysql_fetch_assoc($result);
	if($row['password'] == md5($pass)){
		$_SESSION['user'] = $user;
		 header("location: ../index.php");
	}else{
		header("location: ../login.php");	
	}
   }else{
	echo "kosong";   
   }
   
   
   /*
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION['login'] != null) {
			$_SESSION['notification'] = "<div class='alert alert-warning fade in'>
										<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										You already logged in with username \"".$_SESSION['username']."\", Logout first if you want to use another account.
									   </div>";
			header ("Location: ../index.php");
	}else{
		  $myusername = $_POST['username'];
		  $mypassword = $_POST['password'];
		  
		  $login = $select->login($myusername, $mypassword);
		  
		  $count = count($login);
			
		  if($count == 1) {
			 foreach($login as $row){
				 $_SESSION['login_user'] = "".$row['first_name']." ".$row['last_name'];
				 $_SESSION['login'] = "1";
				 $_SESSION['username'] = $row['username'];
				 $_SESSION['id_user'] = $row['id'];
			 }
			 header("location: ../index.php");
		  }else {
			 $_SESSION['notification'] = "<div class='alert alert-danger fade in'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						Your Username or Password is Invalid.
					   </div>";
			 
			 header("location: ../login.php");
		 }
	}
   }
   
   */
?>
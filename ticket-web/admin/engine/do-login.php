<?php
   session_start();
   
   if ((isset($_SESSION['login']) && $_SESSION['login'] != null)) {
			header ("Location: ../index.php");
   }
   include 'dbconfig.php';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(!empty($_POST['email'])){
		  echo "<script>alert('Send E-Mail!');";
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
			 $error = "Your Username or Password is Invalid.";	
			 header("location: ../login.php");
			 $_SESSION['error']=$error;
		 }
	}
   }
?>
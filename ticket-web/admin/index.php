<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BSM Panel | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	
  </head>

  <body>

  <section id="container" >
      
	  <?php
		session_start();
		
		include 'assets/includes/navbar.php';
		
		if(isset($_SESSION['notification'])){
			echo $_SESSION['notification'];
			$_SESSION['notification'] = "";
		}
	  ?>
	  
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
              <div class="row">
              <div class="wrapper">
                  <div class="col-lg-12">
                  <?php
				  if(isset($_GET['id'])){
					  $id = $_GET['id'];
				  }else{
					$id = 0;  
				  }
				  	if($id == 1){
						include('konfirmasi.php');
					}else if($id == 2){
						include('rekapdata.php');
					}else if($id == 3){
						include('tiket-panel.php');
					}else if($id == 4){
						include('edit.php');
					}else if($id == 5){
						include('tambah.php');
					}else{
					echo "<h1>Welcome</h1>";	
					}
				  ?>
                  </div><!--/col-lg-12 -->
                  </div>
              </div><!--/row -->
      </section>

      <!--main content end-->
      
	  <?php include 'assets/includes/footer.php' ?>
	  
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/jquery.validationEngine.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
	
	
  </body>
</html>

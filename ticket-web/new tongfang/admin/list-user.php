<!DOCTYPE html>
<html lang="en">
  <head>
	<?php error_reporting(0); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BSM Panel | Add Menu</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	
  </head>

  <body>
	<?php echo $_SESSION['notification']; ?>
  <section id="container" >
      
	  <?php include 'assets/includes/navbar.php' ?>
	  
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-chart">
					<div class="table-responsive">          
						<table class="table tree">
							<thead>
								<tr id="table-header">
									<th><button class='btn btn-default btn-xs' style="border-top:2px solid #ddd;" onclick='addRecord()'><i class='fa fa-plus'></i></button></th>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Action</th>
								</tr>
								<tr id="table-header-input" hidden>
									<th width="30px"><button class='btn btn-danger btn-xs' onclick='cancelNew()'><i class='fa fa-times'></i></button></th>
									<th>#</th>
									<th><input type='text' value='' id='txt-menu-title' placeholder="Title"></th>
									<th><input type='text' value='' id='txt-menu-icon' placeholder="Icon"></th>
									<th><input type='text' value='' id='txt-menu-href' placeholder="Link Location"></th>
									<th>
										<button class='btn btn-success btn-xs' onclick="submitForm('menu','insert','')"><i class='fa fa-check'></i></button>
									</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$numbering = 1;
								$userData = $select->getlAll('user');
								foreach($userData as $user){
									echo "";
								}
								
							?>
							</tbody>
						</table>
					</div>	  
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->				  
              </div><!--/row -->
          </section>
        </section>
		<form id="submit-input-form" action="engine/panel/submit-form-list-menu.php" method="post">
			<input type='hidden' value='' id='txt-menu-id-input' name="id">
			<input type='hidden' value='' id='txt-menu-type-input' name="type">
			<input type='hidden' value='' id='txt-menu-field-input' name="field">
			<input type='hidden' value='' id='txt-menu-title-input' name="title">
			<input type='hidden' value='' id='txt-menu-icon-input' name="icon">
			<input type='hidden' value='' id='txt-menu-href-input' name="href">
		</form>
		
      <!--main content end-->
      
	  <?php include 'assets/includes/footer.php' ?>
	  
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
	<script type="text/javascript" src="assets/js/jquery.treegrid.js"></script>
	<script type="text/javascript" src="assets/js/jquery.treegrid.bootstrap3.js"></script>
	<script type="text/javascript">
	</script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
	
  </body>
</html>
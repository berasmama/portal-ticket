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
                  <div class="col-lg-9 main-chart">
					<h1>List Menu</h1>
					<div class="table-responsive">          
						<table class="table tree">
							<thead>
								<tr id="table-header">
									<th><button class='btn btn-default btn-xs' style="border-top:2px solid #ddd;" onclick='addRecord()'><i class='fa fa-plus'></i></button></th>
									<th>#</th>
									<th>Title</th>
									<th>Icon</th>
									<th>Link Location</th>
									<th>Action</th>
								</tr>
								<tr id="table-header-input" hidden>
									<th width="30px"><button class='btn btn-danger btn-xs' onclick='cancelNew()'><i class='fa fa-times'></i></button></th>
									<th>#</th>
									<th><input type='text' value='' id='txt-new-title' placeholder="Title"></th>
									<th><input type='text' value='' id='txt-new-icon' placeholder="Icon"></th>
									<th><input type='text' value='' id='txt-new-href' placeholder="Link Location"></th>
									<th>
										<button class='btn btn-success btn-xs' onclick=''><i class='fa fa-check'></i></button>
									</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$numbering = 1;
								$listmenu = $select->getAll('navbar_menu');
								foreach($listmenu as $data){
									$listsub = $select->getChild('navbar_submenu','navbar_menu','id_parent','id',$data['id']);
									echo "<tr class='treegrid-".$data['id']."'>
											<td width='5%'></td>
											<td width='4%'>".$numbering."</td>
											<td width='26%' id='menu".$data['id']."-title'>".$data['title']."</td>
											<td width='26%' id='menu".$data['id']."-icon'><i class='fa ".$data['icon']."'></i></td>
											<td width='26%' id='menu".$data['id']."-href'>".$data['href']."</td>
											
											<td id='menu".$data['id']."-title-edit' hidden><input type='text' value='".$data['title']."' id='txt-menu".$data['id']."-title'></td>
											<td id='menu".$data['id']."-icon-edit' hidden><input type='text' value='".$data['icon']."' id='txt-menu".$data['id']."-icon'></td>
											<td id='menu".$data['id']."-href-edit' hidden><input type='text' value='".$data['href']."' id='txt-menu".$data['id']."-href'></td>
											
											<td id='menu".$data['id']."-action'>
											  <button class='btn btn-primary btn-xs' onclick='editMenu(".$data['id'].")'><i class='fa fa-pencil'></i></button>
											  <button class='btn btn-danger btn-xs' onclick='deleteMenu(".$data['id'].")'><i class='fa fa-trash-o'></i></button>
											  <button class='btn btn-default btn-xs' onclick='addSubMenu(".$data['id'].")'><i class='fa fa-plus'></i></button>
											</td>
											<td width='13%' id='menu".$data['id']."-action-edit' hidden>
											  <button class='btn btn-success btn-xs' onclick=";?>"submitForm('menu','edit',<?php echo $data['id'] ?>)"<?php echo "><i class='fa fa-check'></i></button>
											  <button class='btn btn-danger btn-xs' onclick='cancelForm(".$data['id'].")'><i class='fa fa-times'></i></button>
											</td>
										</tr>";
										
									foreach($listsub as $data){
										echo "<tr class='treegrid-".$data['id']." treegrid-parent-".$data['id_parent']."'>
											<td><input type='hidden' id='menu-id' value='".$data['id']."'></td>
											<td></td>
											<td id='submenu".$data['id']."-title'> * ".$data['title']."</td>
											<td id='submenu".$data['id']."-icon'><i class='fa ".$data['icon']."'></i></td>
											<td id='submenu".$data['id']."-href'>".$data['href']."</td>
											
											<td id='submenu".$data['id']."-title-edit' hidden> * <input type='text' value='".$data['title']."' id='txt-submenu".$data['id']."-title'></td>
											<td id='submenu".$data['id']."-icon-edit' hidden><input type='text' value='".$data['icon']."' id='txt-submenu".$data['id']."-icon'></td>
											<td id='submenu".$data['id']."-href-edit' hidden><input type='text' value='".$data['href']."' id='txt-submenu".$data['id']."-href'></td>
											
											<td id='submenu".$data['id']."-action'>
											  <button class='btn btn-primary btn-xs' onclick='editSubMenu(".$data['id'].")'><i class='fa fa-pencil'></i></button>
											  <button class='btn btn-danger btn-xs' onclick='deleteSubMenu(".$data['id'].")'><i class='fa fa-trash-o'></i></button>
											</td>
											<td id='submenu".$data['id']."-action-edit' hidden>
											  <button class='btn btn-success btn-xs' onclick=";?>"submitForm('submenu','edit',<?php echo $data['id'] ?>)"<?php echo "><i class='fa fa-check'></i></button>
											  <button class='btn btn-danger btn-xs' onclick='cancelSubForm(".$data['id'].")'><i class='fa fa-times'></i></button>
											</td>
										</tr>";
									}
									$numbering++;
								}
							?>
							</tbody>
						</table>
					</div>	  
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
        </section>
		<form id="submit-input-form" action="engine/panel/submit-form-list-menu.php" method="post">
			<input type='hidden' value='' id='txt-menu-id-input' name="id">
			<input type='hidden' value='' id='txt-menu-title-input' name="title">
			<input type='hidden' value='' id='txt-menu-icon-input' name="icon">
			<input type='hidden' value='' id='txt-menu-href-input' name="href">
			<input type='hidden' value='' id='txt-menu-field-input' name="field">
			<input type='hidden' value='' id='txt-menu-type-input' name="type">
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
		$(document).ready(function() {
			$('.tree').treegrid({
						expanderExpandedClass: 'fa fa-toggle-down',
						expanderCollapsedClass: 'fa fa-toggle-right'
					});
			$('.tree').treegrid('collapseAll');
		});
		
		function submitForm(field, type, id){
			document.getElementById("txt-menu-id-input").value = id;
			document.getElementById("txt-menu-title-input").value = document.getElementById("txt-"+field+id+"-title").value;
			document.getElementById("txt-menu-icon-input").value = document.getElementById("txt-"+field+id+"-icon").value;
			document.getElementById("txt-menu-href-input").value = document.getElementById("txt-"+field+id+"-href").value;
			document.getElementById("txt-menu-field-input").value = field;
			document.getElementById("txt-menu-type-input").value = type;
			$('form#submit-input-form').submit();
		}
		
		function editMenu(id){
			$('#menu'+id+'-title').hide();
			$('#menu'+id+'-icon').hide();
			$('#menu'+id+'-href').hide();
			$('#menu'+id+'-title-edit').show();
			$('#menu'+id+'-icon-edit').show();
			$('#menu'+id+'-href-edit').show();
			$('#menu'+id+'-action').hide().next().show();
		}
		
		function editSubMenu(id){
			$('#submenu'+id+'-title').hide();
			$('#submenu'+id+'-icon').hide();
			$('#submenu'+id+'-href').hide();
			$('#submenu'+id+'-title-edit').show();
			$('#submenu'+id+'-icon-edit').show();
			$('#submenu'+id+'-href-edit').show();
			$('#submenu'+id+'-action').hide().next().show();
		}
		
		function cancelForm(id){
			$('#menu'+id+'-title').show();
			$('#menu'+id+'-icon').show();
			$('#menu'+id+'-href').show();
			$('#menu'+id+'-title-edit').hide();
			$('#menu'+id+'-icon-edit').hide();
			$('#menu'+id+'-href-edit').hide();
			$('#menu'+id+'-action').show().next().hide();
		}
		
		function cancelSubForm(id){
			$('#submenu'+id+'-title').show();
			$('#submenu'+id+'-icon').show();
			$('#submenu'+id+'-href').show();
			$('#submenu'+id+'-title-edit').hide();
			$('#submenu'+id+'-icon-edit').hide();
			$('#submenu'+id+'-href-edit').hide();
			$('#submenu'+id+'-action').show().next().hide();
		}
		
		function addRecord(){
			$('#table-header').hide().next().show();
		}
		
		function cancelNew(){
			$('#table-header').show().next().hide();
		}
		
		function addSubMenu(id){
			
		}
		
	</script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
	
  </body>
</html>

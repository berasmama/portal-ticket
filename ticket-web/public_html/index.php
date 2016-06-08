<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Against AIDS</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Against AIDS</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#confirmation">Confirmation</a></li>
                    <li><a href="#contact">Contact</a></li>
        
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#confirmation">Confirmation</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span> Against</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">AIDS</b>
                <!--
                <b>designing</b>
                <b>developing</b>
                -->
            </span>
        </h1>
    </div>
</div>

<!--home and service-->
<div id="home" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h1 style="text-align:center">
                About
                </h1><br>
	<p class="flow-text">
    Against AIDS adalah acara tahunan dari sekumpulan mahasiswa yang mempunyai tujuan yang sama untuk melawan aids. Tujuan dari acara ini adalah untuk mengajak masyarakat untuk mengetahui dan memahami bahaya HIV/AIDS.
    </p>
            </div>
        </div>
    </div>
</div>

<!--booking-->
<div class="section scrollspy" id="booking" style="min-height:632px;max-height:864px;position:relative;background-color:#D9D9D9">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h1 style="text-align:center">
                Booking
                </h1>
                 <form class="col s12" action="transaction.php" method="post" autocomplete="off">
				<div class="input-field col s12">
          <input id="last_name" name="name" type="text" class="validate">
          <label for="last_name">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="">Email</label>
        </div>
       <div class="input-field col s8">
	   <select id="kat" name="kat">
	   <?php 
	   
			include 'dbconfig.php';
			$query = "SELECT * FROM tbl_tiket";
			$result = mysql_query($query);
			if($result === FALSE) { 
				die(mysql_error()); // TODO: better error handling
			}
			while($row = mysql_fetch_array($result)){
				echo "<option value='".$row['id']."'>".$row['nama']." - IDR ".$row['harga']."</option>";
			}
			
		?>
		</select>
		
		<label>Select Ticket</label>
	</div>
<div class="input-field col s4">
          <input id="jumlah" name="jumlah" type="number" class="validate">
          <label for="jumlah">Amount</label>
        </div>
        <div class="input-field col s12">
         <input id="hargaTiket" name="harga" type="hidden" class="validate">
		 <select id="katHarga">
		<?php
			$result2 = mysql_query($query);
			while($row = mysql_fetch_array($result2)){
				echo "<option value='".$row['id']."'>".$row['harga']."</option>";
			}
		?>
		</select>
         <button class="btn waves-effect waves-light" name="submit_booking" onclick="submitFormTicket()">Submit <i class="large material-icons">send</i>
  </button>
  </div>
  </form>
            </div>
        </div>
    </div>
</div>

<!--Confrim-->
<div id="confirmation" class="section scrollspy" style="background-color:white;min-height:632px;max-height:864px;position:relative;">
    <div class="container" >
        <div class="row" >
            <div  class="col s12">
                <h1>
                Confirm
                </h1>
                <form class="col s12" action="transaction.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="kode_booking">
          <label for="kode_booking">Booking Code</label>
        </div>
        <div class="input-field col s12">
        <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input name="file" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        </div>
        <div class="input-field col s12">
       <button class="btn waves-effect waves-light" type="submit" name="submit_confirm">Submit <i class="large material-icons">send</i>
  </button>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  </div>
        </form>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/aids.png"></div>
</div>
 
<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
    <div class="row">
    	<div class="col s12">
        <h1 style="color:white">
                Contact Us
                </h1>
                <hr>
        </div>
    </div>
        <div class="row">
            <div class="col l9 s12" style="color:white"><h3>Against AIDS</h3>
            <font>
            Alamat	: JL.Telekomunikasi, Deyeuh Kolot, Bandung 40257<br>
Email	: iaa.itt@gmail.com<br>
CP	: 082137241242 (Ridho Aryan R)
            </font>
            </div>
            <div class="col l3 s12">
                
            
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/officialBSM48/?fref=ts">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/officialBSM48/?fref=ts">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/officialBSM48/?fref=ts">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/officialBSM48/?fref=ts">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="https://www.facebook.com/officialBSM48/?fref=ts">BSM Developer confirmation</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
<script>
     $(document).ready(function() {
        $('select').material_select();
		$("#hargaTiket").next().hide();
    });
	
	$('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      
    }
  );
  
  function submitFormTicket(){
	  var val = $("#kat").val();
	  $('#katHarga').val(val);
	  var harga = $("#katHarga>option:selected").text();
	  var amount = $("input#jumlah").val();
	  $("input#hargaTiket").val(harga*amount);
	  
	  alert(harga*amount);
  }
  
  </script>
  
    </body>
</html>

<?php
   include 'engine/dbconfig.php';
?>
<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><img src="assets/img/logo-bsm.png" height="30px"> <b>BSM PANEL</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <?php /*
                <ul class="nav top-menu">
                    <!-- tasks start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
				
				*/ ?>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <!--
					<li class="profile-photo-navbar">
					<div class="tooltips" data-placement="bottom" data-original-title="<?php if(empty($_SESSION['login_user'])){$_SESSION['login_user']='default';} echo 'Hi, '.$_SESSION['login_user']; ?>">
						<img src="assets/img/profile/<?php if(empty($_SESSION['username'])){$_SESSION['username']='default';}echo $_SESSION['username']; ?>.jpg" height="35px">
					</div>
					</li> -->
					<li>
						<div class="dropdown" style="margin-top:13px;">
							<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
							<span class="caret"></span></button>
							<ul class="dropdown-menu" style="margin-left:-125px;">
							  <li><a href="?logout=y">Logout</a></li>
							</ul>
						</div>
					</li>
            	</ul>
            </div>
        </header>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
				alert('<?php ?>')
			});
		</script>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
				<?php
				/*
					$usermenu = $select->getChild('user_menu','user','id_user','id',$_SESSION['id_user']);
					foreach($usermenu as $data){
						
						$menu = $select->getMenu($data['id_menu'], $_SESSION['id_user']);
						
						foreach($menu as $data){
							
							echo "<li class='sub-menu'>
									  <a href='".$data['href']."'>
										  <i class='fa ".$data['icon']."'></i>
										  <span>".$data['title']."</span>
									  </a>";					
							
							$submenu = $select->getChild('navbar_submenu','navbar_menu','id_parent','id',$data['id']);
							
							if(count($submenu) != 0){
								echo "<ul class='sub'>";
								foreach($submenu as $data){
									echo "<li>
											<a href='".$data['href']."'>
												<i class='fa ".$data['icon']."'></i> ".$data['title']."
											</a>
										  </li>";
								}
								echo "</ul>";
							}
						}
						echo "</li>";
					}
					*/
					
				?>
                <li class='sub-menu'>
                <a href="?id=1">
                	<i class='fa fa-check-square'></i>
                    <span>Konfirmasi</span>
                    </a>
                </li>
                <li class='sub-menu'>
                <a href="?id=2">
                	<i class='fa fa-folder-o'></i>
                    <span>Rekap Data</span>
                    </a>
                </li>
                <li class='sub-menu'>
                <a href="?id=3">
                	<i class='fa fa-file'></i>
                    <span>Tiket Panel</span>
                    </a>
                </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <?php
	  if(isset($_GET['logout'])){
		  session_destroy(); 
		  header("location: login.php");
	  }
	  ?>
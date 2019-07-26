<html>
<head>
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="icon" href="../images/small-logo.png">



<!-- Custom CSS -->
<link href="../css/student_style.css" rel="stylesheet" type="text/css">

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href="../css/SidebarNav.min.css" media="all" rel="stylesheet" type="text/css">
<!-- //side nav css file -->
 
 <!-- js-->
<script src="../js/js/jquery-1.11.1.min.js"></script>
<script src="../js/js/modernizr.custom.js"></script>

<!--webfonts-->
<!-- <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
 --><!--//webfonts--> 


<!-- chart -->
<script src="../js/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="../js/js/metisMenu.min.js"></script>
<script src="../js/js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>

#chartdiv {
  width: 100%;
  height: 295px;
}
</style>

</head> 


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
<!-----------------------left-fixed-navigation------------------------------------------->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <!-- COLLEGE LOGO -->
                <h1><a class="navbar-brand" href="index.php"><img src="../images/logo2.png" style="width: 100%; height: 100%;"></a></h1>
          </div>
            <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true" style="">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>HOME</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>MODULES</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!-- DYNAMIC MODULES :-->
                   <?php foreach ($module_taken_by_lec as $row) {
                  	$getModule= new DatabaseTable('modules_tble');
                  	$title=$getModule->find('id',$row['module_id']);
                  	$title=$title->fetch();
                  	?>
                  <li><a href="index.php?page=front_module_detail&fmid=<?php echo $title['id'];?>"><i class="fa fa-angle-right"></i> <?php echo $title['title']; ?> </a></li>
                  <?php } ?>
                </ul>
              </li>
              <li class="treeview">
                <a href="index.php?page=post_announcement&amid=<?php echo $_SESSION['userId'];?>">
                <i class="fa fa-pie-chart"></i>
                <span>POST ANNOUNCEMENT</span>
                </a>
              </li>

              <li class="treeview">
                <a href="index.php?page=view_grades">
                <i class="fa fa-pie-chart"></i>
                <span>View Grades</span>
                </a>
              </li>

              <!-- discussion forum -->
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Discussion Forum</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!-- DYNAMIC MODULES :-->
                   <?php foreach ($module_taken_by_lec as $row) {
                  	$getModule= new DatabaseTable('modules_tble');
                  	$title=$getModule->find('id',$row['module_id']);
                  	$title=$title->fetch();
                  	?>
                  <li><a href="index.php?page=forum&foid=<?php echo $title['id'];?>"><i class="fa fa-angle-right"></i> <?php echo $title['title']; ?> </a></li>
                  <?php } ?>
                </ul>
              </li>
                      
      </nav>
      	
    </aside>
	</div>
		<!---------------------------left-fixed -navigation--------------------->




		
		<!--------------------------- header-starts ---------------------------------->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left">

					<!--notifications of menu start -->
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				

				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<div class="user-name">
										<p><?php echo $getdetail['firstname'].' '.$getdetail['surname'];?></p>
										<span>Module Leader</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu" style="top: 95%;">
								
								<li> <a href="index.php?page=changepw"><i class="fa fa-sign-out"></i> Change Password</a> </li>
								<li> <a href="../pages/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
-<!------------------------------- //header-ends ------------------------->



<!--------------------------- main content start------------------------------------>
<div id="page-wrapper" style="min-height: 680px;">

			   <div class="main-page">
					
			   		<?php echo $content;?>
			   </div>
			</div>


		
	
	<!-- Classie --><!-- for toggle left puhs menu script -->
		<script src="../js/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="../js/js/jquery.nicescroll.js"></script>
	<script src="../js/js/scripts.js"></script>
	<!--//scrolling js-->


	
	
	<!-- side nav js -->
	<script src="../js/js/SidebarNav.min.js" type="text/javascript"></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	
	<!-- Bootstrap Core JavaScript -->
   <script src="../js/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	

</body></html>
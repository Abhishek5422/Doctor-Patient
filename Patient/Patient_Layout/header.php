		
<?php
session_start();
$mail=$_SESSION['mail'];
if(!$mail)
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Doctor patient appoinment</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" Department="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
								<ul class="top_agile_w3l_info_icons">
									<li><i class="" aria-hidden="true"></i></li>
									<li class=""><i class="" aria-hidden="true"></i></li>
									
									<li><i class="" aria-hidden="true"></i><a href="mailto:maria@example.com"></a></li>
								</ul>

						</div>
						
							
						</div>
								

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span>H</span>ealth <i class="fa fa-plus" aria-hidden="true"></i> <p>Quality Care 4U</p></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="Patient_home.php" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="mybooking.php" class="menu__link"> My Bookings</a> </li>	
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="My_Profile.php" class="menu__link">My Profile</a> </li>	
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="../index.php"class="menu__link">Logout</a> </li>
						
						
						   
						</li>
						
						
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
	
	<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form  method="post" enctype="multipart form-data">
					<input type="email" name="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="submit" class="register" value="Login" name="button">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"></a></p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<h5></h5>
				<div class="footer-icons">
					
				</div>
				<a href="../index.php"> <img src="../Patient/images/home.jpeg" style="height: 60px; width: 60px;"> 
				</a>
			</div>
			
			<!-- footer -->
			
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
	<br><br><br>
</body>
</html>
<?php
session_start();
include('../connect.php');
if(isset($_POST['button']))
{
	  $email=$_POST['email'];
	 $password=$_POST['Password'];
	$select="SELECT * FROM hospital WHERE Hospital_mail='$email' AND Hospital_password='$password'";
	$execute=mysqli_query($connect,$select);
    $count=mysqli_num_rows($execute);
	if ($count>0)
		{
			echo"<script>alert('Welcome')</script>";
			$_SESSION['mail']=$email;
			echo"<script>window.location.href='home.php'</script>";
		}
		else
		{
			echo"<script>alert('try again')</script>";
			echo"<script>window.location.href='login.php'</script";

		}






}










?>
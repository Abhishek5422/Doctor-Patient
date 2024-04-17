<?php
include('Layout/header.php');
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
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
					<h2>Change Password</h2>
				</div>
				<br><br>
				<?php
				include('../connect.php');
				$select="SELECT * FROM hospital WHERE Hospital_mail='$mail'";
				$execute=mysqli_query($connect,$select);
				$fetch=mysqli_fetch_array($execute);

				?>

				<form method="POST" enctype="multipart/form-data">
					<label style="padding-left: 40px;">Hospital_name</label>
					<input type="text" name="Hospital_name" value="<?php echo $fetch['Hospital_name']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value='Username';}">
					<br><br>
					<label style="padding-left: 40px;">Hospital_phone</label>
					<input type="text" name="Hospital_phone" value="<?php echo $fetch['Hospital_phone']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value='Username';}">
					<br><br>
					<label style="padding-left: 40px;">Hospital_mail</label>
					<input type="text" name="Hospital_mail" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value='Username';}">
					<br><br>
					<label style="padding-left: 40px;">Hospital_address</label>
					<input type="text" name="Hospital_address" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value='Username';}">
					<br><br>
					<label style="padding-left: 40px;">Old Paasword</label>
					<input type="text" name="Old Paasword" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value='Username';}">
					<br><br>
					<label style="padding-left: 40px;">New Password</label>
					<input type="password"style="padding-left: 40px;" name="New Password">
					
					<input type="submit" class="register" value="Submit" name="button">
				</form>
				
			</div>
			
			<!-- footer -->
			
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>



<?php
include('Layout/footer.php');
?>
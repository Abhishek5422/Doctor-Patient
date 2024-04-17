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
					<h2>Update Doctors</h2>
				</div> 
				<?php
				include('../connect.php');
				$id=$_GET['id'];
				$select="SELECT * from department inner join doctor on doctor.Department_id=department.DepartmentID  where doctor_id='$id'";
				$execute=mysqli_query($connect,$select);
				$fetch=mysqli_fetch_array($execute);

				?>

				
				<br><br>
				<form method="POST" enctype="multipart/form-data">

					<label style="padding-left: 40px;">Department Name</label>
					<input type="text" name="Department_Name" value="<?php echo $fetch['Departmentname']?>" >
					<br><br>

					<label style="padding-left: 40px;">Doctor Name</label>
					<input type="text" name="Doctor_Name" value="<?php echo $fetch['Doctor_Name']?>" >
					<br><br>
					<label style="padding-left: 40px;">Consulting Time</label>
					<input type="text" name="Consulting_Time" value="<?php echo $fetch['Consulting_Time']?>" >
					<br><br>
					<label style="padding-left: 40px;">Doctor Fee</label>
					<input type="text" name="Doctor_Fee" value="<?php echo $fetch['Doctor_Fee']?>" >
					<br><br>
					<label style="padding-left: 40px;">Doctor Image</label><br>
					<img src="Doctor/<?php echo $fetch['Doctor_Image'];?>"style="height: 100px;width: 100px;" name="old">
					<input type="file" style="padding-left: 40px;" name="image">
					
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
include('../connect.php');
if(isset($_POST['button']))
{
	$Doctorname=$_POST['Doctor_Name'];
	$Consulting_Time=$_POST['Consulting_Time'];
	$doctorfee=$_POST['Doctor_Fee'];
	  $image=$_FILES['image']['name'];
	  $old=$fetch['Doctor_Image'];
	  if($image=="")

{
	$new=$old;
}
else{

}

{
	$new=$image;
}

	
}
?>
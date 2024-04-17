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
					<h2>Add Departments</h2>
				</div>
				<br><br>
				<form method="POST" enctype="multipart/form-data">

					<label style="padding-left: 40px;">Department Name</label>
					<input type="text" name="Department_Name" value="Department Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<br><br>
					<label style="padding-left: 40px;">Department Image</label>
					<input type="file" style="padding-left: 40px;" name="Departmentimage">
					
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
		$DepartmentName=$_POST['Department_Name'];
 		 $Image=$_FILES['Departmentimage']['name'];
    $images = explode('.',$Image);
    $extensionImage=end($images);
    $allowedExtsImage = array("jpeg", "jpg", "png");
    $time = Time();
    $Photo=$time.'.'.$extensionImage;
    //End Image Processing
    if(in_array($extensionImage, $allowedExtsImage))
    {
    		move_uploaded_file($_FILES['Departmentimage']['tmp_name'], 'department/'.$Photo);

         $insert="INSERT INTO department(Departmentname,Departmentimage) values ('$DepartmentName','$Photo')";
         $execute=mysqli_query($connect,$insert);
          if ($execute==1)
       {
         	echo "<script>alert(' succesfully inserted')</script>";
         	echo "<script>window.location.href='add_departments.php'</script>";
	     }

	    else

       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='add_departments.php'</script>";
       }
      
    }
    else
    {
      echo "<script>alert('invalid image')</script>";
      echo "<script>window.location.href='add_departments.php'</script>";

    }

}
?>

 <?php
include('Layout/footer.php');
?>


 		
         
      

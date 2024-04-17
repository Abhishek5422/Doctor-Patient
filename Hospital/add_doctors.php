<?php
include('Layout/header.php');
?>


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
					<h2>Add Doctors</h2>
				</div>
				<form method="POST" enctype="multipart/form-data">
					<br>
					<label style="padding-left:10px">Choose Department</label>
					<br><br>
					<select name="department_id">
		<?php
		include('../connect.php');
		$select01="SELECT * FROM department";
		$execute01=mysqli_query($connect,$select01);
		while ($fetch01=mysqli_fetch_array($execute01))
		{

		?>

		<option value="<?php echo $fetch01['DepartmentID'];?>"><?php echo $fetch01['Departmentname'];?>

		</option>
		<?php
}
		?>
	
		
	</select>



						

					<br>	
					<label style="padding-left:10px">Doctor Name</label>
					<input type="text" name="Doctorname" value="Doctorname" ><br><br>
					<label style="padding-left:10px">Doctor Email</label>
					<input type="text" name="Doctoremail"  ><br><br>
					<label style="padding-left:10px"></label>
					<input type="text" name="ConsultingTime" value="Consulting Time" ><br><br>
					<label style="padding-left:10px">Doctor Fee</label>
					<input type="text" name="Fees" value="Fees" ><br><br>
					<label style="padding-left:10px">Doctor Image</label>
					<input type="file" name="doctor" >
					<input type="submit" class="register"  name=button>
				</form>

				
			</div>
			
			
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>

<?php
include('Layout/footer.php');
?>


<?php
include('Layout/footer.php')

?>

<?php
include('../connect.php');
if(isset($_POST['button']))
{
	$department_id=$_POST['department_id'];
	$Doctorname=$_POST['Doctorname'];
	$Doctoremail=$_POST['Doctoremail'];
	$Consulting_Time=$_POST['ConsultingTime'];
	$Fees=$_POST['Fees'];
	$Image=$_FILES['doctor']['name'];
    $images = explode('.',$Image);
    $extensionImage=end($images);
    $allowedExtsImage = array("jpeg", "jpg", "png");
    $time = Time();
    $Photo=$time.'.'.$extensionImage;
    //End Image Processing
    if(in_array($extensionImage, $allowedExtsImage))
    {
    		move_uploaded_file($_FILES['doctor']['tmp_name'], 'Doctor/'.$Photo);

         $insert="INSERT INTO doctor(Department_id,Doctor_Name,Doctoremail,Consulting_Time,Doctor_Fee,Doctor_Image	
) values ('$department_id','$Doctorname','$Doctoremail','$Consulting_Time','$Fees','$Photo')";
         $execute=mysqli_query($connect,$insert);
          if ($execute==1)
       {
         	echo "<script>alert(' succesfully inserted')</script>";
         	echo "<script>window.location.href='add_doctors.php'</script>";
	     }

	    else

       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='add_doctors.php'</script>";
       }
      
    }
    else
    {
      echo "<script>alert('invalid image')</script>";
      echo "<script>window.location.href='add_doctors.php'</script>";

    }

}
?>

 
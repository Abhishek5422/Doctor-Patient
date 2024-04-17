<?php
include('Patient_Layout/header.php');
?>
 
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
  input{
    padding-left: 20px;
  }
</style>
<body>
  <?php
include('../connect.php');
$select="SELECT * FROM patient WHERE Patient_email='$mail'";
$execute=mysqli_query($connect,$select);
$fetch=mysqli_fetch_array($execute);
  ?>


<center>
	<h1>My Profile</h1>
	</center><br>
<form  method="post" enctype="multipart/form-data">   
  <label for="fname" style="padding-left:500px">Patient_name:</label><br>
 
  <center>
  <input type="text" id="fname" name="Patient_name" value="<?php echo $fetch['Patient_name']?>" style="height:30px;width: 500px;border-radius: 30px;">
</center><br>
  
  <label for="lname" style="padding-left:500px">Patient_email:</label><br>
  <center>
  <input type="text" id="lname" name="patientemail" value="<?php echo $fetch['Patient_email']?>" style="height:30px;width: 500px;border-radius: 30px;" readonly>
</center><br>
<label for="fname" style="padding-left:500px">Password:</label><br>
 
  <center>
  <input type="text" id="fname" name="password" value="<?php echo $fetch['Password']?>" style="height:30px;width: 500px;border-radius: 30px;">
</center><br>
<label for="fname" style="padding-left:500px">Phone_Number:</label><br>
 
  <center>
  <input type="text" id="fname" name="Phone_Number" value="<?php echo $fetch['Phone_Number']?>" style="height:30px;width: 500px;border-radius: 30px;">
</center><br>
<label for="fname" style="padding-left:500px">Patient_Address:</label><br>
 
  <center>
  <input type="text" id="fname" name="Patient_Address" value="<?php echo $fetch['Patient_Address']?>" style="height:30px;width: 500px;border-radius: 30px;">
</center><br>
<label for="fname" style="padding-left:500px">Patient_image:</label><br>
 <br><img src="../Patient/<?php echo $fetch['Patient_image']?>" style="padding-left: 500px" name="Patient_image">
 <br><br>
 <label for="fname" style="padding-left:500px">Upload New Image:</label><br>
 <br>
  <center>
  <input type="file" id="fname" name="New_Image"style="height:30px;width: 500px;border-radius: 30px;">
</center><br>
 
<center>
  <input type="submit" value="Submit" name="button"></center>
  <br>
</form> 
</center>
</body>
</html>

<?php
$old=$fetch['Patient_image']; 
include('../connect.php');
if(isset($_POST['button']))

{

  $patient_name=$_POST['Patient_name'];
  $patient_email=$_POST['patientemail'];
  $password=$_POST['password'];
  $phone_Number=$_POST['Phone_Number'];
  $patient_Address=$_POST['Patient_Address'];
  $New_Image=$_FILES['New_Image']['name'];
   if($New_Image=="")
    {
        $new=$old;  
    }  
    else
    {
        $new=$Patient_image;
    }
    $update="UPDATE patient SET Patient_name='$patient_name',patientemail='$patient_email',password='$password',Phone_Number='$phone_Number',Patient_Address='$patient_Address',Patient_image='$new' WHERE Patient_email='$mail'";
    $execute=mysqli_query($connect,$update);
    if($execute==1)
    {
       echo "<script>alert('update successfully')</script>";
            move_uploaded_file($_FILES['New_Image']['tmp_name'],'Patient_image/'.$new);
            echo "<script>window.location.href='My_Profile.php'</script>";
        }
        else
        {
            echo "<script>alert('fail')</script>";
            echo "<script>window.location.href='My_Profile.php'</script>";
        }
    }


?>

 

<?php
include('Patient_Layout/footer.php');
?>
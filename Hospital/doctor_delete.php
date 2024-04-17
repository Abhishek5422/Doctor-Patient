<?php
include('../connect.php');
 $doctor_id=$_GET['id'];
$delete="DELETE FROM doctor where doctor_id ='$doctor_id'";

 $execute=mysqli_query($connect,$delete);
          if ($execute==1)
       {
         	echo "<script>alert(' succesfully delete')</script>";
         	echo "<script>window.location.href='manage_doctor.php'</script>";
	     }

	    else

       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='manage_doctor.php'</script>";
       }

?>




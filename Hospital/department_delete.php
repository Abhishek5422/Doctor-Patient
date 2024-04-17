<?php

include('../connect.php');
 $department_id=$_GET['id'];
$delete="DELETE FROM department where DepartmentID='$department_id'";

 $execute=mysqli_query($connect,$delete);
          if ($execute==1)
       {
         	echo "<script>alert(' succesfully delete')</script>";
         	echo "<script>window.location.href='manage_department.php'</script>";
	     }

	    else

       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='manage_department.php'</script>";
       }

?>










































































?>
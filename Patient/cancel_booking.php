<?php
include('../connect.php');
 $booking_id=$_GET['id'];
$delete="DELETE FROM booking where Booking_id='$booking_id'";

$execute=mysqli_query($connect,$delete);
       if ($execute==1)
{
	echo "<script>alert(' succesfully delete')</script>";
    echo "<script>window.location.href='mybooking.php'</script>";
}
 else
       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='mybooking.php'</script>";
       }


?>
<?php
include('../connect.php');
$booking_id=$_GET['id'];
$update="UPDATE booking SET booking_status='Approved' where Booking_id='$booking_id'";
$execute=mysqli_query($connect,$update);
if ($execute==1)

	{
	echo "<script>alert('Succesfully Approved')</script>";
    echo "<script>window.location.href='Verify_booking.php'</script>";
   }
else
{
	echo "<script>alert('Try Again')</script>";
    echo "<script>window.location.href='Verify_booking.php'</script>";
}


?>
<?php
include('Layout/header.php');
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<br><br>
<h2 align="center">Verify Booking</h2>
<br>
	

<div style="overflow-x:auto;">
  <table>
    <tr>
    	<th>Doctor Name</th>
      <th>Patient  Name</th>
      <th>Symtoms</th>
      <th>consulting_time</th>	
      <th>consulting_date</th>
      <th>Doctor_mail</th>
      <th>Department</th>
      <th>Booking_status</th>
      
      <th>Accept</th>
      <th>Reject</th>
    
    </tr>
    <tr>
    	<?php
    	include('../connect.php');
    	$select="SELECT * FROM booking INNER JOIN doctor on doctor.doctor_id=booking.Doctor_id INNER JOIN patient on patient.Patient_id=booking.Patient_id where Booking_status='Pending'";
    	$execute=mysqli_query($connect,$select);
    	while ($fetch=mysqli_fetch_array($execute))
    	{		

    
    ?>
      <td><?php echo $fetch['Doctor_Name']?></td>
      <td><?php echo $fetch['Patient_name']?></td>
      <td><?php echo $fetch['Symtoms']?></td>
      <td><?php echo $fetch['consulting_time']?></td>
      <td><?php echo $fetch['consulting_date']?></td>
      <td><?php echo $fetch['Doctor_mail']?></td>
      <td><?php echo $fetch['Department']?></td>
      <td><?php echo $fetch['Booking_status']?></td>
      

      <td><a href="Booking_Approve.php?id=<?php echo $fetch['Booking_id']?>"><img src="images/approved.jpeg" style="height: 50px;width: 50px;"></a></td>
      <td><a href="Booking_Reject.php?id=<?php echo $fetch['Booking_id']?>"><img src="images/reject.jpeg" style="height: 50px;width: 50px;"></a></td>
      
    </tr>  
 <?php

 }

 ?>  

  </table>
</div>

</body>
</html>




<?php
include('Layout/footer.php');
?>
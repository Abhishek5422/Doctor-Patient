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
<h2 align="center">Booked Details</h2>
<br>
	

<div style="overflow-x:auto;">
  <table>
    <tr>
    	<th>SL NO</th>
      <th>Patient_name</th>
      <th>Doctor_Name</th>
      <th>Patient_mail</th>
      <th>Symtoms</th>
      <th>consulting_time</th>
      <th>consulting_date</th>
      <th>Doctor_mail</th>
      <th>Department</th>
      <th>Booking_status</th>
      <th>Payment_status</th>
      <th>
    </tr>
    
    	<?php
    	include('../connect.php');
    	$select="SELECT * FROM booking INNER JOIN patient on booking.Patient_id=patient.Patient_id INNER JOIN doctor on booking.Doctor_id=doctor.doctor_id";
    	$execute=mysqli_query($connect,$select);
      $i=1;
    	while ($fetch=mysqli_fetch_array($execute))
    	{		

    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch['Patient_name']?></td>
      <td><?php echo $fetch['Doctor_Name']?></td>
      <td><?php echo $fetch['Patient_mail']?></td>
      <td><?php echo $fetch['Symtoms']?></td>
      <td><?php echo $fetch['consulting_time']?></td>
      <td><?php echo $fetch['consulting_date']?></td>
      <td><?php echo $fetch['Doctor_mail']?></td>
      <td><?php echo $fetch['Department']?></td>
      <td><?php echo $fetch['Booking_status']?></td>
      <td><?php echo $fetch['Payment_status']?></td>

     </tr>
 <?php
$i++;
 }

 ?>  

  </table>
</div>

</body>
</html>




<?php
include('Layout/footer.php');
?>
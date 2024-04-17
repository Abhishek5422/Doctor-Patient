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
<h2 align="center">User Details</h2>
<br>
	

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>SL NO</th>
    	<th>Patient_name</th>
      <th>Patient_email</th>
      <th>Password</th>
      <th>Phone_Number</th>
      <th>Patient_Address</th>
      <th>Patient_image</th>	
      
      
      
    
    </tr>

<?php
      include('../connect.php');
      $select="SELECT * FROM patient";
      $execute=mysqli_query($connect,$select);
      $i=1;
      while ($fetch=mysqli_fetch_array($execute))
      {   

    
    ?>

    <tr>
      <td><?php echo $i?></td>
    	
      <td><?php echo $fetch['Patient_name']?></td>
      <td><?php echo $fetch['Patient_email']?></td>
      <td><?php echo $fetch['Password']?></td>
      <td><?php echo $fetch['Phone_Number']?></td>
      <td><?php echo $fetch['Patient_Address']?></td>
      <td> <img src="../Patient/<?php echo $fetch['Patient_image']?>"></td>
    
    
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
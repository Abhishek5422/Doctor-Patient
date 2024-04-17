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
<br>
<h2 align="center">Manage Doctors</h2><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Department name</th>
      <th>Doctor name</th>
      <th>Consulting Time</th>
      <th>Doctor Fee</th>
      <th>Doctor image</th>
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>

      <?php
      include('../connect.php');
      $select="SELECT * FROM doctor";
      $execute=mysqli_query($connect,$select);
      $i=1;
      while ($fetch=mysqli_fetch_array($execute))
      {

      ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch['Doctor_Name']?></td>
      <td><?php echo $fetch['Consulting_Time']?></td>
      <td><?php echo $fetch['Doctor_Fee']?></td>
      <td><img src="Doctor/<?php echo $fetch['Doctor_Image']?>" style="height: 100px;width: 100px;"></td>
      <td><a><a href="doctor_edit.php?id=<?php echo $fetch['doctor_id']?>"><img src="images/edit.png" style="height: 50px;width: 50px;"></a></td>
      <td><a href="doctor_delete.php?id=<?php echo $fetch['doctor_id']?>"><img src="images/delete.png" style="height: 50px;width: 50px;"></a></td>
      <td></td>
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
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
	<br><br><br>

<h2 align="center">Manage Department</h2>
<br><br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>SL No</th>
      <th>Department Name</th>
      <th>Department Image</th>
      <th>Edit</th>
      <th>Delete</th>
        <?php
      include('../connect.php');
      $select="SELECT * FROM department";
      $execute=mysqli_query($connect,$select);
      $i=1;
      while($fetch=mysqli_fetch_array($execute))
      { 
      
      ?> 
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch['Departmentname']?></td>
      <td><img src="department/<?php echo $fetch['Departmentimage']?>" style="height: 100px;width: 100px;"></td>
      <td> <a href="department_edit.php?id=<?php echo $fetch['DepartmentID']?>"><img src="images/edit.png" style="height: 50px;width: 50px;"></a></td>
      <td>   
             <a href="department_delete.php?id=<?php echo $fetch['DepartmentID']?>">
                 <img src="images/delete.png"style="height: 50px;width: 50px;">
             </a>     
      </td>
      <td></td>
   </tr>
  <?php
  $i++;
}
  ?>
  </table>
  <br><br><br><br><br><br>
</div>

</body>
</html>



<?php
include('Layout/footer.php');
?>


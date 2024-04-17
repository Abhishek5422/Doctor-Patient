<?php
include('Patient_Layout/header.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<center>
<h1>My Bookings</h1>
<br>
<p></p>
  <?php
    include('../connect.php');
    $select="SELECT * FROM booking INNER JOIN doctor on doctor.doctor_id=booking.Doctor_id WHERE Patient_mail='$mail'";
    $execute=mysqli_query($connect,$select);
    while ($fetch=mysqli_fetch_array($execute))
    {
    ?>
<div class="row">
 
  <div class="column">
    <div class="card">
      <h3>Doctor Name :<?php echo $fetch['Doctor_Name'];?></h3>
      <p>Symtoms :<?php echo $fetch['Symtoms']?></p>
      <p>consulting_time :<?php echo $fetch['consulting_time']?></p>
      <p>consulting_date :<?php echo $fetch['consulting_date']?></p>
      <p>Doctor_Fee :<?php echo $fetch['Doctor_Fee']?></p>
      <p>Booking_status :<?php echo $fetch['Booking_status']?></p>
      <br> 
      <a href="cancel_booking.php?id=<?php echo $fetch['Booking_id']?>">
     <p>Payment status :<?php echo $fetch['Payment_status']?></p>

      
       <?php
       if($fetch['Booking_status']=='Approved' and $fetch['Payment_status']=='Pending')
       {
        ?>
        
        <a href="payment.php?id=<?php echo $fetch['Booking_id']?>">
        <button style="background-color: green;color: white;">Pay Now
        </button> 
        </a>
        <?php
        }
       ?>


       <?php
       if( $fetch['Payment_status']=='Pending')
       {
        ?>
         <button>Cancel Booking</button></a>
         <?php
        }
         ?>
         </center>
          
      
       
    </div>

  </div>
 


  
</div>

 
   <?php
}
?>
</body>
</html>


<br><br><br>


<?php
include('Patient_Layout/footer.php');
?>
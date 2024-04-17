<?php
include('Patient_Layout/header.php');
?>










<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Appointment</h2>
			        <p class="sub_t_agileits">Add Short Description</p>

					<div class="book-appointment">
						<h4>Make an appointment</h4>
								<form  method="post">
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<?php
									include('../connect.php');
									$select1="SELECT * FROM patient where Patient_email='$mail'"; 
									$execute1=mysqli_query($connect,$select1);
									$fetch1=mysqli_fetch_array($execute1);

									?>
									<input type="hidden" name="Patient_id" value="<?php echo $fetch1['Patient_id']?>">
									<p>Patient Name</p>

										<input type="text" name="Patient_name" placeholder="" required="" value="<?php echo $fetch1['Patient_name']?>" />
								</div>	
									<div class="gaps">	
									<p>Phone Number</p>
										<input type="text" name="phoneNumber" placeholder="" required="" value="<?php echo $fetch1['Phone_Number']?>" />
									</div>
									<div class="gaps">
									<p>Email</p>
											<input type="email" name="patientemail" placeholder="" required="" value="<?php echo $fetch1['Patient_email']?>" />
									</div>	
									<div class="gaps">
									<p>Symptoms</p>
											<input type="text" name="Symptoms" placeholder="" required="" />
									</div>
								</div>
								<div class="right-agileinfo same">
							<div class="gaps">
								<?php
								include('../connect.php');
								$id=$_GET['id'];
								$select="SELECT * FROM doctor inner join Department on Department.DepartmentID=doctor.Department_id  WHERE doctor_id='$id'";
								$execute=mysqli_query($connect,$select);
								$fetch=mysqli_fetch_array($execute);


								?>

								<input type="hidden" name="Doctor_id" value="<?php echo $fetch['doctor_id']?>">
										
									
										<input type="hidden" name="doctor_mail" value="<?php echo $fetch['Doctor_email']?>">
									<p>Doctor Name</p>
									<div class="gaps">
										
									</div>
										<input type="text" name="Doctor_Name" placeholder="" required="" value="<?php echo $fetch['Doctor_Name']?>" />
								</div>
								<div class="gaps">
									<p>Department</p>
										<input type="text" name="Department_Name" placeholder="" required="" value="<?php echo $fetch['Departmentname']?>" />
								</div>
								<div class="gaps">
									<p>Consulting Time</p>
										<input type="text" name="consulting_time" placeholder="" required="" value="<?php echo $fetch['Consulting_Time']?>" />
								</div>
								<div class="gaps">
									<p>Consulting date</p>
										<input type="date" name="consulting_date" placeholder="" required=""  />
								</div>
								<div class="gaps">
									<p>Fee</p>
										<input type="text" name="Doctor_fee" placeholder="" required="" value="<?php echo $fetch['Doctor_Fee']?>" />
								</div>
								</div>
								<div class="clearfix"></div>
											  <input type="submit" value="Make an Appointment" name="button">
								</form>
							</div>
					   </div>

		</div>
	</div>
	<?php
	include('../connect.php');
	if(isset($_POST['button']))
	{															
		$Patient_id=$_POST['Patient_id'];
		$doctor_id=$_POST['Doctor_id'];			
		$patient_mail=$_POST['patientemail'];
		$symtoms=$_POST['Symptoms'];
		$Consulting_Time=$_POST['consulting_time'];
		$Consulting_date=$_POST['consulting_date'];
		$doctor_mail=$_POST['doctor_mail'];
		$DepartmentName=$_POST['Department_Name'];
		
		$insert2="INSERT INTO booking(Patient_id,Doctor_id,Patient_mail,Symtoms,consulting_time,consulting_date,Doctor_mail,Department,Booking_status,Payment_status) values ('$Patient_id','$doctor_id','$patient_mail','$symtoms','$Consulting_Time','$Consulting_date','$doctor_mail','$DepartmentName','Pending','Pending')";
		$execute2=mysqli_query($connect,$insert2);
		if ($execute2==1)
		{
				echo "<script>alert('succesfully inserted')</script>";
         	echo "<script>window.location.href='mybooking.php'</script>";
	     }
	      else

       {
        	echo "<script>alert('Try Again')</script>";
         	echo "<script>window.location.href='Patient_home.php'</script>";
       }
      
  

 }


	?>


<?php
include('Patient_Layout/footer.php');
?>
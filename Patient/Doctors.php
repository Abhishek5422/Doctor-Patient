<?php
include('Patient_Layout/header.php');
?>










<div class="team portfolio " id="team">
		<div class="container">
<h3 class="w3_heade_tittle_agile">Our Doctors</h3>
<br><br>
		
			<div class="w3layouts-grids">
				<?php
								include('../connect.php');
								$id=$_GET['id'];
								$select="SELECT * FROM doctor WHERE Department_id='$id'";
								$execute=mysqli_query($connect,$select);
								while ($fetch=mysqli_fetch_array($execute))
								{	
 	
							?>
					<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>	
							
									<figure><a href="booking.php?id=<?php echo $fetch['doctor_id']?>"><img src="../Hospital/Doctor/<?php echo $fetch['Doctor_Image']?>" style="height: 300px;width: 500px;"alt=" " class="img-responsive" /></figure>
								</a>
							
							</div>
						</div>
						<br>
						<div class="">
							<h5><b>Name <b>: <?php echo $fetch['Doctor_Name']?></h5><br>
							<h5><b>Consulting Time<b> :<?php echo $fetch['Consulting_Time']?></h5><br>
							<h5><b>Doctor Fee<b> :₹<?php echo $fetch['Doctor_Fee']?></h5>
						</div>
					</div>
					
					<br>

				</div>

				<?php

				}
				?>
								
							</div>
						</div>
						
					</div>
			
		























<?php
include('Patient_Layout/footer.php');
?>
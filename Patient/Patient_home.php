<?php
include('Patient_Layout/header.php');
?>
	
	<div class="team portfolio " id="team">
		<div class="container">
<h3 class="w3_heade_tittle_agile">OUR DEPARTMENTS</h3>
<br><br>
		
			<div class="w3layouts-grids">
				<?php
								include('../connect.php');
								$select="SELECT * FROM department";
								$execute=mysqli_query($connect,$select);
								while ($fetch=mysqli_fetch_array($execute))
								{
							?>
					<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><a href="Doctors.php?id=<?php echo $fetch['DepartmentID']?>"><img src="../Hospital/department/<?php echo $fetch['Departmentimage']?>" style="height: 300px;width: 500px;"alt=" " class="img-responsive" /></figure>
								</a>
							
							</div>
						</div>
						<br>
						<div class="wthree_team_grid1_pos">
							<center><h4><?php echo $fetch['Departmentname']?></h4></center>
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
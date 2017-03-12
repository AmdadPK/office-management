<?php
session_start();
include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$userId = $_SESSION['user_id'];
$sql = "SELECT * FROM `all_task` WHERE `userID` = '{$userId}' AND `status` = '1'";
$select = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($select);
//print_r($data);
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated zoomInDown"> <i class="fa fa-bullseye" aria-hidden="true"></i> 
				Your Current Task
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated zoomIn">
			
			<h4>
				<i class="fa fa-bars profile_icon" aria-hidden="true"></i>
				Task title: <a href="#" class="titltColor"><?php echo $data['title']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-user-md profile_icon" aria-hidden="true"></i>
				Given by: <a href="#" class="titltColor"><?php echo $data['give']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-tasks profile_icon" aria-hidden="true"></i>
				Service name: <a href="#" class="titltColor"><?php echo $data['service']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-calendar-o profile_icon" aria-hidden="true"></i>
				Start date: <a href="#" class="titltColor"><?php echo $data['start_date']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-calendar profile_icon" aria-hidden="true"></i>
				End date: <a href="#" class="titltColor"><?php echo $data['end_date']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-unlock-alt profile_icon" aria-hidden="true"></i>
				Task status: <div class="progress">
  					<div class="progress-bar progress-bar-striped active" role="progressbar"
  					aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $data['taskStatus']; ?>%; color:#000">
    				<?php echo $data['taskStatus']; ?>% Complete (danger)
  					</div>
				</div>
			</h4>
			<a href="currentTaskEdit.php" class="btn btn-info edit" role="button">Edit</a>
			
		</div>
	</div>
</div>
<?php include './footer.php';?>


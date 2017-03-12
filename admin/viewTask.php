<?php
session_start();
include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$userId = $_SESSION['user_id'];
$id = $_GET['id'];
//$sql = "SELECT * FROM `all_task` WHERE `userID` = '{$userId}' AND `id` = '$id'";
$sql = "SELECT t.`title`, t.`give`, t.`service`, t.`start_date`, t.`end_date`, t.`taskStatus`, i.`user_name`, i.`gender`, i.`team`, i.`email`, i.`designation`, i.`contact_no` FROM `all_task` as t INNER JOIN `information` as i ON t.`userID`=i.`id` WHERE t.`id` = '$id'";
$select = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($select);
//print_r($data);
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated zoomInRight"><i class="fa fa-eye-slash" aria-hidden="true"></i> Your Task
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated rollIn">
			<h3><i class="fa fa-arrow-down" aria-hidden="true"></i> Task inpormation</h3>
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
				<i class="fa fa-unlock profile_icon" aria-hidden="true"></i>
				Task status: <div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar"
						aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $data['taskStatus']; ?>%; color:#000;">
						<?php echo $data['taskStatus']; ?>% Complete (danger)
					</div>
				</div>
			</h4>
			<h3><i class="fa fa-arrow-down" aria-hidden="true"></i> Employee inpormation</h3>
			<h4>
				<i class="fa fa-user profile_icon" aria-hidden="true"></i>
				User name: <a href="#" class="titltColor"><?php echo $data['user_name']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-building profile_icon" aria-hidden="true"></i>
				Designation: <a href="#" class="titltColor"><?php echo $data['designation']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-keyboard-o profile_icon" aria-hidden="true"></i>
				Team: <a href="#" class="titltColor"><?php echo $data['team']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-user-secret profile_icon" aria-hidden="true"></i>
				Gender: <a href="#" class="titltColor"><?php echo $data['gender']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-envelope profile_icon" aria-hidden="true"></i>
				E-mail address: <a href="#" class="titltColor"><?php echo $data['email']; ?></a>
			</h4>
			<h4>
				<i class="fa fa-phone-square profile_icon" aria-hidden="true"></i>
				Contact no: <a href="#" class="titltColor"><?php echo $data['contact_no']; ?></a>
			</h4>		
		</div>
	</div>
</div>
<?php include './footer.php';?>
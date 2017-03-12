<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `all_task` WHERE `id` = '$id'";
$select = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($select);
//print_r($data);
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated rotateInUpLeft"><i class="fa fa-eye-slash" aria-hidden="true"></i> View employee Task</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated flipInX">
			
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
				aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $data['taskStatus']; ?>%; color:#000">
				<?php echo $data['taskStatus']; ?>% Complete (danger)
			</div>
		</div>
	</h4>	
</div>
</div>
</div>
<?php include './footer.php';?>
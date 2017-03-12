<?php 
session_start();
include './header.php';
?>
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
			<h2 class="fac_title wow animated bounceInDown"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Please Update This 
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated bounceInUp">
			<form class="reg_form" action="currentTaskUpdedAction.php" method="post"> 
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<p class="form_p">Task Title:</p>                  
				<input type="text" required="" value="<?php echo $data['title']; ?>" class="form_input" name="title">
				<p class="form_p">Given by:</p>                  
				<input type="text" required="" value="<?php echo $data['give']; ?>" class="form_input" name="give">
				<p class="form_p">Service Name:</p>                  
				<input type="text" required="" value="<?php echo $data['service']; ?>" class="form_input" name="service">
				<p class="form_p">Start Date:</p>                  
				<input type='text' class="form-control form_input" id='datepicker' name="start_date"
				value="<?php echo $data['start_date']; ?>" />
				<p class="form_p">End Date:</p>                  
				<input type='text' class="form-control form_input" id='datepicker1' name="end_date" value="<?php echo $data['end_date']; ?>"/>
				<p class="form_p">How Mach Work:</p>                  
				<input type="number" placeholder="Please update your task" value="<?php echo $data['taskStatus']; ?>" class="form_input" name="taskStatus">
				<input type="submit" name="submit" class="submit btn-block" value="Update">

			</form>
		</div>
	</div>
</div>
<?php include './footer.php';?>



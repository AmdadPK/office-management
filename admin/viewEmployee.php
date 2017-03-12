<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `information` WHERE `id` = '$id'";
$select = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($select);
//print_r($data);
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated bounceInUp"> <i class="fa fa-eye-slash" aria-hidden="true"></i> Employee full information</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-sm-12 col-lg-10 col-xs-12 col-lg-offset-1 col-md-offset-1  formaria wow animated bounceInDown">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
				<h4>
					<i class="fa fa-fast-backward profile_icon" aria-hidden="true"></i>
					First name: <a href="#" class="titltColor"><?php echo $data['first_name']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-fast-forward profile_icon" aria-hidden="true"></i>
					Last name: <a href="#" class="titltColor"><?php echo $data['last_name']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-user profile_icon" aria-hidden="true"></i>
					User name: <a href="#" class="titltColor"><?php echo $data['user_name']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-keyboard-o profile_icon" aria-hidden="true"></i>
					Team: <a href="#" class="titltColor"><?php echo $data['team']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-building profile_icon" aria-hidden="true"></i>
					Designation: <a href="#" class="titltColor"><?php echo $data['designation']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-envelope profile_icon" aria-hidden="true"></i>
					email: <a href="#" class="titltColor"><?php echo $data['email']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-user profile_icon" aria-hidden="true"></i>
					Gender: <a href="#" class="titltColor"><?php echo $data['gender']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-building profile_icon" aria-hidden="true"></i>
					Full address: <a href="#" class="titltColor"><?php echo $data['address']; ?></a>
				</h4>
				<h4>
					<i class="fa fa-phone-square profile_icon" aria-hidden="true"></i>
					Contact: <a href="#" class="titltColor"><?php echo $data['contact_no']; ?></a>
				</h4>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 hidden-xs">
				<div class="EmploTask wow animated bounceInDown">
					<div class="line"></div>
					<div class="stick-2"></div>
					<a href="employeeAllTask.php?id=<?php echo $id ?>">
						<div class="stick">All Task</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 hidden-xs">
				<div class="EmployTask wow animated bounceInDown">
					<div class="line"></div>
					<div class="sticks-2"></div>
					<a href="employeeCurTask.php?id=<?php echo $data['id']; ?>">
						<div class="sticks">Current Task</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include './footer.php';?>
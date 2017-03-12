<?php include './header.php';?>
<?php include './slider.php';?>

<?php
include 'db.php';
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM `information` WHERE `id`= '$id'";
$select = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($select);
//print_r($data);
?>

<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated bounce">
				<i class="fa fa-user" aria-hidden="true"></i>
 				<?php echo "Hello ".$data['user_name']." view your profile"?>
 			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated swing">


			<h4>
				<i class="fa fa-user-md profile_icon" aria-hidden="true"></i>
				You are <a href="#" class="titltColor"><?php echo $data['user_name'];?></a>
			</h4>
			<h4>
				<i class="fa fa-tasks profile_icon" aria-hidden="true"></i>
				You are <a href="#" class="titltColor"><?php echo $data['designation'];?></a>
			</h4>
			<h4>
				<i class="fa fa-keyboard-o profile_icon" aria-hidden="true"></i>
				<a href="#" class="titltColor"><?php echo $data['team'];?></a> Engineer 
			</h4>
			<h4>
				<i class="fa fa-envelope profile_icon" aria-hidden="true"></i>
				E-mail <a href="#" class="titltColor"><?php echo $data['email'];?></a>
			</h4>
			<h4>
				<i class="fa fa-map-marker profile_icon" aria-hidden="true"></i>
				Lives in <a href="#" class="titltColor"><?php echo $data['address'];?></a>
			</h4>
			<h4>
				<i class="fa fa-mobile profile_icon" aria-hidden="true"></i>
				Phone <a href="#" class="titltColor"><?php echo $data['contact_no'];?></a>
			</h4>


		</div>
	</div>

</div>
		<?php include './footer.php';?>


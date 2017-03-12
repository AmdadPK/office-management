<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM `information` WHERE `id`= '$id'";

$select = mysqli_query($conn,$sql);
$fetch = mysqli_fetch_array($select);
?>

<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated bounceInDown"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			 	Edit your Profile
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated bounceInRight">


			<form class="reg_form" action="edit_profile_action.php" method="post" enctype="multipart/form-data"> 

				<p class="form_p">First Name:</p>                  
				<input type="text" required="" value=" <?php echo $fetch['first_name'];?>" class="form_input" name="first">
				<p class="form_p">Last Name:</p>                  
				<input type="text" required="" value=" <?php echo $fetch['last_name'];?>" class="form_input" name="last">
				<p class="form_p">User Name:</p>                  
				<input type="text" required="" value=" <?php echo $fetch['user_name'];?>" class="form_input" name="user">
				<p class="form_p">Gender:</p> 
				<input <?php if ($fetch['gender']=="male") {
					echo "checked";
				}?> type="radio" required="" value="male" name="gender"> Male
				<input <?php if ($fetch['gender']=="female") {
					echo "checked";
				}?> type="radio" value="female" required="" name="gender"> Female
				<p class="form_p">Select Your Team:</p> 
				<select name="team" class="selectpicker show-menu-arrow form-control">
				<!-- <select class="selectpicker show-tick form-control"> -->
					<option >Select an option</option>
					<option <?php if($fetch['team'] == "Graphics"){echo "selected";} ?> value="Graphics">
						Graphics
					</option>
					<option <?php if($fetch['team'] == "IT"){echo "selected";} ?> value="IT">
						IT
					</option>
					<option <?php if($fetch['team'] == "Marketting"){echo "selected";} ?> value="Marketting">
						Marketting
					</option>
					<option <?php if($fetch['team'] == "Content"){echo "selected";} ?> value="Content">
						Content
					</option>
					<option <?php if($fetch['team'] == "HR"){echo "selected";} ?> value="HR">
						HR
					</option>
					<option <?php if($fetch['team'] == "Account"){echo "selected";} ?> value="Account">
						Account
					</option>
				</select>
				<p class="form_p">Email:</p>                  
				<input type="email" class="form_input" required="" value="<?php echo $fetch['email'];?>" name="mail">
				<p class="form_p">Phone number:</p>                  
				<input type="text" required="" value=" <?php echo $fetch['contact_no'];?>" class="form_input" name="phone">
				<p class="form_p">Designation:</p>
				<input type="text" required="" value=" <?php echo $fetch['designation'];?>" class="form_input" name="designation">
				<p  class="form_p">Your photo:</p>                  
				<input type="file" required="" value="<?php echo $fetch['picture'];?>" class="form_input" name="picture">
				<p  class="form_p">Address:</p>                  
				<textarea required="" name="address" class="text_area"><?php echo $fetch['address'];?></textarea>
				<input type="submit" name="submit" class="submit btn-block" value="Save">



			</form>


		</div>
	</div>

</div>
<?php include './footer.php';?>



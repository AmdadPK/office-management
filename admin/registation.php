<?php include './header.php';?>
<?php include './slider.php';?>

<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated fadeInDown" title="Here you can register!"><i class="fa fa-registered" aria-hidden="true"></i>
				Employee Registration Profile
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated fadeInRight">


			<form class="reg_form" action="reg_action.php" method="post" enctype="multipart/form-data"> 

				<p class="form_p">First Name:</p>                  
				<input type=" text" class="form_input" name="first">
				<p class="form_p">Last Name:</p>                  
				<input type="text" class="form_input" name="last">
				<p class="form_p">User Name:</p>                  
				<input type="text" class="form_input" name="user">
				<p class="form_p">Gender:</p> 
				<input type="radio" value="male" name="gender"> Male
				<input type="radio" value="female" name="gender"> Female
				<p class="form_p">Select Your Team:</p> 
				<select name="team" class="selectpicker show-menu-arrow form-control">
				<!-- <select class="selectpicker show-tick form-control"> -->
					<option >Select an option</option>
					<option >Graphics</option>
					<option>IT</option>
					<option>Marketting</option>
					<option>Content</option>
					<option>HR</option>
					<option>Account</option>
				</select>
				<p class="form_p">Email:</p>                  
				<input type="email" class="form_input" name="mail">
				<p class="form_p">Password:</p>                  
				<input type="password" class="form_input" name="password">
				<p class="form_p">Phone number:</p>                  
				<input type="text" class="form_input" name="phone">
				<p class="form_p">Designation:</p>
				<input type="text" class="form_input" name="designation">
				<p  class="form_p">Your photo:</p>                  
				<input type="file" class="form_input" name="picture">
				<p  class="form_p">Address:</p>                  
				<textarea name="address" class="text_area"></textarea>
				<input type="submit" name="submit" class="submit btn-block" value="Save">



			</form>


		</div>
	</div>

</div>
<?php include './footer.php';?>


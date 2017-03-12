<?php include './header.php';?>
<?php include './slider.php';?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated fadeInLeft"><i class="fa fa-plus-square" aria-hidden="true"></i>
				Add your new task
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated lightSpeedIn">
			<form class="reg_form" action="addNewTaskAction.php" method="post"> 

				<p class="form_p">Task Title:</p>                  
				<input type="text" required="" class="form_input" name="title">
				<p class="form_p">Given by:</p>                  
				<input type="text" required=""  class="form_input" name="give">
				<p class="form_p">Service Name:</p>                  
				<input type="text" required="" class="form_input" name="service">
				<p class="form_p">Start Date:</p>                  
				<input type='text' class="form-control form_input" id='datepicker' name="start_date" />
				<p class="form_p">End Date:</p>                  
				<input type='text' class="form-control form_input" id='datepicker1' name="end_date" />
				<p class="form_p">How Mach Work:</p>                  
				<input type="number" placeholder=" Please upload your task" class="form_input" name="taskStatus">
				<input type="submit" name="submit" class="submit btn-block" value="Save">

			</form>
		</div>
	</div>
</div>
<?php include './footer.php';?>



<?php 
session_start();
include './header.php';
?>
<?php include './slider.php';?>
<?php
include 'db.php';
$userId = $_SESSION['user_id'];
$sql = "SELECT * FROM `all_task` WHERE `userID` = '{$userId}' AND `status` = '0'";
$select = mysqli_query($conn,$sql);
//print_r($data);
$sl = 0;
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated bounceInLeft"><i class="fa fa-briefcase" aria-hidden="true"></i> Your all task</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 wow animated bounceInRight">
			<table class="table table-striped table-bordered table-hover" id="mydata">
               <thead>
                   <tr>
                       <th>#</th>
                       <th>Title</th>
                       <th>Service</th>
                       <th>End date</th>
                       <th>Status</th>
                       <th>View</th>
                   </tr>
               </thead>
               <!-- <tfoot>
                   <tr>
                       <th>Id</th>
                       <th>Title</th>
                       <th>Service</th>
                       <th>End date</th>
                       <th>Status</th>
                       <th>View</th>
                   </tr>
               </tfoot> -->
               <tbody>
               <?php 
                while( $data = mysqli_fetch_array( $select ) ) { 
                  $sl++
                  ?>
                    <tr>
                       <td><?php echo $sl; ?></td>
                       <td><?php echo $data['title'];?></td>
                       <td><?php echo $data['service'];?></td>
                       <td><?php echo $data['end_date'];?></td>
                       <td><?php echo $data['taskStatus'];?></td>
                       <td><a href="viewTask.php?id=<?php echo $data['id'];?>" class="btn btn-info btn-xs" role="button"><i class="fa fa-eye" aria-hidden="true"></i>
View</a></td>
                   </tr>
               <?php } ?>
                   
               </tbody>
           </table>
		</div>
	</div>
</div>
<?php include './footer.php';?>



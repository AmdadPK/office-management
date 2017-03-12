<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$sql = "SELECT * FROM `all_task` WHERE `status`= '1' ";
$select = mysqli_query($conn,$sql);
$sl=0;
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated fadeInDownBig"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
 Employee current task</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 wow animated fadeInUpBig">
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
                       <th>edit</th>
                   </tr>
               </tfoot> -->
               <tbody>
              <?php
              	while( $data = mysqli_fetch_array($select) ) {
              		$sl++
              		?>
                    <tr>
                       <td><?php echo $sl; ?></td>
                       <td><?php echo $data['title'];?></td>
                       <td><?php echo $data['service'];?></td>
                       <td><?php echo $data['end_date'];?></td>
                       <td><?php echo $data['taskStatus'];?></td>
                       <td><a href="viewCurrentTask.php?id=<?php echo $data['id'];?>" class="btn btn-info btn-xs" role="button"><i class="fa fa-eye" aria-hidden="true"></i>
View</a></td>
                    </tr>
          <?php } ?>
                   
               </tbody>
           </table>
		</div>
	</div>
</div>
<?php include './footer.php';?>



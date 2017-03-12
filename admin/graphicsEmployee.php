<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';
$sql = "SELECT * FROM `information` WHERE `status`='1' AND `team`='Graphics'";
$select = mysqli_query($conn,$sql);
//print_r($data);
$sl = 0;
?>
<div class="content-wrapper fiber">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="fac_title wow animated bounceInLeft"><i class="fa fa-users" aria-hidden="true"></i>
          Graphics All employee
      </h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 wow animated bounceInRight">
			<table class="table table-striped table-bordered table-hover" id="mydata">
               <thead>
                   <tr>
                       <th>#</th>
                       <th>Name</th>
                       <th>E-mail</th>
                       <th>Designation</th>
                       <th>Contact</th>
                       <th>View</th>
                       <th>Delete</th>
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
                while( $data = mysqli_fetch_array( $select ) ) { 
                  $sl++
                  ?>
                    <tr>
                      <td><?php echo $sl; ?></td>
                      <td><?php echo $data['user_name'];?></td>
                      <td><?php echo $data['email'];?></td>
                      <td><?php echo $data['designation'];?></td>
                      <td><?php echo $data['contact_no'];?></td>
                      <td><a href="viewEmployee.php?id=<?php echo $data['id'];?>" class="btn btn-info btn-xs" role="button"><i class="fa fa-eye" aria-hidden="true"></i>
                           View</a>
                      </td>
                      <td><a href="deleteEmplyAction.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-xs" role="button"><i class="fa fa-trash" aria-hidden="true"></i>
                           Delete</a>
                      </td>
                    </tr>
               <?php } ?>
                   
               </tbody>
           </table>
		</div>
	</div>
</div>
<?php include './footer.php';?>

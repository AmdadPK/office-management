<?php include './header.php';?>
<?php include './slider.php';?>
<?php
include 'db.php';

$item_par_page = 8;

$sql = "SELECT * FROM all_task";
$select = mysqli_query($conn,$sql);
$reacords = mysqli_num_rows($select);

$pages = ceil($reacords/$item_par_page);

$page = (isset($_GET['page']) ? (int)$_GET['page'] : $_GET['page']=1);

$start = ($page-1)*$item_par_page;
$sql2 = "SELECT * FROM all_task WHERE `status`='0' LIMIT $start,$item_par_page";
$select2 = mysqli_query($conn,$sql2);

$sl = 0;
?>
<div class="content-wrapper fiber">

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h2 class="fac_title wow animated bounceInLeft"><i class="fa fa-briefcase" aria-hidden="true"></i> Employee all task</h2>
     </div>
   </div>

   <div class="row">
    <div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 wow animated bounceInRight">
      <table class="table table-bordered table-striped">
        <thead>
          <tr  class="danger">
            <th>#</th>
            <th>Title</th>
            <th>Service</th>
            <th>End date</th>
            <th>Status</th>
            <th>View</th>
          </tr>
        </thead>
        <?php
                while( $data = mysqli_fetch_array($select2) ) {
                  $sl++
                  ?>
        <tbody>
          <tr>
            <td><?php echo $sl ;?></td>
            <td><?php echo $data['title'] ;?></td>
            <td><?php echo $data['service'] ;?></td>
            <td><?php echo $data['end_date'] ;?></td>
            <td><?php echo $data['taskStatus'] ;?></td>
            <td><a href="viewTask.php?id=<?php echo $data['id'];?>" class="btn btn-info btn-xs" role="button"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
            </td>
          </tr>      
        </tbody>
        <?php } ?>
      </table>
      <ul class="pagination pull-right">
      <?php
      if ($page<=$pages) {
        for ($i=1; $i <=$pages ; $i++) { 
          if ($i == $page) {
              echo '<li class ="active"><a class="#" href="?page='.$i.'"> '.$i.' </a></li>';
          }
          else{
            echo '<li><a href="?page='.$i.'"> '.$i.' </a></li>';
          }
        }
      }
      else{
        echo "You have done wrong";
      }
      ?>
      </ul>
    </div>
  </div>
</div>
<?php include './footer.php';?>



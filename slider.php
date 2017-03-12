
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="empImages/<?php echo $fetch['picture']; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $fetch['user_name']; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="home.php"><i class="fa fa-indent" aria-hidden="true"></i><span>Home</span></a></li>
      <?php
      include 'db.php';
      $userId = $_SESSION['user_id'];
      $sql = "SELECT status FROM `all_task` WHERE  `userID` = '{$userId}' AND status= '1'";
      $select = mysqli_query($conn,$sql);
      if (mysqli_num_rows($select) > 0) { ?>

      <li onclick="return false"><a href="addNewTask.php"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Add New Task</span></a></li>

      <?php }else{ ?>
      <li><a href="addNewTask.php"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Add New Task</span></a></li>

      <?php } ?>

      <li><a href="currentTask.php"><i class="fa fa-ticket" aria-hidden="true"></i><span>Current Task</span></a></li>
      <li><a href="allTask.php"><i class="fa fa-tasks" aria-hidden="true"></i><span>All Task</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
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
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 padding">
            <h3 class="passTitle wow animated "><i class="fa fa-key" aria-hidden="true"></i>
                Change your password
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 formaria wow animated">


            <form class="reg_form" action="changePasswAction.php" method="post" enctype="multipart/form-data"> 
                <p class="pForm">Current password:</p>
                <input type="password" class="form_input" name="oldpw">
                <p id="profile-name" class="profile-name-card"></p>
                <?php if(isset($_SESSION['wrongOldPw'])){ ?>
                <div class="alert alert-danger">
                        <p><?php echo $_SESSION['wrongOldPw'] ?></p>
                </div>
                <?php
                 }
                 unset($_SESSION['wrongOldPw'])
                 ?>
                <p class="pForm">New password:</p>
                <input type="password" class="form_input" name="newpw">
                <p class="pForm">Repeat new password:</p>
                <input type="password" class="form_input" name="confpw">
                <p id="profile-name" class="profile-name-card"></p>
                <?php if(isset($_SESSION['wrongNewPw'])){ ?>
                <div class="alert alert-danger">
                        <p><?php echo $_SESSION['wrongNewPw'] ?></p>
                </div>
                <?php
                 }
                 unset($_SESSION['wrongNewPw'])
                 ?>
                <input type="submit" name="submit" class="passwordSet" value="SET NEW PASSWORD">
            </form>


        </div>
    </div>

</div>
<?php include './footer.php';?>

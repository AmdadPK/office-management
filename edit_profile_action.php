<?php
session_start();
include 'db.php';
if (isset($_POST['submit'])) {
	$id = $_SESSION['user_id'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$user = $_POST['user'];
	$gender = $_POST['gender'];
	$team = $_POST['team'];
	$email = $_POST['mail'];
	$designation = $_POST['designation'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	//image pro

$imageName = $_FILES['picture']['name'];
//print_r($_FILES['picture']);
$imageTampName = $_FILES['picture']['tmp_name'];
$broken = explode(".", $imageName);
$extension = $broken['1'];
$imageNewName = uniqid().".".$extension;
$destination = "empImages/$imageNewName";
if ($extension=="jpg" || $extension=="JPG" || $extension=="PNG" || $extension=="png" || $extension=="gif") {
	$imageUplode = move_uploaded_file($imageTampName, $destination);
	if (!$imageUplode) {
		echo "Sorry, only JPG, jpg, PNG, png & gif files are allowed.";
		exit();
	}
}
else if ($_FILES['picture']['size'] >3000) {
	echo "Sorry, your Photo is too large than 3 Megabytes in size.";
	exit();
}
else{
	echo "Select a Valid Image";
	exit();
}

	//images
	$sql = "UPDATE `information` SET `first_name`='$first', `last_name`='$last',`user_name`='$user', `gender`='$gender', `team`='$team', `email`='$email', `designation`='$designation', `address`='$address', `picture`='$imageNewName', `contact_no`='$phone' WHERE `id`='$id'";
	$update = mysqli_query($conn,$sql);
	if($update){
    header('Location: profile.php');
		}  else {
    echo "Edit failed ".mysqli_error($conn);
}
}
?>
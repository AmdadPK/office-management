<?php
include 'db.php';


if (isset($_POST['submit'])) {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$user = $_POST['user'];
	$gender = $_POST['gender'];
	$team = $_POST['team'];
	$mail = $_POST['mail'];
	$pass = $_POST['password'];
	$password = sha1($pass);
	$phone = $_POST['phone'];
	$designation = $_POST['designation'];
	$address = $_POST['address'];
	// image processing

$imageName = $_FILES['picture']['name'];
//print_r($_FILES['picture']);
$imageTampName = $_FILES['picture']['tmp_name'];
$broken = explode(".", $imageName);
$extension = $broken['1'];
$imageNewName = uniqid().".".$extension;
$destination = "../empImages/$imageNewName";
if ($extension=="jpg" || $extension=="JPG" || $extension=="PNG" || $extension=="png") {
	$imageUplode = move_uploaded_file($imageTampName, $destination);
	if (!$imageUplode) {
		echo "Failed to Uplode Image";
		exit();
	}
}else{
	echo "Select a Valid Image";
	exit();
}
	// image processing
	$sql = "INSERT INTO information(first_name,last_name,user_name,gender,team,email,password	,designation,address,picture,contact_no,status) VALUES ('$first','$last','$user','$gender','$team','$mail','$password','$designation','$address','$imageNewName','$phone','1')";
	$insert = mysqli_query($conn,$sql);
	if ($insert) {
    		echo "hello ".$user."your application succesfull";
    	}else{
    		echo "Registation fail";
    	}
    	
}
?>
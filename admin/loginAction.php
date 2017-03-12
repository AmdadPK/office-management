<?php
session_start();
ob_start();
include "db.php";
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE `email`='$email' && `password`='$password'";
	$int = mysqli_query($conn,$sql);

	if (mysqli_num_rows($int) > 0) {
		$row = mysqli_fetch_array($int);
		$_SESSION['userEmail'] = $row['email'];

		header("Location: index.php");
	}

}
?>
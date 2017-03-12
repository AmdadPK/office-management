<?php
session_start();
ob_start();
include "db.php";
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = sha1($pass);

	$sql = "SELECT * FROM information WHERE `email`='$email' && `password`='$password' && `status`='1'";
	$int = mysqli_query($conn,$sql);
	if (mysqli_num_rows($int) > 0) {
		$row = mysqli_fetch_array($int);
		$_SESSION['user_id'] = $row['id'];

		header("Location: index.php");
	}else{
		$_SESSION['wrongUser'] = "Your given E-mail or Password is wrong!";
		header("Location: login.php");
	}

}
?>
<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$give = $_POST['give'];
	$service = $_POST['service'];
	$startDate = $_POST['start_date'];
	$endDate = $_POST['end_date'];
	$taskStatus = $_POST['taskStatus'];
	$status = '1';
	$userId = $_SESSION['user_id'];

	$sql = "INSERT INTO all_task (title,give,service,start_date,end_date,status,taskStatus,userID) VALUES ('$title', '$give', '$service', '$startDate', '$endDate','$status','$taskStatus','$userId')";
	//exit();
	$insert = mysqli_query($conn,$sql);
	if ($insert) {
		header('Location: currentTask.php');
	}
	else{
		echo "Insert failed".mysqli_error($conn);
	}
}
?>
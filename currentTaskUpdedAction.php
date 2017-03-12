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
	$taskId = $_POST['id'];
	$userId = $_SESSION['user_id'];
	if ($taskStatus == 100) {
		$sql = "UPDATE `all_task` SET `title`='$title', `give`='$give', `service`='$service', `start_date`='$startDate', `end_date`='$endDate', `status` = '0', `taskStatus`='$taskStatus', `userID`='$userId' WHERE `id` = '$taskId'";
		$update = mysqli_query($conn,$sql);
		if ($update) {
		header('Location: addNewTask.php');
		}
		else{
		echo "Edit failed".mysqli_error($conn);
		}
	}else{
		$sql = "UPDATE `all_task` SET `title`='$title', `give`='$give', `service`='$service', `start_date`='$startDate', `end_date`='$endDate', `status` = '1', `taskStatus`='$taskStatus', `userID`='$userId' WHERE `id` = '$taskId'";
		$update = mysqli_query($conn,$sql);
		if ($update) {
		header('Location: currentTask.php');
		}
		else{
		echo "Edit failed".mysqli_error($conn);
		}

	}
}
?>
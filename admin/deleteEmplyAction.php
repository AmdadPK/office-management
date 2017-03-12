<?php
include 'db.php';

$id = $_GET['id'];
$sql = "UPDATE `information` SET `status`='0' WHERE `id`='$id'";
$update = mysqli_query($conn,$sql);
if ($update) {
	header('Location: allEmployee.php');
}
else{
echo "Delete failed".mysqli_error($conn);
}

?>
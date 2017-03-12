<?php
ob_start();
session_start();
include 'db.php';
?>

<?php
if (isset($_POST['submit'])) {
	$id = $_SESSION['user_id'];
	$oldpa = $_POST['oldpw'];
	$oldpass= sha1($oldpa);
	$newpa = $_POST['newpw'];
	$newpass = sha1($newpa);
	$conpa = $_POST['confpw'];
	$confass = sha1($conpa);

	$sql = "SELECT password FROM `information` WHERE `id`='$id'";
	$select = mysqli_query($conn,$sql);
	if ($select) {
		$row = mysqli_fetch_array($select);
		$password = $row['password'];
		if ($oldpass <> $password) {
			$_SESSION['wrongOldPw'] = "Your given current password is wrong!";
			header("Location: changePassword.php");
		}
		else if ($newpass == $confass) {
			$query = "UPDATE `information` SET `password`='$newpass' WHERE `password`='$oldpass'";
			$update = mysqli_query($conn,$query);
			if ($update) {
				echo "Successfully changed password";
			}
		}
		else { 
			$_SESSION['wrongNewPw'] = "Your given new password is not match!";
			header("Location: changePassword.php");
		}
	}
}



// if ($newPassword == $confirmPassword) {
//    data select
//     $dbPass = $row['password'];
//    if ($oldpa == $dbPass) {
//         update
//    }

// }else{
//     error
// }



?>
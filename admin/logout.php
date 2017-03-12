<?php
session_start();
if ($_GET['logout']=="true") {
	unset($_SESSION['userEmail']);
	header("Location: login.php");
}
?>
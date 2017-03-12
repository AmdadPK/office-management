<?php
session_start();
if ($_GET['logout']=="true") {
	unset($_SESSION['name']);
	header("Location: login.php");
}
?>
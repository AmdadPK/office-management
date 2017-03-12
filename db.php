<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "office_mamagement";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("connect failed :".mysql_connect_error());
}
?>
<?php
include 'connection.php';
header('Content-Type: application/json');
session_start();
$username = $_SESSION['username'];
$query = mysqli_query($conn,"SELECT * FROM `profile` WHERE `username`='$username'");
foreach ($query as $value) {
	$data = json_encode($value);
}
echo $data;
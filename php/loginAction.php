<?php
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)||empty($password)) {
	echo "empty";
}else{
	$query = mysqli_query($conn,"SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
	$look = mysqli_num_rows($query);
	if ($look > 0) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = 'active';
		echo "oke";
	}else{
		echo "error";
	}
}
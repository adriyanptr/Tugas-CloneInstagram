<?php
include 'connection.php';
header('Content-Type: application/json');
$search = $_GET['search'];
$querry = mysqli_query($conn,"SELECT * FROM `photo` WHERE `caption` LIKE '%$search%'");
if ($query) {
	$data = array();
	while ($row = mysqli_fetch_assoc($query)) {
	    // $data = json_encode($row);
		array_push($data, $row);
	    // print_r($row);
	}
	$value = json_encode($data);
	echo $value;
}else{
	echo "string";
}


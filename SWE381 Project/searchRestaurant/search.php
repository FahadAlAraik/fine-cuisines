<?php 

require_once('DB.php');

$restaurant = $_POST['restaurant'];
$con = new DB();
$data = $con->searchData($restaurant);

echo json_encode($data);
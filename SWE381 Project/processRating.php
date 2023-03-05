<?php

session_start();

$con = mysqli_connect('localhost','root','','mydb');
$rating = $_POST['textarea'];
$star = $_POST['rating'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$restaurant = $_SESSION['restaurant-rate'];
$query = "INSERT INTO ratings(restaurant, fname, lname, rating , star) VALUES ('$restaurant','$fname','$lname','$rating' , '$star')";

mysqli_query($con, $query);


    header("location:displayRating.php");

?>
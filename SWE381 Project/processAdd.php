<?php


session_start();
$con = mysqli_connect('localhost','root','','mydb'); 


if(isset($_POST['img']) && isset($_POST['name']) && isset($_POST['desc'])) {
    $descr = $_POST['desc'];
    $nam = $_POST['name'];
    $image = $_POST['img'];
    $table = $_SESSION['admin-db'];
    echo $image;
    $query = "INSERT INTO $table (imgSource, name, description)
    VALUES ('$image', '$nam', '$descr')";

    echo mysqli_query($con, $query);


    echo "<h1> ADDED</h1>  <br> <a href = 'index.php'>GO BACK</a>";







}


?>
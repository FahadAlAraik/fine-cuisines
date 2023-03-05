<?php
session_start();
$result = "empty";

if (isset($_POST['McDonalds']))
    $_SESSION['restaurant-rate'] = "McDonalds";

else if (isset($_POST['Herfy']))
    $_SESSION['restaurant-rate'] = "Herfy";

else if (isset($_POST['KFC']))
    $_SESSION['restaurant-rate'] = "KFC";

else if (isset($_POST['Shawarma-House']))
    $_SESSION['restaurant-rate'] = "Shawarma-House";

else if (isset($_POST['AlBaik']))
    $_SESSION['restaurant-rate'] = "AlBaik";

else if (isset($_POST['CheeseCake-Factory']))
    $_SESSION['restaurant-rate'] = "CheeseCake-Factory";

else if (isset($_POST['CasaPasta']))
    $_SESSION['restaurant-rate'] = "CasaPasta";

else if (isset($_POST['Kudu']))
    $_SESSION['restaurant-rate'] = "Kudu";

else if (isset($_POST['Yummywok']))
    $_SESSION['restaurant-rate'] = "Yummywok";

else if(isset($_GET['name']))
    $_SESSION['restaurant-rate'] = $_GET['name'];


else

    $result = "error";

if ($result == "error")
    header("location:Restaurants.php");


else
    header("location:displayRating.php");

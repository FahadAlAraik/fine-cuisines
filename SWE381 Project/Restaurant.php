<?php
session_start();
$result = "empty";
$query = "";
if (isset($_POST['McDonalds']) || (isset($_GET['name']) && $_GET['name'] == "McDonalds")) {
    $result = "McDonalds";
    $query = "SELECT * FROM mcdonaldsmenu";
    $_SESSION['admin-db'] = "mcdonaldsmenu";
} else if (isset($_POST['Herfy']) || (isset($_GET['name']) && $_GET['name'] == "Herfy")) {
    $result = "Herfy";
    $query = "SELECT * FROM herfymenu";
    $_SESSION['admin-db'] = "herfymenu";
} else if (isset($_POST['KFC']) || (isset($_GET['name']) && $_GET['name'] == "KFC")) {
    $result = "KFC";
    $query = "SELECT * FROM kfcmenu";
    $_SESSION['admin-db'] = "kfcmenu";
} else if (isset($_POST['Shawarma-House']) || (isset($_GET['name']) && $_GET['name'] == "Shawarma-House")) {
    $result = "Shawarma-House";
    $query = "SELECT * FROM shawarmahousemenu";
    $_SESSION['admin-db'] = "shawarmahousemenu";
} else if (isset($_POST['AlBaik']) || (isset($_GET['name']) && $_GET['name'] == "AlBaik")) {
    $result = "AlBaik";
    $query = "SELECT * FROM albaikmenu";
    $_SESSION['admin-db'] = "albaikmenu";
} else if (isset($_POST['CheeseCake-Factory']) || (isset($_GET['name']) && $_GET['name'] == "CheeseCake-Factory")) {
    $result = "CheeseCake-Factory";
    $query = "SELECT * FROM cheesecakefactorymenu";
    $_SESSION['admin-db'] = "cheesecakefactorymenu";
} else if (isset($_POST['CasaPasta']) || (isset($_GET['name']) && $_GET['name'] == "CasaPasta")) {
    $result = "CasaPasta";
    $query = "SELECT * FROM casapastamenu";
    $_SESSION['admin-db'] = "casapastamenu";
} else if (isset($_POST['Kudu']) || (isset($_GET['name']) && $_GET['name'] == "Kudu")) {
    $result = "Kudu";
    $query = "SELECT * FROM kudumenu";
    $_SESSION['admin-db'] = "kudumenu";
} else if (isset($_POST['Yummywok']) || (isset($_GET['name']) && $_GET['name'] == "Yummywok")) {
    $result = "Yummywok";
    $query = "SELECT * FROM yummywokmenu";
    $_SESSION['admin-db'] = "yummywokmenu";
} else if (isset($_GET['name'])) {
    //echo "Here";
    $result = $_GET['name'];
    $resultMenu = $result . "menu";
    $query = "SELECT * FROM $resultMenu";
    $_SESSION['admin-db'] = $resultMenu;
} else



    

if ($result == "error")
    header("location: Restaurants.php");





$con = mysqli_connect('localhost', 'root', '', 'mydb');

if ($con) {
    
    $menu  = mysqli_query($con, $query);
    

    

        
}









?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="RestarauntsPage.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
    <title>Fine Cuisines</title>
    <style>
        .hero-area {
            min-height: 0;
        }
    </style>
</head>

<body>


    <div class="hero-area">



        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 25px;">



            <button class="navbar-light navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <a href="#" class="black navbar-brand" style="font-size:2rem;font-weight: bold;margin-left:50px !important;">Fine Cuisines</a>

                <ul class="white navbar-nav mr-auto" style="margin-left:75px !important;">

                    <li class="secondary-font white nav-item mr-xl-5 "><a href="index.php" class="secondary-font white nav-link">HOME</a></li>
                    <li class="secondary-font white nav-item mr-xl-5 "><a href="Restaurants.php" class="secondary-font white nav-link">RESTAURANTS</a></li>
                    <li class="secondary-font white nav-item mr-xl-5 "><a href="#" class="secondary-font white nav-link">ABOUT US</a></li>

                </ul>

                <?php

                if (isset($_SESSION['fname'])) {
                    echo " <a class = 'm-3' href='signout.php' style = 'color:black;'>  <i style = 'font-size:20px ;' class='black far fa-user font-weight-bold'> <span class = 'font-weight-bold secondary-font' style = 'font-family: sans-serif;font-size:20px;margin-right: 50px;'>Log Out</span></i></a>";
                } else {
                    echo "<a class = 'm-3' href='signin.php' style = 'color:black;'>  <i style = 'font-size:20px ;' class='black far fa-user font-weight-bold'> <span class = 'font-weight-bold secondary-font' style = 'font-family: sans-serif;font-size:20px;margin-right: 50px;'>Sign-in</span></i></a>";
                }

                ?>

            </div>


        </nav>




    </div>


    <br><br><br><br><br><br><br>
    <div class="restaraunts-container">



        <?php
        $editAndRemove = false;
        $img = "";
        $name = "";
        $desc = "";

        while ($row = mysqli_fetch_row($menu)) {

            foreach ($row as $key => $value) {
                if ($key == 0)
                    $img = $value;
                else if ($key == 1)
                    $name = $value;
                else
                    $desc = $value;
            }

            if (isset($_SESSION['admin']) && isset($_SESSION['restaurant'])) {
                if ($_SESSION['admin'] == 1 && $_SESSION['restaurant'] == $result) {
                    $editAndRemove = true;
                    echo " <div class='container'>
                    <div class='row d-flex align-items-center'>
                        <div class='col-6 d-flex align-items-center justify-content-md-center'>
                            <img src='$img' alt='$name  meal' height='300px' width='300px'>
                        </div class='col-6 d-flex align-items-center justify-content-md-center'>
        
                        <div class='col-6 justify-content-center align-items-center'>
                            <h1 class='text-center secondary-font' style='font-size:2.5rem;'>$name </h1>
                            <p class='text-center secondary-font' style='font-size:1.5rem;'>$desc</p>
                            <br><br><br>
                            <div class='row justify-content-center align-items-center  text-center '>
                                
                                <div class='col justify-content-center'>
                                    <form action='process.php' method='GET'>
                                        <input type='submit' name='$name' class='btn btn-info' style='font-size:1.5rem;' value='edit'>
                                    </form>
                                </div>
                                <div class='col justify-content-center align-items-center'>
                                    <form action='process.php' method='GET'>
                                        <input type='submit' name='$name' class='btn btn-danger' style='font-size:1.5rem;' value='remove'>
                                    </form>
                                </div>
                            </div>
        
                        </div>
        
                    </div>
        
        
                </div>";
                } else {
                    echo " <div class='container'>
            <div class='row d-flex align-items-center'>
                <div class='col-6 d-flex align-items-center justify-content-md-center'>
                    <img src='$img' alt='$name  meal' height='300px' width='300px'>
                </div class='col-6 d-flex align-items-center justify-content-md-center'>

                <div class='col-6 justify-content-center align-items-center'>
                    <h1 class='text-center secondary-font' style='font-size:2.5rem;'>$name </h1>
                    <p class='text-center secondary-font' style='font-size:1.5rem;'>$desc</p>
                    <br><br><br>
                    

                </div>

            </div>


        </div>";
                }
            } else {


                echo " <div class='container'>
            <div class='row d-flex align-items-center'>
                <div class='col-6 d-flex align-items-center justify-content-md-center'>
                    <img src='$img' alt='$name  meal' height='300px' width='300px'>
                </div class='col-6 d-flex align-items-center justify-content-md-center'>

                <div class='col-6 justify-content-center align-items-center'>
                    <h1 class='text-center secondary-font' style='font-size:2.5rem;'>$name </h1>
                    <p class='text-center secondary-font' style='font-size:1.5rem;'>$desc</p>
                    <br><br><br>
                    

                </div>

            </div>


        </div>";
            }

            echo "<br><br><br>";
        }


        ?>


    </div>

    <br><br><br><br>

    <?php

    if ($editAndRemove) {
        echo " <form action='processAdd.php' method='POST'>
        <div class='container'>
            <div class='row'>
                <div class='input-group'>
                    <input type='text' name = 'img' class='form-control' value='$result Menu/example.png or .jpg' aria-label='' aria-describedby='basic-addon1'>
                    <div class='input-group-append'>
                        <h1 class='btn btn-primary'>Image Source</h1>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class='row'>
                <div class='input-group'>
                    <input type='text' name = 'name' class='form-control' value='Chicken/Beef-Meal' aria-label='' aria-describedby='basic-addon1'>
                    <div class='input-group-append'>
                        <h1 class='btn btn-primary'>Meal Name</h1>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class='row'>
                <div class='input-group'>
                    <input type='text' name = 'desc' class='form-control' placeholder='very good meal' aria-label='' aria-describedby='basic-addon1'>
                    <div class='input-group-append'>
                        <h1 class='btn btn-primary'>Meal Description</h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div style='margin:auto;width:10%;'><input type='submit' value='Add meal to database' name = 'submit' class='btn btn-primary'></div>


    </form>";
    }
    ?>


    <br><br><br>
    <footer class="footer_section secondary-font">
        <div class="container">
            <div class="row">
                <div class="d-flex col-md-4 footer-col align-items-center justify-content-center">
                    <div class="footer_contact">
                        <h4 class="white">
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="" class="white">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <br>
                            <a href="" class="white">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +966 558520020
                                </span>
                            </a>
                            <br>
                            <a href="" class="white">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    falaraik@gmail.com
                                </span>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-md-4 footer-col align-items-center justify-content-center">
                    <div class="footer_detail">
                        <a href="" class="footer-logo primary-font white" style="font-size: 2.25rem !important;">
                            Fine Cuisines
                        </a>
                        <p>
                            <br>
                            Necessary, making your life easier.
                        </p>

                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_social">
                        <h4 class="white">
                            Socials
                        </h4>
                        <a href="" class="white i-size">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="" class="white i-size">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="" class="white i-size">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="" class="white i-size">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="" class="white i-size">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="footer-info">
                <p>
                    © <span id="displayYear">2021</span> All Rights Reserved By
                    <a href="">Fahad Al-Araik </a><br><br>

                </p>
            </div>
        </div>
    </footer>




</body>




</html>
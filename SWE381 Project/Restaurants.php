<!DOCTYPE html>
<?php
session_start();
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

    <br><br><br><br><br>

                <div class = "col d-flex align-items-center justify-content-center"> <a href="searchRestaurant/index.php" style = "text-align:center;font-size:1.5rem"> Go To Search </a>
            </div>
   



    <br><br><br><br><br><br><br>
    <div class="restaraunts-container">
        <div class="container ">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/mcdonalds.png" alt="Mcdonalds Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">McDonalds</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="McDonalds" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="McDonalds" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>


        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/herfy.png" alt="Herfy Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Herfy</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="Herfy" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="Herfy" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/kfc.png" alt="KFC Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">KFC</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="KFC" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="KFC" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/albaik.svg" alt="AlBaik Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">AlBaik</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="AlBaik" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="AlBaik" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/shawarma-house.png" alt="Shawarma House Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Shawarma House</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="Shawarma-House" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="Shawarma-House" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>


        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/cheesecake.png" alt="Cheese Cake Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Cheese Cake Factory</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="CheeseCake-Factory" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="CheeseCake-Factory" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/CasaPasta.png" alt="Casa Pasta Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Casa Pasta </h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="CasaPasta" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="CasaPasta" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/Kudu.png" alt="Kudu Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Kudu</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="Kudu" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="Kudu" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br><br><br><br><br><br><br>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 d-flex align-items-center justify-content-md-center">
                    <img src="RestarauntsLogo/yummywok.jpg" alt="YummyWok Logo" height="300px" width="300px">
                </div class="col-6 d-flex align-items-center justify-content-md-center">

                <div class="col-6 justify-content-center align-items-center">
                    <h1 class="text-center secondary-font" style="font-size:2.5rem;">Yummy wok</h1>
                    <br><br><br>
                    <div class="row justify-content-center align-items-center  text-center ">
                        <div class="col justify-content-center">
                            <form action="Restaurant.php" method="POST">
                                <input type="submit" name="Yummywok" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Menu">
                            </form>
                        </div>
                        <div class="col justify-content-center align-items-center">
                            <form action="Rating.php" method="POST">
                                <input type="submit" name="Yummywok" class="btn2 white secondary-font font-weight-bold" style="font-size:1.5rem;" value="View Ratings">
                            </form>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <br><br><br></br>
        <div class = "col d-flex align-items-center justify-content-center"> <a href="searchRestaurant/index.php" style = "text-align:center;font-size:1.5rem"> Explore More by going to search </a>
            </div>


    </div>

    <br><br><br><br><br><br><br><br><br>











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





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>
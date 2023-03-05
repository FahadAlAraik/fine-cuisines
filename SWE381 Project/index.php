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
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
    <title>Fine Cuisines</title>
</head>
<body>

<?php

if(isset( $_SESSION["ERROR"])) {
    if( $_SESSION["ERROR"] == "alreadySignedIn")
    {
        echo "<div class='alert alert-success' role='alert'>
        <strong>You're Already Signed In</strong> Whether you want to sign in or register you must logout first !.
    </div>";
    $_SESSION["ERROR"] = "";
    }
}


?>


    <div class = "hero-area">
    
        <div class = "bg-box">

            <img src="bg.jpg" alt="background">

        </div>

        <nav class = "navbar navbar-expand-lg navbar-light bg-light" style = "padding: 25px;" >


        
        <button class = "navbar-light navbar-toggler" data-toggle = "collapse" data-target = "#navbarMenu" >
          <span class = "navbar-toggler-icon" ></span>
        </button>
      
        <div class = "collapse navbar-collapse" id = "navbarMenu">
            
                <a href="#" class = "black navbar-brand" style = "font-size:2rem;font-weight: bold;margin-left:50px !important;" >Fine Cuisines</a>
            
        <ul class = "white navbar-nav mr-auto" style = "margin-left:75px !important;">

            <li class = "secondary-font white nav-item mr-xl-5 "><a href="index.php" class = "secondary-font white nav-link">HOME </a></li>
            <li class = "secondary-font white nav-item mr-xl-5 "><a href="Restaurants.php" class = "secondary-font white nav-link">RESTAURANTS</a></li>
            <li class = "secondary-font white nav-item mr-xl-5 "><a href="#" class = "secondary-font white nav-link">ABOUT US</a></li>

        </ul>
        <?php

        if(isset($_SESSION['fname'])) {
            echo " <a class = 'm-3' href='signout.php' style = 'color:black;'>  <i style = 'font-size:20px ;' class='black far fa-user font-weight-bold'> <span class = 'font-weight-bold secondary-font' style = 'font-family: sans-serif;font-size:20px;margin-right: 50px;'>Log Out</span></i></a>";
        }

        else {
            echo "<a class = 'm-3' href='signin.php' style = 'color:black;'>  <i style = 'font-size:20px ;' class='black far fa-user font-weight-bold'> <span class = 'font-weight-bold secondary-font' style = 'font-family: sans-serif;font-size:20px;margin-right: 50px;'>Sign-in</span></i></a>";
        }

        ?>
        

      </div>
      
    
        </nav>

    
    
        <section class ="landing align-items-center">
            <div class = "container">
                <div class="row">
                    <div class="col-12">

                        <h1 class = "primary-font white" style = "font-size:4rem">You Deserve Better!</h1>
                        <p class = "white font-weight-bold secondary-font">
                            Explore the delicious food from the best restaurants available in<br> your city! with a variety of catagorize 
                            
                            <div class = "btn-box" >

                                <a href="Restaurants.php" class="white btn1 secondary-font">Go to Restaurants</a>

                            </div>
                        </p>
                        
                    </div>
                    
                </div>

            </div>
        </section>

    </div>

   
    
    <section class = "cards">
        
        <div class="container">
            <div class="title text-center">
                <h1 class = "secondary-font" style = "font-size:45px !important;" >Popular Choices</h1>
            </div>

            <div class="row">
                
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/mcdonalds.png" alt="McDonalds Logo Image" class = "img-card-query card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                McDonalds
                            </h5>
                            <p class="card-text">McDonald's is best known for its hamburgers, cheeseburgers and french fries, they feature chicken products, breakfast items, soft drinks, milkshakes, wraps, and desserts.</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "McDonalds" class = "btn2 white" value = "View Menu">
                            </form>
                        </div>
                    </div>
                </div>
            


                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/herfy.png" alt="Herfy Logo Image" class = "img-card-query card-img-top" style = "height:250px;width:250px;margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title">
                                Herfy
                            </h5>
                            <p class="card-text">Herfy has become synonymous with world-class Saudi quality and innovation. It is one of today's leading companies, with a successful reputation built on its restaurant.</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "Herfy" class = "btn2 white" value = "View Menu">
                            </from>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/shawarma-house.png" alt="Shawarma House Logo Image" class = "img-card-query card-img-top" style = "height:250px;width:200px;margin: auto;border-radius: 20px;">
                        <div class="card-body">
                            <h5 class="card-title ">
                                Shawarma House
                            </h5>
                            <p class="card-text text-left">Shawarma House has been recognized for its outstanding Middle Eastern cuisine, excellent service and friendly staff. known for its modern dishes and its quality fresh ingredients</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "Shawarma-House" class = "btn2 white" value = "View Menu">
                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/kfc.png" alt="KFC Logo Image" class = "img-card-query card-img-top" style = "height:250px;width:250px;margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title">
                                Kentucky Fried Chicken
                            </h5>
                            <p class="card-text">KFC is a chain of fast food restaurants known for their fried chicken. It was started by Colonel Sanders in Corbin, Kentucky in 1952. They are now all over the world. They not only sell chicken, but also other food like salads and french fries.</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "KFC" class = "btn2 white" value = "View Menu">
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/albaik.svg" alt="AlBaik Logo Image" class = "img-card-query card-img-top" style = "height:250px;width:250px;margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title">
                                Albaik
                            </h5>
                            <p class="card-text">Albaik is a Saudi fast food restaurant chain headquartered in Jeddah, Hejaz that primarily sells broasted and fried chicken with a variety of sauces. It is Saudi Arabia's largest restaurant chain. Albaik currently has trade name in 80 countries.</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "AlBaik" class = "btn2 white" value = "View Menu">
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="RestarauntsLogo/cheesecake.png" alt="CheeseCake Factory Logo Image" class = "img-card-query card-img-top" style = "height:250px;width:250px;margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title">
                                The Cheesecake Factory
                            </h5>
                            <p class="card-text">founded as a Los Angeles bakery in 1972, The Cheesecake Factory is now an international restaurant chain known for its expansive menu. In addition to having more than 30 flavors of cheesecake, the restaurant also offers breakfast, lunch, and dinner options.</p>
                            <form action="Restaurant.php" method = "POST">  
                                <input type="submit" name = "CheeseCake-Factory" class = "btn2 white" value = "View Menu">
                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <br><br>

            <div class="row">

                <div class="col-12 d-flex justify-content-center">
                    <a href="Restaurants.php" class="btn2 white"> Explore More Restaurants</a>
                </div>


            


            </div>

            <br><br><br><br>


        </div>

        
        
    
    </section>

    

   <section class="search" style = "padding-bottom: 80px;">


        <div class="title text-center">
            <h1 class = "secondary-font white" style = "font-size:45px;margin-top:120px !important;" >Search By Category</h1>
        </div>

        <div class="row flex-center justify-content-center" style = "width:90%;margin:auto;">
            <div class="row   align-items-center">
                <div class="col-sm-6 col-md-4 col-xl mb-5 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-pizza.png" alt="Pizza">
                    <br><br>
                    <div class="yellow card-body">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Pizza</h5>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl mb-5 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-burger.png" alt="Burger">
                    <br><br>
                    <div class="yellow card-body ps-0">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl mb-5 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-noodles.png" alt="Noodles">
                    <br><br>
                    <div class="yellow card-body ps-0">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Pasta</h5>
                    </div>
                </div>
                </div>
            </div>
            <div class="row  align-items-center">
                <div class="col-sm-6 col-md-4 col-xl mb-5 ml-4 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-sub-sandwich.png" alt="Sub Sandwich">
                    <br><br>
                    <div class="yellow card-body ps-0">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Sandwiches</h5>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl mb-5 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-chowmein.png" alt="Chowmein">
                    <br><br>
                    <div class="yellow card-body ps-0">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Chineese Food</h5>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl mb-5 ">
                <div class="search-card card card-span  rounded-circle"><img class="img-fluid rounded-circle " src="Food Images/search-steak.png" alt="steak">
                    <br><br>
                    <div class="yellow card-body ps-0">
                    <h5 class="search-card-font secondary-font white text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>   
   </section>


   <footer class="footer_section secondary-font">
    <div class="container">
      <div class="row">
        <div class="d-flex col-md-4 footer-col align-items-center justify-content-center">
          <div class="footer_contact">
            <h4 class = "white">
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="" class = "white">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <br>
              <a href="" class = "white">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +966 558520020
                </span>
              </a>
              <br>
              <a href="" class = "white">
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
            <a href="" class="footer-logo primary-font white" style = "font-size: 2.25rem !important;">
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
                <h4 class = "white">
                    Socials
                </h4>
                <a href="" class = "white i-size">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="" class = "white i-size">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="" class = "white i-size">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="" class = "white i-size">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="" class = "white i-size">
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
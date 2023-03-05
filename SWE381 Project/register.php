<?php
session_start();
if(isset($_SESSION['fname'])) {
  $_SESSION["ERROR"] = "alreadySignedIn";
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
    

    

    <!-- Bootstrap core CSS -->
<!-- <link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">  -->

    <!-- Favicons -->

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <h1 style = "position:absolute;left:2.5%;top:2.5%;font-weight: bold;font-size: 3rem;text-align:center;text-decoration:none;"><a  href="index.php"><i class="fas fa-arrow-left" style = "color:#007bff !important;"></i></a></h1>


<main class="form-signin">
  <form action = "handle.php" method ="POST">
    <h1 style = "font-family: 'Dancing Script', cursive !important;font-weight:bold;">Fine Cuisines</h1>
    <br><br>
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>
    <br>
    <div class="form-floating">
        
        <label for="floatingInput">First Name</label>
        <input type="text" name = "fname" class="form-control" id="floatingInput" placeholder="Fahad" required>
      
    </div>
    <br>
    <div class="form-floating">
        
        <label for="floatingInput">Last Name</label>
        <input type="text" name = "lname" class="form-control" id="floatingInput" placeholder="AlAraik" required>
      
    </div>
    <br>
    <div class="form-floating">
        
        <label for="floatingInput">Email address</label>
        <input type="email" name = "email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      
    </div>
    <br>
    <div class="form-floating">
        
        <label for="floatingPassword">Password</label>
        <input type="text" name = "password" class="form-control" id="floatingPassword" placeholder="Password" required>
      
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <div class = "form-floating">
      <p><a href="registerAdmin.php">registering as an admin ? click here</a></p>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>

      <input type="hidden" name="register">

      <?php

  if(isset($_SESSION["ERROR"])){
  if ($_SESSION["ERROR"] === "emailUsed") {
    echo "<div class='alert alert-danger' role='alert'>
  <strong>Something Went Wrong</strong> <br> This Email already exist
  </div>";
    $_SESSION["ERROR"] = "";
  }

}



?>


  </form>
</main>


    
  </body>
</html>

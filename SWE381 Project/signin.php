
<!doctype html>
<?php

session_start();
if(isset($_SESSION['fname'])) {
  $_SESSION["ERROR"] = "alreadySignedIn";
  header("location:index.php");
}
?>

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

      a:hover {
        text-decoration: none;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="">
      
  <h1 style = "position:absolute;left:2.5%;top:2.5%;font-weight: bold;font-size: 3rem;text-align:center;text-decoration:none;"><a  href="index.php"><i class="fas fa-arrow-left" style = "color:#007bff !important;"></i></a></h1>


<main class="form-signin text-center">
  
  <form action = "handle.php" method ="POST">
    <h1 style = "font-family: 'Dancing Script', cursive !important;font-weight:bold;">Fine Cuisines</h1>
    <br><br>
    <h1 class="h3 mb-3" style = "font-family: 'Poppins', sans-serif !important;font-weight: bold;font-size: 1.5rem;">Please sign in</h1>
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

    <br><br>
    <div class = "form-floating">
      <p><a href="register.php">dont have an account? register</a></p>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>

      <input type="hidden" name="login">


      <?php

      
  
  if(isset($_SESSION["ERROR"])){

    if($_SESSION["ERROR"] === "wrongCredintials"){
  echo "<div class='alert alert-danger' role='alert'>
    <strong>Something Went Wrong</strong> <br> The Account Email or Password you've entered is incorrect.
  </div>";
      $_SESSION["ERROR"] = "";
    }

  }

   if(isset($_SESSION['register'])) {

    if($_SESSION['register'] === "registered") {
      echo "<div class='alert alert-success' role='alert'>
      <strong>Register Completed!</strong><br> Now Sign in.
  </div>";
      $_SESSION['register'] = "";
    }

    
  }

  if(isset($_SESSION['loggedOut'])) {
    if($_SESSION['loggedOut'] === "yes") {
      echo "<div class='alert alert-success' role='alert'>
      <strong>You've Logged Out Successfully!</strong>.
  </div>";
      $_SESSION['loggedOut'] = "";
    }
  }

?>



  </form>
</main>


  

    
  </body>
</html>

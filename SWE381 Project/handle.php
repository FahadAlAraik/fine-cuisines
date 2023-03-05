



<?php

session_start();

$type  = "error";

if (isset($_POST['login']))
    $type  = "login";

else if (isset($_POST['register']))
    $type  = "register";

else if (isset($_POST['registerAdmin']))
    $type = "registerAdmin";

else if (isset($_POST['registerAdminNew']))
    $type = "registerAdminNew";




$con = mysqli_connect('localhost', 'root', '', 'mydb');

if (!$con)
    die("<h1> Something Went Wrong </h1>");

else {

    if ($type == "login") {

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = "";
        $admin = 0;
        $restaurant = "";
        $lname = "";

        $query = "SELECT email,password,firstName,lastName,admin,restaurant FROM users WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 0) {
            $_SESSION["ERROR"] = "wrongCredintials";
            header("location:signin.php");
        } else {
            while ($row = mysqli_fetch_row($result)) {

                foreach ($row as $key => $value) {

                    if ($key == 2)
                        $fname = $value;

                    else if ($key == 3)
                        $lname = $value;

                    else if ($key == 4)
                        $admin = $value;

                    $restaurant = $value;
                }
            }

            $_SESSION["fname"] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['admin'] = $admin;
            $_SESSION['restaurant'] = $restaurant;

            header("location: index.php");
        }
    } else if ($type == "register") {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = $_POST["fname"];
        $lname = $_POST['lname'];

        $query = "SELECT email FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION["ERROR"] = "emailUsed";
            header("location:register.php");
        } else {
            $query = "INSERT INTO users (firstName, lastName, email, password, admin, restaurant) VALUES ('$fname', '$lname', '$email', '$pass', 0 , 0)";
            $result = mysqli_query($con, $query);
            if ($result) {
                $_SESSION['register'] = "registered";
                header("location: signin.php");
            } else

                $_SESSION['register'] = "notRegistered";
        }
    } else if ($type == "registerAdmin") {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = $_POST["fname"];
        $lname = $_POST['lname'];
        $select = $_POST['selection'];

        $query = "SELECT email FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION["ERROR"] = "emailUsed";
            header("location:registerAdmin.php");
        }

        $query = "SELECT restaurant FROM users WHERE restaurant = '$select'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION["ERROR"] = "restaurantUsed";
            header("location:registerAdmin.php");
        } else {
            $query = "INSERT INTO users (firstName, lastName, email, password, admin, restaurant) VALUES ('$fname', '$lname', '$email', '$pass', 1 , '$select')";
            $result = mysqli_query($con, $query);

            if ($result) {
                $_SESSION['register'] = "registered";
                header("location: signin.php");
            } else

                echo "something went wrong";
        }
    } else if ($type == "registerAdminNew") {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = $_POST["fname"];
        $lname = $_POST['lname'];
        $restuName = $_POST['restuName'];
        $restuLocation = $_POST['restuLocation'];
        $restuSpecialty = $_POST['restuSpecialty'];


        $query = "SELECT email FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION["ERROR"] = "emailUsed";
            header("location:registerAdmin.php");
        }

        $query = "SELECT restaurant FROM users WHERE restaurant = '$restuName'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION["ERROR"] = "restaurantUsed";
            header("location:registerAdmin.php");
        } else {
            $query = "INSERT INTO users (firstName, lastName, email, password, admin, restaurant) VALUES ('$fname', '$lname', '$email', '$pass', 1 , '$restuName')";
            $result = mysqli_query($con, $query);
            $newTableName = str_replace(' ', '', strtolower($restuName) . "menu");
            echo $newTableName;
            $CreateMenu = "CREATE TABLE $newTableName (imgSource varchar(128), name varchar(128) , description varchar(128), PRIMARY KEY(name))";
            $addToSearchQuery = "INSERT INTO search (`restaurant`, `specialty`, `location`, `rating`) VALUES ('$restuName','$restuSpecialty','$restuLocation',0)";
            $test = mysqli_query($con, $CreateMenu);
            $result = mysqli_query($con, $addToSearchQuery);

          


                if ($result) {
                    $_SESSION['register'] = "registered";
                    header("location: signin.php");
                } else

                    echo "something went wrong";
        }
    }
}





























?>



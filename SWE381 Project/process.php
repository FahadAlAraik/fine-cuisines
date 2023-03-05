
<!DOCTYPE html>
<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'mydb');

$edit = "";
$query = "";
$key = "";
$table = "";
$val = "";
foreach ($_GET as $k => $value) {
    $key = $k;
    $val = $value;
}





if ($con) {
    if (isset($_GET[$key])) {
        $table = $_SESSION['admin-db'];
        if ($val == "remove") {
            
            
            $query = "DELETE FROM $table WHERE name = '$key'";
            if (mysqli_query($con, $query)) {
                echo "<h1> REMOVED</h1>  <br> <a href = 'index.php'>GO BACK</a>";
            }
        }

        else if($val == "edit") {
            echo $key . "<br>"; //$key = name
            $_SESSION['edit'] = "true";
            $_SESSION['mealName'] = $key;
            $_SESSION['mealDescription'] = mysqli_query($con, "SELECT description,imgSource FROM $table WHERE name = '$key'");
            while($row = mysqli_fetch_array($_SESSION['mealDescription'])) {
                $_SESSION['img'] = $row['imgSource'];
                $_SESSION['mealDescription'] = $row['description'];
                break;
            }
            echo $_SESSION['mealDescription']; //$_SESSION['mealDescription'] = description in dataBase
            $edit = true;
        }
    }
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
<body>

        <?php

        if($edit)
        {
            echo " <form action='processAdd.php' method='POST'>
            <div class='container'>
                <div class='row'>
                    <div class='input-group'>
                        <input type='text' name = 'img' class='form-control' value='$_SESSION[img]' aria-label='' aria-describedby='basic-addon1'>
                        <div class='input-group-append'>
                            <h1 class='btn btn-primary'>Image Source</h1>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class='row'>
                    <div class='input-group'>
                        <input type='text' name = 'name' class='form-control' value='$_SESSION[mealName]' aria-label='' aria-describedby='basic-addon1'>
                        <div class='input-group-append'>
                            <h1 class='btn btn-primary'>Meal Name</h1>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class='row'>
                    <div class='input-group'>
                        <input type='text' name = 'desc' class='form-control' value='$_SESSION[mealDescription]' aria-label='' aria-describedby='basic-addon1'>
                        <div class='input-group-append'>
                            <h1 class='btn btn-primary'>Meal Description</h1>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div style='margin:auto;width:10%;'><input type='submit' name='edit' value = 'edit' class='btn btn-info'></div>
    
    
        </form>";
        }


        
        ?>


</body>
</html>
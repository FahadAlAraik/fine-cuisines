


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Star rating</title>
	<link rel="stylesheet" href="styleee.css">
    <script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
</head>

<body>
<h1 style = "position:absolute;left:2.5%;top:2.5%;font-weight: bold;font-size: 3rem;text-align:center;text-decoration:none;"><a  href="index.php"><i class="fas fa-arrow-left" style = "color:#007bff !important;"></i></a></h1>
<?php

session_start();
$con = mysqli_connect('localhost','root','','mydb');
$restaurant = $_SESSION['restaurant-rate'];
$query = "SELECT * FROM ratings WHERE restaurant = '$restaurant'";


$result = mysqli_query($con,$query);
    echo "
    <br><br><br>
    <div class = 'col-md-12'>
            <div class = 'card mt-4'>
                    <div class = 'card-body'>        
                            <h1 style = 'text-align:center;'> Ratings </h1>  
                            <br><br>
                            <table class = 'table table-bordered'> 
                            <tr>
                            <th> Restaurant Name </th> <th>First Name</th> <th> Last Name </th> <th>Rating</th> <th>Rating Stars</th>
                            </tr>
                            ";
while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        
        if($key == 4) {
            echo "<td>";
            for($i = 0; $i < $value; $i++) {
               echo "<div class = 'rating'>
               <label  class='full' title='Awesome'></label>
               </div>";
                
            }
            echo "</td>";
            break;
        }
        
        echo   "<td class='text-center'>" . $value . "</td>";
    }
    echo"</tr>";
   
}


echo "</table>

    </div><br>
    <h1 style = 'text-align:center;'> all rating have been displayed</h1><br>
    <a href = 'rate.php' style='text-decoration:none;text-align:center;'> Want to Rate? </a>
    </div>
    </div>
    ";


?>

	<script src="star-ratings.js"></script>
</body>

</html>
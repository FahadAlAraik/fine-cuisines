<?php

require_once('DB.php');
$db = new DB();
$data = $db->viewData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0d2f6692a7.js" crossorigin="anonymous"></script>
    <title>search</title>
    
</head>
<body>
<h1 style = "position:absolute;left:2.5%;top:2.5%;font-weight: bold;font-size: 3rem;text-align:center;text-decoration:none;"><a  href="../index.php"><i class="fas fa-arrow-left" style = "color:#007bff !important;"></i></a></h1>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name = "ser" value ="<?php if(isset($_POST['ser'])){echo $_POST['ser']; } ?>"required
                     class="form-control" placeholder="search here..."id="searchBox" oninput=search(this.value) aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    <ul id="dataList" style = "list-style:none;padding:15px;font-size:1.25rem;text-align:center">
        <?php foreach($data as $i){ ?>
        <li style = "list-style:none;margin:10px;"><?php echo $i["restaurant"]; ?></li>
        <?php }?>
    </ul>
    <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Restaurant</th>
                                    <th>Specialty</th>
                                    <th>Location</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","mydb");
                                
                                    if(isset($_POST['ser']))
                                    {
                                        $filtervalues = $_POST['ser'];
                                        $query = "SELECT * FROM search WHERE CONCAT(restaurant,specialty,location,rating) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        if($query_run ){
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                   
                                                    <td> <?php $name = $items['restaurant'];
                                                    echo"<a href = '../Restaurant.php?name=$name'> $name</a></td>"?>
                                                    <td><?= $items['specialty']; ?></td>
                                                    <td><?= $items['location']; ?></td>
                                                    <td> <?php $rate = $items['rating'];
                                                    echo"<a href = '../Rating.php?name=$name'> $rate</a></td>"?>                                                  
                                                </tr>
                                                <?php
                                            }
                                        }
                                    }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Restaurant Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
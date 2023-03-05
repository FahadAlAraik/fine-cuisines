<!DOCTYPE html>
<?php

session_start();

if(!isset($_SESSION['fname']))
header("location:signin.php");


?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Star rating</title>
	<link rel="stylesheet" href="stylee.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<style>







	</style>
</head>

<body>
	<div class="container">

		<div class="rating-wrap">
			<h2>Rate Restaraunt</h2>

			<div class="center">
				<form action="processRating.php" method="POST">
					<fieldset class="rating">
						<input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full" title="Awesome"></label>
						
						<input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="full"></label>
						
						<input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="full"></label>
						
						<input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="full"></label>
						
						<input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="full"></label>
						
					</fieldset>
					
					<input type="textarea" name="textarea" style="border: 1px solid #a9a9a9;border-radius:5px;margin:20px 0;min-height: 100px;padding:10px;">
					<input type="submit" class="btn btn-primary">
				</form>
			</div>


		</div>
	</div>

	

	<script src="star-ratings.js"></script>
</body>

</html>
<?php
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['loggedOut'] = "yes";
header("location:signin.php");



?>
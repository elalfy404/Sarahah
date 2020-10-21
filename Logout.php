<?php

session_start();
session_destroy();
//header('Location:http://localhost/login.php');
$link = $_SERVER['HTTP_HOST'];
//header("Location:http://$link/login.php");
?>
<?php include_once ('views/Logout.view.php')?>
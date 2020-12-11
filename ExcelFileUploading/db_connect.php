<?php
	$dbHost = "localhost";
	$dbDatabase = "h_php";
	$dbPasswrod = "";
	$dbUser = "root";
    $mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
    if(!$mysqli){
        die(mysqli_error($mysqli));
    }
?>
<?php
//connect mysql database
$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "Birhan_Solutions";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

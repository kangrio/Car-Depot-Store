<?php

$host = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
$conn -> set_charset("utf8");

if (mysqli_connect_errno()) {
    
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();

}

?>
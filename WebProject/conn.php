<?php



$host = "localhost";
$email = "root";
$password = "mysql123";
$database = "rent_a_car";

$con = mysqli_connect($host, $email, $password, $database);

if(!$con){
    die("can't connection to database".mysqli_connect_error());
}


?>
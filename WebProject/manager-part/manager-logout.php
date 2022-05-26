<?php 
include('../conn.php');
session_start();
$_SESSION=[];
session_unset();
header('location: manager-login.php')


?>
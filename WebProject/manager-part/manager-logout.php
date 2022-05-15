<?php 
include('../conn.php');
session_start();
$_SESSION=[];
session_unset();
session_destroy();
header('location: manager-login.php')


?>
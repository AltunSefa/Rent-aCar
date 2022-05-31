<?php 
include('../conn.php');
if(isset($_GET)){
    $carId=$_GET['carId'];
    $sql = "UPDATE car_info SET car_status='1' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.location.href='manager-car-repair.php';</script>";
    } else {
    echo "<script> alert('you could not change car Name') </script>";
    echo "<script type='text/javascript'>window.location.href='manager-car-repair.php';</script>";

    }
}


?>
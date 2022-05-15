<?php 
include('conn.php');
if(isset($_GET)){
    $bookingId=$_GET['bookId'];
    $sorgu="DELETE FROM booking where bookingId='$bookingId'";
    if ($con->query($sorgu) === TRUE) {
              
    } else {
      echo "<script> alert('you could not delete booking') </script>";
    }
    echo "<script type='text/javascript'>window.location.href='account.php';</script>";
}



?>
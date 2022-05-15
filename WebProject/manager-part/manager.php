<?php 
session_start();
include('../conn.php');
if(!empty($_SESSION["email"])){

}else{
  header('location: manager-login.php');
}
$users=mysqli_query($con,"select count(bookingId) as totalBooking from booking");
$bookings=mysqli_query($con,"select count(bookingId) as totalBooking from booking");
$totalBooking=mysqli_fetch_assoc($users);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager.css" />
  </head>
  <body>
    <header id="header">
      <div class="header">
        <div class="container">
          <div class="header-navbar">
            <div class="header-logo">
              <img src="../images/logo.png" alt="logo" id="pnglogo" />
              <div class="header-logo-text">
                <h2>Gold Rent a Car</h2>
              </div>
            </div>
            <div class="header-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="manager-cars.php">Cars</a></li>
                <li><a href="manager-bookings.php">Bookings</a></li>
                <li><a href="manager-add-car.php">Add Car</a></li>
                <li><a href="manager-user.php">Users</a></li>
                <li><a href="manager-faq.php">Edit Faqs</a></li>
                <li><a href="manager-login.php">Login</a></li>
                <li><a href="manager-account.php">Profile</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="box">
              <h1>Total User</h1>
              <h5><?php 
              $users=mysqli_query($con,"select * from user_info");
              echo mysqli_num_rows($users);
               
                ?></h5>
            </div>
            <div class="box">
              <h1>Total Car</h1>
              <h5><?php 
              $cars=mysqli_query($con,"select * from car_info");
              echo mysqli_num_rows($cars);
               
                ?></h5>
            </div>
            <div class="box">
              <h1>Total Booking</h1>
              <h5><?php 
              $bookings=mysqli_query($con,"select * from booking");
              echo mysqli_num_rows($bookings);
               
                ?></h5>
            </div>
          </div>
          
          
            
          </div>
          </div>
        
      </div>
    </header>

    <!-- Header Finish -->
  </body>
</html>

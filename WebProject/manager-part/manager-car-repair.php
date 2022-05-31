<?php 
include('../conn.php');
session_start();
  
  if(!empty($_SESSION["email"])){

  }else{
    echo "<script type='text/javascript'>window.location.href='manager-login.php';</script>";
  }
  
  $cars=mysqli_query($con,"SELECT * FROM car_info where car_status=0 ");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-booking.css" />
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
                <li><a href="manager.php">Home</a></li>
                <li><a href="manager-cars.php">Cars</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="manager-add-car.php">Add Car</a></li>
                <li><a href="manager-user.php">Users</a></li>
                <li><a href="manager-faq.php">Edit Faqs</a></li>
                <li><a href="manager-login.php">Login</a></li>
                <li><a href="manager-account.php">Profile</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Header Finish -->

    <!-- booking -->
    <section>
      <div class="bookingname">
        <h1>Repair</h1>
      </div>
    
      <div class="tablo" style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Car Name</th>
            <th>car_info</th>
            <th>repair</th>



          </tr>
        </thead>
        <tbody>
          <?php
       
          
          while($car=mysqli_fetch_assoc($cars)){ ?>
          <tr>
            <td><?php echo $car['carName'] ?></td>
            <td> <a href="manager-edit.php?carId=<?php echo $car['carId'] ?>" class="btn">Show Car Details</a></td>
            <td><a href="repair.php?carId=<?php echo $car['carId'] ?>" class="btn">Repair</a></td>
            
          </tr>
          <?php }   ?>
        </tbody>


      </table>
      </div>


    </section>
    
  </body>
</html>

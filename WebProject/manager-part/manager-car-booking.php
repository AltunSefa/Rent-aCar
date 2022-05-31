<?php 
include('../conn.php');
session_start();
  
  if(!empty($_SESSION["email"])){

  }else{
    echo "<script type='text/javascript'>window.location.href='manager-login.php';</script>";
  }
  $carId=$_GET['carId'];
  $result=mysqli_query($con,"select * from booking b inner join car_info c on b.carId = c.carId inner join user_info u on u.userId = b.userId where b.carId='$carId'");

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
        
        <h1> This Car Bookings</h1>
      </div>
      <div class="tablo" style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Car Name</th>
            <th>Booking Date</th>
            <th>Purchase Date</th>
            <th>Return Date</th>
            <th>Booking Price</th>
            <th>User Name</th>
            <th>user_info</th>



          </tr>
        </thead>
        <tbody>
          <?php while($book=mysqli_fetch_assoc($result)){ ?>
          <tr>
           <td><?php echo $book['carName'] ?></td>
            <td><?php echo $book['bookingDate'] ?></td>
            <td><?php echo $book['purchaseDate'] ?></td>
            <td><?php echo $book['returnDate'] ?></td>
            <td><?php echo $book['amount'] ?></td>
            <td><?php echo $book['userName'] ?></td>
            <td><a href="manager-user-info.php?userId=<?php echo $book['userId'] ?>" class="btn">Show User Details</a></td>
            
          </tr>
          <?php } ?>
        </tbody>


      </table>
      </div>


    </section>
    
  </body>
</html>

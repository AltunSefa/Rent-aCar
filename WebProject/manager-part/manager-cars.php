<?php 
 include('../conn.php');
 $result=mysqli_query($con,"SELECT * FROM car_info ");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-cars.css" />
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
                <li><a href="#">Cars</a></li>
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

    <!-- cars -->
    <section class="car-menu" id="car-menu">
      <h1 class="car-type-heading">Cars</h1>

      <div class="car-menu-container">
      <?php 
          while($car=mysqli_fetch_assoc($result)){
            
              
           
          
        ?>
        <div class="car-box">
          <img src="../images/<?php echo $car['carImg'] ?>" alt="" />
          <h2><?php echo $car['carName'] ?></h2>
          <h3><?php 
          $carsType=$car['carTypeId'];
          $resultT=mysqli_query($con,"SELECT * FROM carType where typeId='$carsType'"); 
          $rowT = mysqli_fetch_assoc($resultT);
          echo $rowT['type'];

          ?></h3>
          <h5><?php 
          $carsSegment=$car['carSegmentId'];
          $resultS=mysqli_query($con,"SELECT * FROM carSegment where segmentId='$carsSegment'"); 
          $rowS = mysqli_fetch_assoc($resultS);
          echo $rowS['segment'];

          ?></h5>
          <div class="price">$<?php echo $car['price'] ?></div>
          <a href="manager-edit.php?carId=<?php echo $car['carId'] ?>" class="btn">Edit</a>
        </div>
        <?php } 

          
        ?>

      </div>
    </section>
  </body>
</html>

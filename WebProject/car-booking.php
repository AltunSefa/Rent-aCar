<?php 
 session_start();
 include('conn.php');

 

 
 $result=mysqli_query($con,"SELECT * FROM car_info ");
 $branchs=mysqli_query($con,"SELECT * FROM carbranch ");
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="user-css/car-booking.css" />
  </head>
  <body>
    <!-- Header start -->
    <header id="header">
      <div class="header">
        <div class="container">
          <div class="header-navbar">
            <div class="header-logo">
              <img src="images/logo.png" alt="logo" id="pnglogo" />
              <div class="header-logo-text">
                <h2>Gold Rent a Car</h2>
              </div>
            </div>
            <div class="header-menu">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Booking Car</a></li>
                <li><a href="account.php#contact">Contact</a></li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">
                      Cars
                      <img src="images/drop.png" alt="">
                    </button>
                    <div class="dropdown-content">
                      <a href="all-car.php#blogs-car-type">Car Type</a>
                      <a href="all-car.php#segments-car-type">Car Segment</a>
                      <a href="all-car.php#car-menu">All Car</a>
                    </div>
                  </div>
                </li>
                <li><a href="faqs.php">FAQ</a></li>
                <li><a href="login.php">Login</a></li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">
                      Profile
                      <img src="images/drop.png" alt="">
                    </button>
                    <div class="dropdown-content">
                      <a href="account.php#information">Your Information</a>
                      <a href="account.php#change-password">Change Password</a>
                      <a href="account.php#my-rentals">My Rentals</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </header>
    <!-- header finish -->
    <section class="car-menu" id="car-menu">
      <h1 class="car-type-heading">Cars</h1>

      <div class="selectCar">

        <form action="" method="post">
          <select name="SelectBranch" required class="select">
          <option value="" disabled selected>Select branch</option>
          <?php 
          
            while($branch=mysqli_fetch_assoc($branchs)){
          ?>
      
          <option value="<?php echo $branch['branch'];?>"><?php echo $branch['branch'];?></option>
          <?php } ?>
          <input type="date" class="select" name="purchaseDate" required min="<?php echo date("Y-m-d");?> " />
          <input type="date"class="select" name="returnDate" required min="<?php echo date("Y-m-d");?>" />
      
          <button type="submit" class="btn" name="show">show</button>

        </form>
      
      </div>

      <div class="car-menu-container">
        
        <?php 
    
    if(isset($_POST['show'])){
      $_SESSION['SelectBranch']=$_POST['SelectBranch'];
      $_SESSION['purchaseDate']=$_POST['purchaseDate'];
      $_SESSION['returnDate']=$_POST['returnDate'];
      $branchName=$_POST['SelectBranch'];
      $purchaseDate=$_POST['purchaseDate'];
      $returnDate=$_POST['returnDate'];

      $invalidCar=mysqli_query($con,"SELECT * FROM car_info c inner join carbranch cb on cb.branchdId=c.branchdId  WHERE c.carId not in (SELECT cc.carId FROM  booking cc  inner join car_info  on car_info.carId = cc.carId AND  '$purchaseDate' BETWEEN cc.purchaseDate AND cc.returnDate
      OR '$returnDate' BETWEEN cc.purchaseDate AND cc.returnDate or purchaseDate > '$purchaseDate' and returnDate < '$returnDate') AND cb.branch LIKE '%".$branchName."%' ");
      
        

        while($car=mysqli_fetch_assoc($invalidCar)){
          
          
    
         
        ?>
        <div class="car-box">
          <img src="images/<?php echo $car['carImg'] ?>" alt="" />
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
          <h5><?php echo $car['branchdId'] ?></h5>
          <div class="price">$<?php echo $car['price'] ?></div>

          
          <a href="<?php   if($_GET){
              $bokingId=$_GET['bookId'];
              $_SESSION['bookId']=$bokingId;
              echo 'updateBooking.php?carId='.$car['carId'];
                }else{
                  echo 'booking.php?carId='.$car['carId'];
                } ?>" class="btn" >Booking</a>
          
        </div>
        <?php } }?>

      
      </div>
    </section>
  

    <!-- Footer Start -->
    <footer class="footer-part" id="footer">
      <div class="footer-left">
        <h3>Gold Rent a Car</h3>

        <p class="footer-links">
          <a href="#">Home</a>
          |
          <a href="#about">About</a>
          |
          <a href="#footer">Contact</a>
        </p>

        <p class="footer-company-name">
          ©<strong> Gold Rent a Car </strong>All Rights Reserved. Designed by
          <strong>Sefa ALTUN</strong>
        </p>
      </div>

      <div class="footer-center">
        <div>
          <img src="images/location.png" alt="" />
          <p>Akdeniz University</p>
        </div>

        <div>
          <img src="images/phone-call.png" alt="" />
          <p>05546568446</p>
        </div>
        <div>
          <img src="images/email2.png" alt="" />
          <p><a href="#">xyz@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          <strong>Gold Rent a Car</strong> Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Autem, maiores?
        </p>
        <div class="footer-img">
          <a href="#"><img src="images/twitter.png" alt=""></i></a>
          <a href="#"><img src="images/instagram.png" alt=""></i></a>
          <a href="#"><img src="images/facebook.png" alt=""></i></a>
         
        </div>
      </div>
    </footer>

    <!-- Footer Finish -->
  </body>
</html>


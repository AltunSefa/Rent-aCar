<?php 
include('conn.php');
session_start();
if(!empty($_SESSION["email"])){
    
}else{
  
  echo "<script type='text/javascript'>window.location.href='login.php';</script>";
}
$carId=$_GET['carId'];
$result=mysqli_query($con,"SELECT * FROM car_info where carId=$carId ");
$car=mysqli_fetch_assoc($result);
$purchaseDate=$_SESSION['purchaseDate'];
$returnDate = $_SESSION['returnDate'];



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="user-css/booking.css" />
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
                <li><a href="car-booking.php">Booking Car</a></li>
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

    <!-- Header Finish -->
    <div class="detail">
      <div class="detail-container anime-top">
        <div class="content">
          <h1 class="carname"><?php echo $car['carName'] ?></h1>

          <div class="detail-row">
            <div class="car-photo">
              <img src="images/<?php echo $car['carImg'] ?>" alt="" />
            </div>

            <div class="car-desc">
              <h4 class="pri">$<?php echo $car['price']; ?>/Day</h4>

              <div class="car-p">
                <p>
                  <?php echo $car['carDsc'] ?>
                </p>
              </div>
              <div class="car-warning">
                <div class="warning-cars">
                  <img src="images/driver-license.png" alt="" />
                  <h5><?php 
                  $lisenceId=$car['lisenceId'];
                  $resultLicence=mysqli_query($con,"SELECT * FROM  carlisence where lisenceId=$lisenceId ");
                  $licence=mysqli_fetch_assoc($resultLicence);
                  echo $licence['lisence'];

                  
                  ?></h5>
                </div>
                <div class="warning-cars">
                  <img src="images/gear-shift.png" alt="" />
                  <h5><?php 
                  $gearId=$car['gearId'];
                  $resultGear=mysqli_query($con,"SELECT * FROM  cargear where gearId=$gearId ");
                  $gear=mysqli_fetch_assoc($resultGear);
                  echo $gear['gear'];

                  
                  ?></h5>
                </div>
                <div class="warning-cars">
                  <img src="images/gas-station.png" alt="" />
                  <h5><?php 
                  $fuelId=$car['fuelId'];
                  $resultFuel=mysqli_query($con,"SELECT * FROM  carfuel where fuelId=$gearId ");
                  $fuel=mysqli_fetch_assoc($resultFuel);
                  echo $fuel['fuel'];

                  
                  ?></h5>
                </div>
                <div class="warning-cars">
                  <img src="images/group.png" alt="" />
                  <h5><?php 
                  $passengerId=$car['passengerId'];
                  $resultPassenger=mysqli_query($con,"SELECT * FROM  carpassenger where passengerId=$passengerId ");
                  $passenger=mysqli_fetch_assoc($resultPassenger);
                  echo $passenger['passenger'];

                  
                  ?></h5>
                </div>
              </div>
            </div>
          </div>
          
          <div class="detail-row">
            <div class="detail-row-content">
              <div class="text-h6"><h6>Credit Card Information</h6></div>
              
              <div class="credit-card">
                <form action="" method="post">
                <div class="namesurname">
                  <input type="text" placeholder="Name Surname" required name="name-surname"/>
                </div>
                <div class="credit-card-number">
                  <input type="text" placeholder="Credit Card Number" required name="card-number"/>
                </div>
                <div class="year">
                  <input type="number" placeholder="Year" required name="year"/>
                </div>
                <div class="ccv">
                  <input type="number" placeholder="CCV" required name="ccv"/>
                </div>
                <div class="submit-booking">
                
                  <input type="submit" value="Booking" required name="booking"/>
                 
                </div>
               </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="user-js/booking.js"></script>
  </body>
</html>
<?php


if(isset($_POST['booking'])){
  


  $email = $_SESSION["email"];
  $result=mysqli_query($con,"SELECT * FROM user_info Where eMail = '$email' ");
  $user = mysqli_fetch_assoc($result);
  $userId=$user['userId'];
  $nameSurname=$_POST['name-surname'];
  $cardNo=$_POST['card-number'];
  $year=$_POST['year'];
  $ccv=$_POST['ccv'];
  $resultPayment=mysqli_query($con,"SELECT * FROM payment where userId= '$userId'  and `Credit-Card-No`= '$cardNo'");
  if  (mysqli_num_rows($resultPayment) <=0 ) {

    

  
    $sql = "INSERT INTO payment (userId, Name_Surname, `Credit-Card-No`,`Year`,ccv)
    VALUES ('$userId', '$nameSurname','$cardNo','$year','$ccv')";
    if ($con->query($sql) === TRUE) {
      echo  "<script> alert('payment');</script>";

    } else {
      echo "<script> alert('you could not register') </script>";
    }

  } 

 
  $bookingDate=date("Y-m-d");
  
  $resultPayment=mysqli_query($con,"SELECT * FROM payment where userId= '$userId' and `Credit-Card-No`= '$cardNo' ");
  
  if  (mysqli_num_rows($resultPayment) ===1 ) {
    $payments = mysqli_fetch_assoc($resultPayment);
    $paymentId = $payments['paymentId'];
    
    $email = $_SESSION["email"];
    $result=mysqli_query($con,"SELECT * FROM user_info Where eMail = '$email' ");
    $user = mysqli_fetch_assoc($result);
    $userId=$user['userId'];
    $dateDifference = date_diff(date_create($purchaseDate), date_create($returnDate));
    $price=$car['price'];
    $amount=$dateDifference->d* $price;
   
    $bookId=$_SESSION['bookId'];
    $updateBooking = ( "UPDATE booking SET  paymentId='$paymentId', carId='$carId',bookingDate='$bookingDate', purchaseDate='$purchaseDate', returnDate='$returnDate', amount='$amount' where bookingId='$bookId' ");
    
    if ($con->query($updateBooking) === TRUE) {
        echo  "<script> alert('booking yapıldı');</script>";
    } else {
        echo "<script> alert('you could not change BOOKİNG') </script>";
    }
    

    $con->close();
    

  }

  

  

  

  



}
  
?>
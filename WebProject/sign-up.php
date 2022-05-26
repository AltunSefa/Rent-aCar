<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="user-css/login.css" />
    
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
                    <a href="account.php#my-current-rentals">My Current Rentals</a>
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

    <div class="sign-up">
      <div class="card">
        <h3>Sign Up</h3>
        <form action="sign-up.php" method="post">
        
         <div class="form-group">
          <img src="images/user.png" alt="" />
          <label for="name">Username</label>
          <input type="text" required name="username" />
         </div>
         <div class="form-group">
          <img src="images/email.png" alt="" />
          <label for="name">Email</label>
          <input type="email" required name="email" />
         </div>
         <div class="form-group">
          <img src="images/phone-2.png" alt="" />
          <label for="name">Phone Number</label>
          <input type="text" required  name="phoneNumber" />
         </div>
         <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Password</label>
          <input type="password" required  name="password" />
         </div>
         <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Confirm Password</label>
          <input type="password" required name="password2" />
         </div>
         <button class="btn" type="submit">Sign Up</button>
        </form>
        
        <a href="login.php" class="ahref">Already have an account? Login</a>
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
  </body>
</html>

<?php 

include("conn.php");

if(isset($_POST["username"],$_POST["email"],$_POST["phoneNumber"],$_POST["password"],$_POST["password2"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $date = date("Y-m-d");

  

  if($password == $password2){
    
    $password=md5($password);

    $sql = "INSERT INTO user_info (userName, eMail, phoneNumber,`password`,`date`)
    VALUES ('$username', '$email','$phoneNumber','$password','$date')";


    if ($con->query($sql) === TRUE) {
      echo  "<script> alert('you registered');</script>";
      echo "<script type='text/javascript'>window.location.href='login.php';</script>";

    } else {
      echo "<script> alert('you could not register') </script>";
    }
    
    $con->close();
    

  }else{
    echo "<script> alert('your passwords are not the same') </script>";
  }
 
}



?>
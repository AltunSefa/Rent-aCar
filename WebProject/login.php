<?php 
include('conn.php');

session_start();


?>


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
                <li><a href="index.php#about">About</a></li>
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

    <div class="sign-up">
      <div class="card">
        <h3>Login</h3>
        <form action="login.php" method="post">
        <div class="form-group">
          <img src="images/user.png" alt="" />
          <label for="name">email</label>
          <input type="email" required name="email"/>
        </div>
        <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Password</label>
          <input type="password" required name="password"/>
        </div>
        <button class="btn" type="submit" name="login" >Login</button>
        </form>
        <a href="sign-up.php" class="ahref">Don't have an account? Sign Up</a>
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

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password=md5($password);

  $sql = "SELECT * FROM user_ınfo WHERE eMail='$email' ";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] === $password) {
      $_SESSION['email']=$row['eMail'];
      header('location: account.php');
      echo "<script type='text/javascript'>window.location.href='account.php';</script>";
      exit();
    } else {
      echo "<script> alert('wrong password') </script>";
      exit();
    }
  } else {
    echo "<script> alert('user not registered') </script>";
    exit();
  }

}

?>

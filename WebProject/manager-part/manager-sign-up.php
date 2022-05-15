<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-login.css" />
  </head>
  <body>
    <!-- Start header -->
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
                <li><a href="manager-bookings.php">Bookings</a></li>
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
    <div class="sign-up">
      <div class="card">
        <h3>Sign Up</h3>
        <form action="" method="post">

        <div class="form-group">
          <img src="images/user.png" alt="" />
          <label for="name">Username</label>
          <input type="text" required name="name"/>
        </div>
        <div class="form-group">
          <img src="images/email.png" alt="" />
          <label for="name">Email</label>
          <input type="email" required name="email" />
        </div>
        <div class="form-group">
          <img src="images/phone-2.png" alt="" />
          <label for="name">Phone Number</label>
          <input type="text" required name="phone"/>
        </div>
        <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Password</label>
          <input type="password" required name="password"/>
        </div>
        <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Confirm Password</label>
          <input type="password" required name="password2"/>
        </div>
        <button class="btn" type="submit" name="signup">Sign Up</button>

        </form>
        
        <a href="manager-login.php" class="ahref"
          >Already have an account? Login</a
        >
      </div>
    </div>
  </body>
</html>
<?php 

include("../conn.php");


if(isset($_POST["signup"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phone"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $date = date("Y-m-d");

  

  if($password == $password2){
    
    $password=md5($password);

    $sql = "INSERT INTO admin_info (adminName, phoneNumber,eMail,`password`,`date`)
    VALUES ('$name', '$phoneNumber','$email','$password','$date')";


    if ($con->query($sql) === TRUE) {
      echo  "<script> alert('you registered');</script>";
      echo "<script type='text/javascript'>window.location.href='manager-login.php';</script>";

    } else {
      echo "<script> alert('you could not register') </script>";
    }
    
    $con->close();
    

  }else{
    echo "<script> alert('your passwords are not the same') </script>";
  }
 
}



?>
<?php 
include('../conn.php');

session_start();
if(!empty($_SESSION["email"])){
  echo "<script> alert('please log out first') </script>";
  echo "<script type='text/javascript'>window.location.href='manager.php';</script>";
}


?>
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
    <!-- Finish header -->
    <div class="sign-up">
      <div class="card">
        <h3>Login</h3>
        <form action="" method="post">
        <div class="form-group">
          <img src="images/user.png" alt="" />
          <label for="name">email</label>
          <input type="text" required name="email"/>
        </div>
        <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Password</label>
          <input type="password" required name="password"/>
        </div>
        <div class="form-group">
          <img src="images/lock.png" alt="" />
          <label for="name">Company Password</label>
          <input type="password" required name="companyPass"/>
        </div>
        <button class="btn" type="submit" name="login">Login</button>

        </form>
        
        <a href="manager-sign-up.php" class="ahref"
          >Don't have an account? Sign Up</a
        >
      </div>
    </div>
  </body>
</html>
<?php

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password=md5($password);
  $companyPass=$_POST['companyPass'];
  $resultCompany = mysqli_query($con, "SELECT * FROM company_info ");
  $company=mysqli_fetch_assoc($resultCompany);
  if($company['companyPassword']==$companyPass){
    $sql = "SELECT * FROM admin_info WHERE eMail='$email' ";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['password'] === $password) {
       $_SESSION['email']=$row['eMail'];
        echo "<script type='text/javascript'>window.location.href='manager.php';</script>";
        exit();
      } else {
        echo "<script> alert('wrong password') </script>";
        exit();
      }
    } else {
      echo "<script> alert('user not registered') </script>";
      exit();
    }

  }else{
    echo "<script> alert('wrong company password') </script>";
  }

  

}

?>
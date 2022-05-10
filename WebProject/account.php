<?php 
session_start();
include('conn.php');
if(!empty($_SESSION["email"])){
  $email = $_SESSION["email"];
  $result=mysqli_query($con,"SELECT * FROM user_info Where eMail = '$email' ");
  $row = mysqli_fetch_assoc($result);
}else{
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="user-css/account.css" />
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
                      <img src="images/drop.png" alt="" />
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
                      <a href="all-car.php#my-rentals">My Rentals</a>
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

    <!-- Start choice navbar -->

    <div class="choice">
      <div class="user">
        <img src="images/<?php if(!empty($row['userImg'])){
          echo  $row['userImg'];
        }else{
          echo'user.png';
        } ?>" alt="" id="user_img"/>
        <h3 class="name"><?php echo  $row['userName'] ?></h3>
        <h4 class="email"><?php echo  $row['eMail'] ?></h4>
        <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image" class="photo">


           <input type="submit" 
                  name="submit"
                  value="Upload" class="photo">
     	
        </form>
        
      </div>
      

      <nav class="navbar">
        <ul>
          <li></li>
          <li><a href="#information">İnformation</a></li>
          <li><a href="#change-password">Change Password</a></li>
          <li><a href="#my-rentals">my rentals</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="logout.php" name = "logout">Log out</a></li>
          
        </ul>
      </nav>
    </div>

    <!-- Finish choice navbar -->

    <!-- Start İnformation -->

    <section class="information" id="information">
      <h3 class="heading"><span>about</span> me</h3>

      <div class="row">
        <div class="info">
          <form action="account.php" method="post">
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="name" required value="<?php echo  $row['userName'] ?>" />
          </div>
          <div class="form-group">
            <label for="name">Age</label>
            <input type="text" name="age" required value="<?php if(!empty($row['age'])){
          echo  $row['age'];
        }else{
          echo'please enter age';
        } ?>" />
          </div>
          <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="gender" required value="<?php if(!empty($row['gender'])){
          echo  $row['gender'];
        }else{
          echo'please enter gender';
        } ?>" />
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" required value="<?php echo  $row['phoneNumber'] ?>"/>
          </div>

          <button class="btn" type="submit" name='aboutMeBtn'>Save Change</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Finish İnformation -->

    <!-- Start Change Password -->

    <section class="change-password" id="change-password">
      <h3 class="heading"><span>Change</span> Password</h3>
      <div class="row">
        <div class="password-info">
          <form action="account.php" method="post">
          <div class="form-group">
            <label for="name">Old Password</label>
            <input type="password" required name='oldPassword'/>
          </div>
          <div class="form-group">
            <label for="name">New Password</label>
            <input type="password" required name='newPassword'/>
          </div>
          <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" required name='newPassword2' />
          </div>
          <button class="btn" type="submit" name='passwordBtn'>Save Change</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Finish Change Password -->

    <!-- Start My Rentals -->

    <section class="my-rentals" id="my-rentals">
      <h3 class="heading">my <span> Old Rentals</span></h3>

      <div class="car-menu-container">
        <div class="car-box">
          <img src="images/car-5.png" alt="" />
          <h2>N</h2>
          <h3>Pick up</h3>
          <h5>Luxury Car</h5>
          <h5>2022-01-15 / 2022-01-25</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking Again</a>
        </div>
        <div class="car-box">
          <img src="images/car-6.png" alt="" />
          <h2>O</h2>
          <h3>Pick up</h3>
          <h5>Comfort Car</h5>
          <h5>2022-02-15 / 2022-03-25</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking Again</a>
        </div>
      </div>

    </section>
    <!-- Finish My Rentals -->

    <!-- Starts contact section   -->

    <section class="contact" id="contact">
      <h3 class="heading"><span>contact</span> me</h3>

      <div class="row">
        <div class="content">
          <h3 class="title">contact info</h3>

          <div class="info">
            <h3><img src="images/email.png" alt="" /> abc@gmail.com</h3>
            <h3><img src="images/phone-2.png" alt="" /> 0564654684</h3>
            <h3><img src="images/location2.png" alt="" /> Antalya</h3>
          </div>
        </div>

        <form action="account.php" method="post">
          
        
          <textarea
            name="dsc"
            id=""
            cols="30"
            rows="10"
            class="box message"
            placeholder="message"
          ></textarea>
          <button type="submit" class="btn" name="sendBtn">
            send <img src="images/send.png" alt="" />
          </button>
        </form>
      </div>
    </section>

    <!-- Finish My Rentals contact section  -->
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


if(isset($_POST['aboutMeBtn'])){
  $userId=$row['userId'];
  $newName=$_POST['name'];
  $username=$row['userName'];
  if($newName===$username){

  }else{
    $sql = "UPDATE user_info SET userName='$newName' WHERE userId=$userId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change username') </script>";
    }
      
  
  }
  $newAge=$_POST['age'];
  $age=$row['age'];
  if($newAge===$age){

  }else{
    $sql = "UPDATE user_info SET age='$newAge' WHERE userId=$userId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your age') </script>";
    }
      
    
  }
  $newGender=$_POST['gender'];
  $gender=$row['gender'];
  if($newGender===$gender){

  }else{
    $sql = "UPDATE user_info SET gender='$newGender' WHERE userId=$userId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your age') </script>";
    }
      
    
  }
  $newPhone=$_POST['phone'];
  $phone=$row['phoneNumber'];
  if($newPhone===$phone){

  }else{
    $sql = "UPDATE user_ınfo SET eMail='$newPhone' WHERE userId=$userId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your Phone') </script>";
    }
      
    $con->close();
  }

  
  echo "<script type='text/javascript'>window.location.href='account.php';</script>";
}    

if(isset($_POST['passwordBtn'])){
  $oldPassword=$_POST['oldPassword'];
  $oldPassword=md5($oldPassword);
  $newPassword=$_POST['newPassword'];
  $newPassword2=$_POST['newPassword2'];
  if($oldPassword===$row['password']){
    
    if( $newPassword=== $newPassword2){
      $userId=$row['userId'];
      $newPassword=md5($newPassword);
      $sql = "UPDATE user_info SET password='$newPassword' WHERE UserId=$userId";
      if ($con->query($sql) === TRUE) {
        echo "<script> alert('you change your Phone') </script>";
      } else {
        echo "<script> alert('you could not change your password') </script>";
      }
        
      $con->close();


    }else{
      echo "<script> alert('Confirm Password is not same New password') </script>";
      
    }

  }else{
    echo "<script> alert('Please enter true old password') </script>";
  }

}
if(isset($_POST['sendBtn'])){
  if($_POST['dsc']){
    $date = date("Y-m-d");
    $userMail=$row['eMail'];
    $userDsc=$_POST['dsc'];
    $sql = "INSERT INTO `userdescription` (dsc, eMail,`dateD`)
    VALUES ( '$userDsc','$userMail','$date')";
    if ($con->query($sql) === TRUE) {
      echo "<script> alert('you sen your message') </script>";
    } else {
      echo "<script> alert('you could not sen your mesaage') </script>";
    }


  }
  

  
}

?>



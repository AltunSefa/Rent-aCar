<?php 
session_start();
include('../conn.php');
if(!empty($_SESSION["email"])){
  $email = $_SESSION["email"];
  $result=mysqli_query($con,"SELECT * FROM admin_info Where eMail = '$email' ");
  $row = mysqli_fetch_assoc($result);
}else{
  header('location: manager-login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-account.css" />
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

    <!-- Start choice navbar -->

    <div class="choice">
      <div class="user">
        <img src="../images/user.png" alt="" />
        <h3 class="name"><?php echo  $row['adminName'] ?></h3>
        <p class="post">Admin</p>
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="#information">İnformation</a></li>
          <li><a href="#change-password">Change Password</a></li>
          <li><a href="manager-logout.php">Log out</a></li>
        </ul>
      </nav>
    </div>

    <!-- Finish choice navbar -->

    <!-- Start İnformation -->

    <section class="information" id="information">
      <h3 class="heading"><span>about</span> me</h3>

      <div class="row">
        <div class="info">
          <form action="" method="post">
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="name" required value="<?php echo  $row['adminName'] ?>" />
          </div>
          <div class="form-group">
            <label for="name">Age</label>
            <input type="text" name="Age"  value="<?php if(!empty($row['age'])){
          echo  $row['age'];
        }else{
          
        } ?>" />
          </div>
          <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="Gender"  value="<?php if(!empty($row['gender'])){
          echo  $row['gender'];
        }else{
          
        } ?>" />
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="Phone" required value="<?php echo  $row['phoneNumber'] ?>" />
          </div>

          <button class="btn" type="submit" name="saveChange">Save Change</button>


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
          <form action="" method="post">
          <div class="form-group">
            <label for="name">Old Password</label>
            <input type="password" required name="oldPassword"/>
          </div>
          <div class="form-group">
            <label for="name">New Password</label>
            <input type="password" required name="newPassword"/>
          </div>
          <div class="form-group">
            <label for="name">New Password</label>
            <input type="password" required name="newPassword2"/>
          </div>
          <button class="btn" type="submit" name="passwordBtn">Save Change</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Finish Change Password -->
  </body>
</html>
<?php 
if(isset($_POST['saveChange'])){
  $adminId=$row['adminId'];
  $newName=$_POST['name'];
  $adminName=$row['adminName'];
  if($newName===$adminName){

  }else{
    $sql = "UPDATE admin_info SET adminName='$newName' WHERE adminId=$adminId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change admin name') </script>";
    }
      
  
  }
  $newAge=$_POST['Age'];
  $age=$row['age'];
  if($newAge===$age){

  }else{
    $sql = "UPDATE admin_info SET age='$newAge' WHERE adminId=$adminId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your age') </script>";
    }
      
    
  }
  $newGender=$_POST['Gender'];
  $gender=$row['gender'];
  if($newGender===$gender){

  }else{
    $sql = "UPDATE admin_info SET gender='$newGender' WHERE adminId=$adminId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your age') </script>";
    }
      
    
  }
  $newPhone=$_POST['Phone'];
  $phone=$row['phoneNumber'];
  if($newPhone===$phone){

  }else{
    $sql = "UPDATE admin_info SET phoneNumber='$phoneNumber' WHERE adminId=$adminId";
    if ($con->query($sql) === TRUE) {
					
    } else {
      echo "<script> alert('you could not change your Phone') </script>";
    }
      
    $con->close();
  }

  
  echo "<script type='text/javascript'>window.location.href='manager-account.php';</script>";
}

if(isset($_POST['passwordBtn'])){
  $oldPassword=$_POST['oldPassword'];
  $oldPassword=md5($oldPassword);
  $newPassword=$_POST['newPassword'];
  $newPassword2=$_POST['newPassword2'];
  if($oldPassword===$row['password']){
    
    if( $newPassword=== $newPassword2){
      $adminId=$row['adminId'];
      $newPassword=md5($newPassword);
      $sql = "UPDATE admin_info SET password='$newPassword' WHERE adminId=$adminId";
      if ($con->query($sql) === TRUE) {
        echo "<script> alert('you change your Phone') </script>";
        echo "<script type='text/javascript'>window.location.href='manager-account.php';</script>";
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

?>
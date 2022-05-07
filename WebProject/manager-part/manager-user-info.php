<?php 
include('../conn.php');

  $userId=$_GET['userId'];
  $sql = "SELECT * FROM user_ınfo WHERE UserId='$userId' ";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
  }else{
    echo 'hata var';
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-user-info.css" />
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

    <section>
      <div class="user">
        <div class="content">
          <h1>User</h1>
          <div class="image">
            <img src="../images/<?php if(!empty($row['userImg'])){
                                          echo  $row['userImg'];
                                         }else{
                                            echo'user.png';
                                          } ?>" alt="" />
          </div>
          <div class="description">
            <h3><span> name : </span> <?php echo  $row['userName'] ?></h3>
            <h3><span> age : </span><?php if(!empty($row['age'])){
                                          echo  $row['age'];
                                         }else{
                                            echo'belirtilmemiş';
                                          } ?></h3>
            <h3><span> email: </span> <?php echo  $row['eMail'] ?></h3>
            <h3><span> Gender : </span><?php if(!empty($row['gender'])){
                                          echo  $row['gender'];
                                         }else{
                                            echo'belirtilmemiş';
                                          } ?></h3>
            <h3><span> Phone Number : </span> <?php echo  $row['phoneNumber'] ?></h3>
          </div>
          <div class="counter">
            <div class="box">
              <span>2+</span>
              <h3>years of experience</h3>
            </div>
            <div class="box">
              <span>5+</span>
              <h3>Booking</h3>
            </div>
          </div>
          <div class="comment-box">
            <img src="../images/person-1.png" alt="" id="comment-photo" />
            <h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
              ut.
            </h3>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
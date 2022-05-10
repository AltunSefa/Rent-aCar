<?php 
include('../conn.php');
$result = mysqli_query($con,"SELECT * FROM user_info");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-user.css" />
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
    <section class="users" id="users">
      <h2 class="user-heading">Users</h2>
      
      <div class="box-container">

        <?php 
          while($user=mysqli_fetch_assoc($result)){
            
              
           
          
        ?>
          <div class="box">
            <div class="image">
             <img src="../images/<?php if(!empty($user['userImg'])){
                                          echo  $user['userImg'];
                                         }else{
                                            echo'user.png';
                                          } ?>" alt="" />
          </div>
       
          <div class="content">
            <a href="#" class="title"><?php echo $user['userName'] ?></a>
            <form action="manager-user.php" method="post">
            <button class="btn" id="btn" type="submit" name='showBtn'>
            <a href="manager-user-info.php?userId=<?php echo $user['userId'] ?>">Show İnfo</a>
            </button>
            </form>
            
          </div>
       
        </div>
        <?php } 

          
        ?>
        
      </div>
    </section>
  </body>
</html>

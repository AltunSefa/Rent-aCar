<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-add-car.css" />
  </head>
  <body>
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

    <!-- Header Finish -->

    <div class="add-car">
      <div class="card">
        <div class="card-content">
          <h3>Add Car</h3>
          <img src="../images/photo-camera.png" alt="" id="car-photo"/>
          <form action="manager-add-car.php" method="post">
          <div class="form-group">
            <label for="name">img src</label>
            <input type="text" required name="photo-src"/>
            <button class="btn" type="submit" id="load" >Load Photo</button>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" required name="car-name"/>
          </div>
          <div class="form-group">
            <label for="name">Type</label>
            <input type="text" required name="car-type" />
          </div>
          <div class="form-group">
            <label for="name">Segment</label>
            <input type="text" required name="car-segment" />
          </div>
          <div class="form-group">
            <label for="name">Price</label>
            <input type="text" required name="car-price"/>
          </div>
          <button class="btn" type="submit">Add Car</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php 

include("../conn.php");

if(isset($_POST["photo-src"],$_POST["car-name"],$_POST["car-type"],$_POST["car-segment"],$_POST["car-price"])){
  $photosrc = $_POST["photo-src"]; ?>
  <script>
    const carphoto = document.getElementById("car-photo");
    const button =  document.getElementById("load");
    button.addEventListener("click",loadcarphoto);
    function loadcarphoto(){
      carphoto.src= '<?php echo $photosrc ?>'
    }
    
  </script>



  <?php

  $carname = $_POST["car-name"];
  $cartype = $_POST["car-type"];
  $carsegment = $_POST["car-segment"];
  $carprice = $_POST["car-price"];
  
 

  $sql = "INSERT INTO car_ınfo (`name`, `type`, segment,price,carImg)
  VALUES ('$carname', '$cartype','$carsegment','$carprice','$photosrc')";

  if ($con->query($sql) === TRUE) {
    
    

  } else {
    echo "<script> alert('you could not register') </script>";
  }
    
  $con->close();
    

  
 
}



?>

  


<?php 
  include('../conn.php');
  $result=mysqli_query($con,"SELECT * FROM carsegment ");
  $result2=mysqli_query($con,"SELECT * FROM cartype ");

  $carId=$_GET['carId'];
  $sql = "SELECT * FROM car_info WHERE carId='$carId' ";
  $resultMyCar = mysqli_query($con, $sql);
  if (mysqli_num_rows($resultMyCar) === 1) {
    $row = mysqli_fetch_assoc($resultMyCar);

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
    <link rel="stylesheet" href="manager-css/manager-edit.css" />
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
    <div class="edit">
      <div class="card">
        <div class="card-content">
          <h3>Edit Car</h3>
          <img src="../images/photo-camera.png" alt="" id="car-photo"/>
          
          <form action="manager-add-car.php" method="post" enctype="multipart/form-data">
            <div >
            <input type="file" required name="my_image" class="photo">
            </div>
            <div class="form-group">
              <label for="name">Car Name</label>
              <input type="text" required name="car-name" value="<?php echo  $row['carName'] ?>"/>
            </div>
            <div class="form-group">
              <label for="name">Car Brand</label>
              <input type="text" required name="car-brand"/>
            </div>
            <div class="form-group">
              <label for="name">Car Year</label>
              <input type="text" required name="car-year"/>
            </div>
            <div class="form-group">
              <select name="segment" required>
                <option value="" disabled selected>Car Segment</option>
                <?php while($segment=mysqli_fetch_assoc($result)){ ?>
                <option value="<?php echo $segment['segment'] ?>"><?php echo $segment['segment'] ?></option>
                <?php } ?>
                
              </select>
            </div>
            <div class="form-group">
              <select name="type" required>
                <option value="" disabled selected>Car Type</option>
                <?php while($type=mysqli_fetch_assoc($result2)){ ?>
                <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Price a Day</label>
              <input type="number" required name="car-price"/>
            </div>
            
            <div class="form-group">
              <textarea
                 name="cardsc"
                 id=""
                 cols="100"
                 rows="4"
                 class="box message"
                 placeholder="enter car dsc"
                 required
              ></textarea>
            </div>
            <div class="form-group">
              <select name="licence" required >
                <option value="" disabled selected>Car Licence</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
                
              </select>
            </div>
            <div class="form-group">
              <select name="gear" required>
                <option value="" disabled selected>Car Gear</option>
                <option value="Manuel">Manuel</option>
                <option value="Automatic">Automatic</option>
              </select>
            </div>
            <div class="form-group">
              <select name="fuel" required>
                <option value="" disabled selected>Car Fuel</option>
                <option value="gasoline">gasoline</option>
                <option value="diesel">diesel</option>
              </select>
            </div>
            <div class="form-group">
              <select name="passenger" required >
              <option value="" disabled selected>Number of Passenger</option>
                <option value="1-2">1-2</option>
                <option value="1-4">1-4</option>
                <option value="1-8">1-8</option>
              </select>
            </div>

            <div class="buttons">
            <button class="btn" id="btn" type="submit">Edit</button>
            <button class="btn" type="submit">Delete</button>
          </div>
          </form>
          
        </div>
      </div>
    </div>

    <!-- Header Finish -->
  </body>
</html>

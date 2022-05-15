<?php 
  
  session_start();
  include('../conn.php');
  if(!empty($_SESSION["email"])){

  }else{
    echo "<script type='text/javascript'>window.location.href='manager-login.php';</script>";
  }
  $result=mysqli_query($con,"SELECT * FROM carsegment ");
  $result2=mysqli_query($con,"SELECT * FROM cartype ");
  $result3=mysqli_query($con,"SELECT * FROM carlisence ");
  $result4=mysqli_query($con,"SELECT * FROM cargear ");
  $result5=mysqli_query($con,"SELECT * FROM carfuel ");
  $result6=mysqli_query($con,"SELECT * FROM carpassenger ");
  $result7=mysqli_query($con,"SELECT * FROM carbranch ");

  
  
?>
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

    <!-- Header Finish -->

    <div class="add-car">
      <div class="card">
        <div class="card-content">
          <h3>Add Car</h3>
          <img src="../images/photo-camera.png" alt="" id="car-photo"/>
          
          <form action="manager-add-car.php" method="post" enctype="multipart/form-data">
            <div >
            <input type="file" required name="my_image" class="photo">
            </div>
            <div class="form-group">
              <label for="name">Car Name</label>
              <input type="text" required name="car-name"/>
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
              <select name="branch" required>
                <option value="" disabled selected>Select Branch</option>
                <?php while($branch=mysqli_fetch_assoc($result7)){ ?>
                <option value="<?php echo $branch['branch'] ?>"><?php echo $branch['branch'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <select name="licence" required >
                <option value="" disabled selected>Car Licence</option>
                <?php while($lisence=mysqli_fetch_assoc($result3)){ ?>
                <option value="<?php echo $lisence['lisence'] ?>"><?php echo $lisence['lisence'] ?></option>
                <?php } ?>
                
              </select>
            </div>
            <div class="form-group">
              <select name="gear" required>
                <option value="" disabled selected>Car Gear</option>
                <?php while($gear=mysqli_fetch_assoc($result4)){ ?>
                <option value="<?php echo $gear['gear'] ?>"><?php echo $gear['gear'] ?></option>
                <?php } ?>
              </select>
            </div>
            
            <div class="form-group">
              <select name="fuel" required>
                <option value="" disabled selected>Car Fuel</option>
                <?php while($fuel=mysqli_fetch_assoc($result5)){ ?>
                <option value="<?php echo $fuel['fuel'] ?>"><?php echo $fuel['fuel'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <select name="passenger" required >
              <option value="" disabled selected>Number of Passenger</option>
              <?php while($passenger=mysqli_fetch_assoc($result6)){ ?>
                <option value="<?php echo $passenger['passenger'] ?>"><?php echo $passenger['passenger'] ?></option>
                <?php } ?>
              </select>
            </div>

            <button class="btn" type="submit" name="addCar" id="btncar">Add Car</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php 
 
 
  if($_POST){

    $isThere_img_size=getimagesize($_FILES['my_image']['tmp_name']);
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$img_name = $_FILES['my_image']['name'];

	if ($isThere_img_size == FALSE){
		echo 'Yüklemek için resim seç';
	}else{
		if($img_size>1024*1024){
			echo 'Dosya boyutu 1Mb geçemez';
		}else{
			$img_extension = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_extension_lower = strtolower($img_extension);
			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (!in_array($img_extension_lower, $allowed_exs)) {
				echo 'Dosya jpg , jpeg, png formatında olmalı';
			}else{
				$new_img_name = uniqid("IMG-", true).'.'.$img_extension_lower;
				$img_upload_path = '../images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				
				$carName=$_POST['car-name'];
    $carBrand=$_POST['car-brand'];
    $carYear=$_POST['car-year'];
    $carSegment=$_POST['segment'];
    $carType=$_POST['type'];
    $carPrice=$_POST['car-price'];
    $carDsc=$_POST['cardsc'];
    $carBranch=$_POST['branch'];
    $carLicence=$_POST['licence'];
    $carGear=$_POST['gear'];
    $carFuel=$_POST['fuel'];
    $carPassenger=$_POST['passenger'];
    
    
  
    $result1=mysqli_query($con,"SELECT * FROM carsegment where segment='$carSegment' ");
    
    if (mysqli_num_rows($result1) === 1) {
      $row = mysqli_fetch_assoc($result1);
      $carSegmentId=$row['segmentId'];
    }
  
    $result21=mysqli_query($con,"SELECT * FROM cartype where `type`='$carType' ");

    if (mysqli_num_rows($result21) === 1) {
      $row = mysqli_fetch_assoc($result21);
      $carTypeId=$row['typeId'];
    }

    $result71=mysqli_query($con,"SELECT * FROM carbranch where `branch`='$carBranch' ");
   
    if (mysqli_num_rows($result71) === 1) {
      $row = mysqli_fetch_assoc($result71);
      $carBranchId=$row['branchdId'];
    }


    $result31=mysqli_query($con,"SELECT * FROM carlisence where `lisence`='$carLicence' ");
   
    if (mysqli_num_rows($result31) === 1) {
      $row = mysqli_fetch_assoc($result31);
      $carLisenceId=$row['lisenceId'];
    }

    $result41=mysqli_query($con,"SELECT * FROM cargear where `gear`='$carGear' ");
   
    if (mysqli_num_rows($result41) === 1) {
      $row = mysqli_fetch_assoc($result41);
      $carGearId=$row['gearId'];
    }

    $result51=mysqli_query($con,"SELECT * FROM carfuel where `fuel`='$carFuel' ");
   
    if (mysqli_num_rows($result51) === 1) {
      $row = mysqli_fetch_assoc($result51);
      $carFuelId=$row['fuelId'];
    }

    $result61=mysqli_query($con,"SELECT * FROM carpassenger where `passenger`='$carPassenger' ");
   
    if (mysqli_num_rows($result61) === 1) {
      $row = mysqli_fetch_assoc($result61);
      $carPassengerId=$row['passengerId'];
    }


      
    $sql = "INSERT INTO `car_info` (carName, carBrand,carYear,carSegmentId,carTypeId,price,carDsc,branchdId,lisenceId,gearId,fuelId,passengerId,carImg) 
    VALUES ( '$carName','$carBrand','$carYear','$carSegmentId','$carTypeId','$carPrice','$carDsc','$carBranchId','$carLisenceId','$carGearId','$carFuelId','$carPassengerId','$new_img_name')";

    if ($con->query($sql) === TRUE) {
        echo  "<script> alert('you load');</script>";
        echo "<script type='text/javascript'>window.location.href='manager-add-car.php';</script>";
    }else {
        echo "<script> alert('you could not load photo') </script>";
      }
            
    $con->close();

				
			}
		}

	} 
  
  }

?>

  



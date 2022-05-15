<?php 
  include('../conn.php');
  session_start();
  $result=mysqli_query($con,"SELECT * FROM carsegment ");
  $result2=mysqli_query($con,"SELECT * FROM cartype ");
  $result3=mysqli_query($con,"SELECT * FROM carlisence ");
  $result4=mysqli_query($con,"SELECT * FROM cargear ");
  $result5=mysqli_query($con,"SELECT * FROM carfuel ");
  $result6=mysqli_query($con,"SELECT * FROM carpassenger ");
  $result7=mysqli_query($con,"SELECT * FROM carbranch ");

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
    <div class="edit">
      <div class="card">
        <div class="card-content">
          <h3>Edit Car</h3>
          <img src="../images/<?php echo $row['carImg'] ?>" alt="" id="car-photo"/>
          
          <form action="" method="post" enctype="multipart/form-data">
            <div >
            <input type="file" name="my_image" class="photo" >
            </div>
            <div class="form-group">
              <label for="name">Car Name</label>
              <input type="text" required name="car-name" value="<?php echo  $row['carName'] ?>"/>
            </div>
            <div class="form-group">
              <label for="name">Car Brand</label>
              <input type="text" required name="car-brand" value="<?php echo  $row['carBrand'] ?>"/>
            </div>
            <div class="form-group">
              <label for="name">Car Year</label>
              <input type="text" required name="car-year"
              value="<?php echo  $row['carYear'] ?>"/>
            </div>
            <div class="form-group">
              <select name="segment" required >
                <option value="<?php $carsSegment=$row['carSegmentId'];
                $resultS=mysqli_query($con,"SELECT * FROM carSegment where segmentId='$carsSegment'"); 
                $rowS = mysqli_fetch_assoc($resultS);
                  echo $rowS['segment']; ?>" 
                  disabled selected>
                  <?php echo $rowS['segment']; ?></option>
                <?php while($segment=mysqli_fetch_assoc($result)){ ?>
                <option value="<?php echo $segment['segment'] ?>"><?php echo $segment['segment'] ?></option>
                <?php } ?>
                
              </select>
            </div>
            <div class="form-group">
              <select name="type" required>
                <option value="<?php 
                $carsType=$row['carTypeId'];
                $resultT=mysqli_query($con,"SELECT * FROM carType where typeId='$carsType'"); 
                $rowT = mysqli_fetch_assoc($resultT);
                echo $rowT['type'] ?>" disabled selected><?php echo $rowT['type'] ?></option>
                <?php while($type=mysqli_fetch_assoc($result2)){ ?>
                <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Price a Day</label>
              <input type="number" required name="car-price" value="<?php echo $row['price'] ?>"/>
            </div>
            
            <div class="form-group">
              <textarea
                 name="cardsc"
                 id=""
                 cols="100"
                 rows="4"
                 class="box message"
                 required
              ><?php echo $row['carDsc'] ?></textarea>
            </div>

            <div class="form-group">
              <select name="branch" required >
                <option value="<?php $carBranch=$row['branchdId'];
                $resultBranch=mysqli_query($con,"SELECT * FROM carbranch where branchdId='$carBranch'"); 
                $rowBranch = mysqli_fetch_assoc($resultBranch);
                  echo $rowBranch['branch']; ?>" disabled selected><?php echo $rowBranch['branch'] ?></option>
                <?php while($branch=mysqli_fetch_assoc($result7)){ ?>
                <option value="<?php echo $branch['branch'] ?>"><?php echo $branch['branch'] ?></option>
                <?php } ?>
              </select>
            </div>
            
                

           
            
            <div class="form-group">
              <select name="licence" required >
                <option value="<?php $carsLisence=$row['lisenceId'];
                $resultL=mysqli_query($con,"SELECT * FROM carlisence where lisenceId='$carsLisence'"); 
                $rowL = mysqli_fetch_assoc($resultL);
                  echo $rowL['lisence']; ?>" disabled selected><?php echo $rowL['lisence'] ?></option>
                <?php while($lisence=mysqli_fetch_assoc($result3)){ ?>
                <option value="<?php echo $lisence['lisence'] ?>"><?php echo $lisence['lisence'] ?></option>
                <?php } ?>
                
              </select>
            </div>
            <div class="form-group">
              <select name="gear" required>
                <option value="<?php $carsGear=$row['gearId'];
                $resultG=mysqli_query($con,"SELECT * FROM cargear where gearId='$carsGear'"); 
                $rowG = mysqli_fetch_assoc($resultG);
                  echo $rowG['gear']; ?>" disabled selected><?php echo $rowG['gear'] ?></option>
                <?php while($gear=mysqli_fetch_assoc($result4)){ ?>
                <option value="<?php echo $gear['gear'] ?>"><?php echo $gear['gear'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <select name="fuel" required>
                <option value="<?php $carsFuel=$row['fuelId'];
                $resultF=mysqli_query($con,"SELECT * FROM carfuel where fuelId='$carsFuel'"); 
                $rowF = mysqli_fetch_assoc($resultF);
                  echo $rowF['fuel']; ?>" disabled selected><?php echo $rowF['fuel'] ?></option>
                <?php while($fuel=mysqli_fetch_assoc($result5)){ ?>
                <option value="<?php echo $fuel['fuel'] ?>"><?php echo $fuel['fuel'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <select name="passenger" required >
              <option value="<?php $carsPassenger=$row['passengerId'];
                $resultP=mysqli_query($con,"SELECT * FROM carpassenger where passengerId='$carsPassenger'"); 
                $rowP = mysqli_fetch_assoc($resultP);
                  echo $rowP['passenger']; ?>" disabled selected><?php echo $rowP['passenger'] ?></option>
              <?php while($passenger=mysqli_fetch_assoc($result6)){ ?>
                <option value="<?php echo $passenger['passenger'] ?>"><?php echo $passenger['passenger'] ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="buttons">
              <button class="btn" id="btn" type="submit" name="edit">Edit</button>
              <button class="btn" type="submit"name="delete">Delete</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>

  </body>
</html>

<?php 
if(isset($_POST['edit'])){
  
    
  $sorgu=mysqli_query($con,"SELECT * FROM car_info where carId=$carId");
  if (mysqli_num_rows($sorgu) === 1) {
  $sorguRow = mysqli_fetch_assoc($sorgu);
  $carName=$sorguRow['carName'];
  $newCarName=$_POST['car-name'];
  if( $carName==$newCarName){

  }else{
    $sql = "UPDATE car_info SET carName='$newCarName' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
          
    } else {
      echo "<script> alert('you could not change car Name') </script>";
    }
  }
  $carBrand=$sorguRow['carBrand'];
  $newcarBrand=$_POST['car-brand'];
  if( $carBrand==$newcarBrand){

  }else{
    $sql = "UPDATE car_info SET carBrand='$newcarBrand' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
          
    } else {
      echo "<script> alert('you could not change car Brand') </script>";
    }
  }
  $carYear=$sorguRow['carYear'];
  $newCarYear=$_POST['car-year'];
  if( $carYear==$newCarYear){

  }else{
    $sql = "UPDATE car_info SET carYear='$newCarYear' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
          
    } else {
      echo "<script> alert('you could not change car Year') </script>";
    }
  }
  $carSegmentId=$sorguRow['carSegmentId'];
  $newCarSegment=$_POST['segment'];
  $result1=mysqli_query($con,"SELECT * FROM carsegment where segment='$newCarSegment' ");
  if (mysqli_num_rows($result1) === 1) {
    $row = mysqli_fetch_assoc($result1);
    $newCarSegmentId=$row['segmentId'];
    if( $carSegmentId==$newCarSegmentId){ 

    }else{
      $sql = "UPDATE car_info SET carSegmentId='$newCarSegmentId' WHERE carId=$carId";
      if ($con->query($sql) === TRUE) {

      } else {
        echo "<script> alert('you could not change car Segment') </script>";
        }
      }
  }
  $carTypeId=$sorguRow['carTypeId'];
  $newCarType=$_POST['type'];
  $result21=mysqli_query($con,"SELECT * FROM cartype where `type`='$newCarType' ");
  if (mysqli_num_rows($result1) === 1) {
    $row = mysqli_fetch_assoc($result21);
    $newCarTypeId=$row['typeId'];
    if( $carTypeId==$newCarTypeId){ 

    }else{
      $sql = "UPDATE car_info SET carTypeId='$newCarTypeId' WHERE carId=$carId";
      if ($con->query($sql) === TRUE) {

      } else {
        echo "<script> alert('you could not change car Type') </script>";
      }
    }
  }
  $carPrice=$sorguRow['price'];
  $newCarPrice=$_POST['car-price'];
  if( $carPrice==$newCarPrice){

  }else{
    $sql = "UPDATE car_info SET price='$newCarPrice' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
          
    } else {
      echo "<script> alert('you could not change car price') </script>";
    }
  }
  $carDsc=$sorguRow['carDsc'];
  $newCarDsc=$_POST['cardsc'];
  if( $carDsc==$newCarDsc){

  }else{
    $sql = "UPDATE car_info SET carDsc='$newCarDsc' WHERE carId=$carId";
    if ($con->query($sql) === TRUE) {
          
    } else {
      echo "<script> alert('you could not change car Description') </script>";
    }
  }
  $carBranchId=$sorguRow['branchdId'];
  $newCarBranch=$_POST['branch'];
  $result71=mysqli_query($con,"SELECT * FROM carbranch where `branch`='$newCarBranch' ");
   
  if (mysqli_num_rows($result71) === 1) {
  $row = mysqli_fetch_assoc($result71);
  $newCarBranchId=$row['branchdId'];
    if( $carBranchId===$newCarBranchId){

    }else{
      $sql = "UPDATE car_info SET branchdId='$newCarBranchId' WHERE carId=$carId";
      if ($con->query($sql) == TRUE) {
          
      } else {
        echo "<script> alert('you could not change car lisence') </script>";
      }
    }
  }
  $carLicenceId=$sorguRow['lisenceId'];
  $newCarLicence=$_POST['licence'];
  $result31=mysqli_query($con,"SELECT * FROM carlisence where `lisence`='$newCarLicence' ");
   
  if (mysqli_num_rows($result31) === 1) {
  $row = mysqli_fetch_assoc($result31);
  $newCarLisenceId=$row['lisenceId'];
    if( $carLicenceId===$newCarLicence){

    }else{
      $sql = "UPDATE car_info SET lisenceId='$newCarLisenceId' WHERE carId=$carId";
      if ($con->query($sql) == TRUE) {
          
      } else {
        echo "<script> alert('you could not change car lisence') </script>";
      }
    }
  }
  
  $carGearId=$sorguRow['gearId'];
  $newCarGear=$_POST['gear'];
  $result41=mysqli_query($con,"SELECT * FROM cargear where `gear`='$newCarGear' ");

  if (mysqli_num_rows($result41) === 1) {
    $row = mysqli_fetch_assoc($result41);
    $newCarGearId=$row['gearId'];
    if( $carGearId==$newCarGearId){

    }else{
      $sql = "UPDATE car_info SET gearId='$newCarGearId' WHERE carId=$carId";
      if ($con->query($sql) === TRUE) {
            
      } else {
        echo "<script> alert('you could not change car gear') </script>";
      }
    }
  }


  
  $carFuelId=$sorguRow['fuelId'];
  $newCarFuel=$_POST['fuel'];
  $result51=mysqli_query($con,"SELECT * FROM carfuel where `fuel`='$newCarFuel' ");

  if (mysqli_num_rows($result51) === 1) {
    $row = mysqli_fetch_assoc($result51);
    $newCarFuelId=$row['fuelId'];

    if( $carFuelId==$newCarFuelId){

    }else{
      $sql = "UPDATE car_info SET fuelId='$newCarFuelId' WHERE carId=$carId";
      if ($con->query($sql) === TRUE) {
            
      } else {
          echo "<script> alert('you could not change car fuel') </script>";
        }
    }
  }

  
  $carPassengerId=$sorguRow['passengerId'];
  $newCarPassenger=$_POST['passenger'];
      
  $result61=mysqli_query($con,"SELECT * FROM carpassenger where `passenger`='$newCarPassenger' ");

  if (mysqli_num_rows($result61) === 1) {
    $row = mysqli_fetch_assoc($result61);
    $newCarPassengerId=$row['passengerId'];
    if( $carPassengerId==$newCarPassengerId){

    }else{
      $sql = "UPDATE car_info SET passengerId='$newCarPassengerId' WHERE carId=$carId";
      if ($con->query($sql) === TRUE) {
            
      } else {
         echo "<script> alert('you could not change car Max Passenger') </script>";
        }
    }
  }

  echo "<script type='text/javascript'>window.location.href='manager-cars.php';</script>";
  $con->close();

  }
      
}

if(isset($_POST['delete'])){
  $sql = "DELETE FROM car_info where carId='$carId'";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "<script> alert('you could not delete car') </script>";
}
  
  echo "<script type='text/javascript'>window.location.href='manager-cars.php';</script>";
 
}





?>
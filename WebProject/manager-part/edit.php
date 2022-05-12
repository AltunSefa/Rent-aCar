<?php 
include('../conn.php');
session_start();
$carId=$_SESSION['carId'];
if(isset($_POST['edit'])){
    if(isset($_POST['my_image'])){
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
				
		        
                $carBrand=$_POST['car-brand'];
                $carYear=$_POST['car-year'];
                $carSegment=$_POST['segment'];
                $carType=$_POST['type'];
                $carPrice=$_POST['car-price'];
                $carDsc=$_POST['cardsc'];
                $carLicence=$_POST['licence'];
                $carGear=$_POST['gear'];
                $carFuel=$_POST['fuel'];
                $carPassenger=$_POST['passenger'];
                $carStatus=0;
    
  
                $result1=mysqli_query($con,"SELECT * FROM carsegment where segment='$carSegment' ");
                $carSegmentId=0;
                if (mysqli_num_rows($result1) === 1) {
                    $row = mysqli_fetch_assoc($result1);
                    $carSegmentId=$row['segmentId'];
                }
  
                $result21=mysqli_query($con,"SELECT * FROM cartype where `type`='$carType' ");
                $carTypeId=0;
                if (mysqli_num_rows($result21) === 1) {
                    $row = mysqli_fetch_assoc($result21);
                    $carTypeId=$row['typeId'];
                }
               
                

                
               

				
			}
		}

	} 

    }else{
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
                    echo "<script> alert('you could not change username') </script>";
                }
            }
        }
        echo "<script type='text/javascript'>window.location.href='manager-edit.php';</script>";
    }
    
  
}else{
  echo 'olmuyo';
}
if(isset($_POST['delete'])){
  echo'delete';
}



?>
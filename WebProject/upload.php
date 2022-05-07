<?php 
include "conn.php";
session_start();
$email=$_SESSION['email'];
$result=mysqli_query($con,"SELECT * FROM user_ınfo Where eMail = '$email' ");
  $row = mysqli_fetch_assoc($result);
  $id=$row['UserId'];

if ($_POST) {

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
				$img_upload_path = 'images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$sql = "UPDATE user_ınfo SET userImg='$new_img_name' WHERE UserId=$id";
				if ($con->query($sql) === TRUE) {
					
					echo  "<script> alert('you load');</script>";
					echo "<script type='text/javascript'>window.location.href='account.php';</script>";
			  
				} else {
					echo "<script> alert('you could not load photo') </script>";
				}
				  
				$con->close();
				

				
			}
		}

	}
}	

?>	








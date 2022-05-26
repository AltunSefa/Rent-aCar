<?php session_start();
include('../conn.php');
if($_GET){

}else{
  header('location: manager-faq-php.php');
}
$faqId=$_GET['faqId'];
$result = mysqli_query($con,"SELECT * FROM faqs where faqId='$faqId' ");
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-faq.css" />
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
    <!-- Finish header -->

    <section style="height: 85vh;">
      
      <div class="questions-container">
        <h1 class="title">FAQ's</h1>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="questions">
          <form action="" method="post">
            <div class="question">
              <label for="l1">Question:</label>
              <input type="text" name="questionEdit" value="<?php echo $row['question'] ?>" />
            </div>
            <div class="answer">
              <label for="name">Answer:   </label>
              <input type="text" name="answerEdit" required value="<?php echo $row['answer'] ?>" />
            </div>
          
            <div class="buttons">
                <button type="submit"  name="Edit"> Edit </button>
                <button type="submit"  name="Delete"> Delete </button>
            </div>
          </form>
        </div>
        <?php } ?>

      </div>
      
    </section>
    
  </body>
</html>
<?php 

if(isset($_POST['Edit'])){
    $newQuestion=$_POST['questionEdit'];
    $newAnswer=$_POST['answerEdit'];
    if($newQuestion!=$row['question'] || $newAnswer!=$row['answer']){
        $sql = "UPDATE faqs SET question='$newQuestion',answer='$newAnswer' WHERE faqId=$faqId";
      if ($con->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.location.href='manager-faq.php';</script>";
      } else {
         echo "<script> alert('you could not change this faq') </script>";
         echo "<script type='text/javascript'>window.location.href='manager-faq.php';</script>";
        }
    }
}
if(isset($_POST['Delete'])){
    $sorgu="DELETE FROM faqs where faqId='$faqId'";
    if ($con->query($sorgu) === TRUE) {
              
    } else {
      echo "<script> alert('you could not delete this faq') </script>";
    }
    echo "<script type='text/javascript'>window.location.href='manager-faq.php';</script>";
}
?>
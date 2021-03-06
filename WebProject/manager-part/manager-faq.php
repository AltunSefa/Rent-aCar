
<?php session_start();
include('../conn.php');
if(!empty($_SESSION["email"])){

}else{
  header('location: manager-login.php');
}

$result=mysqli_query($con,"SELECT * FROM faqs ");
  

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

    <section>
      

      <div class="questions-container">
       <h1 class="title">ADD FAQ's</h1>
        
        <div class="questions">
          <form action="" method="post">
            <div class="question">
              <label for="l1">Question:</label>
              <input type="text"  name="questions" />
            </div>
            <div class="answer">
              <label for="name">Answer:   </label>
              <input type="text" required name="answer" />
            </div>
            <div class="buttons">
            <button type="submit"  name="add"> add </button>
            </div>

          </form>
          
        </div>

        
      </div>
      <div class="questions-container">
        <h1 class="title">FAQ's</h1>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="questions">

          <div class="question">
            <p><span>Question: </span><?php echo $row['question'] ?></p>
          </div>
          <div class="answer">
            <p><span>Answer: </span> <?php echo $row['answer'] ?></p>
            
          </div>
          
          <div class="buttons">
            <button><a href="manager-faq-edit.php?faqId=<?php echo $row['faqId'] ?>" >Edit</a></button>
          </div>
        </div>
        <?php } ?>

      </div>
      
    </section>
    <!-- <script src="manager-js/manager-faq.js"></script> -->
  </body>
</html>
<?php 
if(isset($_POST['add'])){
  $question=$_POST['questions'];
  $answer=$_POST['answer'];

  $sql = "INSERT INTO `faqs` (question, answer) VALUES ( '$question','$answer')";
  if ($con->query($sql) === TRUE) {
    echo "<script> alert('you add a new question and its answer') </script>";
  } else {
    echo "<script> alert('you could not add a new question and its answer ') </script>";
  }
  echo "<script type='text/javascript'>window.location.href='manager-faq.php';</script>";

}



?>

<?php session_start();
include('../conn.php');
if(!empty($_SESSION["email"])){

}else{
  header('location: manager-login.php');
}?>
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
      <h1 class="title">FAQ's</h1>

      <div class="questions-container">
        <div class="question">
          <button>
            <div class="label">
              <label for="l1">Question</label>
              <input type="text" id="l1" />
            </div>
            <img src="../images/up-arrow.png" alt="" class="d-arrow" />
          </button>
          <div class="form-group">
            <label for="name">Answer</label>
            <input type="text" required />
          </div>
        </div>

        <div class="question">
          <button>
            <div class="label">
              <label for="l1">Question</label>
              <input type="text" id="l1" />
            </div>
            <img src="../images/up-arrow.png" alt="" class="d-arrow" />
          </button>
          <div class="form-group">
            <label for="name">Answer</label>
            <input type="text" required />
          </div>
        </div>

        <div class="question">
          <button>
            <div class="label">
              <label for="l1">Question</label>
              <input type="text" id="l1" />
            </div>
            <img src="../images/up-arrow.png" alt="" class="d-arrow" />
          </button>
          <div class="form-group">
            <label for="name">Answer</label>
            <input type="text" required />
          </div>
        </div>

        <div class="question">
          <button>
            <div class="label">
              <label for="l1">Question</label>
              <input type="text" id="l1" />
            </div>
            <img src="../images/up-arrow.png" alt="" class="d-arrow" />
          </button>
          <div class="form-group">
            <label for="name">Answer</label>
            <input type="text" required />
          </div>
        </div>
      </div>
    </section>
    <script src="manager-js/manager-faq.js"></script>
  </body>
</html>

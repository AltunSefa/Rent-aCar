<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="manager-css/manager-account.css" />
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

    <!-- Start choice navbar -->

    <div class="choice">
      <div class="user">
        <img src="../images/user.png" alt="" />
        <h3 class="name">Sefa Altun</h3>
        <p class="post">Manager</p>
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="#information">İnformation</a></li>
          <li><a href="#change-password">Change Password</a></li>
          <li><a href="manager.html">Log out</a></li>
        </ul>
      </nav>
    </div>

    <!-- Finish choice navbar -->

    <!-- Start İnformation -->

    <section class="information" id="information">
      <h3 class="heading"><span>about</span> me</h3>

      <div class="row">
        <div class="info">
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" required value="Sefa Altun" />
          </div>
          <div class="form-group">
            <label for="name">Age</label>
            <input type="text" required value="22" />
          </div>
          <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" required value="Male" />
          </div>
          <div class="form-group">
            <label for="name">email</label>
            <input type="text" required value="abc@gmail.com" />
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" required value="5654684654" />
          </div>

          <button class="btn" type="submit">Save Change</button>
        </div>
      </div>
    </section>
    <!-- Finish İnformation -->

    <!-- Start Change Password -->

    <section class="change-password" id="change-password">
      <h3 class="heading"><span>Change</span> Password</h3>
      <div class="row">
        <div class="password-info">
          <div class="form-group">
            <label for="name">Old Password</label>
            <input type="password" required />
          </div>
          <div class="form-group">
            <label for="name">New Password</label>
            <input type="password" required />
          </div>
          <div class="form-group">
            <label for="name">New Password</label>
            <input type="password" required />
          </div>
          <button class="btn" type="submit">Save Change</button>
        </div>
      </div>
    </section>
    <!-- Finish Change Password -->
  </body>
</html>
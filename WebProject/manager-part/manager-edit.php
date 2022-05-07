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
          <img src="../images/car-rent-1.png" alt="" />
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" required value="A" />
          </div>
          <div class="form-group">
            <label for="name">Type</label>
            <input type="text" required value="Sedan" />
          </div>
          <div class="form-group">
            <label for="name">Segment</label>
            <input type="text" required value="Economic Car" />
          </div>
          <div class="form-group">
            <label for="name">Price</label>
            <input type="text" required value="$15.99" />
          </div>
          <div class="buttons">
            <button class="btn" id="btn" type="submit">Edit</button>
            <button class="btn" type="submit">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Finish -->
  </body>
</html>

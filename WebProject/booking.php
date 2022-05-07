<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="user-css/booking.css" />
  </head>
  <body>
    <!-- Header start -->
    <header id="header">
      <div class="header">
        <div class="container">
          <div class="header-navbar">
            <div class="header-logo">
              <img src="images/logo.png" alt="logo" id="pnglogo" />
              <div class="header-logo-text">
                <h2>Gold Rent a Car</h2>
              </div>
            </div>
            <div class="header-menu">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="account.php#contact">Contact</a></li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">
                      Cars
                      <img src="images/drop.png" alt="">
                    </button>
                    <div class="dropdown-content">
                      <a href="all-car.php#blogs-car-type">Car Type</a>
                      <a href="all-car.php#segments-car-type">Car Segment</a>
                      <a href="all-car.php#car-menu">All Car</a>
                    </div>
                  </div>
                </li>
                <li><a href="faqs.php">FAQ</a></li>
                <li><a href="login.php">Login</a></li>
                <li>
                  <div class="dropdown">
                    <button class="dropbtn">
                      Profile
                      <img src="images/drop.png" alt="">
                    </button>
                    <div class="dropdown-content">
                      <a href="account.php#information">Your Information</a>
                      <a href="account.php#change-password">Change Password</a>
                      <a href="account.php#my-rentals">My Rentals</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
    </header>

    <!-- Header Finish -->
    <div class="detail">
      <div class="detail-container anime-top">
        <div class="content">
          <h1 class="carname">A</h1>

          <div class="detail-row">
            <div class="car-photo">
              <img src="images/car-rent-1.png" alt="" />
            </div>

            <div class="car-desc">
              <h4 class="pri">$99.00/Day</h4>

              <div class="car-p">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                  numquam deleniti, voluptates excepturi similique sint
                  accusamus earum fuga minima, animi possimus iste ipsa ipsam
                  eum architecto quaerat quia velit officiis!
                </p>
              </div>
              <div class="car-warning">
                <div class="warning-cars">
                  <img src="images/driver-license.png" alt="" />
                  <h5>Lorem.</h5>
                </div>
                <div class="warning-cars">
                  <img src="images/gear-shift.png" alt="" />
                  <h5>Lorem.</h5>
                </div>
                <div class="warning-cars">
                  <img src="images/gas-station.png" alt="" />
                  <h5>Lorem.</h5>
                </div>
                <div class="warning-cars">
                  <img src="images/group.png" alt="" />
                  <h5>Lorem.</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-row">
            <div class="information-details">
              <div class="p-information">
                <h2 style="color: white">Purchase Information</h2>
                <div class="select-details">
                  <div class="dropdown city">
                    <button class="dropbtn">City ▽</button>
                    <div class="dropdown-content">
                      <a href="#">İstanbul</a>
                      <a href="#">Antalya</a>
                      <a href="#">Ordu</a>
                    </div>
                  </div>
                  <div class="dropdown place">
                    <button class="dropbtn">Place ▽</button>
                    <div class="dropdown-content">
                      <a href="#">Center</a>
                      <a href="#">A</a>
                      <a href="#">B</a>
                    </div>
                  </div>
                </div>
                <div class="time-detail">
                  <input type="date" />
                  <input type="time" />
                </div>
              </div>
              <div class="r-information">
                <h2 style="color: white">Return Information</h2>
                <div class="select-details">
                  <div class="dropdown city">
                    <button class="dropbtn">City ▽</button>
                    <div class="dropdown-content">
                      <a href="#">İstanbul</a>
                      <a href="#">Antalya</a>
                      <a href="#">Ordu</a>
                    </div>
                  </div>
                  <div class="dropdown place">
                    <button class="dropbtn">Place ▽</button>
                    <div class="dropdown-content">
                      <a href="#">Center</a>
                      <a href="#">A</a>
                      <a href="#">B</a>
                    </div>
                  </div>
                </div>
                <div class="time-detail">
                  <input type="date" />
                  <input type="time" />
                </div>
              </div>
            </div>
          </div>
          <div class="detail-row">
            <div class="detail-row-content">
              <div class="text-h6"><h6>Credit Card Information</h6></div>
              <div class="credit-card">
                <div class="namesurname">
                  <input type="text" placeholder="Name Surname" />
                </div>
                <div class="credit-card-number">
                  <input type="text" placeholder="Credit Card Number" />
                </div>
                <div class="year">
                  <input type="number" placeholder="Year" />
                </div>
                <div class="ccv">
                  <input type="number" placeholder="CCV" />
                </div>
                <div class="submit-booking">
                  <form action="index.php">
                    <input type="submit" value="Booking" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Start -->
    <footer class="footer-part" id="footer">
      <div class="footer-left">
        <h3>Gold Rent a Car</h3>

        <p class="footer-links">
          <a href="#">Home</a>
          |
          <a href="#about">About</a>
          |
          <a href="#footer">Contact</a>
        </p>

        <p class="footer-company-name">
          ©<strong> Gold Rent a Car </strong>All Rights Reserved. Designed by
          <strong>Sefa ALTUN</strong>
        </p>
      </div>

      <div class="footer-center">
        <div>
          <img src="images/location.png" alt="" />
          <p>Akdeniz University</p>
        </div>

        <div>
          <img src="images/phone-call.png" alt="" />
          <p>05546568446</p>
        </div>
        <div>
          <img src="images/email2.png" alt="" />
          <p><a href="#">xyz@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          <strong>Gold Rent a Car</strong> Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Autem, maiores?
        </p>
        <div class="footer-img">
          <a href="#"><img src="images/twitter.png" alt=""></i></a>
          <a href="#"><img src="images/instagram.png" alt=""></i></a>
          <a href="#"><img src="images/facebook.png" alt=""></i></a>
         
        </div>
      </div>
    </footer>

    <!-- Footer Finish -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="user-js/booking.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="user-css/all-car.css" />
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
    <div class="slider">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 8</div>
          <div class="brand">
            <img src="images/brand-1.png" />
          </div>
          <div class="text">MERCEDES</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 8</div>
          <div class="brand">
            <img src="images/brand-2.png" />
          </div>
          <div class="text">MERCEDES</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 8</div>
          <div class="brand">
            <img src="images/brand-3.png" />
          </div>
          <div class="text">VOLKSWAGEN</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 8</div>
          <div class="brand">
            <img src="images/brand-4.png" />
          </div>
          <div class="text">NISSAN</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 8</div>
          <div class="brand">
            <img src="images/brand-5.png" />
          </div>
          <div class="text">MERCEDES</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">6 / 8</div>
          <div class="brand">
            <img src="images/brand-6.png" />
          </div>
          <div class="text">MERCEDES</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">7 / 8</div>
          <div class="brand">
            <img src="images/brand-7.png" />
          </div>
          <div class="text">BMW</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">8 / 8</div>
          <div class="brand">
            <img src="images/brand-8.png" />
          </div>
          <div class="text">MERCEDES</div>
        </div>
      </div>
      <br />

      <div style="text-align: center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>

    <section class="blogs-car-type" id="blogs-car-type">
      <h2 class="car-type-heading">Car Type</h2>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/sedan.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Sedan</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/hatchback.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Hatchback</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/spor-car.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Sport</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/suv.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">SUV</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/caravan.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Caravan</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/pickup.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Pick Up</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- sınıf -->
    <section class="blogs-car-type" id="segments-car-type">
      <h2 class="car-type-heading">Car Segment</h2>

      <div class="box-container">
        <div class="box">
          <div class="segment-img">
            <img src="images/segment-1.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title"> Economic Rental Vehicles</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="segment-img">
            <img src="images/segment-2.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title"> Comfort Rental Cars</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="segment-img">
            <img src="images/segment-3.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Prestige Rental Cars</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="segment-img">
            <img src="images/segment-4.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title"> Premium Rental Cars</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="segment-img">
            <img src="images/segment-5.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Luxury Rental Cars</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="segment-img">
            <img src="images/segment-6.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title"> Van Rental Cars</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              dicta.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="car-menu" id="car-menu">
      <h1 class="car-type-heading">Cars</h1>

      <div class="car-menu-container">
        <div class="car-box">
          <img src="images/car-rent-1.png" alt="" />
          <h2>A</h2>
          <h3>Sedan</h3>
          <h5>Economic Car</h5>
          <div class="price">$15.99</div>
          <a href="booking.php" class="btn">Booking</a>
        </div>

        <div class="car-box">
          <img src="images/car-rent-2.png" alt="" />
          <h2>B</h2>
          <h3>Sedan</h3>
          <h5>Comfort Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>

        <div class="car-box">
          <img src="images/car-rent-3.png" alt="" />
          <h2>C</h2>
          <h3>Hatchback</h3>
          <h5>Prestige Car</h5>
          <div class="price">$15.99 ></div>
          <a href="#" class="btn">Booking</a>
        </div>

        <div class="car-box">
          <img src="images/car-rent-4.png" alt="" />
          <h2>D</h2>
          <h3>Hatchback</h3>
          <h5>Premium Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>

        <div class="car-box">
          <img src="images/car-rent-5.png" alt="" />
          <h2>E</h2>
          <h3>Sport</h3>
          <h5>Luxury Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>

        <div class="car-box">
          <img src="images/car-rent-6.png" alt="" />
          <h2>F</h2>
          <h3>Sport</h3>
          <h5>Premium Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-1.png" alt="" />
          <h2>G</h2>
          <h3>SUV</h3>
          <h5>Economic Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-2.png" alt="" />
          <h2>K</h2>
          <h3>SUV</h3>
          <h5>Luxury Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-3.png" alt="" />
          <h2>L</h2>
          <h3>Caravan</h3>
          <h5>Comfort Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-4.png" alt="" />
          <h2>M</h2>
          <h3>Caravan</h3>
          <h5>Prestige Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-5.png" alt="" />
          <h2>N</h2>
          <h3>Pick up</h3>
          <h5>Luxury Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
        <div class="car-box">
          <img src="images/car-6.png" alt="" />
          <h2>O</h2>
          <h3>Pick up</h3>
          <h5>Comfort Car</h5>
          <div class="price">$15.99</div>
          <a href="#" class="btn">Booking</a>
        </div>
      </div>
    </section>

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

    <script src="user-js/all-car.js"></script>
  </body>
</html>
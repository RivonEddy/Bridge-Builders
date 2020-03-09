<!doctype html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/cross.png" type="image/x-icon">

      <!-- Font-Awesome -->
      <link rel="stylesheet" href="css/fonts/fontawesome/css/font-awesome.min.css">

      <!-- Ionicons -->
      <link rel="stylesheet" href="css/fonts/ionicons/css/ionicons.css">
      <link rel="stylesheet" href="css/fonts/ionicons/css/ionicons.min.css">

      <!-- External Styleseets -->
      <link rel="stylesheet" href="css/external-stylesheets/animate.css">
      <link rel="stylesheet" href="css/external-stylesheets/bootstrap.css">
      <link rel="stylesheet" href="css/external-stylesheets/owl.carousel.min.css">

      <!-- Self-Made -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive_layout/style_responsive.css">
      <link rel="stylesheet" href="css/contact.css">
      <link rel="stylesheet" href="css/responsive_layout/contact_responsive.css">
      <script src="js/style.js"></script>

    <title>Bridge~Builders | Contact Us</title>
  </head>
  <body>
  
    <!-- Header -->
    <header id="nav-bar">
      <a href="index.php"><img src="img/logo.png"></a>

      <nav>
        <ul>
            <a href="index.php"><li> Home</li></a>
            <a href="about.php"><li> About Us</li></a>
            <a href="sermon.php"><li> Sermon</li></a>
            <a href="blog.php"><li> Blog</li></a>
            <a href="contact.php"><li class="current"> Contact Us</li></a>
            <!-- <a href="log-reg.html"><li> Login / Register</li></a> -->
            <span class="box">
              <span class="container-2">
              <input id="search" type="text" placeholder="Search Here..."/>
              <li style="margin-left: 0;"><i class="fa fa-search"></i></li>
              </span>
            </span>
        </ul>
      </nav>
    </header>


    <!-- Entry Nav -->
    <section id="entry_nav">
      <p><img src="img/logo_3.png"> Contact Us</p>

      <span>
          <p><h6><a href="index.php">Home /</a> Contact Us</h6></p>
      </span>
    </section>


    <!-- Contact Page Content -->
    <section id="contact_content">
      <div class="contact-map">
        <h1>Our Address Map</h1>

        <div class="map-itself">
        <!-- The Map Itself -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3!2d3.131612053874935!3d6.464469002968293!2m2!1f48.570765391671834!2f112.9093108415172!3m2!1i1024!2i768!4f90!3m3!1m2!1s0x103b819894494fcf%3A0xdd9c5a9427477250!2sAwo+Adoko+St%2C+Ojo%2C+Lagos!5e1!3m2!1sen!2sng!4v1552104920515" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Contact Info -->
      <h2>Contact Info</h2>
      <div class="contact-info">
        <div class="left">
          <h3>Church Branch</h3>
          <p>Address: <span>1481 Creekside Lane Avila Beach, CA 93424</span></p>
          <p>Phone: <span>+53 345 7953 32453<br>
                          +53 345 7557 822112</span></p>
          <p>Email: <span>yourmail@gmail.com</span></p>
        </div>

        <div class="right">
          <img src="img/intro.jpg">
        </div>
      </div>

      <!-- Share your testimonies -->
      <div class="giveTesti">
          <h2>Share Your Testimonies With Us</h2>
        <form action="requestForm.php" method="POST">
          <textarea name="testiarea" placeholder="Your Testimony here.." required></textarea><br>
          <button type="submit" class="red-butt" name="share"><i class="fa fa-share-alt"></i> Share</button>
        </form>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="requestForm.php" method="POST">
          <input name="name" type="text" placeholder="Your Name" required>
          <input name="email" type="text" placeholder="Your E-Mail" required><br>
          <textarea name="messge" placeholder="Your Message" required></textarea><br>
          <button type="submit" class="red-butt" name="submit" style="margin-left: 5px;">Submit</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <!-- Newsletter Section -->
      <section id="footer_one">
        <div class="left">
        <p>Subscribe to our newsletter</p>
        </div>

        <div class="right">
        <input type="text" placeholder="Your Email">
        <button type="submit">Subscribe</button>
        </div>
      </section>

      <!-- Main Footer -->
      <section id="main_footer">
        <section>

        <div class="align-butm">
          <div class="first">
            <img src="img/logo.png">
            <ul>
              <a href="#"><li><i class="fa fa-youtube"></i></li></a>
              <a href="#"><li><i class="fa fa-facebook"></i></li></a>
              <a href="#"><li><i class="fa fa-twitter"></i></li></a>
              <a href="#"><li><i class="fa fa-instagram"></i></li></a>
            </ul>
          </div>

          <div class="two">
          <div class="second">
            <h4>Useful Links</h4>
            <ul>
              <a href="index.php"><li>Home</li></a>
              <a href="#"><li>Donate</li></a>
              <a href="blog.php"><li>News</li></a>
              <a href="index.php#quot_sect"><li>Quotes</li></a>
              <a href="contact.php"><li>Contact</li></a>
            </ul>
          </div>

          <div class="third">
            <h4>Visit or Talk to Us</h4>
            <div>
            <span>Address:</span>
            <p>07, roseline Street, Ojo Lagos, Nigeria</p>
            </div>

            <div>
              <span>Telephone:</span>
              <p>+234 807 6175 861</p>
            </div>

            <div>
              <span>Email:</span>
              <p>brigdebuildersm@gmail.com</p>
            </div>
          </div>
        </div>
        </div>

        <h6>Copyright <span>©2019</span> | All rights reserved</h6>
        </section>
      </section>
    </footer>
    </body>
  </html>
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
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/responsive_layout/index_responsive.css">
      <script src="js/style.js"></script>

    <title>Bridge~Builders | Welcome</title>

    <!-- Styles for the modals -->
  <style>
    /* ---------------------------- MODAL FOR REQUEST PRAYER BUTTON ----------------- */
    /* The Modal (background) */
.my-modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99; /* Sit on top */
  padding: 100px 0 100px 20%; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; /* Enable scroll if needed */
  color: #2f2f2f;
  background: rgba(0, 0, 0, 0.4);
}

/* Modal Content */
.my-modal-content {
  position: relative;
  background: rgba(0, 0, 0, 0.1);
  color: #ccc;
  z-index: 999;
  padding: 30px 50px 50px 50px;
  width: 70%;
  height: 100%;
  text-align: center;
  border-radius: 20px;
  overflow: auto; /* Enable scroll if needed */
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@keyframes animatetop {
  from {bottom:-300px;}
  to {bottom:0;}
}

/* The Close Button */
.close {
  color: #c42222;
  float: right;
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #801313;
  text-decoration: none;
  cursor: pointer;
  transition: 0.4s;
}

.my-modal-content button{
  /* border-bottom: 2px solid #ccc; */
  color: #fff;
  background: #c42222;
  border: 1px solid #c42222;
  /* border-bottom: 1.5px solid #d5d67e; */
  padding: 15px 20px 15px 20px;
  margin: 20px 0 0 0;
  font-family: 'Courier New', Courier, monospace;
}

.my-modal-content button:hover{
  color: #c42222;
  border: 1px solid #c42222;
  background: transparent;
  transition: 0.3s;
  font-weight: bold;
}


/* Media Queries */
@media(max-width: 1500px){
  .my-modal{
    padding-top: 50px;
    padding-bottom: 50px;
  }
}

@media(max-width: 800px){
  .my-modal{
    padding-left: 10%;
  }

  .my-modal-content{
    width: 90%;
    padding: 10px 20px 10px 20px;
  }
}
  </style>
  </head>
  <body>
    <!-- Header -->
    
    <header class="header">
      <a href="index.php"><img src="img/logo.png"></a>
        <span class="box">
          <span class="container-2" action="requestForm.php" method="GET">
            <input id="search" type="text" placeholder="Search Here..." name="search" />
            <button type="submit" id="search_butt"><i class="fa fa-search"></i></button>
          </span>
        </span>
    </header>


    <!-- Entry Section -->
    <section id="entry_section">
      <section class="section">
    <!-- Nav-Bar -->
    <section id="navbar">
    <nav>
        <ul>
          <li>
          <a class="current" href="index.php"> Home</a>
          </li>

          <li>
          <a href="about.php"> About Us</a>
          </li>

          <li>
          <a class="nav-link" href="sermon.php"> Sermon</a>
          </li>

          <li>
          <a class="nav-link" href="blog.php"> Blog</a>
          </li>

          <li>
          <a class="nav-link" href="contact.php"> Contact Us</a>
          </li>
          <!-- <li><a href="log-reg.html">Login / Register</a></li> -->
        </ul>
      </nav>
    </section>

    <!-- Banner -->
    <section id="banner">
        <div class="img">
          <center>
            <img src="img/cross.png">
          </center>
        </div>

      <div class="entry-text">
        <div><h2><span>Bridge ~ Builders</span> : A Place Of Encounter With God.</h2></div>
      </div>

      <div class="butt">
          <!-- Trigger/Open The Modal -->
        <button id="myBtn">Request a prayer</button>
      </div>
        <!-- The Modal -->
        <div id="myModal" class="my-modal">
        
          <!-- Modal content -->
          <div class="my-modal-content">
              <span class="close">&times;</span>
            <div class="one">
              <h4>You can request a prayer here.</h4>

        <form class="form-modal" action="requestForm.php" method="POST">
              <input type="text" name="mail" placeholder="FirstName" style="margin: 0 10px 20px 0" required/>

              <input type="text" name="mail" placeholder="LastName" style="margin: 0 0 20px 10px" required/>

              <input type="email" name="mail" placeholder="Your email here.." style="margin: 0 10px 20px 0" required/>

              <input type="text" name="subject" placeholder="Enter mail subject" style="margin: 0 0 20px 10px" required/>

              <textarea placeholder="Your message.." name="message" style="color: #000" required></textarea>

              <button type="submit" name="requestbtn" >Request</button>
        </form>
              </div>
          </div>
        
        </div>
    </section>
    </section>
    </section>


    <!-- Welcome-Message Section -->
    <section id="wc_section">
      <div class="wc-header">
        <span class="span-head-icon"><img src="img/church_icon.png"></span>
        <h1 class="h1-head-text">Welcome to Our Church</h1>
        <p class="p-head-sub-text">God loves you</p>
      </div>

      <div class="wc-content">
        <div class="left">
        <p>
            Bridge Builders is an interdenominational, non-racial, non-gender based ministry, charged with the mandate of taking men to the top and getting them to heaven by the preaching of the word of faith - God's Word!<br>
            <b>What We Believe:</b> We believe in: <li>Faith</li>
                                                   <li>Miracle</li>
                                                   <li>Speaking in Tongues</li>
                                                   <li>The Holy Spirit</li>
                                                   <li>Trinity Doctrine</li>
                                                   <li>Giving</li>
                                                   <li>The Whole Bible</li>
        </p>
        
        <a href="about.php"><button class="link-butt">Read More</button></a>
        </div>

        <div class="right">
          <img src="img/intro.jpg">
        </div>
      </div>
    </section>


    <!-- Upcoming Events Section -->
    <section id="upc_events">
      <div class="upc-header">
          <span class="span-head-icon"><img src="img/event_icon.png"></span>
          <h1 class="h1-head-text">Upcoming Event</h1>
          <p class="p-head-sub-text">God loves you</p>
      </div>

      <div class="upc-content">
        <marquee>
        <h3>No events for now.</h3>
        </marquee>
      </div>
    </section>

    
    <!-- Latest Sermons -->
    <section id="latst_serm">
      <div class="lt-header">
        <span class="span-head-icon"><img src="img/sermon_icon.png"></span>
        <h1 class="h1-head-text">Latest Sermon</h1>
        <p class="p-head-sub-text">God loves you</p>
      </div>

      <div class="lt-content">
        <div class="left">
          <img src="img/sermon-t.jpg">
        </div>

        <div class="right">
            <div>
          <h3>Dealing With The Evil Forces</h3>
          <p>Sermon By: <span>Pator E. O. Erivona</span></p>
          <p>Categories: <span>The Devil and His Agents</span></p>
          <p>Date: <span> -- 2020 -- </span></p>
          </div>
          <p>
          Everytime we face an opposition to the truth of God's word, such that we feel his words lacks potency, we should know the evil spirit is at work and seriously working to crush and break our spirits by oppressing our minds to accept his darts of fear, frustration, doubt and uncertainty he throws at us. James 4:7 - "Resist the devil and he will flee from you", by quoting God's word to the devil as Jesus did in Matt 4:4, you resist him, there are seducing spirits everywhere and we should guide our hearts from them 1Tim 4:1. 
          </p>
          <a href="sermon.php"><button class="link-butt">Read Sermon</button></a>
        </div>
      </div>
    </section>


    <!-- Quotes Section -->
    <section id="quot_sect">
      <div class="qs-header">
          <span class="span-head-icon"><img src="img/quote_icon.png"></span>
          <h1 class="h1-head-text" style="color: white;">Quote Of The Week</h1>
          <p class="p-head-sub-text">God loves you</p>
      </div>

      <div class="qs-content">
        <img src="img/quote_char.png">
        <p>Now the Spirit speaketh expressly, that in the latter times some shall depart from the faith, giving heed to seducing spirits and doctrines of the devils.</p>
        <img src="img/quote_char.png"><br>
        <span>1Tim 4:1 - KJV</span>
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

    <!-- The scripting for the modal dialogs -->
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>

        <!-- Scripting for the search function -->
        <script>
          // Getting the button element
          var searchbtn = document.getElementById('search_butt');

          // Getting the input element
          var inputsearch = document.getElementById('search');

          // Setting the input element to go blank after searching
          searchbtn.onclick = function() {
            inputsearch.display = "none";
          }

        </script>
  </body>
</html>

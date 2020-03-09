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
      <link rel="stylesheet" href="css/sermon.css">
      <link rel="stylesheet" href="css/responsive_layout/sermon_responsive.css">
      <script src="js/style.js"></script>

    <title>Bridge~Builders | Sermons</title>

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
background: url('./img/sermon-bg.png') #f5f5f5;
z-index: 999;
padding: 10px 50px 0 50px;
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
background: #c45757;
border: 1px solid #c45757;
/* border-bottom: 1.5px solid #d5d67e; */
padding: 15px 20px 15px 20px;
margin: 20px 0 30px 0;
font-family: 'Courier New', Courier, monospace;
}

.my-modal-content button:hover{
color: #c45757;
border: 1px solid #c45757;
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
    <header id="nav-bar">
      <a href="index.php"><img src="img/logo.png"></a>

      <nav>
        <ul>
            <a href="index.php"><li> Home</li></a>
            <a href="about.php"><li> About Us</li></a>
            <a href="sermon.php"><li class="current"> Sermon</li></a>
            <a href="blog.php"><li> Blog</li></a>
            <a href="contact.php"><li> Contact Us</li></a>
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
      <p><img src="img/logo_3.png"> Sermons</p>

      <span>
          <p><h6><a href="index.php">Home /</a> Sermons</h6></p>
      </span>
    </section>


    <!-- Latest Sermons -->
    <section id="latst_serm" style="border-bottom: 2px solid #c42222; margin: 0; padding-top: 100px; padding-bottom: 100px;">
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
            <button class="link-butt" id="myBtn">Read Sermon</button>
            <a target="_blank" href="other/sermons/Dealing%20With%20The%20Evil%20Forces.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
        <!-- The Modal -->
        <div id="myModal" class="my-modal">
        
          <!-- Modal content -->
          <div class="my-modal-content">
              <span class="close">&times;</span><br><br>
              <div class="note">
                <h6>Date: <span> -- 2020 -- </span></h6>
                <h5>Topic: <span>Dealing With The Evil Forces.</span></h5>
                  <h6 style="text-decoration: underline">NOTE</h6>
                <p>
	Everytime we face an opposition to the truth of God's word, such that we feel his words lacks potency, we should know the evil spirit is at work and seriously working to crush and break our spirits by oppressing our minds to accept his darts of fear, frustration, doubt and uncertainty he throws at us. James 4:7 - "Resist the devil and he will flee from you", by quoting God's word to the devil as Jesus did in Matt 4:4, you resist him, there are seducing spirits everywhere and we should guide our hearts from them 1Tim 4:1. Seduction is one way the devil weakens and attacks us by making us vulnerable, he defiles us by putting up unholy scenes from TV, radio, media, etc, and some of this is beyond our control but each time we are faced with such, just plead the blood of Jesus because the blood is also an instrument of power over the devil Rev 12:11.
	There are several evil spirits fighting against believers today:
 - Spirit of Seduction or Seducing spirits - As their names implies, thery seduce believers subtling via unholy music, unholy scenes, nudity through channels like TV, radio, magazines and these actions of theirs weakens and divides the focus of believers, which produces doubts in the mind of the believers.
 - Spirit of Depression - They act as suggestive spirits and suggest impossibilities and difficulties to the minds of men, they remind people of past failures, fears and magnify issues and situations way beyond proportion thereby instilling fear in the minds of men and uncertainty as well.
 - Spirit of Gloom & Heaviness - They leave you punctuated and sap your energy and zeal to pursue your beliefs and dreams, they make sure you don't take actions anymore and try to kill your motivations and when you see these things, know that the devil is stealing from you.
	We have power and authority over all the power of the devil, Mark 16:17 - "And these signs shall follow them that believe, in my name shall i cast out devils". The devil and his agents know they must bow to that name JESUS everytime it is mentiones according to Phil 2:9-10 - "That at the name of Jesus every kneww shall bow, of things in heaven and of things in earth and things under the earth". By reason of the power given to us in Rom 16:19 - "God has given us authority to trample on snakes and scorpions and to overcome all the powers of the enemy and nothing will harm you". You can summon these evil spirits to the court of God's word, find them guilty and declare their punishments. The devil and his agents knows the scriptures and they bow to it [God's word], they know! They also know that they must bow to the name of Jesus as well, therefore anytime they cross the line, bring them to order by the word and the name of Jesus. Always use God's word to query them, when you speak that way, they know you know who you are and the authority and power you carry.
  </p>
                <button class="red-butt" id="closeBtn">Done</button>
            <a target="_blank" href="other/sermons/Dealing%20With%20The%20Evil%20Forces.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
              </div>
          </div>
        </div>
        </div>
        </div>
      </section>

    
    <!-- Sermon Tracks Section -->
    <section id="tracks_section">
      <div class="trac-header">
        <span class="span-head-icon"><img src="img/pop-sermons.png"></span>
        <h1 class="h1-head-text">Previous Sermons</h1>
        <p class="p-head-sub-text">God loves you</p>
      </div>

      <div class="trac-content">
      <div class="top">
        <div class="first">
          <img src="img/top-first.jpg">
          <h2>Communication, God's Way</h2>
          <p>Sermon: <span>Pastor E. O. Erivona</span></p>
          <p>Categories: <span>God's Communication With Us</span></p>
          <p>Date: <span>-- 2019 --</span></p>
          <p>
            When you have the mind of God, you can speak boldy. When you have a bad communication, it will only take God to remove it out of your mind. When you take in bad comunication, that is what will form you, it is also as the good communication. When you take in the word of God, he will communicate with you. When you take the word into your spirit, your spirit will become a giant.
          </p>
          <a href="sermon-1.php"><button class="link-butt">Read Sermon</button></a>
            <a target="_blank" href="other/sermons/Communication,%20God's%20Way.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
        </div>

        <div class="second">
            <img src="img/top-second.jpg">
            <h2>Higher Level Living</h2>
            <p>Sermon: <span>Pastor E. O. Erivona</span></p>
            <p>Categories: <span>Living To God's Expectations</span></p>
            <p>Date: <span>-- 2019 --</span></p>
            <p>
              Higher Level Living" means you are living by the word, i.e, training yourself to live according to God's word. Matt 4:4; Luke 4:4.<br> When you live by God's word, you are on the higher way. If nothing can stop God's word from coming to pass, it means nothing can stop you from where you want to get to. When you believe, you are what God says you are, you are living the higher level life.
            </p>
            <a href="sermon-2.php"><button class="link-butt">Read Sermon</button></a>
            <a target="_blank" href="other/sermons/Higher%20Level%20Living.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
          </div>
      </div>

      <div class="bottom">
        <div class="first">
          <img src="img/bottom-first.jpg">
          <h2>Observing God's Response To Our Issues</h2>
          <p>Sermon: <span>Mrs Erivona</span></p>
          <p>Categories: <span>God's Response To Us</span></p>
          <p>Date: <span>-- 2019 --</span></p>
          <p>
            If God can die for you, God can stand for you. John 15:6; God leads us via an inner auction to do and undo certain things in our lives. Romans 8:14; God gives us permission to know what we are suppose to know. 1 Cor 12:18; When we pray, God give us feedbacks in different kinds of ways. When praying for a specific thing, write it down.
          </p>
          <a href="sermon-3.php"><button class="link-butt">Read Sermon</button></a>
            <a target="_blank" href="other/sermons/Observing%20God's%20Response%20To520Our%20Issues.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
        </div>

        <div class="second">
          <img src="img/bottom-second.jpg">
          <h2>Strong Reasons And Contrite Heart</h2>
          <p>Sermon: <span>Pastor E. O. Erivona</span></p>
          <p>Categories: <span>The Genuine Heart</span></p>
          <p>Date: <span>-- 2019--</span></p>
          <p>
            A contrite heart is a heart that is genuine. When your heart is always  genuine, God does not despise you. A heart that is not genuine i.e carefree will have difficulties in convincing God. It is only a contrite heart that can convince God genuinely, it always gets God attention. A contrite heart  always gets God's notice.
          </p>
          <a href="sermon-4.php"><button class="link-butt">Read Sermon</button></a>
            <a target="_blank" href="other/sermons/Strong%20Reasons%20And%20Contrite%20Heart.txt" download><button class="red-butt-sermon"><i class="fa fa-download"></i></button></a>
          </div>
        </div>
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
              <p>+234 807 617 5861</p>
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

        // Get the button to close the modal 
        var closeBtn = document.getElementById("closeBtn");


        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // Close the modal when user's done reading
        closeBtn.onclick = function() {
          modal.style.display = "none";
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
    </body>
  </html>
<?php
  session_start();
  require_once("connect.php");
 ?>
<html>
  <head>
    <title>National Agricultural Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
      }
      h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 600;
        margin-bottom: 30px;
      }
      h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
      }
      .jumbotron {
        background-color: MediumSeaGreen;
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
      }
      .jumbotron .btn{
        background-color:#9ddb91;
        color:green;
        border-color:green;
      }
      .jumbotron .btn:hover{
        background-color: white;
        color: MediumSeaGreen;
      }
      .container-fluid {
        padding: 60px 50px;
      }
      .bg-grey {
        background-color: #f6f6f6;
      }
      .logo-small {
        color: MediumSeaGreen;
        font-size: 50px;
      }
      .logo {
        color: MediumSeaGreen;
        font-size: 200px;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
        height: 400px;
      }
      .thumbnail img {
        width: 100%;
        height:300px;
        margin-bottom: 10px;
      }
      .carousel-control.right, .carousel-control.left {
        background-image: none;
        color: MediumSeaGreen;
      }
      .carousel-indicators li {
        border-color: black;
      }
      .carousel-indicators li.active {
        background-color: MediumSeaGreen;
      }
      .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
      }
      .item span {
        font-style: normal;
      }
      .panel {
        border: 1px solid MediumSeaGreen;
        border-radius:0 !important;
        transition: box-shadow 0.5s;
      }
      .panel:hover {
        box-shadow: 5px 0px 30px rgba(0,0,0, .8);
        transform: translateY(5px);
      }
      .panel-footer .btn:hover {
        border: 1px solid MediumSeaGreen;
        background-color: #fff !important;
        color: MediumSeaGreen;
      }
      .panel-heading {
        color: #fff !important;
        background-color: MediumSeaGreen !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      .panel-footer {
        background-color: white !important;
      }
      .panel-footer h3 {
        font-size: 32px;
      }
      .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
      }
      .panel-footer .btn {
        margin: 15px 0;
        background-color: MediumSeaGreen;
        color: #fff;
      }
      .navbar {
        margin-bottom: 0;
        background-color: MediumSeaGreen;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
      }
      .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: green !important;
        background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }
      footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: MediumSeaGreen;
      }
      .slideanim {visibility:hidden;}
      .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
      }
      @keyframes slide {
        0% {
          opacity: 0;
          transform: translateY(70%);
        }
        100% {
          opacity: 1;
          transform: translateY(0%);
        }
      }
      @-webkit-keyframes slide {
        0% {
          opacity: 0;
          -webkit-transform: translateY(70%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0%);
        }
      }
      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
        .btn-lg {
          width: 100%;
          margin-bottom: 35px;
        }
      }
      @media screen and (max-width: 480px) {
        .logo {
          font-size: 150px;
        }
      }

    </style>

  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">E-PORTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">GALLERY</a></li>
        <li><a href="#pricing">PAYMENT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>National Agriculture Portal</h1>
  <p>Digital Platform For Every Farmer Of India</p>
  <?php
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        echo"<a href='./login/logout.php' role='button' class='btn btn-link btn-lg'>LogOut</a>";
 }
 else{
  echo"<a href='./login/login.php' role='button' class='btn btn-link btn-info btn-lg'>LogIn</a>&nbsp;&nbsp;";
  echo"<a href='./login/signup.php' role='button' class='btn btn-link btn-info btn-lg'>SignUp</a>";}
?>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Portal Page</h2><br>
      <h4>National Agriculture Portal works for the betterment of farmers of India By providing Digital platform and transparent cost and subsidies decided by the Government.</h4><br>
      <p>Farmers can sell their crops and buy agricultural products at subcisidial rate from portal.Many Sellers are here with their products.Whole Sellers are also here who will buy crops of farmers.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>Our mission is to work for betterment of Indian farmers and provide them transparent cost for their products and easy platform that they can use for selling or buying products.</h4><br>
      <p><strong>VISION:</strong> Our visio is to digitize the process in agricultural businesses in such a way that it remains transparent.Farmers can utilize the resources the best way possible.To Increase demand of Scientific techniques and equipments
      to modernize the agricultural activities, so to Increase stability in production of crops and decrease the randomness of Nature.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>PLATFORM</h4>
      <p>we provide digital platform to our farmers.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-earphone logo-small"></span>
      <h4>SOLUTIONS</h4>
      <p>we provide solutions for problems of farmers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-piggy-bank logo-small"></span>
      <h4>SUBSIDIES</h4>
      <p>we provide subsidies decided by government.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>To make India a green state</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>certified by government of India</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-credit-card logo-small"></span>
      <h4 style="color:#303030;">PAYMENT</h4>
      <p>Different payment method available.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>GALLERY</h2><br>
  <h4>What we are Doing</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src='./farmer/images/farmer13.jpg' alt="Happiness" width="400px" height="300px">
        <p><strong>Happiness</strong></p>
        <p>Yes, we make them happy</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./farmer/images/farmer5.jpg" alt="Digital_India" width="400px" height="300px">
        <p><strong>Digital India</strong></p>
        <p>Vision of India to become strongest Digital Power</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./farmer/images/farmer6.jpg" alt="transparency" width="400px" height="300px">
        <p><strong>Transparent price and subsidy</strong></p>
        <p>We provide price and subsidy decided by Government</p>
      </div>
    </div>
  </div><br>

  <h2>What our farmers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This portal is the best. I am so happy with the result!"<br><span>Kishan Patel, Vice President, Gujarat agricultural association</span></h4>
      </div>
      <div class="item">
        <h4>"I am very impressed with this portal,it provides such an easy way to use."<br><span>Ramabhai Khant, farmer, Mahesana</span></h4>
      </div>
      <div class="item">
        <h4>"This portal is very good and provide a modernized approach to agriculture."<br><span>Hashmukhbhai Prajapati, farmer, Nagvasan</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Payment</h2>
    <h4>Choose a payment method that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Net Bnking</h1>
        </div>
        <div style="height:350px;padding-top:100px" class="panel-body">
          <img src="login/net.jpg">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Apply</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>UPI</h1>
        </div>
        <div style="height:350px;" class="panel-body">
          <img src="login/upi.jpg">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Apply</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Credit card</h1>
        </div>
        <div style="height:350px;" class="panel-body">
          <img style="width:400px" src="login/credit.jpg">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Apply</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Go To Top</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

</script>

</body>
</html>

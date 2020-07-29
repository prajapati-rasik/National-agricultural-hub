<?php
  session_start();
  /*if(!(isset($_SESSION["loggedin"])) || $_SESSION["loggedin"] !== true || $_SESSION["type"]!="farmer"){
    header("location: ../index.php");
  }*/
  require_once("../connect.php");
?>
<html>
  <head>
    <title>Profile page</title>
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
        background-color: MediumSeaGreen;
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
      .train{
        background-color: white;
      }
      .jumbotron {
        background-color: MediumSeaGreen;
        color: #fff;
        height: 250px;
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
        box-shadow:5px 0px 10px rgba(0,0,0, .5);
      }
      .thumbnail img {
        width: 100%;
        height: 300px;
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
        box-shadow: 5px 0px 40px rgba(0,0,0, .5);
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
      .custum{
        color: green;
        text-align: center;
        margin-right: 40px;
        padding-top:10px;
        font-weight:bold;
        padding-bottom:10px;
      }
      .custum:hover{
        transform: translateY(3px);
        background-color: #f6f6f6;
        box-shadow: 5px 0px 15px rgba(0,0,0, .5);
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
  <body class="bg-grey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../login/logout.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1>National Agriculture Portal</h1>
      <p>Digital Platform For Every Farmer Of India</p>
    </div>

    <div style="padding:0px 0px" class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <img style="margin-bottom: 15px;margin-left:60px;box-shadow: 5px 0px 15px rgba(0,0,0, .5);"
          src="../login/picr.svg" class="img-circle img-responsive" alt="avatar" width="100" height="100">
          <ul style="list-style:none;">
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#advertisement">Add Ads</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#your">Your Ads</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#details">Details</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#contact">Contact</a></li>
          </ul>
        </div>
        <div style="padding-top:20px" class="col-sm-10 train">
        <div id="advertisement" class="container-fluid">
        <h2 class="text-center">ADD Advertisement</h2>
        <div class="row">
          <div class="col-sm-12">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data" method="post">
                <span>title :- </span><input style="width:100%" name="cn" type="text"><br><br>
                <span style="float:left">Discription :- </span><textarea style="width:100%" name="desc" rows="3"></textarea><br><br>
                <span style="float:left">Image :- </span><input style="width:100%" style="float:left" type="file" name="img"><br><br>
                <input type="submit" name="add" value="ADD Advertisement" class="btn btn-lg"><br>
              </form>
          </div>
        </div><?php
          if(isset($_POST["add"])){
             $name = $_POST["cn"];
             $disc = $_POST["desc"];
             $img = $_FILES["img"]["name"];
             $temp_img = $_FILES["img"]["tmp_name"];
             $tm=md5(time());
             $dst1="images/".$tm.basename($img);
             move_uploaded_file($temp_img,$dst1);
             $date = date("Y-m-d");
             $qr = "INSERT INTO advertisement VALUES ('','$name','$dst1','$disc','$_SESSION[id]')";
             mysqli_query($link,$qr);
             ?><script>alert("advertisement successfully added.");</script><?php
             ?><script>window.location="./advertiser_profile.php";</script><?php
           }?>
        </div>
          <div id="your" class="container-fluid bg-grey">
          <h2 class="text-center">YOUR ADS</h2>
          <?php
            $sel_adv = "SELECT * FROM Advertisement WHERE advertiser_id ='$_SESSION[id]'";
            $rel_adv = mysqli_query($link,$sel_adv);
            if(!($rel_adv)){
             echo "<div class='row text-center'>
                  <div class='col-sm-12'>You do not have advertisements</div>
              </div>";
            }
            else{
              $num_rows = mysqli_num_rows($rel_adv);
              $i=0;
              for($i=0;$i<$num_rows;$i++){
                if($i%3==0){
                  echo "<div class='row'>";
                }
                $count1 = 0;
                for($count1=0;$count1<3;$count1++){
                  $row = mysqli_fetch_array($rel_adv);
                  if($row){
                  echo "
                  <div class='col-sm-4'>
                    <div class='thumbnail text-center'>
                      <img src=".$row['image']." alt='product image' width='200px' height='300px'>
                      <p><strong>".$row['title']."</strong></p>
                      <p>".$row["description"]."</p>
                    </div>
                  </div>
                  ";}
                }
                if($i%3==0){
                  echo "</div>";
                }
                $i+=2;
              }
            }
        ?>
      </div>
      <div id="details" class="container-fluid">
      <h2 class="text-center">YOUR DETAILS</h2>
      <div class="row">
        <div class="col-sm-12">
          <?php
          $pr = "SELECT * FROM advertiser WHERE advertiser_id= '$_SESSION[id]'";
          $result = mysqli_query($link,$pr);
          $row = mysqli_fetch_array($result);
          echo "<b>Name :- </b>".$row['Name']."<br><b>Contact No :- </b>".$row['mobile_no']."<br><b>Email :- </b>".$row['Email_id']."<br><b>Address :- </b>".$row['society']."<br>".$row['city'].",".$row['taluka'].",".$row['district']."<br>".$row['state'];
           ?>
        </div>
      </div>
    </div>
        <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
          <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Ahmedabad, India</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 9898989898</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@example.com</p>
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
    </div>
  </div>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a,.custum a, footer a[href='#myPage']").on('click', function(event) {
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

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
      input.ser{
        width:auto;
        margin-left:20px;
        margin-right:20px;
        padding:10px 10px;
        border:2px solid green;
      }
      input.ser:hover{
        width:700px;
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
      tr{
        border:2px solid black;
      }
      td{
        padding: 5px 58px;
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
          <img style="margin-bottom:15px;margin-left:60px;box-shadow: 5px 0px 15px rgba(0,0,0, .5);"
          src="../login/picr.svg" class="img-circle img-responsive" alt="avatar" width="100" height="100">
          <ul style="list-style:none;">
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#search">SEARCH CROP</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#crop">BUY CROP</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#buy">YOUR CROPS</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#bought">Transactions</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#details">DETAILS</a></li>
            <li class="custum"><a style="color:green;text-decoration:none;font-size:18px;" href="#contact">CONTACT</a></li>
          </ul>
        </div>
        <div style="padding-top:20px" class="col-sm-8 train">
          <div id="search" class="container-fluid">
          <h2 class="text-center">SEARCH CROP</h2>
          <div class="row">
            <div class="col-sm-12">
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                 <input class="ser" name="crop" type="text" placeholder="Search for crop">
                 <input style="float:left" type="submit" name="search" class="btn btn-lg" value="search">
              </form>
            </div>
         </div>
          <?php
            if(isset($_POST["search"])){
              $sreach = $_POST["crop"];
              $sel_crp = "SELECT * FROM crop WHERE C_name='$sreach'";
              $rel_crp = mysqli_query($link,$sel_crp);
              if(mysqli_num_rows($rel_crp)==0){
               echo "<div class='row text-center'>
                    <div class='col-sm-12'> No Crop Found</div>
                </div>";
              }
              else{
                $num_row = mysqli_num_rows($rel_crp);
                $i=0;
                for($i=0;$i<$num_row;$i++){
                  if($i%3==0){
                    echo "<div class='row'>";
                  }
                  $count = 0;
                  for($count=0;$count<3;$count++){
                    $row = mysqli_fetch_array($rel_crp);
                    if($row){
                    echo "
                    <div class='col-sm-4'>
                      <div style='margin-top:20px' class='thumbnail text-center bg-grey'>
                        <p class='text-center'><b>Crop ID :".$row['crop_id']."></p>
                        <img src=../farmer/".$row['C_image']." alt='crop image' width='200px' height='300px'>
                        <p><strong>".$row['C_name']."</strong></p>
                        <p>breed :-".$row['breed']." </p>
                        <p>".$row["C_description"]."</p>
                        <p>Price : ".$row['cost_per_unit']." per unit</p>
                        <p>Quntity available : ".$row['quantity']."</p>
                      </div>
                    </div>
                    ";}
                  }
                  if($i%3==0){
                    echo "</div>";
                  }
                  $i+=$count;
                }
              }
          }
          ?></div>
          <div id="crop" class="container-fluid bg-grey">
          <h2 class="text-center">BUY CROP</h2>
          <div class="row">
            <div class="col-sm-12">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <span>Crop ID :- </span><input style="width:100%" name="cid" type="text"><br><br>
                <span>Qunatity :- </span><input style="width:100%" name="qtn" type="text"><br><br>
                <input type="submit" name="buy" value="BUY CROP" class="btn btn-lg"><br>
              </form>
            </div>
          </div>
          <?php
          if(isset($_POST["buy"])){
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                $c_id = $_POST["cid"];
                $qty = $_POST["qtn"];
                $qr = "SELECT * FROM crop WHERE crop_id = $c_id";
                $rel = mysqli_query($link,$qr);
                $result = mysqli_fetch_array($rel);
                if($result){
                if($result["quantity"]>=$qty){
                  $q = $result["quantity"]-$qty;
                  $hr = "UPDATE crop SET quantity='$q' WHERE crop_id='$p_id'";
                  mysqli_query($link,$hr);
                  $cost = $qty*$result['cost_per_unit'];
                  $date = date("Y-m-d");
                  $new = "INSERT INTO sell_crop VALUES('$result[Farmer_id]','$_SESSION[id]','$c_id','$cost','$qty','$date')";
                  mysqli_query($link,$new);
                  ?><script>alert("crop bought successfully");</script><?php
                }else{
                  ?><script>alert("Quantity not available.");</script><?php
                }
              }else{
                ?><script>alert("Invalid ID");</script><?php
              }
              }
              ?><script>window.location="./wseller_profile.php";</script><?php
          }?>
         </div>
          <div id="buy" class="container-fluid">
          <h2 class="text-center">CROPS YOU HAVE BOUGHT</h2>
        <?php
            $sel_crop = "SELECT crop_id FROM sell_crop WHERE whole_seller_id ='$_SESSION[id]'";
            $rel_crop = mysqli_query($link,$sel_crop);
            if(mysqli_num_rows($rel_crop)==0){
             echo "<div class='row text-center'>
                  <div class='col-sm-12'>You do not have crops</div>
              </div>";
            }
            else{
              $num_rows = mysqli_num_rows($rel_crop);
              $i=0;
              for($i=0;$i<$num_rows;$i++){
                if($i%3==0){
                  echo "<div class='row'>";
                }
                $count1 = 0;
                for($count1=0;$count1<3;$count1++){
                  $row1 = mysqli_fetch_array($rel_crop);
                  if($row1){
                  $crop_desc = "SELECT * FROM crop WHERE crop_id ='$row1[crop_id]'";
                  $result = mysqli_query($link,$crop_desc);
                  $row = mysqli_fetch_array($result);
                  if($row){
                  echo "
                  <div class='col-sm-4'>
                    <div class='thumbnail text-center bg-grey'>
                      <img src=../farmer/".$row['C_image']." alt='product image' width='200px' height='300px'>
                      <p><strong>".$row['C_name']."</strong></p>
                      <p>Breed :- ".$row["breed"]."</p>
                      <p>".$row["C_description"]."</p>
                      <p>Price : ".$row['cost_per_unit']." per unit </p>
                      <p>Quntity available : ".$row['quantity']."</p>
                    </div>
                  </div>
                  ";}
                }
                }
                if($i%3==0){
                  echo "</div>";
                }
                $i+=2;
              }
            }
        ?></div>
        <div id="bought" class="container-fluid bg-grey">
        <h2 class="text-center">TRANSACTIONS</h2>
        <div class="row">
          <div class="col-sm-12">
            <?php
                $qr = "SELECT * FROM sell_crop WHERE Whole_seller_id='$_SESSION[id]'";
                $rel = mysqli_query($link,$qr);
                $result = mysqli_fetch_array($rel);
                if($result){
                echo "<table><tr><td>Name</td>
                      <td>Total cost</td>
                      <td>Quantity</td>
                      <td>Date</td>
                      <td>seller</td></tr>
                ";
                while($result){
                  $pr = "SELECT Name FROM farmer WHERE Farmer_id='$result[Farmer_id]'";
                  $yo = mysqli_query($link,$pr);
                  $row = mysqli_fetch_array($yo);
                  $hr = "SELECT C_name FROM crop WHERE crop_id='$result[crop_id]'";
                  $pl = mysqli_query($link,$hr);
                  $row1 = mysqli_fetch_array($pl);
                  echo "<tr><td>".$row1['C_name']."</td><td>".$result['total_cost']."</td><td>".$result['quantity']."</td>
                  <td>".$result['date']."</td><td>".$row['Name']."</td></tr>";
                  $result = mysqli_fetch_array($rel);
                }
                echo "</table>";
              }
                else{
                  echo "<div class='row text-center'>
                       <div class='col-sm-12'>You do not have transactions</div>
                   </div>";
                }
             ?>
          </div>
        </div>
      </div>
        <div id="details" class="container-fluid ">
        <h2 class="text-center">YOUR DETAILS</h2>
        <div class="row">
          <div class="col-sm-12">
            <?php
            $pr = "SELECT * FROM whole_seller WHERE Whole_seller_id= '$_SESSION[id]'";
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
    <div class="col-sm-2">
      <?php
      $sel = "SELECT * FROM Advertisement";
      $rel = mysqli_query($link,$sel);
      if($rel){
      $num_rows = mysqli_num_rows($rel);
      if($num_rows >= 8){
        $num_rows = 8;
      }
      else{
        $i=0;
        for($i=0;$i<$num_rows;$i++){
            $row = mysqli_fetch_array($rel);
            echo "<div class='row' style='padding-top:10px;padding-bottom:10px;padding-left:5px;padding-right:5px'>
            <div class='col-sm-12'>
              <div class='thumbnail text-center bg-grey'>
                <img src=../advertiser/".$row['image']." alt='product image' width='200px' height='300px'>
                <p><strong>".$row['title']."</strong></p>
                <p>".$row["description"]."</p>
              </div>
            </div>
          </div>";
      }
    }
  }
      ?>
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

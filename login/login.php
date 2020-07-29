  <?php
  // Initialize the session
  session_start();

  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    if($_SESSION["type"]=="farmer")
      header("Location: ../farmer/farmer_profile.php");
    else if($_SESSION["type"]=="seller")
      header("Location: ../seller/seller_profile.php");
    else if($_SESSION["type"]=="advertiser"){
      header("Location: ../advertiser/advertiser_profile.php");
    }else {
      header("Location: ../whole_seller/wseller_profile.php");
    }
    exit;
  }
  $mob_err = "";
  $password_err = "";
  // Include connect file
  require_once("../connect.php");
   ?>
  <html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <title>Log In</title>
    <style>
    body{
      background-color : MediumSeaGreen;
      position: relative;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-clip: border-box;
    }

    span{
      font-size: 20px;
      font-family: 'Lobster', cursive;
    }

    span.error{
      color: red;
      font-size: 12px;
      font-family: monospace;
      font-weight: bold;
    }

    div.inner{
      border : none;
      margin-left: 470px;
      margin-right: 100px;
      margin-top: 20px;
      padding-top: 40px;
      padding-left: 70px;
      padding-bottom: 20px;
      margin-bottom: 100px;
      width:500px;
      height:480px;
      font-size: 18;
      font-weight: bold;
      align-self: auto;
      float: left;
      background-color: white;
      box-shadow: 5px 0px 40px rgba(0,0,0, .5);
    }

    h1{
      font-family: 'Lobster', cursive;
      color: white;
      margin-left: 630px;
      margin-top: 10px;
      margin-bottom: 0px;
    }

    input{
      width:300px;
      height: 30px;
      border-bottom: 2px solid MediumSeaGreen;
      background-color: inherit;
      border-top: none;
      border-left: none;
      border-right: none;
      color: black;
      margin-top: 10px;
      margin-bottom: 10px;
      size: 20px;
    }

    input.ng-invalid.ng-touched{
      border-bottom-color: red;
    }

    input:hover{
      transform: translateY(5px);
      transition-duration: 0.4s;
    }

    img.i1{
      width: 100px;
      height: 100px;
      margin-left: 700px;
      margin-top: 00px;
      position: relative;
      box-shadow: 5px 0px 40px rgba(0,0,0, .5);
      border-radius: 50px;
    }

    option{
      color:white;
      background-color: #642EFE;
      height:25px;
    }

    select{
      background-color: inherit;
      width:200px;
      height: 30px;
      color: white;
    }

    .button{
      width: 100px;
      height: 50px;
      align-self: center;
      text-align: center;
      background-color:MediumSeaGreen;
      font-size: 12;
      border: 2px solid MediumSeaGreen;
      box-shadow: 5px 0px 5px rgba(0,0,0, .5);
      margin-top: 20px;
      border-radius: 10px;
      margin-bottom: 70px;
    }

    .button:hover {
        background-color: ;
        transform: translateY(3px);
        transition: 0.4s all ease;
    }
    </style>
  </head>
    <body>
      <div ng-app = "RegistrationForm" ng-controller = "Registration">
        <img class="i1" src="./picr.svg"></img>
        <h1>Log In to your account</h1><br/>
        <div class="inner">
        <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
          <span>Mobile No. :- </span><input type="tel" name="mob" placeholder="XXXXXXXXXX" ng-model="mobile_no" ng-pattern="/^[0-9]{1,10}$/"
            maxlength="10" ng-minlength="10" ng-required="true"><br>
          <span class="error" ng-show="myForm.mob.$touched && myForm.mob.$error.required">Field is required.</span>
          <span class="error" ng-show="myForm.mob.$touched && (myForm.mob.$error.minlength)">
            Exactly 10 digits required</span>
          <span class="error" ng-show="myForm.mob.$touched && myForm.mob.$error.pattern">Only Digits are allowed</span>
          <span>Password :- </span><input type="password" name="pass" id="password" ng-model="password" ng-required="true"
            ng-minlength="8" ng-pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"><br>
          <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.required">Field is required</span>
          <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.minlength">Minimum 8 characters required</span>
          <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.pattern">It should contain one uppercase,one lowercase and one digit</span>
          &nbsp;&nbsp;<input style="width:15px;height:15px" type="checkbox" ng-click="ShowPassword()"><span>Show Password </span><br><br>
  		    <input class="button" type="submit" name="submit" ng-disabled=" myForm.mob.$invalid || myForm.pass.$invalid" value="LogIn">&nbsp;&nbsp;
          &nbsp;&nbsp;<input class="button" type="reset" value="Reset">
           <br><a href="#" align="center" style="color:green;text-decoration:none">Forgot password?</a>
                   <hr width="450px" align="left">
            <font size="5px" color="green">New to site?
          <a href="./signup.php" style="color:red;text-decoration:none"> Create Account </a></font>
        </form>
      </div>
  </div>
    <script>
    var app = angular.module("RegistrationForm",[]);

    app.controller("Registration",function($scope){
      $scope.ShowPassword = function(){
        var x = document.getElementById("password");

        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      };
  });
    </script>

<?php
    if(isset($_POST["submit"])){

      $mob_err="";
      $password_err="";


      if(empty(trim($_POST["mob"]))){
          $mob_err = "Please enter Mobile Number.";
      }else if(strlen($_POST["mob"])!=10){
          $mob_err = "Mobile Number should have 10 digits";
      }else if(!(preg_match("/^[0-9]{1,10}$/",$_POST["mob"]))){
          $mob_err = "Mobile Number should only contain digits";
      }else{
          $mob = trim($_POST["mob"]);
      }


      if(empty(trim($_POST["pass"]))){
          $password_err = "Please enter your password";
      } else{
          $password = trim($_POST["pass"]);
      }

      if(empty($mob_err) && empty($password_err)){
          $sql = "SELECT Person_id, password FROM Login WHERE mobile_no = '$mob'";
          $rel = mysqli_query($link, $sql);
              if(mysqli_num_rows($rel) == 1){
                          $result=mysqli_fetch_array($rel);
                          if($password == $result["password"]){
                              $date = date("Y-m-d");
                              $id = $result["Person_id"];
                              $pql = "UPDATE Login SET last_visit='$date' WHERE mobile_no='$mob'";
                              mysqli_query($link,$pql);
                              $wer = "SELECT type FROM person WHERE person_id ='$id'";
                              $ool = mysqli_query($link,$wer);
                              $gull = mysqli_fetch_array($ool);
                              $type = $gull["type"];
                              session_start();
                              $_SESSION["loggedin"] = true;
                              $_SESSION["id"] = $id;
                              $_SESSION["type"] = $type;
                              if($_SESSION["type"]=="farmer"){
                                ?><script>window.location="../farmer/farmer_profile.php";</script><?php
                              }else if($_SESSION["type"]=="seller"){
                                ?><script>window.location="../seller/seller_profile.php";</script><?php
                              }else if($_SESSION["type"]=="whole seller"){
                                ?><script>window.location="../whole_seller/wseller_profile.php";</script><?php
                              }else{
                                ?><script>window.location="../advertiser/advertiser_profile.php";</script><?php
                              }
                          }
                          else{
                              $password_err = "The password you entered was not valid.";
                          }
              }else{
                      $mob_err = "No account found with that mobile number.";
                   }
        } else{
                  ?><script>alert("Oops! Something went wrong. Please try again later.");</script><?php
        }
    }
  ?>
  </body>
  </html>

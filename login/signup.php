<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Registration Form</title>
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
      height:600px;
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
      margin-left: 660px;
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
      margin-bottom: 100px;
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
      <img class="i1" src="picr.svg">
      <h1>SignUp Form</h1>
      <form name="myForm" action="<?php echo htmlspecialchars("./add_person.php"); ?>" method="post" novalidate>
      <div class="inner">
        <span>FirstName :- </span><input name="frname" type="text" required ng-model="fname" ng-required="true" placeholder="enter your FirstName"><br>
        <span class="error" ng-show="myForm.frname.$touched && myForm.frname.$error.required">Field is required</span><br><br>
        <span>LastName :- </span><input name="lsname" type="text" required ng-model="lname" ng-required="true" placeholder="enter your lastname"><br>
        <span class="error" ng-show="myForm.lsname.$touched && myForm.lsname.$error.required">Field is required</span><br><br>
        <span>Mobile No. :- </span><input type="tel" name="mob" placeholder="XXXXXXXXXX" ng-model="mobile_no" ng-pattern="/^[0-9]{1,10}$/"
          maxlength="10" ng-minlength="10" ng-required="true"><br>
        <span class="error" ng-show="myForm.mob.$touched && myForm.mob.$error.required">Field is required.</span>
        <span class="error" ng-show="myForm.mob.$touched && (myForm.mob.$error.minlength)">
          Exactly 10 digits required</span>
        <span class="error" ng-show="myForm.mob.$touched && myForm.mob.$error.pattern">Only Digits are allowed</span><br>
        <br><br><span>Profession :-</span><br><input style="width:15px;height:15px" type="radio" name="type" value="farmer"><span>Farmer</span><br>
                          <input style="width:15px;height:15px" type="radio" name="type" value="seller"><span>Seller</span><br>
                          <input style="width:15px;height:15px" type="radio" name="type" value="whole seller"><span>Whole Seller</span><br>
                          <input style="width:15px;height:15px" type="radio" name="type" value="advertiser"><span>Advertiser</span><br>
        <br/>
      </div>
      <div class="inner">
        <span>Email :- </span><br><input type="email" name="mail" ng-model="email" placeholder="your email" ng-required="true"><br>
        <span class="error" ng-show="myForm.mail.$touched && myForm.mail.$error.required">Field is required.</span>
        <span class="error" ng-show="myForm.mail.$touched && myForm.mail.$error.email">Please enter valid email id.</span><br>
        <span>Password :- </span><input type="password" name="pass" id="password" ng-model="password" ng-required="true"
          ng-minlength="8" ng-pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"><br>
        <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.required">Field is required</span>
        <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.minlength">Minimum 8 characters required</span>
        <span class="error" ng-show="myForm.pass.$touched && myForm.pass.$error.pattern">It should contain one uppercase,one lowercase and one digit</span><br>
        &nbsp;&nbsp;<input style="width:15px;height:15px" type="checkbox" ng-click="ShowPassword()"><span>Show Password </span><br><br>
        <span>Confirm Password :- </span><input type="password" name="ret" id="retype" ng-model="retype" ng-required="true"><br>
        <span class="error" ng-show="myForm.ret.$touched && password!==retype">Not matched with password</span>
        <span class="error" ng-show="myForm.ret.$touched && myForm.ret.$error.required">Field is required</span><br>
        <span>Account No :- </span><input type="text" name="acc" ng-model="acct" ng-required="true"><br>
        <span class="error" ng-show="myForm.acc.$touched && myForm.acc.$error.required">Field is required</span><br>
        <span>Bank Name :- </span><input type="text" name="bname" ng-model="bnam" ng-required="true"><br>
        <span class="error" ng-show="myForm.bname.$touched && myForm.bname.$error.required">Field is required</span><br>
        <span>Bank Branch :- </span><input type="text" name="branc" ng-model="brn" ng-required="true"><br>
        <span class="error" ng-show="myForm.branc.$touched && myForm.branc.$error.required">Field is required</span><br>
        <span>IFSC code :- </span><input type="text" name="ifsc" ng-model="IFSC" ng-required="true"><br>
        <span class="error" ng-show="myForm.ifsc.$touched && myForm.ifsc.$error.required">Field is required</span><br>
      </div>
      <div class="inner">
        <span>STATE :- </span><input name="state" type="text" ng-model="State" ng-required="true"><br>
        <span class="error" ng-show="myForm.state.$touched && myForm.state.$error.required">Field is required</span><br>
        <span><br><br>District :-</span><br><input id="dist" name="dist" type="text" ng-model="dist" ng-required="true"><br>
		    <span class="error" ng-show="myForm.dist.$touched && myForm.dist.$error.required">Field is required</span><br>
        <span>Taluka :- </span><br><input id="ta" name="taluka" ng-model="taluka" type="text"  ng-required="true"><br>
        <span class="error" ng-show="myForm.taluka.$touched && myForm.taluka.$error.required">Field is required</span><br>
        <span>City:- </span><br><input id="city" name="city" ng-model="City" type="text" ng-required="true"><br>
        <span class="error" ng-show="myForm.city.$touched && myForm.city.$error.required">Field is required</span><br>
	     	<span>Society:- </span><br><input id="society" name="society" ng-model="Society" type="text" ng-required="true"><br>
        <span class="error" ng-show="myForm.society.$touched && myForm.society.$error.required">Field is required</span><br>
	    	<span>House No:- </span><br><input id="han" name="hn" ng-model="Ho_no" type="text" ng-required="true" ><br>
        <span class="error" ng-show="myForm.hn.$touched && myForm.hn.$error.required">Field is required</span><br><br/>
      </div>
      <div style="height:100px" class="inner">
        <input class="button" type="submit" ng-disabled="myForm.$invalid" value="submit" name="submit">
      </div>
    </div>
    </form>
<script>
var app = angular.module("RegistrationForm",[]);

app.controller("Registration",function($scope){

$scope.states = ["RAJASTHAN","MAHARASTRA"];

$scope.initialize = function(){
  $scope.fname = null;
  $scope.lname = null;
  $scope.mobile_no = null;
  $scope.email = null;
  $scope.retype = null;
  $scope.password = null;
  $scope.State = "GUJARAT";
  $scope.City = null;
  $scope.Society = null;
  $scope.taluka = null;
  $scope.dist = null;
};

$scope.initialize();

$scope.ShowPassword = function(){
      var x = document.getElementById("password");
      var y = document.getElementById('retype');
      if (x.type === "password") {
        x.type = "text";
        y.type = "text";
      } else {
        x.type = "password";
        y.type = "password";
      }
};

});

</script>
  </body>
</html>

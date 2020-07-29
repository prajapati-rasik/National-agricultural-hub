<?php
    require_once("../connect.php");
    session_start();

    if(isset($_POST["submit"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $fname = $_POST["frname"];
      $lname = $_POST["lsname"];
      $name = $fname." ".$lname;
      $mail = $_POST["mail"];
      $mob = $_POST["mob"];
      $password = $_POST["pass"];
      $retype = $_POST["ret"];
      $state = $_POST["state"];
      $dist = $_POST["dist"];
      $taluka = $_POST["taluka"];
      $city = $_POST["city"];
      $society = $_POST["society"];
      $house_no = $_POST["hn"];
      $type = $_POST["type"];
      $account = $_POST["acc"];
      $b_name = $_POST["bname"];
      $branch = $_POST["branc"];
      $code = $_POST["ifsc"];
      $date = date("Y-m-d");
      $sql = "SELECT * FROM Login WHERE mobile_no='$mob'";
      $rel = mysqli_query($link,$sql);
      if(mysqli_num_rows($rel)!=0){
        ?>
        <script>alert("This mobile number is already associated with some account,TRY ANOTHER");</script>
      <?php
        header("Location:./signup.php");
      }
      else{
        if($type == "farmer"){
          $id = "F".$mob;
          $gr = "INSERT INTO person VALUES ('$id','$type')";
          mysqli_query($link,$gr);
          $qr = "INSERT INTO farmer VALUES ('$id','$name','$mob','$mail','$date',1,'$city','$society','$taluka','$dist','$state',$house_no)";
            mysqli_query($link,$qr);
          $pr = "INSERT INTO login VALUES ('$mob','$password','$date','$id')";
            mysqli_query($link,$pr);
        }else if($type=="seller"){
          $id = "S".$mob;
          $gr = "INSERT INTO person VALUES ('$id','$type')";
          mysqli_query($link,$gr);
          $qr = "INSERT INTO seller VALUES ('$id','$name','$mob','$mail','$date','$city','$society','$taluka','$dist','$state',$house_no)";
            mysqli_query($link,$qr);
          $pr = "INSERT INTO login VALUES ('$mob','$password','$date','$id')";
            mysqli_query($link,$pr);
        }else if($type=="whole seller"){
          $id = "W".$mob;
          $gr = "INSERT INTO person VALUES ('$id','$type')";
          mysqli_query($link,$gr);
          $qr = "INSERT INTO whole_seller VALUES ('$id','$name','$mob','$mail','$date','$city','$society','$taluka','$dist','$state',$house_no)";
            mysqli_query($link,$qr);
          $pr = "INSERT INTO login VALUES ('$mob','$password','$date','$id')";
            mysqli_query($link,$pr);
        }else{
          $id = "A".$mob;
          $gr = "INSERT INTO person VALUES ('$id','$type')";
          mysqli_query($link,$gr);
          $qr = "INSERT INTO advertiser VALUES ('$id','$name','$mob','$mail','$date','$city','$society','$taluka','$dist','$state',$house_no)";
            mysqli_query($link,$qr);
          $pr = "INSERT INTO login VALUES ('$mob','$password','$date','$id')";
            mysqli_query($link,$pr);
        }
        $br = "INSERT INTO bank_details VALUES('$account','$b_name','$branch','$code','$id')";
        mysqli_query($link,$br);
          // Store data in session variables
          $_SESSION["loggedin"] = true;
          $_SESSION["id"] = $id;
          $_SESSION["type"] = $type;

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
        }
      }
    }
    mysqli_close($link);
    }
 ?>

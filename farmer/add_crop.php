<?php
    require_once("../connect.php");
    session_start();
    if(isset($_POST["add"])){
      $name = $_POST["cn"];
      $breed = $_POST["brd"];
      $quantity = $_POST["qun"];
      $price = $_POST["cost"];
      $disc = $_POST["desc"];
      $img = $_FILE["img"]["name"];
      $temp_img = $_FILE["img"]["tmp_name"];
       $tm=md5(time());
       $dst="../farmer/images/".$tm.$img;
      $dst1="farmer/images/".$tm.$img;
      move_uploaded_file($temp_img,$dst);
      $date = date("Y-m-d");
      $qr = "INSERT INTO crop VALUES ('','$name','$dst1','$disc','$breed','$quantity','$date','$price','$_SESSION[id]')";
      mysqli_query($link,$qr);
      ?><script>alert("crop successfully added.");</script><?php
      header("Location: ./farmer_profile.php");
    }
 ?>

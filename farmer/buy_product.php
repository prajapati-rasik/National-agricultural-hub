<?php

require_once("../connect.php");
session_start();

if(isset($_POST["buy"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $p_id = $_POST["Pid"];
      $qty = $_POST["qtn"];
      $qr = "SELECT * FROM product WHERE Product_id = $p_id";
      $rel = mysqli_query($link,$qr);
      $result = mysqli_fetch_array($rel);
      if($result){
      if($result["quantity"]<=$qty){
        if($result["quantity"]==$qty){
          $hr = "DELETE FROM product WHERE Product_id='$p_id'";
          mysqli_query($link,$hr);
        }else{
          $q = $result["quantity"]-$qty;
          $hr = "UPDATE product SET quantity='$q' WHERE Product_id='$p_id'";
          mysqli_query($link,$hr);
        }
        $cost = $qty*$result['cost_per_unit'];
        $total = $cost - (($cost*$result['subsidy_rate'])/100);
        $date = date("Y-m-d");
        $new = "INSERT INTO sell_product VALUES('$_SESSION[id]','$result[seller_id]','$p_id','$total','$qty','$date')";
        mysqli_query($link,$new);
      }else{
        ?><script>alert("Quantity not available.");</script><?php
      }
    }else{
      ?><script>alert("Invalid ID");</script><?php
    }
    }
    ?><script>window.location="./farmer_profile.php");</script><?php
}
 ?>

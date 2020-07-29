<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"rasik");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<?php
session_start();
if(isset($_SESSION['username'])){
  
  header('Content-Type: application/json');
    $name = $_POST['id'];
    $email1 = $_POST['email1'];
    echo "<script>alert('$name')</script>";
    $servername = "den1.mysql4.gear.host";
    $username = "makeyourcakedb";
    $password = "hriday@123";
    $dbname = "makeyourcakedb";

  $con = mysqli_connect($servername, $username, $password,$dbname);
  $sql = "INSERT INTO cart (cid,quant,username) VALUES ($name,1,'$email1')";
  mysqli_query($con, $sql);
  $a = mysqli_error ($con);
  echo "<script>alert($a);</script>";

  echo "<script>alert('added full')</script>";
  }
?>
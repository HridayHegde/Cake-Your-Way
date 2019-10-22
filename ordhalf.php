<?php
session_start();

if(isset($_SESSION['username'])){
//$email = $_SESSION['username'];
header('Content-Type: application/json');
    $name = $_POST['id'];
    $email1 = $_POST['email1'];
    console.log($name);
    console.log($email1);
    $servername = "den1.mysql4.gear.host";
    $username = "makeyourcakedb";
    $password = "hriday@123";
    $dbname = "makeyourcakedb";

  $con = mysqli_connect($servername, $username, $password,$dbname);
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  $sql = "INSERT INTO cart (cid,quant,username) VALUES ($name,0,'$email1')";
  mysqli_query($con, $sql);
  $a = mysqli_error ($con);
  console.log($a);

  echo "<script>alert('added half')</script>";
}
?>
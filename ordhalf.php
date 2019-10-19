<?php
session_start();
if(isset($_SESSION)){
$email = $_SESSION['username'];
header('Content-Type: application/json');
    $name = $_POST['id'];
    echo "<script>alert('$name')</script>";
    $servername = "den1.mysql4.gear.host";
    $username = "makeyourcakedb";
    $password = "hriday@123";
    $dbname = "makeyourcakedb";

  $con = mysqli_connect($servername, $username, $password,$dbname);
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  $sql = "INSERT INTO cart (cid,quant,username) VALUES ($name,0,$email)";
  mysqli_query($con, $sql);


}
?>
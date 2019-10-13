<?php
/* Attempt MySQL server connection.*/ 
$servername = "den1.mysql4.gear.host";
$username = "makeyourcakedb";
$password = "hriday@123";
$dbname = "makeyourcakedb";


$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name= mysqli_real_escape_string($link,$_REQUEST['name']);
$password = mysqli_real_escape_string($link,  hash('sha256', $_REQUEST['password']));
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
 
// Attempt insert query execution
$sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "added : ","email : $email ","Name : $name ","password : $password";
    echo "<script> window.location.assign('RegSuccess.php')</script>";	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
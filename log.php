<?php
session_start();
/* Attempt MySQL server connection.*/ 
$servername = "den1.mysql4.gear.host";
$username = "makeyourcakedb";
$password = "hriday@123";
$dbname = "makeyourcakedb";


$link = mysqli_connect($servername, $username, $password);
mysqli_select_db($link, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$name= mysqli_real_escape_string($link,$_REQUEST['name']);
$password = mysqli_real_escape_string($link,  hash('sha256', $_REQUEST['password']));
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "select username, email, password from users where email = '$email' && password = '$password'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "<script> alert('login succesfully!')</script> ";	
    echo "<script> window.location.assign('index.php')</script>";	
    echo "<script>  checklog($email);  </script> ";
   

    $_SESSION['username']= $email;
}
else{
    echo "<script> alert('invalid login')</script>";
    echo "<script> window.location.assign('Login.php')</script>";	
}
// Close connection
mysqli_close($link);
?>
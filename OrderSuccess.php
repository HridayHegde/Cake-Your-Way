<?php
session_start();
 $servername = "den1.mysql4.gear.host";
 $username = "makeyourcakedb";
 $password = "hriday@123";
 $dbname = "makeyourcakedb";

 $con = mysqli_connect($servername, $username, $password,$dbname);
 $ee = $_SESSION['username'];
 if(isset($_POST['cont'])){
    $q1="delete from cart where username='$ee'";
    $r = mysqli_query($con,$q1);
    if($r){
        echo "<script> window.location.assign('Menu.php')</script>";
    }
 }
 
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cake_Your_Way</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster+Two">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">


<script>
   function redirect(){
    window.location.assign('Menu.php');
   }
</script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="font-weight: normal;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php" >Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php">Menu</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                        <li class="nav-item" role="presentation"><?php 

                                                if(!isset($_SESSION['username'])){    
                                                    echo "<a class='nav-link' href='Login.php'>Login</a>";
                                                }else{
                                                    echo "<a class='nav-link' href='logout.php'>Logout</a>";
                                                }
                                                ?></li>
                    </ul>
                </div>
        </div>
    </nav>
    <center>
        <h5 class="text-center d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-md-center justify-content-lg-center justify-content-xl-center head-text" style="margin-top: 10%;" align="center">Order Placed Successfully</h5>
                                            </center><br><br><br><br><br><br><br><br>
    <center><form method="POST"><input name="cont" value=" Continue Shopping " class="btn btn-primary text-center center-block button-style-h" type="submit" style="color: #000000;font-size: 20px;font-weight: normal;line-height: 0px;height: 67.56px;max-height: 281px;margin-left: 40%;margin-right: 40%;padding-right: 2%;padding-left: 2%;margin-top: 1%;margin-bottom: 5%;"></form></center>
    
    <div id="footerofpage">
        <?php include('footer.html');?>
    </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
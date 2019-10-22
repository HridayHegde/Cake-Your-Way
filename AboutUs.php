<?php

session_start();
    if(!isset($_SESSION['username'])){
        //echo "<script>window.location.assign('Login.php');</script>";
    }else{
        $sessionusrname = $_SESSION['username'];
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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php">Menu</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php" style="font-weight: bold;">About Us</a></li>
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
    <div style="padding-top: 60px;">
        <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">
            <h1 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: auto;">About Us</h1>
        </div>
        <p class="text-center d-lg-flex d-xl-flex flex-shrink-1 justify-content-center align-content-center mx-auto justify-content-lg-center align-items-lg-center justify-content-xl-center body-text" style="width: 50%;margin: 50px;margin-top: 65px;margin-right: 0;margin-bottom: 0;"><br>Cake Arena was found for your satisfaction and understand your expectations from<br> our cake. so we have come out with a new and easy way to make that <br>possible. We give you core customization options so that you get your <br>cake which
            you dream of.<br><br></p>
    </div>
    <div style="padding-top: 0;">
        <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">
            <h1 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: auto;">Co-Founders</h1>
        </div>
        <div style="padding-top: 60px;">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col" style="width: 100%;height: 100%;"><a href="https://www.instagram.com/hriday_hegde/" style="text-decoration: none;text-decoration-style: inherit;color: rgb(0,0,0);"><img class="rounded-circle" src="assets/img/IMG_20190920_013552.png" style="filter: sepia(0%);width: 50%;margin-left: 25%;"><h3 class="text-center" style="font-weight: bold;">Hriday Hegde</h3></a></div>
                        <div
                            class="col" style="width: 100%;height: 100%;"><a href="https://www.instagram.com/_.parthdoshi._/" style="text-decoration: none;text-decoration-style: inherit;color: rgb(0,0,0);"><img class="rounded-circle" src="assets/img/IMG_20190829_091237.jpg" style="width: 50%;margin-left: 25%;"><h3 class="text-center" style="font-weight: bold;">Parth Doshi</h3></a></div>
                </div>
        </div>
        </section>
    </div>
    </div>
    <div id="footerofpage">
            <?php include('footer.html');?>
    </div>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
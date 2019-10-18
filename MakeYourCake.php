<?php 
    
    $servername = "den1.mysql4.gear.host";
    $username = "makeyourcakedb";
    $password = "hriday@123";
    $dbname = "makeyourcakedb";

    $con = mysqli_connect($servername, $username, $password,$dbname);
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

<body style="background-image: url(&quot;assets/img/Group%208.png&quot;);background-size: auto;background-repeat: repeat-y;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="font-weight: normal;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php" style="font-weight: bold;">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php">Menu</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Login.php">Login</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">
        <h5 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: 100%;padding-top: 36px;padding-bottom: 64px;">Customize Your Cake</h5>
    </div>
    <section>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Select your base:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Select your cream:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Select your toppings:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Size of the cake:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Shape of the cake:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 3px;">
                <h4 class="text-center" style="font-family: 'Lobster Two', cursive;margin-top: 7%;">Select a tier:</h4>
            </div>
            <div class="col">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);width: 400px;align-items: center;align-content: center;align-self: center;margin-left: 13%;margin-top: 7%;margin-bottom: 7%;">Select&nbsp;</button>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
            </div>
        </div>
        </div>
    </section>
    <div id="footerofpage">
            <?php include('footer.html');?>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
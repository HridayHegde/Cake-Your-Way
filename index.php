<?php
session_start();
    if(!isset($_SESSION)){
        echo "<script>window.location.assign('Login.php');</script>";
    }else{
        $sessionusrname = $_SESSION['username'];
        echo "<script>$('#login').attr('href','logout.php');";
        echo "$('#login').text('Logout');</script>";
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
    function home(){
        window.location.assign('MakeYourCake.php');
    }
</script>
</head>

<body class="text-center flex-grow-1" style="background-image: url(&quot;assets/img/Group%208.png&quot;); background-repeat: no-repeat;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="font-weight: bold;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php" style="font-weight: normal;">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php">Menu</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Login.php">Login</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div style="padding-top: 60px;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-image: url(&quot;linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(annie-spratt-oudLkxglHuM-unsplash.jpg);height: 500px;">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/annie-spratt-oudLkxglHuM-unsplash.png" alt="Slide Image" style="height: 30%;"></div>
                <div class="carousel-item" style="width: 100%;height: auto;"><img class="w-100 d-block" src="assets/img/anniversary-beautiful-birthday-433527.jpg" style="height: 30%;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/birthday-birthday-cake-cake-140831.jpg" style="height: 30%;"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div>
        <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">
            <h1 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: auto;">History of cakes</h1>
        </div>
        <p class="text-center d-lg-flex d-xl-flex flex-shrink-1 justify-content-center align-content-center mx-auto justify-content-lg-center align-items-lg-center justify-content-xl-center body-text" style="width: 50%;margin: 50px;margin-top: 65px;margin-right: 0;margin-bottom: 0;"><br>"The term "cake" has a long history. The word itself is of&nbsp;Viking&nbsp;origin, from the Old Norse&nbsp;word "kaka". The ancient Greeks called cake πλακοῦς (plakous), which was derived from &nbsp;the word for "flat", πλακόεις (plakoeis).
            It was baked using flour mixed with eggs, milk, nuts and honey. They also had a cake called "satura", &nbsp;which was a flat heavy cake. During the Roman period, the name for cake &nbsp;became "placenta" which was derived from the Greek term.
            A placenta was baked on a pastry base or inside a pastry case. The Greeks invented beer as a&nbsp;leavener, frying&nbsp;fritters&nbsp;in&nbsp;olive oil, &nbsp;and&nbsp;cheesecakes&nbsp;using&nbsp;goat's milk. In&nbsp;ancient Rome, basic bread
            dough was sometimes enriched with butter, eggs, and honey, which produced a sweet and cake-like baked good. Latin&nbsp;poet&nbsp;Ovid&nbsp;refers to his and his brother's birthday party and cake in his first book of exile,&nbsp;Tristia. Early
            cakes in England were also essentially bread: the most obvious &nbsp;differences between a "cake" and "bread" were the round, flat shape of &nbsp;the cakes, and the cooking method, which turned cakes over once while &nbsp;cooking, while bread
            was left upright throughout the baking process. Sponge cakes, leavened with beaten eggs, originated during&nbsp;the Renaissance, possibly in&nbsp;Spain."<br><br></p>
    </div>
    <div style="background-image: url(&quot;assets/img/Group%208.png&quot;);">
        <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">
            <h1 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center mr-auto justify-content-xl-center head-text" style="width: auto;margin-left: 2%;">Make your own Cake!<br></h1>
        </div>
        <div class="d-xl-flex" style="padding-bottom: 37px;">
            <p class="text-left d-xl-flex flex-shrink-1 flex-fill mx-auto justify-content-xl-center body-text" style="width: auto;margin: 50px;margin-top: 65px;margin-right: 0;margin-bottom: 0;line-height: 30px;max-width: 65%;">"Cake&nbsp;is a form of sweet food made from flour, sugar, and other ingredients, that is usually&nbsp;baked. In their oldest forms, cakes were &nbsp;modifications of&nbsp;breads, but cakes now cover a wide range of &nbsp;preparations that
                can be simple or elaborate, and that share features with other desserts such as&nbsp;pastries, meringues, custards, and pies."<br></p><button onClick="home()" class="btn btn-primary text-center d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center mx-auto justify-content-sm-center align-items-sm-center align-content-sm-center ml-sm-auto justify-content-md-center align-items-md-center align-content-md-center align-items-lg-center align-content-lg-center align-content-xl-center button-style-h"
                type="button" style="margin: 0px;margin-right: 10%;margin-top: 6%;width: 275px;color: #000000;font-size: 20px;font-weight: normal;height: 67.56px;line-height: 0px;">Make your cake<br><br></button></div>
    </div>
    <div class="flex-shrink-1 flex-fill" style="background-image: url(&quot;assets/img/Group%208.png&quot;);padding-bottom: 0;">
        <div style="padding-bottom: 0;">
            <h1 class="text-center d-flex d-xl-flex flex-fill justify-content-center align-items-center align-content-center align-self-center justify-content-xl-center align-items-xl-center head-text" style="width: auto;margin-left: 2%;padding-bottom: 74px;">Choose from our assorted cakes<br></h1>
        </div>
    </div>
    <section>
        <div class="container flex-shrink-1">
            <div class="row flex-shrink-1 flex-fill">
                <div class="col flex-shrink-1" style="width: 50%;height: 100%;padding-top: 5px;"><img class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1 flex-lg-shrink-1 flex-xl-shrink-1" src="assets/img/Rectangle%205.2.png" style="width: 100%;height: 100%;">
                    <h4 style="margin-top: 5px;">Strawberry Cake</h4>
                </div>
                <div class="col flex-shrink-1" style="width: 100%;height: 100%;"><img class="flex-shrink-1" src="assets/img/Rectangle%205.2(1).png" style="width: 100%;height: 100%;padding-top: 5px;">
                    <h4 style="margin-top: 5px;">Chocolate Cake</h4>
                </div>
            </div>
            <div class="row">
                <div class="col" style="width: 100%;height: 100%;"><img class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1 flex-lg-shrink-1 flex-xl-shrink-1" src="assets/img/Rectangle%205.2.png" style="width: 100%;height: 100%;padding-top: 5px;">
                    <h4 style="margin-top: 5px;">Strawberry Cake</h4>
                </div>
                <div class="col" style="width: 100%;height: 100%;padding-top: 5px;"><img src="assets/img/Rectangle%205.2(1).png" style="width: 100%;height: 100%;">
                    <h4 style="margin-top: 5px;">Chocolate Cake</h4>
                </div>
            </div>
            <div class="row">
                <div class="col" style="width: 100%;height: 100%;padding: 5px;"><img class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1 flex-lg-shrink-1 flex-xl-shrink-1" src="assets/img/Rectangle%205.2.png" style="width: 100%;">
                    <h4 style="margin-top: 5px;">Strawberry Cake</h4>
                </div>
                <div class="col" style="width: 100%;height: 100%;padding-top: 5px;"><img src="assets/img/Rectangle%205.2(1).png" style="width: 100%;height: 100%;">
                    <h4 style="margin-top: 5px;">Chocolate Cake</h4>
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
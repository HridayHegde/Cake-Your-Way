<?php 
session_start();

    if(!isset($_SESSION['username'])){
        echo "<script>window.location.assign('Login.php');</script>";
    }else{
        $sessionusrname = $_SESSION['username'];
        
        
    }

    $servername = "den1.mysql4.gear.host";
    $username = "makeyourcakedb";
    $password = "hriday@123";
    $dbname = "makeyourcakedb";

    $con = mysqli_connect($servername, $username, $password,$dbname);

    $totalcost = 890;
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

    <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {
          text-align: center;
          padding: 32px;
        }

        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
          -ms-flex: 50%; /* IE10 */
          flex: 50%;
          max-width: 50%;
          padding: 0 4px;
        }

        .column img {
          margin-top: 8px;
          vertical-align: middle;
          width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
          .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
          }
        }
        /* Style the counter cards */
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          padding: 16px;
          text-align: center;
          background-color: #f1f1f1;
        }
        </style>
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
    <!--<div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center">-->
        <center><h5 class="text-center  justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: 100%;padding-top: 36px;">Customize Your Cake</h5></center>
    <!--</div>-->
   <form method="POST" action="custord.php">
    <section style="margin-top:4%;">
    <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Select a Base type for your Cake : </h4></center></div>
            <div class="column">   
            <center><select name="baseofcake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_bases';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $base = $row_pro['base'];    
                        echo "<option value=$base>$base</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>

    <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Select Toppings for Your Cake : </h4></center></div>
            <div class="column">   
            <center><select name="toppingscake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_toppings';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $topping = $row_pro['topping'];    
                        echo "<option value=$topping>$topping</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>
    <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Cream for your Cake : </h4></center></div>
            <div class="column">   
            <center><select name="creamofcake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_creams';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $cream = $row_pro['cream'];    
                        echo "<option value=$cream>$cream</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>


        <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Size of The Cake : </h4></center></div>
            <div class="column">   
            <center><select name="sizeofcake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_sizes';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $size = $row_pro['size'];    
                        echo "<option value=$size>$size</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>

        <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Select a Shape for the Cake : </h4></center></div>
            <div class="column">   
            <center><select name="shapeofcake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_shapes';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $shape = $row_pro['shape'];    
                        echo "<option value=$shape>$shape</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>
        <div class="row" style="width:100%;margin-top:5%;">
            <div class="column"><center><h4>Select Tier of the Cake : </h4></center></div>
            <div class="column">   
            <center><select name="tierofcake">
                <?php
                    echo "<option>Select</option>";
                    $tablename = 'cake_tiers';
                    if(!isset($_GET[$tablename])){
                    
                    global $con;
                    $get_pro = "select * from $tablename";
                    $run_pro = mysqli_query($con, $get_pro);
                    $rowcount =0;
                    
                    
                    while($row_pro=mysqli_fetch_array($run_pro)){
                            $tier = $row_pro['tier'];    
                        echo "<option value=$tier>$tier</option>";

                    }
                    }
                ?>

            </select></center>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center align-items-start" style="margin-top: 15%;"><button class="btn btn-primary text-center center-block button-style-h" type="submit" style="color: #000000;font-size: 20px;font-weight: normal;line-height: 0px;width: 20%;height: 67.56px;max-height: 281px;margin-left: 40%;margin-right: 40%;padding-right: 2%;padding-left: 2%;margin-top: 1%;margin-bottom: 3%;" name="custcakebut">Order</button></div>
                </form>


                <div><center>
            <form method="POST" action='pay.php'>
                <input type="hidden" value =<?php echo $totalcost;?> name="cost">
                <button type='sumbit'  class='btn btn-outline-dark' >      Proceed To Checkout  <img src='assets/img/right_arrow.png' style='margin-left: 4%;' alt=''></button></center>
                </form>
                </center>
           </div><br><br>

        </div>     
    <div id="footerofpage">
          <?php include('footer.html');?>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
  session_start();
  $servername = "den1.mysql4.gear.host";
  $username = "makeyourcakedb";
  $password = "hriday@123";
  $dbname = "makeyourcakedb";

  $con = mysqli_connect($servername, $username, $password,$dbname);

?>

<!DOCTYPE html>
<html>

<head>
    <!--pre links-->
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

    <!--special sheet-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!--php-->
    
<style>
        * {
          box-sizing: border-box;
        }
        
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        
        /* Float four columns side by side */
        .column {
          float: left;
          width: 25%;
          padding: 0 10px;
        }
        
        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Responsive columns */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
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

<body id="bod">
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="font-weight: bold;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.html" style="font-weight: normal;">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php"><strong>Menu</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.html">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Login.html">Login</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div>
        <h1 class="text-center float-none d-xl-flex flex-shrink-1 justify-content-center align-items-center align-content-center m-auto justify-content-xl-center head-text" style="width: auto;padding-top: 0.5%;">Menu</h1>
    </div>
    
    
<!------ Include the above in your HEAD tag ---------->
<section class="menusec" style="padding-top: 5%;margin-top: 58px;width: 100%;"></section>
<div class='row'>
  <?php
  $tablename = 'assorted_cakes';
  if(!isset($_GET[$tablename])){
  
    global $con;
    $get_pro = "select * from $tablename";
    $run_pro = mysqli_query($con, $get_pro);
    while($row_pro=mysqli_fetch_array($run_pro)){
        $cid = $row_pro['cid'];
        $cname = $row_pro['cname'];
        $chalfkg = $row_pro['chalfkg'];
        $c1kg = $row_pro['c1kg'];
        $desc = $row_pro['description'];
      echo "
      
      <div class='col-md-4 col-sm-4 col-xs-4'>

       <h3>$cname</h3>
       <p><img src='assets/img/Assorted Cakes/Loaded Chocolate.jpg' width='200' height='200'/></p>
       <p><b>PRICE Half Kg: INR $chalfkg</b></p>
       <p><b>PRICE 1Kg : INR $c1kg</b></p>
       <a href='#'><button style='float:center; padding-top:10px;  border: 1px solid #FB8F3D; 
          background: -webkit-linear-gradient(top, #FDA251, #FB8F3D);
          background: -moz-linear-gradient(top, #FDA251, #FB8F3D);
          background: -ms-linear-gradient(top, #FDA251, #FB8F3D); width:80px; height:30px;
          width=50px;
          padding: 0px;
          '>+Cart</button></a>
       </div>
       <br>
       <br>
      
      ";

      }
      }		    
      ?>
      </div>

        
      
    </section>

           
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
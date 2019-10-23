<?php
  session_start();
  $servername = "den1.mysql4.gear.host";
  $username = "makeyourcakedb";
  $password = "hriday@123";
  $dbname = "makeyourcakedb";

  $con = mysqli_connect($servername, $username, $password,$dbname);

  if(isset($_SESSION['username'])){
    $sessionusrname = $_SESSION['username'];
    echo "<script>$('#login').attr('href','logout.php');";
    echo "$('#login').text('Logout');</script>";
  
  }else{
    echo "<script>window.location.assign('Login.php');</script>";
  }

  
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="assets/js/notify.min.js"></script>
    
    
    <!--php-->
    
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
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
          max-width: 25%;
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

<!--scripts-->

<script>
  var cakeidhf;
  var cakeidfl;
  var emid = "<?php echo $sessionusrname; ?>";
 function ordhalf(elm){
    cakeidhf = elm.parentNode.id;
    
    jQuery.ajax({
    type: "POST",
    url: 'ordhalf.php',
    dataType: 'json',
    data: {id: cakeidhf,email1:emid},

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      console.log("added to cart");
                      //alert("Added");
                      $.notify("Added",{position:"right-middle"});
                  }
                  else {
                      console.log(obj.error);
                      alert(obj.error);
                  }
            }
});

 }
 function ordfull(elm){
  cakeidfl = elm.parentNode.id;
    jQuery.ajax({
    type: "POST",
    url: 'ordfull.php',
    dataType: 'json',
    data: {id: cakeidfl,email1:emid},

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      console.log("added to cart");
                      $.notify("Added",{position:"right-middle"});
                  }
                  else {
                      console.log(obj.error);
                  }
            }
});
 }

function cart(){
  window.location.assign('cart.php');
}
</script>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="index.php"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav  navbar-right">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php" style="font-weight: normal;">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php"><strong>Menu</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                        <li class="nav-item" role="presentation" id="login"><?php 

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
    <div>
        <center><h1 class="head-text" style=";">Menu</h1></center>
      </div>
    
    
<!------ Include the above in your HEAD tag ---------->
<section class="menusec" style="padding-top: 5%;margin-top: 58px;width: 100%;"></section>
<div class='row' style="width:100%;">
  <?php
  $tablename = 'assorted_cakes';
  if(!isset($_GET[$tablename])){
  
    global $con;
    $get_pro = "select * from $tablename";
    $run_pro = mysqli_query($con, $get_pro);
    $rowcount =0;
   
    
    while($row_pro=mysqli_fetch_array($run_pro)){
       
        $cid = $row_pro['cid'];
        $cname = $row_pro['cname'];
        $chalfkg = $row_pro['chalfkg'];
        $c1kg = $row_pro['c1kg'];
        $desc = $row_pro['description'];

        if($rowcount == 0){
          echo "<div class = 'row' style='width:100%;'>";
        }

        echo "<div class='column'>
                <div class='card'>
                  <h3>$cname</h3>
                  <p><img src='assets/img/Assorted Cakes/$cname.jpg' width='100%' height='300px'/></p>
                  <p id='$cid'><b>PRICE Half Kg: $chalfkg</b> <button onClick='ordhalf(this)' name='ord_hf' style='float:center; padding-top:10px;  border: 1px solid #FB8F3D; 
                  background: -webkit-linear-gradient(top, #FDA251, #FB8F3D);
                  background: -moz-linear-gradient(top, #FDA251, #FB8F3D);
                  background: -ms-linear-gradient(top, #FDA251, #FB8F3D); width:80px; height:30px;
                  width=50px;
                  padding: 0px;
                  '>+Cart</button></p>
                  <p id='$cid'><b>PRICE 1 Kg: $c1kg</b>  <button onClick='ordfull(this)' name='ord_full' style='float:center; padding-top:10px;  border: 1px solid #FB8F3D; 
                    background: -webkit-linear-gradient(top, #FDA251, #FB8F3D);
                    background: -moz-linear-gradient(top, #FDA251, #FB8F3D);
                    background: -ms-linear-gradient(top, #FDA251, #FB8F3D); width:80px; height:30px;
                    width=50px;
                    padding: 0px;
                    '>+Cart</button></p>
                </div>
              </div>";
        $rowcount++;
        if($rowcount == 4){
          echo "</div>";
          $rowcount = 0;
        }
        
        

      
      }
    }		    
    ?>
      </div>

        
      
    </section><br><br><br>
    <center><button OnClick='cart()'>Cart<button></center><br><br><br>
    <div id="footerofpage" style="width:100%">
            <?php include('footer.html');?>
    </div>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
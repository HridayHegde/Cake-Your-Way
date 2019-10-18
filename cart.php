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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top flex-fill navbar-fixed-top" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="padding-right: 12px;margin-right: 5px;"><span class="sr-only" style="padding-right: 0px;">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <a
                class="navbar-brand d-sm-flex mr-auto" href="#"><strong>Cake : Your Way</strong></a>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="font-weight: normal;">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="MakeYourCake.php">Make Your Cake<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Menu.php">Menu</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Login.php">Login</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div style="margin-top: 8%;">
        <center><img style="width:5%; height:5%;" src="assets/icons/canvas.svg"/></center>
    </div>
    
  <?php
  $tablename = 'cart';
  if(!isset($_GET[$tablename])){
  
    global $con;
    $get_pro = "select * from $tablename";
    $run_pro = mysqli_query($con, $get_pro);
    if (!$run_pro) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
  }
    $rowcount =0;
    //$result = mysqli_query($con,"SELECT * FROM user_list where username = '" . mysqli_real_escape_string($con, $username) . "'"); 
    
    
    while($row_pro=mysqli_fetch_array($run_pro)){
      
        
        $cidcart = $row_pro['cid'];
       
        $cquant = $row_pro['quant'];

        $get_cakes = "select * from assorted_cakes where cid =$cidcart";
       
        $cidm=0;
        $cname0="";
        $chalfkg=0;
        $c1kg=0;
        $desc="";
        
        
        $run_cakes = mysqli_query($con, $get_cakes);
        if (!$run_cakes) {
          printf("Error inner: %s\n", mysqli_error($con));
          
      }
       
        $row_do=mysqli_fetch_array($run_cakes);
       

            $cid = $row_do['cid'];
            $cname = $row_do['cname'];
            $chalfkg = $row_do['chalfkg'];
            $c1kg = $row_do['c1kg'];
            $desc = $row_do['description'];

        //} 
        
        $cid = $row_pro['cid'];
        $cquant = $row_pro['quant'];
        if($cname != ""){
          if($cquant == 0){
              echo " <div class = 'row' style='width:100%;'>
                      
                          <div class='column'>
                         
                              <img src='assets/img/Assorted Cakes/$cname.jpg' width='100%' height='300px'/>
                          
                          
                          </div>
                          <hr>
                          <div class='column'>
                          
                          <p><h3>$cname</h3><br>
                              <p>$desc</p>
                          </p>
                          
                          
                          </div>
                          <hr>
                          <div class='column'>
                          
                          <center><h4>Quantity</h4><br>
                              <h3>1 KG</h3>
                          
                          </center>
                          
                          
                          </div>
                          </div>
                      ";
              
          
          }else{
              
      
              echo " <div class = 'row' style='width:100%;'>
              
                  <div class='column'>
                  <div class='card'>
                      <img src='assets/img/Assorted Cakes/$cname.jpg' width='100%' height='300px'/>
                  
                  </div>
                  </div>
                  <div class='column'>
                  <div class='card'>
                  <p><h3>$cname</h3><br>
                      <p>$desc</p>
                  </p>
                  
                  </div>
                  </div>
                  <div class='column'>
                  <div class='card'>
                  <center><h4>Quantity</h4><br>
                      <h3>Half KG</h3>
                  
                  </center>
                  
                  </div>
                  </div>
                  </div>
              ";

          

        
        
          }	
      
      }
    }
       
} 
    ?>
      

        
      
    </section>
    <div id="footerofpage">
            <?php include('footer.html');?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
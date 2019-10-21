<?php
    require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require("vendor/phpmailer/phpmailer/src/SMTP.php");
    require("vendor/phpmailer/phpmailer/src/Exception.php");
    session_start();
    
    //$to = 'darkarcane9@gmail.com';
    //$subject = 'Cake Order';

    $customerid = $_SESSION['username'];
    $cakebase = $_POST['baseofcake'];
    $caketopping = $_POST['toppingscake'];
    $cakecream = $_POST['creamofcake'];
    $cakesize = $_POST['sizeofcake'];
    $cakeshape = $_POST['shapeofcake'];
    $caketier = $_POST['tierofcake'];

    $message = "Customer $customerid has placed and order for a custom cake\nThe Base of the Cake is : $cakebase\nToppings for the Cake are: $caketopping\n 
    Cream for the Cake : $cakecream\nSize of The Cake is : $cakesize\nTier of the cake is : $caketier.";
    //mail ($to,$subject,$message);

    
    $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Send mail using gmail
        
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true; // enable SMTP authentication
            $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
            $mail->Port = 465; // set the SMTP port for the GMAIL server
            $mail->IsHTML(true);
            $mail->Username = "cakeyourway2019@gmail.com"; // GMAIL username
            $mail->Password = "cakeyourwayipproject"; // GMAIL password
        

            //Typical mail data
            $mail->AddAddress("darkarcane9@gmail.com");
            $mail->SetFrom("cakeyourway2019@gmail.com");
            $mail->Subject = "Order Details";
            $mail->Body = $message;

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
             } else {
                echo "Message has been sent";
             }
            
?>
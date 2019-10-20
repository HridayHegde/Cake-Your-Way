<?php
    session_start();
    $to = 'darkarcane9@gmail.com';
    $subject = 'Cake Order';

    $customerid = $_SESSION['username'];
    $cakebase = $_POST['baseofcake'];
    $caketopping = $_POST['toppingscake'];
    $cakecream = $_POST['creamofcake'];
    $cakesize = $_POST['sizeofcake'];
    $cakeshape = $_POST['shapeofcake'];
    $caketier = $_POST['tierofcake'];

    $message = '';
    mail ($to,$subject,);

?>
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

    $message = "Customer $customerid has placed and order for a custom cake\nThe Base of the Cake is : $cakebase\nToppings for the Cake are: $caketopping\n 
    Cream for the Cake : $cakecream\nSize of The Cake is : $cakesize\nTier of the cake is : $caketier.";
    mail ($to,$subject,$message);
    
?>
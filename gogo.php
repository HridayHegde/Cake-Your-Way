<?php
    session_start();
    if(isset($_SESSION)){
        $a = $_SESSION['username'];
        if($a == ""){
            echo "Nope Nope";
        }else{
            echo "$a";
        }
    }
?>
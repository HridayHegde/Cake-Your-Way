<?php
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    echo "<script>window.location.assign('Login.php');</script>";
}else{
    echo "<script>window.location.assign('Login.php');</script>";
}
session_destroy();
?>
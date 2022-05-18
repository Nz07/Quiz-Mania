<?php

session_start();
require('config.php');
if(isset($_POST['button'])){
    $query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    $_SESSION['email'] =  $_POST["email"] ;
        echo ("<script>
        window.location.href='forget_otp.php';
        </script>");
        
    
}




?>
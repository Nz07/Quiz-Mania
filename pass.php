<?php

session_start();
require('config.php');
$otp = $_SESSION['otp'];
if(isset($_POST['button'])){
    $enter_otp = stripslashes($_REQUEST['enter_otp']);
    $enter_otp = mysqli_real_escape_string($con, $enter_otp);
    echo $enter_otp;
    echo $otp;   

if($enter_otp == $otp){
    echo ("<script>
    window.location.href='change_password.php';
    </script>");
}else{
    echo ("<script>
            window.alert('Wrong OTP');
            </script>");  
}


}



?>
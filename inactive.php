<?php
include('security.php');   
$username = $_SESSION['username'];
$sql = "select logintime from users where username = '$username'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$logintime = strtotime($row['logintime']);
date_default_timezone_set("Asia/Kolkata");
$t = time();
$diff = $t - $logintime;
if($diff>= 10800){
    session_destroy();
    header('location:/Quiz-Mania/login.php');
}
?>

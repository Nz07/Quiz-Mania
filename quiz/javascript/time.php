<?php
    $url='localhost';
    $username='root';
    $password='';
    $con=mysqli_connect($url,$username,$password,"quizmania");
    session_start();
    $username = $_SESSION['username'];
    $query = "select time from users where username = '".$_SESSION['username']."'";
    $result=mysqli_query($con,$query);
    $array=mysqli_fetch_row($result);
    $_SESSION['time'] = $array[0];
?>
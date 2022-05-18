<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(1);
ini_set('display_errors', 1);
    $url='sql305.byetcluster.com';
    $username='epiz_31527551';
    $password='nA2taGyu8y';
    $con=mysqli_connect($url,$username,$password,"epiz_31527551_quizmania");
    session_start();
    if(!$con){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>
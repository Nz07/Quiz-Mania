<?php
session_start();
$url='localhost';
$username='root';
$password='';
$con=mysqli_connect($url,$username,$password,"quizmania");
$username = $_SESSION['username'];
$userScore = $_POST['userScore'];
mysqli_query($con, "UPDATE users SET his='".$userScore."' WHERE username='".$username."' ");
?>
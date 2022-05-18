<?php
include('config.php');
$email= $_POST["email"];
if(!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<b>&#10006;</b>";
  }else{
    if($count>0){
    echo "<b>&#10006;</b>";
    }
    else{
      echo "<b>&#10004;</b>";
    }  
  }
}
?>














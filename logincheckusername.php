<?php
include('config.php');
$username= $_POST["username"];
if(!empty($_POST["username"])) {
  $query = "SELECT * FROM users WHERE username='" . $_POST["username"] . "'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
      echo "<b>&#10004;</b>";
      
    }else{
      echo "<b>&#10006;</b>";
      }
}
?>
<?php
include('config.php');
if(!empty($_POST["password"])) {
  $query ="UPDATE users SET password='".$_POST['password']."'  WHERE email ='".$_SESSION['email']."'";
  $result = mysqli_query($con,$query);
  
    echo ("<script>
    window.alert('Changed Password');
    window.location.href='login.php';
    </script>");
  
}
  
?>

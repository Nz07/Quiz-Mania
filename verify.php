<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

require('config.php');
$otp = $_SESSION['otp'];
if(isset($_POST['button'])){
    $enter_otp = stripslashes($_REQUEST['enter_otp']);
    $enter_otp = mysqli_real_escape_string($con, $enter_otp);
    echo " ";

if($enter_otp == $otp){
    
    session_destroy();
    echo ("<script>
    window.location.href='login.php';
    </script>");
}else{
    $error = 1;
}
}
?>
<script>
  document.write("OTP does not match")
    var x = "<?php echo"$error"?>";
    if(x == 1){
        setTimeout(function () { 
swal({
  title: "Incorrect OTP",
  text: "Check mail again and enter the correct new otp",
  type: "error",
  confirmButtonText: "OKAY!!"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "otp.php";
  }
}); }, 10);
    }
    </script>




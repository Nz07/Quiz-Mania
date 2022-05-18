
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Mania</title>

    
    <link href="assets/img/Q.png" rel="icon">
  <link href="assets/img/Q1.png" rel="Q1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="assets/css/log.css" rel="stylesheet">
</head>
<body>  


<?php
session_start();
require('security.php');
require('inactive.php');
require('config.php');
use PHPMailer\PHPMailer\PHPMailer;
require ('phpmailer/vendor/autoload.php');
$email = $_SESSION['email'];
$otp = rand(100000,999999);
mysqli_query($con, "UPDATE users SET otp='".$otp."' WHERE email='".$email."' ");
$_SESSION['otp'] = $otp;
$mail = new PHPMailer(true);
$mail->isSMTP();            
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;                          
$mail->Username = "quizmania.rf.gd@gmail.com";                 
$mail->Password = "quizplaynow";                           
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;                                   

$mail->From = "quizmania.rf.gd@gmail.com";               
$mail->FromName = "Quizmania";

$mail->addAddress($email);

$mail->isHTML(true);
$mail->Subject    = "OTP";
$message_body = '
<p>For New Password,Verify your mail with verification code: <b>'.$otp.'</b>.</p>
<span>From, </span>
<b style="color:#4b5de6">Quizmania</b>
<br><br>
<p>For every verification otp will be differnt,So make to check otp for every verification</p>
';
$mail->Body = $message_body;


?>


<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                   <h1 style="color: #001eff; font-weight: bolder;">Account Verification</h1>
                    <form action="pass.php" method="post">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <?php
                
                if($mail->send()){
                    echo '<h5 style="color: green; text-align:left;">Mail has been sent <b>'.$email.'</b>.</h5>';
                }
                ?>
                        <input type="text" 
                   onkeypress="return onlyNumberKey(event)" placeholder="Enter OTP" id ="enter_otp"  minlength="6" maxlength ="6"size="6" name ="enter_otp">
                    </div>
                   
                    <button type="submit" id ="button" name = "button" class="submit" autocomplete="off">Submit</button>
                    
                </form>
                </div>
            </div>
        </div>
       
<script type="text/javascript">
    var otp= document.getElementById('enter_otp');
    
</script>
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form-wrapper">
                </div>
            </div>
        </div>
    
    <div class="row content-row">
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
            </div>

          
        </div>
        <div class="col align-items-center flex-col">
            
        <div class="text sign-up">
                <h2>Verification</h2>
            </div>
            
        </div>
    </div>
</div>

<script src="assets/js/signup.js"></script>
<script src="assets/js/show.js"></script>
<script>
function onlyNumberKey(evt) {
          
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
      }
</script>

</body>
</html>

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

$email = $_SESSION['email'];
?>
<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                   <h1 style="color: #001eff; font-weight: bolder;">Account Verification</h1>
                    <form action="update.php" method="post">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                    
                        <input type="password" placeholder="Password" id="password-field" name="password" maxlength="12" minlength="8" size="12" autocomplete="off" required>
                                <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()" style=" margin-left: 350px;"></i>
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
                <h2>New Password</h2>
            </div>
            
        </div>
    </div>
</div>

<script src="assets/js/signup.js"></script>
<script src="assets/js/show.js"></script>

<script>
    function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}   
</script>
</body>
</html>
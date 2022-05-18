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


<div id="container" class="container">
    <div class="row">
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">

            </div>
        </div>
            
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <form action="log.php" method="post">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" placeholder="Username" id = "username" name="username"oninput="checkusername()"autocomplete="off" required>
                                <i id = check_username style="margin-left:350px;color: #001eff;font-size:20px;"></i>
                            </div>

                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Password" id="password-field" name="password" maxlength="12" minlength="8" size="12" autocomplete="off" required>
                                <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()" style=" margin-left: 350px;"></i>
                            </div>
                     
                        <button type="submit" class="submit">Login</button>
                        <p>
                            <b><a href="forget_password.php">Forgot password?</a></b>
                        </p>
                        <p>
                            <span>Don't have an account?</span> 
                            <b class="pointer"><a href="register.php">Sign up here</a></b>
                        </p>
                        </form>
                    </div>
                </div>
                <div class="form-wrapper"></div>
            </div>  
    </div>
        <div class="row content-row">
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>Welcome</h2>
                </div>

                <div class="img sign-in"></div>
            </div>
            
        </div>
        <script src="assets/js/signin.js"></script>
        <script src="assets/js/show.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
function checkusername() {
    
    jQuery.ajax({
    url: "logincheckusername.php",
    data:'username='+$("#username").val(),
    type: "POST",
    success:function(data){
        $("#check_username").html(data);
    },
    error:function (){}
    });
}



</script>
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
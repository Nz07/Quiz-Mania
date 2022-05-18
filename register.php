
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


<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">

                <div class="form sign-up">
                    
                    <form action ="reg.php" method="post">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Username" id ="username" name ="username" oninput="checkusername()" autocomplete="off" required>
                        <b><i id ="check_username" style="margin-left:350px;color: #001eff;font-size:20px;"></i></b>


                    </div>
                   
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Firstname" id ="firstname" name ="firstname"  oninput="document.getElementById('first_name').innerHTML = '&#10004;'"  autocomplete="off" required>
                        <b><i id ="first_name" style="margin-left:350px;color: #001eff;font-size:20px;"></i></b>
                    </div>

                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Lastname" id ="lastname" name ="lastname" oninput="document.getElementById('last_name').innerHTML = '&#10004;'" autocomplete="off" required>
                        <b><i id ="last_name" style="margin-left:350px;color: #001eff;font-size:20px;"></i></b>
                    </div>

                    <div class="input-group">
                        <i class='bx bx-mail-send'></i>
                        <input type="email" placeholder="Email" id = "email" name ="email" oninput="checkemail()" autocomplete="off" required>
                        <i id = check_email style="margin-left:350px;color: #001eff;font-size:20px;"></i>
                        <div id="emailStatus"></div>
                    </div>

                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Password" id ="password-field" name ="password" maxlength="12" minlength="8" size = "12" autocomplete="off" required>
                        <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()" style=" margin-left: 350px;"></i>
                    </div>

                    <button type="submit" id = "submit" name="submit" class="submit">Register</button>
                    
                    <p>
                        <span>Already have an account?</span>
                        <b class="pointer"><a href="login.php">Sign up here</a></b>
                    </p>
                </form>
                </div>
            </div>
        </div>
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
                <h2>Join with us</h2>
            </div>
        </div>
    </div>
</div>
<body>  
  
<script src="assets/js/signup.js"></script>
<script src="assets/js/show.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
<script>
    function checkusername() {
    
    jQuery.ajax({
    url: "checkusername.php",
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
function checkemail() {
    
    jQuery.ajax({
    url: "checkemail.php",
    data:'email='+$("#email").val(),
    type: "POST",
    success:function(data){
        $("#check_email").html(data);
    },
    error:function (){}
    });
}
</script>

</body>
</html>
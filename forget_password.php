
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
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                   <h1 style="color: #001eff; font-weight: bolder;">Account Verification</h1>
                    <form action="find.php" method="post">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                      
                        <input type="text" placeholder="Enter Email" id ="email"  name ="email" required>
                    </div>
                   
                    <button type="submit" id ="button" name = "button" class="submit" autocomplete="off">Submit</button>
                    
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
                <h2>Verification</h2>
            </div>
            
        </div>
    </div>
</div>

<script src="assets/js/signup.js"></script>
<script src="assets/js/show.js"></script>


</body>
</html>
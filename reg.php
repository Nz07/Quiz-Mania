
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
    require('config.php');
    error_reporting(0);
    ini_set('display_errors', 0);
    if (isset($_REQUEST['username'])) {
        
        $username = $_POST['username'];
        $_SESSION['username'] = $username;

        $firstname = $_POST['firstname'];
        $_SESSION['firstname'] = $firstname;
   
        $lastname = $_POST['lastname'];
        $_SESSION['lastname'] = $lastname;

        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $password = $_POST['password'];
        $_SESSION['password'] = $password;

        
        $query = "SELECT * FROM users WHERE username='" . $username . "'";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);

        $query = "SELECT * FROM users WHERE email='" . $email . "'";
        $result = mysqli_query($con,$query);
        $count1 = mysqli_num_rows($result);


        if($count>0){
            echo "Username Exists";
            echo ('<script>setTimeout(function () { 
                swal({
                  title: "Username Unavaliable",
                  text: "Username already exist",
                  type: "error",
                  confirmButtonText: "OKAY!!"
                },
                function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "register.php";
                  }
                }); }, 10);
                     </script>');
        }
        
        else if($count1>0){
            echo "Email Exists OR Incorrect email";
            echo ('<script>setTimeout(function () { 
                swal({
                  title: "Email Unavaliable OR Invalid Email",
                  text: "Email already exist",
                  type: "error",
                  confirmButtonText: "OKAY!!"
                },
                function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "register.php";
                  }
                }); }, 10);
                     </script>');  
        }
        else{
        $query    = "INSERT INTO users (username,firstname, lastname, email,password) VALUES ('$username', '$firstname', '$lastname','$email','$password')";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo ("<script>
            window.location.href='otp.php';
            </script>");
        }
        
        }
    }
    
?>
        
      

        


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php      
    include('config.php');   
 
    $username = $_POST['username'];  
    $_SESSION['username'] = $username;

    $password = $_POST['password'];
    $_SESSION['password'] = $password;
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $query = "SELECT password FROM users WHERE username='" . $username. "'";
            $result = mysqli_query($con,$query);
            while($row = $result->fetch_assoc()) {
            $pass = $row['password'];
            if($pass == $password){
              date_default_timezone_set("Asia/Kolkata");
                $logintime =  date('Y-m-d H:i:s'); 
                mysqli_query($con, "UPDATE users SET logintime='".$logintime."' WHERE username='".$username."' ");
                header('location:second_index.php');
                

             }else{
                echo "Wrong Password";
            echo ('<script>setTimeout(function () { 
                swal({
                  title: "Incorrect Password",
                  text: "Username and Password do not match",
                  type: "error",
                  confirmButtonText: "OKAY!!"
                },
                function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "login.php";
                  }
                }); }, 0);
                     </script>');
            }
            }    
        }
        else{
            echo "Username Does not Exist";
            echo ('<script>setTimeout(function () { 
                swal({
                  title: "Username Cannot be find",
                  text: "Invalid Username",
                  type: "error",
                  confirmButtonText: "OKAY!!"
                },
                function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "login.php";
                  }
                }); }, 10);
                     </script>');
        }
?>  
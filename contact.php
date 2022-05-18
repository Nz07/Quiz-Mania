<?php
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['message'])) {
       

        $name = $_POST['name'];
        $_SESSION['name'] = $name;
   
        $subject = $_POST['subject'];
        $_SESSION['subject'] = $subject;

        $mail = $_POST['mail'];
        $_SESSION['mail'] = $mail;

         
        $message = $_POST['message'];
        $_SESSION['message'] = $message;

        echo $name;
        echo $subject;
        echo $mail;
        echo $message;
        $query = "INSERT INTO feedback (name,mail,subject,message) 
        VALUES ('$name', '$mail', '$subject','$message')";
        $result   = mysqli_query($con, $query);
    }
        
        
    
    
?>
        
      

        

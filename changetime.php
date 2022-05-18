<?php
include('config.php');  
include('inactive.php'); 

$username = $_SESSION['username'];
$time= $_POST["time"];
$sql ="UPDATE users SET time='".$time."' WHERE username='".$username."' ";
if ($con->query($sql) === TRUE) {
    if($time !=""){
        if($time == 0){
            echo "<span style='font-size:13px;color:red;'>Invalid time.&emsp;";
            $time = 15;   
            $sql ="UPDATE users SET time='".$time."' WHERE username='".$username."' ";
if ($con->query($sql) === TRUE) {
    echo "<span style='font-size:15px;color:green;'><b>Time set to default ".$time." seconds</b></span>";

}
        }
        else{
echo "<b style='font-size:16px;color:green;'>Time for each quiz question is ".$time." seconds</b>";
        }
     
}

}
?>
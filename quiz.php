<!DOCTYPE html>
<html lang="en">
<?php 

include('inactive.php'); 
include('security.php');  
$u=$_SESSION['username'];

$e= "";

$sql=mysqli_query($con,"select time from users where username='$u'");
while($row = mysqli_fetch_assoc($sql)) {
 $t=$row['time'];
}
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quiz Mania</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons --> 
  <link href="assets/img/Q.png" rel="icon">
  <link href="assets/img/Q1.png" rel="Q1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->   
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <h1 class="text-light"><a href="second_index.php"><span>Quiz-Mania</span></a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="second_index.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
     
      <div class="dropdown">
      <div class="dropbtn"><button class="bi-person-circle" style="font-size:30px; border:0cm; background-color:white;" >  </button></div>
  <div class="dropdown-content">
    <a href="#" style="font-weight:bold;color:#4b5de6;"><?php echo str_replace(' ','',$_SESSION['username']); ?></a>
    <a href="score.php">Scorecard</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
 </nav>
          
         

      <!-- .navbar -->

    </div>    

    
  </header><!-- End Header -->
  <br><br><br>
  
<body>  
          

<section>
  <div class="qu" data-aos="fade-up" data-aos-delay="100">
    <div class="qu-box">
      <h1 id ="time">Quiz</h1>
    </div>
<b style="font-size:20px;color:#4b5de6;">Question time(sec):</b> <input type="number" value="<?php echo $t ?>" id = "times" name="time"oninput="checktime()" style="width: 40%;  padding: 1rem 3rem;  font-size: 1rem;  background-color: var(--gray);  border-radius: .5rem;  border: 0.125rem solid var(--white);   outline: none;" required>
<i id = check_time style="margin-left:10px;color:green;font-size:20px;"></i>
                                <br><br>

    <div class="qu-col">
      <div class="qu-sec">
        <img src="assets/img/Eng.png"/>
        <div class="panelz" >
          <span class="breaker"></span>
          <h2>
            English Grammer
          </h2>
          <a href="quiz/Eng/eng.php">Take The Test<i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="qu-sec">
        <img src="assets/img/comp.png"/>
        <div class="panelz">
          <span class="breaker"></span>
          <h2>Computer Invention</h2>
          <a href="quiz/CompInv/comp.php">Take The Test<i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="qu-sec">
        <img src="assets/img/Html.png"/>
        <div class="panelz">
          <span class="breaker"></span>
          <h2>
            HTML
          </h2>
          <a href="quiz/html/html.php">Take The Test <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="qu-col">
        <div class="qu-sec1">
          <img src="assets/img/C.png"/>
          <div class="panelz" >
            <span class="breaker"></span>
            <h2>
              C++
            </h2>
            <a href="quiz/C/c.php">Take The Test<i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="qu-sec1">
          <img src="assets/img/java.png"/>
          <div class="panelz">
            <span class="breaker"></span>
            <h2>Java</h2>
            <a href="quiz/java/java.php">Take The Test<i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="qu-sec1">
          <img src="assets/img/javascript.png"/>
          <div class="panelz">
            <span class="breaker"></span>
            <h2>
              JavaScript
            </h2>
            <a href="quiz/javascript/javascript.php">Take The Test<i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="qu-col">
          <div class="qu-sec1">
            <img src="assets/img/Dsa.png"/>
            <div class="panelz" >
              <span class="breaker"></span>
              <h2>
                Data Structure & Algorithm
              </h2>
              <a href="quiz/DSA/dsa.php">Take The Test<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
  
          <div class="qu-sec1">
            <img src="assets/img/Dbms.png"/>
            <div class="panelz">
              <span class="breaker"></span>
              <h2>Database Management</h2>
              <a href="quiz/Dbms/dbms.php">Take The Test<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="qu-sec1">
            <img src="assets/img/Sql.jpeg"/>
            <div class="panelz">
              <span class="breaker"></span>
              <h2>
                SQL (Structured Query Language) 
              </h2>
              <a href="quiz/SQL/sql.php">Take The Test<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="qu-col">
            <div class="qu-sec1">
              <img src="assets/img/history.png"/>
              <div class="panelz" >
                <span class="breaker"></span>
                <h2>
                  History
                </h2>
                <a href="quiz/history/history.php">Take The Test<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
    
            <div class="qu-sec1">
              <img src="assets/img/geo.png"/>
              <div class="panelz">
                <span class="breaker"></span>
                <h2>Geography</h2>
                <a href="quiz/geography/geo.php">Take The Test<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="qu-sec1">
              <img src="assets/img/biology.png"/>
              <div class="panelz">
                <span class="breaker"></span>
                <h2>
                  Biology
                </h2>
                <a href="quiz/biology/bio.php">Take The Test<i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
</div>
</section>
  
     
  
  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Quiz-Mania</h3>
            <p>Chandigarh Univesity, Gharuan, Punjab <br>
              India <br><br>
              <strong>Phone:</strong> 600XXXXX78<br>
              <strong>Email:</strong> quizmania.rf.gd@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#time">Quiz</a></li>
            </ul>
          </div>

           <div class="col-lg-3 col-md-6 footer-links">
            <h4>Created By</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Gursewak Singh</li>
              <li><i class="bx bx-chevron-right"></i>Nimit Jain</li>
              <li><i class="bx bx-chevron-right"></i>Naitik Jain</li>
              
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Quiz-Mania</span></strong>. All Rights Reserved
      </div>  -->
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function checktime() {
    
    jQuery.ajax({
    url: "changetime.php",
    data:'time='+$("#times").val(),
    type: "POST",
    success:function(data){
        $("#check_time").html(data);
    },
    error:function (){}
    });
}
   
    
var input = document.getElementById("time");
input.addEventListener("focus", function (){
  this.style.border = "0.125rem solid #4b5de6";
});
</script>
</body>

</html>

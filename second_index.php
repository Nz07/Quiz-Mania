<!DOCTYPE html>
<html lang="en">
<?php

include('security.php'); 
include('inactive.php'); 
$u=$_SESSION['username'];
$e= "";
$sql=mysqli_query($con,"select email from users where username='$u'");
while($row = mysqli_fetch_assoc($sql)) {
$e=$row['email'];
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
         <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Learn and Explore with <br>Quiz-Mania</h1>
          <h2>
             </h2>
          <div>
            <a href="quiz.php" class="btn-get-started scrollto">View Quiz</a>
            <a href="score.php" class="btn-get-started scrollto">View Scorecard</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/design1.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="quizz">
      <div class="qu" data-aos="fade-up" data-aos-delay="10">
        <div class="qu-box">
          <h1>Quiz</h1>
        </div>
  
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
  </div>
  </section>
<!----------------------------End of quiz Section------------->

<header class="section-header" data-aos="fade-up" >
  <br>
  <a href="quiz.php">
  <h1 style="text-align:center">Explore More &#8595;</h1>
  </a>
  <br>
</header>


   

   
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="10">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What are the main advantages of an online quiz? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Engage your audience, large number of participants, randomizing questions, gain insight in audience, no instructor needed.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What are the requirement of an online quiz? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Internet is required, technology is not always reliable and there are costs involved using an online quiz tool.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Why use an online quiz tool? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                The advantages are overwhelming compared to a traditional quiz.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Will I be assigned negative points to a question? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                There is no negative points for incorrect answers in your Quizzes.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">How many categories of quizzes are available? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                We have more than 10 categories ready to be played in a fun, engaging MCQ quiz format.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="10">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Chandigarh Univesity, Gharuan, Punjab, India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>quizmania.rf.gd@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 600XXXXXX78</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.1717755744703!2d76.57336461513235!3d30.769757981624185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb140bd63e07%3A0x68591e334d17a988!2sChandigarh%20University!5e0!3m2!1sen!2sin!4v1648540668479!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="10">
            <form action="contact.php" method="post" role="form" name ="contact-form" class="php-email-form" onsubmit="myFunction()">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="mail" id="mail"  placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3" style="display:none;" >
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
<div class="text-center"><button type="submit" style="border-radius:50px !important;padding: 10px 25px;">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Quiz-Mania</h3>
            <p>
              Chandigarh Univesity, Gharuan, Punjab <br>
              India <br><br>
              <strong>Phone:</strong> 600XXXXXX78<br>
              <strong>Email:</strong> quizmania.rf.gd@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              
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

    <!-- <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Quiz-Mania</span></strong>. All Rights Reserved
      </div> -->
     
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


</body>

<script>
function myFunction() {
  swal({
  title: "Feedback Recieved",
  text: "Thank you for conatcting us",
  type: "success",
});
  var frm = document.getElementsByName('contact-form')[0];
   frm.reset(); 
}
</script>
</html>

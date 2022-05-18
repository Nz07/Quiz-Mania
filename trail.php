<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Mania</title>
    <link href="Q.png" rel="icon">
  <link href="Q1.png" rel="Q1">

  <link href="quiz/trail/Quizcss/quiz-style.css" rel="stylesheet"/>   
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Your selected time for quiz is <span>15 seconds</span> each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button onclick="document.location='index.php'" class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>

        </div>
    </div>
    
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Quiz Mania</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn" >Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button onclick="document.location='register.php'" class="quit">Register</button>
            <button onclick="document.location='index.php'" class="restart">Home</button>

        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="quiz/trail/trail.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="quiz/trail/script.js"></script>
    

</body>
</html>
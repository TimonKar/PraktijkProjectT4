<!--
    Auteur: Alle Kuperus, Mick Kuijpers en Timon Karemaker
    Aanmaakdatum: 19/03/2023

    Omschrijving: Guitar Center Zelf Test
-->
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Guitar Center
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Koppeling CSS -->
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/guitartest.css">
    <!-- Koppeling JavaScript -->
    <script src="https://kit.fontawesome.com/ffa74e0cae.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
include "../includes/nav.php"
?>
<div id="quiz-container">
    <form id="quiz-form" method="post" action="../pages/process-form.php">
        <div id="question-1" class="question active">
            <p>Question 1: What is your level of experience playing guitar?</p>
            <label><input type="radio" name="q1" value="1"> Beginner</label><br>
            <label><input type="radio" name="q1" value="2"> Intermediate</label><br>
            <label><input type="radio" name="q1" value="3"> Advanced</label><br>
            <label><input type="radio" name="q1" value="100"> Professional</label><br>
            <button type="button" class="next-button" onclick="showQuestion('question-2')">Next</button>
        </div>

        <div id="question-2" class="question">
            <p>Question 2: Which genre of music do you most enjoy playing?</p>
            <label><input type="checkbox" name="q2[]" value="3"> Rock</label><br>
            <label><input type="checkbox" name="q2[]" value="3"> Blues</label><br>
            <label><input type="checkbox" name="q2[]" value="3"> Jazz</label><br>
            <label><input type="checkbox" name="q2[]" value="3"> Country</label><br>
            <label><input type="checkbox" name="q2[]" value="3"> Pop</label><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-3')">Next</button>
        </div>

        <div id="question-3" class="question">
            <p>Question 3: What is your preferred playing style?</p>
            <label><input type="radio" name="q3" value="1000"> Fingerpicking</label><br>
            <label><input type="radio" name="q3" value="150"> Strumming</label><br>
            <label><input type="radio" name="q3" value="1000"> Hybrid (fingerpicking and strumming)</label><br>
            <label><input type="radio" name="q3" value="3"> Lead (playing solos)</label><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-4')">Next</button>
        </div>

        <div id="question-4" class="question">
            <p>Question 4: Which type of guitar do you prefer?</p>
            <label><input type="radio" name="q4" value="1000"> Acoustic</label><br>
            <label><input type="radio" name="q4" value="1"> Electric</label><br>
            <label><input type="radio" name="q4" value="10000"> Classical</label><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-5')">Next</button>
        </div>

        <div id="question-5" class="question">
            <p>Question 5: What is your preferred size for a guitar?</p>
            <label><input type="radio" name="q5" value="1"> Full-size</label><br>
            <label><input type="radio" name="q5" value="1"> 3/4 size</label><br>
            <label><input type="radio" name="q5" value="1"> 1/2 size</label><br>
            <label><input type="radio" name="q5" value="1"> Other (please specify):</label><br>
            <input type="text" name="q5-other" placeholder="Other size"><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-6')">Next</button>
        </div>

        <div id="question-6" class="question">
            <p>Question 6: What is your preferred material for the guitar body?</p>
            <label><input type="radio" name="q6" value="1"> Solid wood</label><br>
            <label><input type="radio" name="q6" value="1"> Laminate wood</label><br>
            <label><input type="radio" name="q6" value="1"> Other (please specify):</label><br>
            <input type="text" name="q6-other" placeholder="Other material"><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-7')">Next</button>
        </div>

        <div id="question-7" class="question">
            <p>Question 7: What is your preferred type of wood for the guitar body?</p>
            <label><input type="radio" name="q7" value="1"> Mahogany</label><br>
            <label><input type="radio" name="q7" value="1"> Spruce</label><br>
            <label><input type="radio" name="q7" value="1"> Cedar</label><br>
            <label><input type="radio" name="q7" value="1"> Maple</label><br>
            <label><input type="radio" name="q7" value="1"> Rosewood</label><br>
            <label><input type="radio" name="q7" value="1"> Other (please specify):</label><br>
            <input type="text" name="q7-other" placeholder="Other wood"><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-8')">Next</button>
        </div>

        <div id="question-8" class="question">
            <p>Question 8: What is your preferred type of bridge?</p>
            <label><input type="radio" name="q8" value="1"> Fixed</label><br>
            <label><input type="radio" name="q8" value="1"> Tremolo</label><br>
            <label><input type="radio" name="q8" value="1"> Bigsby</label><br>
            <label><input type="radio" name="q8" value="1"> Other (please specify): </label>
            <input type="text" name="q8-other"><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-9')">Next</button>

        </div>
        <div id="question-9" class="question">
            <p>Question 9: What is your preferred type of pickup?</p>
            <label><input type="radio" name="q9" value="1"> Single-coil</label><br>
            <label><input type="radio" name="q9" value="1"> Humbucker</label><br>
            <label><input type="radio" name="q9" value="1"> P90</label><br>
            <label><input type="radio" name="q9" value="1"> Other (please specify): </label>
            <input type="text" name="q9-other"><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-10')">Next</button>

        </div>
        <div id="question-10" class="question">
            <p>Question 10: What is your preferred number of strings?</p>
            <label><input type="radio" name="q10" value="1"> 6</label><br>
            <label><input type="radio" name="q10" value="1"> 7</label><br>
            <label><input type="radio" name="q10" value="1"> 8</label><br>
            <label><input type="radio" name="q10" value="other"> Other (please specify): </label>
            <input type="text" name="q10-other"><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-11')">Next</button>

        </div>
        <div id="question-11" class="question">
            <p>Question 11: What is your preferred brand of guitar?</p>
            <label><input type="radio" name="q11" value="1"> Fender</label><br>
            <label><input type="radio" name="q11" value="1"> Gibson</label><br>
            <label><input type="radio" name="q11" value="1"> Taylor</label><br>
            <label><input type="radio" name="q11" value="1"> Martin</label><br>
            <label><input type="radio" name="q11" value="1"> Yamaha</label><br>
            <label><input type="radio" name="q11" value="1"> Other (please specify): </label>
            <input type="text" name="q11-other"><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-12')">Next</button>

        </div>
        <div id="question-12" class="question">
            <p>Question 12: What is your budget for a guitar?</p>
            <label><input type="radio" name="q12" value="1"> Under $500</label><br>
            <label><input type="radio" name="q12" value="1000">$500-$1000</label><br>
            <label><input type="radio" name="q12" value="2000">$1000-$2000</label><br>
            <label><input type="radio" name="q12" value="3000"> Over $2000</label><br>
            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-13')">Next</button>
        </div>

        <div id="question-13" class="question">
            <p>Question 13: Do you prefer a guitar with or without a cutaway?</p>
            <label><input type="radio" name="q13" value="1"> With cutaway</label><br>
            <label><input type="radio" name="q13" value="1"> Without cutaway</label><br>
            <label><input type="radio" name="q13" value="1"> No preference</label><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="button" class="next-button" onclick="showQuestion('question-14')">Next</button>
        </div>

        <div id="question-14" class="question">
            <p>Question 14: What is your preferred color for a guitar?</p>
            <label><input type="radio" name="q14" value="1"> Natural wood</label><br>
            <label><input type="radio" name="q14" value="1"> Sunburst</label><br>
            <label><input type="radio" name="q14" value="1"> Black</label><br>
            <label><input type="radio" name="q14" value="1"> White</label><br>
            <label><input type="radio" name="q14" value="1"> Red</label><br>
            <label><input type="radio" name="q14" value="1"> Other (please specify)</label><br>

            <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>


<div id="result-container"></div>
</div>

<script>
    function showQuestion(questionId) {
        // Hide the current question
        var currentQuestion = document.querySelector('.question.active');
        currentQuestion.classList.remove('active');

        // Show the next question
        var nextQuestion = document.getElementById(questionId);
        nextQuestion.classList.add('active');
    }
    function previousQuestion() {
        // Hide the current question
        var currentQuestion = document.querySelector('.question.active');
        currentQuestion.classList.remove('active');

        // Show the previous question
        var previousQuestion = currentQuestion.previousElementSibling;
        previousQuestion.classList.add('active');
    }

</script>
</body>
</html>


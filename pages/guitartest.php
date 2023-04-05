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
                <label><input type="radio" name="q1" value="beginner"> Beginner</label><br>
                <label><input type="radio" name="q1" value="intermediate"> Intermediate</label><br>
                <label><input type="radio" name="q1" value="advanced"> Advanced</label><br>
                <label><input type="radio" name="q1" value="professional"> Professional</label><br>
                <button type="button" class="next-button" onclick="showQuestion('question-2')">Next</button>
            </div>

            <div id="question-2" class="question">
                <p>Question 2: Which genre of music do you most enjoy playing?</p>
                <label><input type="checkbox" name="q2[]" value="rock"> Rock</label><br>
                <label><input type="checkbox" name="q2[]" value="blues"> Blues</label><br>
                <label><input type="checkbox" name="q2[]" value="jazz"> Jazz</label><br>
                <label><input type="checkbox" name="q2[]" value="country"> Country</label><br>
                <label><input type="checkbox" name="q2[]" value="pop"> Pop</label><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-3')">Next</button>
            </div>

            <div id="question-3" class="question">
                <p>Question 3: What is your preferred playing style?</p>
                <label><input type="radio" name="q3" value="fingerpicking"> Fingerpicking</label><br>
                <label><input type="radio" name="q3" value="strumming"> Strumming</label><br>
                <label><input type="radio" name="q3" value="hybrid"> Hybrid (fingerpicking and strumming)</label><br>
                <label><input type="radio" name="q3" value="lead"> Lead (playing solos)</label><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-4')">Next</button>
            </div>

            <div id="question-4" class="question">
                <p>Question 4: Which type of guitar do you prefer?</p>
                <label><input type="radio" name="q4" value="acoustic"> Acoustic</label><br>
                <label><input type="radio" name="q4" value="electric"> Electric</label><br>
                <label><input type="radio" name="q4" value="classical"> Classical</label><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-5')">Next</button>
            </div>

            <div id="question-5" class="question">
                <p>Question 5: What is your preferred size for a guitar?</p>
                <label><input type="radio" name="q5" value="full-size"> Full-size</label><br>
                <label><input type="radio" name="q5" value="3/4-size"> 3/4 size</label><br>
                <label><input type="radio" name="q5" value="1/2-size"> 1/2 size</label><br>
                <label><input type="radio" name="q5" value="other"> Other (please specify):</label><br>
                <input type="text" name="q5-other" placeholder="Other size"><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-6')">Next</button>
            </div>

            <div id="question-6" class="question">
                <p>Question 6: What is your preferred material for the guitar body?</p>
                <label><input type="radio" name="q6" value="solid-wood"> Solid wood</label><br>
                <label><input type="radio" name="q6" value="laminate-wood"> Laminate wood</label><br>
                <label><input type="radio" name="q6" value="other"> Other (please specify):</label><br>
                <input type="text" name="q6-other" placeholder="Other material"><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-7')">Next</button>
            </div>

            <div id="question-7" class="question">
                <p>Question 7: What is your preferred type of wood for the guitar body?</p>
                <label><input type="radio" name="q7" value="mahogany"> Mahogany</label><br>
                <label><input type="radio" name="q7" value="spruce"> Spruce</label><br>
                <label><input type="radio" name="q7" value="cedar"> Cedar</label><br>
                <label><input type="radio" name="q7" value="maple"> Maple</label><br>
                <label><input type="radio" name="q7" value="rosewood"> Rosewood</label><br>
                <label><input type="radio" name="q7" value="other"> Other (please specify):</label><br>
                <input type="text" name="q7-other" placeholder="Other wood"><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-8')">Next</button>
            </div>

            <div id="question-8" class="question">
                <p>Question 8: What is your preferred type of bridge?</p>
                <label><input type="radio" name="q8" value="fixed"> Fixed</label><br>
                <label><input type="radio" name="q8" value="tremolo"> Tremolo</label><br>
                <label><input type="radio" name="q8" value="bigsby"> Bigsby</label><br>
                <label><input type="radio" name="q8" value="other"> Other (please specify): </label>
                <input type="text" name="q8-other"><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-9')">Next</button>

            </div>
            <div id="question-9" class="question">
                <p>Question 9: What is your preferred type of pickup?</p>
                <label><input type="radio" name="q9" value="single-coil"> Single-coil</label><br>
                <label><input type="radio" name="q9" value="humbucker"> Humbucker</label><br>
                <label><input type="radio" name="q9" value="p90"> P90</label><br>
                <label><input type="radio" name="q9" value="other"> Other (please specify): </label>
                <input type="text" name="q9-other"><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-10')">Next</button>

            </div>
            <div id="question-10" class="question">
                <p>Question 10: What is your preferred number of strings?</p>
                <label><input type="radio" name="q10" value="6"> 6</label><br>
                <label><input type="radio" name="q10" value="7"> 7</label><br>
                <label><input type="radio" name="q10" value="8"> 8</label><br>
                <label><input type="radio" name="q10" value="other"> Other (please specify): </label>
                <input type="text" name="q10-other"><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-11')">Next</button>

            </div>
            <div id="question-11" class="question">
                <p>Question 11: What is your preferred brand of guitar?</p>
                <label><input type="radio" name="q11" value="fender"> Fender</label><br>
                <label><input type="radio" name="q11" value="gibson"> Gibson</label><br>
                <label><input type="radio" name="q11" value="taylor"> Taylor</label><br>
                <label><input type="radio" name="q11" value="martin"> Martin</label><br>
                <label><input type="radio" name="q11" value="yamaha"> Yamaha</label><br>
                <label><input type="radio" name="q11" value="other"> Other (please specify): </label>
                <input type="text" name="q11-other"><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-12')">Next</button>

            </div>
            <div id="question-12" class="question">
                <p>Question 12: What is your budget for a guitar?</p>
                <label><input type="radio" name="q12" value="under_500"> Under $500</label><br>
                <label><input type="radio" name="q12" value="500_1000">$500-$1000</label><br>
                <label><input type="radio" name="q12" value="1000_2000">$1000-$2000</label><br>
                <label><input type="radio" name="q12" value="over_2000"> Over $2000</label><br>
                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-13')">Next</button>
            </div>

            <div id="question-13" class="question">
                <p>Question 13: Do you prefer a guitar with or without a cutaway?</p>
                <label><input type="radio" name="q13" value="with_cutaway"> With cutaway</label><br>
                <label><input type="radio" name="q13" value="without_cutaway"> Without cutaway</label><br>
                <label><input type="radio" name="q13" value="no_preference"> No preference</label><br>

                <button type="button" class="back-button" onclick="previousQuestion()">Back</button>
                <button type="button" class="next-button" onclick="showQuestion('question-14')">Next</button>
            </div>

            <div id="question-14" class="question">
                <p>Question 14: What is your preferred color for a guitar?</p>
                <label><input type="radio" name="q14" value="natural_wood"> Natural wood</label><br>
                <label><input type="radio" name="q14" value="sunburst"> Sunburst</label><br>
                <label><input type="radio" name="q14" value="black"> Black</label><br>
                <label><input type="radio" name="q14" value="white"> White</label><br>
                <label><input type="radio" name="q14" value="red"> Red</label><br>
                <label><input type="radio" name="q14" value="other"> Other (please specify)</label><br>

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

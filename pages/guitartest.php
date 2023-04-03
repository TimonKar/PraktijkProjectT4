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
        <form id="quiz-form" method="post">
            <div id="question-1" class="question active">
                <p>Question 1: What is your skill level?</p>
                <label><input type="radio" name="q1" value="beginner"> Beginner</label><br>
                <label><input type="radio" name="q1" value="intermediate"> Intermediate</label><br>
                <<label><input type="radio" name="q1" value="advanced"> Advanced</label><br>
                <button type="button" class="next-button" onclick="showQuestion('question-2')">Next</button>
            </div>

            <div id="question-2" class="question">
                <p>Question 2: What type of music do you play?</p>
                <label><input type="checkbox" name="q2[]" value="rock"> Rock</label><br>
                <label><input type="checkbox" name="q2[]" value="blues"> Blues</label><br>
                <label><input type="checkbox" name="q2[]" value="jazz"> Jazz</label><br>
                <button type="button" class="next-button" onclick="showQuestion('question-3')">Next</button>
            </div>

            <div id="question-3" class="question">
                <p>Question 3: What body shape do you prefer?</p>
                <label><input type="radio" name="q3" value="stratocaster"> Stratocaster</label><br>
                <label><input type="radio" name="q3" value="lespaul"> Les Paul</label><br>
                <label><input type="radio" name="q3" value="telecaster"> Telecaster</label><br>
                <button type="submit">Submit</button>
            </div>
        </form>

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
    </script>
    </body>
    </html>

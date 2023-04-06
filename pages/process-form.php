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
include "../includes/nav.php";


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the answers from the form
    $q1 = isset($_POST['q1']) ? intval($_POST['q1']) : 0;
    $q2 = isset($_POST['q2']) ? array_sum(array_map('intval', $_POST['q2'])) : 0;
    $q3 = isset($_POST['q3']) ? intval($_POST['q3']) : 0;
    $q4 = isset($_POST['q4']) ? intval($_POST['q4']) : 0;
    $q5 = isset($_POST['q5']) ? intval($_POST['q5']) : 0;
    $q6 = isset($_POST['q6']) ? intval($_POST['q6']) : 0;
    $q7 = isset($_POST['q7']) ? intval($_POST['q7']) : 0;

    // Calculate the result based on the points for each question
    $result = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7;

    // Assign a word based on the total points
    if ($result >= 70) {
        $word = "<h3> Fender </h3>" . "<section class='containerTest'><section class='box'> <section class='image-result'><img src=../images/fender.jpg> </section></section></section></section>";
    } else if ($result >= 0) {
        $word = "<h3> Fazley </h3>" . "<section class='containerTest'> <section class='box'> <section class='image-result'><img src=../images/fazley.jpg> </section></section></section>";
    } else if ($result >= 3300) {
        $word = "<h3> Acoustic </h3>" . "<section class='containerTest'> <section class='box'> <section class='image-result'><img src=../images/acoustic.jpg> </section></section></section>";
    } else {
        $word = "<h3> Telecaster </h3> " . "<section class='containerTest'> <section class='box'> <section class='image-result'><img src=../images/telecaster.jpg> </section></section></section>";
    }

    // Display the result
    echo "<h3> The Perfect guitar for you is</h3> " . $word;
}
?>

</body>

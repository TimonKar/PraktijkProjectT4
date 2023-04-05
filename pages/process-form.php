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
<?php


// Get the answers from the form
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];

// Calculate the result based on the points for each question
$result = 0;
$result += $q1;
$result += array_sum($q2);
$result += $q3;
$result += $q4;
$result += $q5;
$result += $q6;
$result += $q7;

// Display the result
echo "Your result is: " . $result;
?>

</body>


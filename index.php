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
        <link rel="stylesheet" href="styles/stylesheet.css">
        <!-- Koppeling JavaScript -->
        <script src="https://kit.fontawesome.com/ffa74e0cae.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        include "includes/nav.php"
    ?>
        <main>
            <section class="container">
                <section class="box">
                    <section class="images">
                        <a href="#"><img src="images/arrival1.png" alt="Mixing"></a>
                        <a href="#"><img src="images/arrival2.png" alt="Amp"></a>
                        <a href="#"><img src="images/arrival3.png" alt="Keyboard"></a>
                        <a href="#"><img src="images/arrival4.png" alt="Mixing"></a>
                    </section>
                    <section class="textbox" >
                    <h2>
                        New Arrivals
                    </h2>
                    <p>
                        Discover the latest and greatest gear
                    </p>
                    <a href="#"><button>Shop Now!</button></a>
                </section>
                </section>
                <section class="box">
                    <section class="image">
                        <a href="#"><img src="images/lessons.png" alt="Guitar_Lesson"></a>
                    </section>
                    <section class="textbox">
                        <h2>
                            Get Playing with Lessons
                        </h2>
                        <p>
                            One-on-one instruction with our experts
                        </p>
                        <a href="#">Let’s Go ></a>
                    </section>
                </section>
                <section class="box">
                    <section class="textbox">
                        <h2>
                            Shop By Category
                        </h2>
                    </section>
                    <section class="image">
                        <figure>
                        <a href="#"><img src="images/acoustic.png" alt="acoustic_guitar"></a>
                        <figcaption>Acoustic Guitars</figcaption>
                        </figure>
                        <figure>
                        <a href="#"><img src="images/electric.png" alt="electric_guitar"></a>
                        <figcaption>Electric Guitars</figcaption>
                        </figure>
                        <figure>
                        <a href="#"><img src="images/drums.png" alt="drums"></a>
                        <figcaption>Drums</figcaption>
                        </figure>
                        <figure>
                        <a href="#"><img src="images/keys.png" alt="keyboard"></a>
                        <figcaption>Keys</figcaption>
                        </figure>
                    </section>
                </section>
            </section>
        </main>
    </body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Przychodnia Medica</title>
    <link rel="icon" href="obraz2.png">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'medica');
        $query1 = "SELECT nazwa, cena, opis FROM abonamenty;";
        $result1 = mysqli_query($conn, $query1);

        while($row1 = mysqli_fetch_row($result1))
            {
                echo '<h3>Pakiet '.$row1[0].' - cena '.$row1[1].' zł</h3>';
                echo '<p>'.$row1[2].'</p>';
            }

        ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>

    </main>
    <section class="first">
        <h2>Standardowy</h2>
        <ul>
            <?php 
            
            $query3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON szczegolyabonamentu.abonamenty_id = abonamenty.id JOIN cechy ON szczegolyabonamentu.cechy_id = cechy.id WHERE abonamenty.id = 1;";
            $result2 = mysqli_query($conn, $query3);

            while($row2 = mysqli_fetch_row($result2))
                {
                    echo '<li>'.$row2[1].'</li>';
                }
            ?>
        </ul>
    </section>
    <section class="second">
        <h2>Premium</h2>
        <ul>
            <?php 
            
            $query4 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON szczegolyabonamentu.abonamenty_id = abonamenty.id JOIN cechy ON szczegolyabonamentu.cechy_id = cechy.id WHERE abonamenty.id = 2;";
            $result3 = mysqli_query($conn, $query4);

            while($row3 = mysqli_fetch_row($result3))
                {
                    echo '<li>'.$row3[1].'</li>';
                }
            ?>
        </ul>
    </section>
    <section class="third">
        <h2>Dziecko</h2>
        <ul>
            <?php 
            
            $query5 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON szczegolyabonamentu.abonamenty_id = abonamenty.id JOIN cechy ON szczegolyabonamentu.cechy_id = cechy.id WHERE abonamenty.id = 3;";
            $result4 = mysqli_query($conn, $query5);

            while($row4 = mysqli_fetch_row($result4))
                {
                    echo '<li>'.$row4[1].'</li>';
                }
            ?>
        </ul>
    </section>
    <footer>
        <p><img src="obraz2.png" alt="przychodnia"> Stronę przygotował: 00000000000</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Korona gór polskich</title>
</head>
<body>
    <header class="left">
        <img src="logo.png" alt="Logo">
    </header>
    <header class="right">
        <h1>Korona Gór Polskich</h1>
    </header>
    <main>
        <?php
        $conn = mysqli_connect('localhost', 'root','','korona'); 
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query3 = "SELECT szczyty.plik, szczyty.nazwa, szczyty.wysokosc, szczyty.pasmo, opis.opis FROM szczyty JOIN opis ON szczyty.id = $id;";
        $result3 = mysqli_query($conn, $query3);

        if($row3 = mysqli_fetch_row($result3))
            {
                echo '  <img src="'.$row3[0].'" alt="szczyt">
                        <h2>'.$row3[1].'</h2>
                        <h3>wysokość: '.$row3[2].' metrów n.p.m.</h3>
                        <h3>pasmo górskie: '.$row3[3].'</h3>
                        <p>'.$row3[4].'</p>
                ';
            }

        }
        ?>
    </main>
    <section>
         <?php

        $query2 = "SELECT plik, nazwa FROM szczyty WHERE id BETWEEN 1 AND 10;";
        $result2 = mysqli_query($conn, $query2);

        while($row2 = mysqli_fetch_row($result2))
            {
                echo '<img src="'.$row2[0].'" alt="'.$row2[1].'" class="miniatury">';
            }

        ?>
    </section>
    <footer class="left">
        <h3>Kontakt</h3>
        <ul>
            <li>Zadzwoń do nas: 111 222 333</li>
            <li><a href="mailto:korona@gory.pl">Napisz do nas</a></li>
        </ul>
    </footer>
    <footer class="right">
        <h3>© Wykonane przez: 00000000000</h3>
    </footer>
</body>
</html>
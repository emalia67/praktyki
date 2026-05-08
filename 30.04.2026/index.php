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
        $query1 = "SELECT id, nazwa FROM szczyty ORDER BY wysokosc DESC;";
        $result1 = mysqli_query($conn, $query1);

        while($row1 = mysqli_fetch_row($result1))
            {
                echo "<span><a href='szczyty.php?id=".$row1[0]."'>".$row1[1]."</a></span>";
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
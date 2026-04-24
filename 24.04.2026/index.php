<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl8.css">
    <title>Nasz sklep komputerowy</title>
</head>
<body>
    <header>
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </header>
    <nav>
        <h2>Podzespoły komputerowe</h2>
    </nav>
    <main>
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>

            <?php

            $conn = mysqli_connect('localhost', 'root', '', 'sklep');
            $query = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_row($result)){

                echo 
                '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                </tr>';}

            mysqli_close($conn);
            ?>

        </table>
    </main>
    <footer>
        <div>
            <img src="scalak.jpg" alt="promocje na procesory">
        </div>
        <div>
            <h4>Nasz sklep komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
        </div>
        <div>
            <p>zadzwoń: 601 602 603</p>
        </div>
        <div>
            <p>Stronę wykonał: 000000000000</p>
        </div>
    </footer>
</body>
</html>
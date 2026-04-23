<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Motocykle</title>
</head>
<body>
    <main>
    <nav>
        <h1>Motocykle - moja pasja</h1>
    </nav>
    <section class="left">
    <h2>Gdzie pojechać?</h2>
    <dl> <?php 
        $conn = mysqli_connect('localhost', 'root','','motory');
        $query1 = 'SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM wycieczki JOIN zdjecia ON wycieczki.id = zdjecia.id;';
        $result1 = mysqli_query($conn, $query1);

        while($row = mysqli_fetch_row($result1)) {
            echo "<dt>".$row[0].", rozpoczyna się w ".$row[2].", <a href='".$row[3].".jpg'>zobacz zdjęcie</a></dt>";
            echo "<dd>".$row[1]."</dd>";
        }
    ?>
    </dl>
</section>
    </section>
    <section class="right">
        <h2>Co kupić?</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
        </ol>
    </section>
    <section class="right">
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek: <?php
                $query2 = "SELECT COUNT(id) FROM wycieczki;";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_row($result2);
                echo $row2[0];
                
                mysqli_close($conn);
            ?>
        </p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </section>
    </main>
    
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
 <img src="motor.png" alt="motocykl">
</body>
</html>
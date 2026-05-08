<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Warzywniak</title>
</head>
<body>
    <header>
        <h1>Internetowy sklep z eko-warzywami</h1>
    </header>
    <nav>
        <ol> 
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
        </ol>
    </nav>
    <main>
        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'dane2');
        $query1 = 'SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE rodzaje_id = 1 OR rodzaje_id = 2;';
        $result1 = mysqli_query($conn, $query1);

        while($row = mysqli_fetch_row($result1))
            {
                echo 
                '<div>
                    <img src="'.$row[4].'" alt="warzywniak">
                    <h5>'.$row[0].'</h5>
                    <p>opis: '.$row[2].'</p>
                    <p>na stanie: '.$row[1].'</p>
                    <h2>'.$row[3].' zł</h2>
                </div>';
            }

        ?>
    </main>
    <footer>
        <form action="sklep.php" method="post">
            <label for="nazwa">Nazwa: </label>
            <input type="text" name="nazwa" id="nazwa">
            <label for="cena">Cena: </label>
            <input type="text" name="cena" id="cena">
            <button type="submit">Dodaj produkt</button><br>
            <?php

            $nazwa = $_POST['nazwa'];
            $cena = $_POST['cena'];


            $query2 = "INSERT INTO produkty VALUES (NULL, 1, 4, '$nazwa', 10, '$cena', '', 'owoce.jpg');";
           
            if(isset($_POST['nazwa']) && isset($_POST['cena']))
                {
                    $result2 = mysqli_query($conn, $query2);
                };
            ?>
        </form>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
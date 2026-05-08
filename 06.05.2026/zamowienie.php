<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep</title>
</head>
<body>
    <header>
        <h1>Ozdoby - sklep</h1>
    </header>
    <nav>
        <h2>OZDOBY</h2>
        <a href="galeria.html">Galeria</a><br>
        <a href="zamowienie.php">Zamówienie</a>
    </nav>
    <main>
        <p>Dodaj użytkownika</p>
        <form action="zamowienie.php" method="post">
            <label for="imie">Imię: </label>
            <input type="text" name="imie" id="imie"><br>
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" name="nazwisko" id="nazwisko"><br>
            <label for="email">e-mail: </label>
            <input type="email" name="email" id="email"><br>
            <button type="submit">WYŚLIJ</button>
            <?php

            $conn = mysqli_connect('localhost', 'root', '', 'sklep');

            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $email = $_POST['email'];

            if(isset($imie) && isset($nazwisko) && isset($email))
            {
            $query5 = "INSERT INTO zamowienia (imie, nazwisko, adres_email) VALUES ('$imie', '$nazwisko', '$email');";
            $result = mysqli_query($conn, $query5);
            }

            mysqli_close($conn);
            ?>
        </form>
    </main>
    <section>
        <img src="animacja.gif" alt="animacja">
    </section>
    <footer>
        <h3>Autor strony: 00000000000</h3>
    </footer>
</body>
</html>
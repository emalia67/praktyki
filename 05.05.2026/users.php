<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel administratora</title>
</head>
<body>
    <header>
        <h3>Portal Społecznościowy - panel administratora</h3>
    </header>
    <section class="left">
        <h4>Użytkownicy</h4>
        <?php

        $conn = mysqli_connect('localhost','root', '', 'dane4');
        $query1 = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby ORDER BY id LIMIT 30;";
        $result1 = mysqli_query($conn, $query1);
        $wiek = 0;

        while($row1 = mysqli_fetch_row($result1))
            {
                $wiek = 2026 - $row1[3];
                echo '<p>'.$row1[0].'. '.$row1[1].' '.$row1[2].', '.$wiek.' lat</p>';
            }

        ?>
        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section class="right">
        <h4>Podaj id użytkownika</h4>
        <form action="users.php" method="post">
            <input type="number" name="userid" id="userid">
            <button type="submit">ZOBACZ</button>

        </form>
        <hr>
        <?php
        if(isset($_POST['userid'])){
        $userid = $_POST['userid'];
        $query2 = "SELECT osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby JOIN hobby ON hobby.id = osoby.Hobby_id WHERE osoby.id = $userid;";
        $result2 = mysqli_query($conn, $query2);

        if($row2 = mysqli_fetch_row($result2)){

        echo '<h2>'.$userid.'. '.$row2[0].' '.$row2[1].'</h2>';
        echo '<img src="'.$row2[4].'" alt="'.$userid.'">';
        echo '<p>Rok urodzenia: '.$row2[2].'</p>
              <p>Opis: '.$row2[3].'</p>
              <p>Hobby: '.$row2[5].'</p>';
        }
        }
        ?>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
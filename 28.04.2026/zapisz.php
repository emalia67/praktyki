<?php

    $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
    $adres = $_POST['adres'];
    $nazwisko = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    if(isset($adres) && isset($nazwisko) && isset($imie))
    {
        $query = "INSERT INTO karty_wedkarskie VALUES(NULL, '$imie', '$nazwisko', '$adres', NULL, NULL);";
        $result = mysqli_query($conn, $query);
    }

    mysqli_close($conn);

?>
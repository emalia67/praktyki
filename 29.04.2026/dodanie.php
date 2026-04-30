<?php

    $conn = mysqli_connect('localhost', 'root', '', 'ee09');

    $numerkaretki = $_POST['numerkaretki'];
    $pierwszyratownik = $_POST['pierwszyratownik'];
    $drugiratownik = $_POST['drugiratownik'];
    $trzeciratownik = $_POST['trzeciratownik'];

    if(isset($numerkaretki) && isset($pierwszyratownik) && isset($drugiratownik) && isset($trzeciratownik)){

    $query = "INSERT INTO ratownicy VALUES (NULL, '$numerkaretki', '$pierwszyratownik', '$drugiratownik', '$trzeciratownik');";
    $result = mysqli_query($conn, $query);

    echo '<p>Do bazy zostało wysłane zapytanie: "INSERT INTO ratownicy VALUES (NULL, '.$numerkaretki.', '.$pierwszyratownik.', '.$drugiratownik.', '.$trzeciratownik.');"</p>';
    }

    mysqli_close($conn);
?>
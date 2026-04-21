<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma Przewozowa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Firma przewozowa Półdarmo</h1>
    </header>
    <nav>
        <a href="">kwerenda1</a>
        <a href="">kwerenda2</a>
        <a href="">kwerenda3</a>
        <a href="">kwerenda4</a>
    </nav>
    <main>
    <section class="left">
        <h2>Zadania do wykonania</h2>
        <table>
            <tr>
                <th>Zadanie do wykonania</th>
                <th>Data realizacji</th>
                <th>Akcja</th>
            </tr>

        <?php 

            $conn = mysqli_connect('localhost','root','','przewozy');

            if(isset($_GET['delete_id'])){
                $id = $_GET['delete_id'];
                mysqli_query($conn, "DELETE FROM zadania WHERE id_zadania = $id ;");
            }

                if(!empty($_POST['zadanie']) && !empty($_POST['data']))
                    {
                        $task = $_POST['zadanie'];
                        $date = $_POST['data'];

                        $query2 = "INSERT INTO zadania VALUES(NULL, '$task', '$date', 1);";
                        $result2= mysqli_query($conn, $query2);
                    }

                

             $query1 = 'SELECT id_zadania, zadanie, data FROM zadania;';
             $result = mysqli_query($conn, $query1);



            while($row = mysqli_fetch_array($result))
            {

                 echo '<tr>
                     <td>
                         '.$row['zadanie'].'
                     </td>

                     <td>
                    '.$row['data'].'
                     </td>
                     <td><a href="przewozy.php?delete_id='.$row['id_zadania'].'">Usuń</a></td>
                     </tr>';
             }



        mysqli_close($conn);
        ?>



        </table>

        <form method="post">
            <label for="zadanie">Zadanie do wykonania:</label><br>
            <input type="text" name="zadanie" id="zadanie"><br>

            <label for="data">Data realizacji:</label><br>
            <input type="date" name="data" id="data">

            <button type="submit" value="dodaj">Dodaj</button>

        </form>
    </section>
    <section class="right">
        <img src="auto.png" alt="auto firmowe">
        <h3>Nasza specjalność</h3>
        <ul>
            <li>Przeprowadzki</li>
            <li>Przewóz mebli</li>
            <li>Przesyłki gabarytowe</li>
            <li>Wynajem pojazdów</li>
            <li>Zakupy towarów</li>
        </ul>
    </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>

</body>
</html>
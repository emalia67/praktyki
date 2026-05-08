<?php


$conn = mysqli_connect('localhost', 'root', '', 'wedkarstwo');

$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];

$query = "INSERT INTO zawody_wedkarskie VALUES (NULL, 0, '$lowisko', '$data', '$sedzia');";
$result = mysqli_query($conn, $query);

mysqli_close($conn);


?>
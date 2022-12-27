<?php

include '../connection.php';

$id = $_POST['id'];
$bobot = $_POST['bobot'];

$sql = "UPDATE kriteria SET bobot='$bobot' WHERE id='$id'";
mysqli_query($conn, $sql);

header('Location: ./');

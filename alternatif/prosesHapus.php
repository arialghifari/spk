<?php

include '../connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM alternatif WHERE id=$id";
mysqli_query($conn, $sql);

header('Location: ./');

<?php

include '../connection.php';

$kodeAlternatif = $_POST['kodeAlternatif'];
$namaPemohon = $_POST['namaPemohon'];
$dokumenLegalitasPemohon = $_POST['dokumenLegalitasPemohon'];
$suratTanahAgunan = $_POST['suratTanahAgunan'];
$pbbAgunan = $_POST['pbbAgunan'];
$npwp = $_POST['npwp'];
$usaha = $_POST['usaha'];
$penghasilan = $_POST['penghasilan'];
$skTidakSilangSengketa = $_POST['skTidakSilangSengketa'];

$sql = "INSERT INTO alternatif VALUES('', '$kodeAlternatif', '$namaPemohon', '$dokumenLegalitasPemohon', '$suratTanahAgunan', '$pbbAgunan', '$npwp', '$usaha', '$penghasilan', '$skTidakSilangSengketa')";
mysqli_query($conn, $sql);

header('Location: ./');

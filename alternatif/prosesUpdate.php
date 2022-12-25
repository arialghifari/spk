<?php

include '../connection.php';

print_r($_POST);

$id = $_POST['id'];
$kodeAlternatif = $_POST['kodeAlternatif'];
$namaPemohon = $_POST['namaPemohon'];
$dokumenLegalitasPemohon = $_POST['dokumenLegalitasPemohon'];
$suratTanahAgunan = $_POST['suratTanahAgunan'];
$pbbAgunan = $_POST['pbbAgunan'];
$npwp = $_POST['npwp'];
$usaha = $_POST['usaha'];
$penghasilan = $_POST['penghasilan'];
$skTidakSilangSengketa = $_POST['skTidakSilangSengketa'];

$sql = "UPDATE alternatif SET kode='$kodeAlternatif', nama='$namaPemohon', C1='$dokumenLegalitasPemohon', C2='$suratTanahAgunan', C3='$pbbAgunan', C4='$npwp', C5='$usaha', C6='$penghasilan', C7='$skTidakSilangSengketa' WHERE id='$id'";
mysqli_query($conn, $sql);

header('Location: ./');

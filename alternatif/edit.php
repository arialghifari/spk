<?php

include '../connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM alternatif WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SPK KREDIT USAHA RAKYAT</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="../style.css">
</head>

<body class="bg-zinc-200 flex">
	<nav class="flex flex-col w-80 bg-zinc-800 h-screen gap-8 sticky top-0">
		<div class=" text-center py-4 text-white border-b-2 border-zinc-700">
			<a href="./" class="text-xl font-bold tracking-widest">SPK</a>
			<p class="text-sm">Kredit Usaha Rakyat</p>
		</div>

		<div class="flex flex-col gap-4 text-zinc-100 mx-6">
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../"><img src="../assets/ic_home.svg" alt="icon home"> Home</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../kriteria"><img src="../assets/ic_clipboard.svg" alt="icon kriteria"> Kriteria</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center active" href="./"><img src="../assets/ic_user.svg" alt="icon alternatif"> Alternatif</a>
		</div>
	</nav>

	<main class="flex w-full h-fit">
		<form method="post" action="prosesUpdate.php" class="m-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md w-full">
			<h2 class="font-semibold text-xl mb-2">Edit Alternatif</h2>

			<input type="hidden" name="id" value="<?= $data[0] ?>">

			<div class="form-control">
				<label for="kodeAlternatif">Kode Alternatif</label>
				<input type="text" id="kodeAlternatif" name="kodeAlternatif" value="<?= $data[1] ?>">
			</div>

			<div class="form-control">
				<label for="namaPemohon">Nama Pemohon</label>
				<input type="text" id="namaPemohon" name="namaPemohon" value="<?= $data[2] ?>">
			</div>

			<div class="form-control">
				<label for="dokumenLegalitasPemohon">C1: Dokumen Legalitas Pemohon</label>
				<select name="dokumenLegalitasPemohon" id="dokumenLegalitasPemohon">
					<option value="100" <?= $data[3] == 100 ? 'selected' : '' ?>>Lengkap (100)</option>
					<option value="50" <?= $data[3] == 50 ? 'selected' : '' ?>>Tidak Lengkap (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="suratTanahAgunan">C2: Surat Tanah Agunan</label>
				<select name="suratTanahAgunan" id="suratTanahAgunan">
					<option value="100" <?= $data[4] == 100 ? 'selected' : '' ?>>Sertifikat Hak Milik (100)</option>
					<option value="50" <?= $data[4] == 50 ? 'selected' : '' ?>>Surat Keterangan Tanah Yang Dilegalisir Camat (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="pbbAgunan">C3: PBB Agunan</label>
				<select name="pbbAgunan" id="pbbAgunan">
					<option value="100" <?= $data[5] == 100 ? 'selected' : '' ?>>Besar (100)</option>
					<option value="50" <?= $data[5] == 50 ? 'selected' : '' ?>>Kecil (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="npwp">C4: NPWP</label>
				<select name="npwp" id="npwp">
					<option value="50" <?= $data[6] == 50 ? 'selected' : '' ?>>Ada (50)</option>
					<option value="25" <?= $data[6] == 25 ? 'selected' : '' ?>>Tidak Ada (25)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="usaha">C5: Usaha</label>
				<select name="usaha" id="usaha">
					<option value="100" <?= $data[7] == 100 ? 'selected' : '' ?>>Menengah (100)</option>
					<option value="75" <?= $data[7] == 75 ? 'selected' : '' ?>>Kecil (75)</option>
					<option value="50" <?= $data[7] == 50 ? 'selected' : '' ?>>Mikro (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="penghasilan">C6: Penghasilan</label>
				<select name="penghasilan" id="penghasilan">
					<option value="100" <?= $data[8] == 100 ? 'selected' : '' ?>>> 5 Juta (100)</option>
					<option value="80" <?= $data[8] == 80 ? 'selected' : '' ?>>> 4 Juta – 5 Juta (80)</option>
					<option value="60" <?= $data[8] == 60 ? 'selected' : '' ?>>> 3 Juta – 4 Juta (60)</option>
					<option value="40" <?= $data[8] == 40 ? 'selected' : '' ?>>> 2 Juta – 3 Juta (40)</option>
					<option value="20" <?= $data[8] == 20 ? 'selected' : '' ?>>0 – 2 Juta (20)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="skTidakSilangSengketa">C7: SK Tidak Silang Sengketa</label>
				<select name="skTidakSilangSengketa" id="skTidakSilangSengketa">
					<option value="50" <?= $data[9] == 50 ? 'selected' : '' ?>>Ada (50)</option>
					<option value="25" <?= $data[9] == 25 ? 'selected' : '' ?>>Tidak Ada (25)</option>
				</select>
			</div>

			<button type="submit" class="bg-blue-600 hover:bg-blue-700 mt-4 p-2 rounded text-white">Update Alternatif</button>
		</form>
	</main>

</body>

</html>
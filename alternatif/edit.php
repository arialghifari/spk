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
	<title>SPK PEMBERIAN KREDIT USAHA RAKYAT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<header>
		<nav class="navbar bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../">SPK KREDIT USAHA RAKYAT</a>
			</div>
		</nav>
	</header>

	<main>
		<div class="row m-0">
			<div class="col-12 col-md-2 m-0 bg-light py-4 vh-100">
				<div class="d-flex flex-column gap-2">
					<a class="border-bottom text-decoration-none py-2" href="../">Home</a>
					<a class="border-bottom text-decoration-none py-2" href="./">Kriteria</a>
					<a class="border-bottom text-decoration-none py-2" href="../alternatif">Alternatif</a>
				</div>
			</div>

			<div class="col-12 col-md-10 m-0 mb-4 px-4">
				<h2 class="mt-4 mb-3 fs-4">Tambah Alternatif</h2>

				<form method="post" action="prosesUpdate.php" class="d-flex flex-column gap-3">
					<input type="text" name="id" class="form-control" value="<?= $data[0] ?>" disabled>

					<div class="input-group">
						<label for="kodeAlternatif" class="w-100 mb-1">Kode Alternatif</label>
						<input type="text" id="kodeAlternatif" name="kodeAlternatif" class="form-control" value="<?= $data[1] ?>">
					</div>

					<div class="input-group">
						<label for="namaPemohon" class="w-100 mb-1">Nama Pemohon</label>
						<input type="text" id="namaPemohon" name="namaPemohon" class="form-control" value="<?= $data[2] ?>">
					</div>

					<div class="input-group">
						<label for="dokumenLegalitasPemohon" class="w-100 mb-1">C1: Dokumen Legalitas Pemohon</label>
						<select name="dokumenLegalitasPemohon" id="dokumenLegalitasPemohon" class="form-select">
							<option value="100" <?= $data[3] == 100 ? 'selected' : '' ?>>Lengkap (100)</option>
							<option value="50" <?= $data[3] == 50 ? 'selected' : '' ?>>Tidak Lengkap (50)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="suratTanahAgunan" class="w-100 mb-1">C2: Surat Tanah Agunan</label>
						<select name="suratTanahAgunan" id="suratTanahAgunan" class="form-select">
							<option value="100" <?= $data[4] == 100 ? 'selected' : '' ?>>Sertifikat Hak Milik (100)</option>
							<option value="50" <?= $data[4] == 50 ? 'selected' : '' ?>>Surat Keterangan Tanah Yang Dilegalisir Camat (50)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="pbbAgunan" class="w-100 mb-1">C3: PBB Agunan</label>
						<select name="pbbAgunan" id="pbbAgunan" class="form-select">
							<option value="100" <?= $data[5] == 100 ? 'selected' : '' ?>>Besar (100)</option>
							<option value="50" <?= $data[5] == 50 ? 'selected' : '' ?>>Kecil (50)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="npwp" class="w-100 mb-1">C4: NPWP</label>
						<select name="npwp" id="npwp" class="form-select">
							<option value="50" <?= $data[6] == 50 ? 'selected' : '' ?>>Ada (50)</option>
							<option value="25" <?= $data[6] == 25 ? 'selected' : '' ?>>Tidak Ada (25)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="usaha" class="w-100 mb-1">C5: Usaha</label>
						<select name="usaha" id="usaha" class="form-select">
							<option value="100" <?= $data[7] == 100 ? 'selected' : '' ?>>Menengah (100)</option>
							<option value="75" <?= $data[7] == 75 ? 'selected' : '' ?>>Kecil (75)</option>
							<option value="50" <?= $data[7] == 50 ? 'selected' : '' ?>>Mikro (50)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="penghasilan" class="w-100 mb-1">C6: Penghasilan</label>
						<select name="penghasilan" id="penghasilan" class="form-select">
							<option value="100" <?= $data[8] == 100 ? 'selected' : '' ?>>> 5 Juta (100)</option>
							<option value="80" <?= $data[8] == 80 ? 'selected' : '' ?>>> 4 Juta – 5 Juta (80)</option>
							<option value="60" <?= $data[8] == 60 ? 'selected' : '' ?>>> 3 Juta – 4 Juta (60)</option>
							<option value="40" <?= $data[8] == 40 ? 'selected' : '' ?>>> 2 Juta – 3 Juta (40)</option>
							<option value="20" <?= $data[8] == 20 ? 'selected' : '' ?>>0 – 2 Juta (20)</option>
						</select>
					</div>

					<div class="input-group">
						<label for="skTidakSilangSengketa" class="w-100 mb-1">C7: SK Tidak Silang Sengketa</label>
						<select name="skTidakSilangSengketa" id="skTidakSilangSengketa" class="form-select">
							<option value="50" <?= $data[9] == 50 ? 'selected' : '' ?>>Ada (50)</option>
							<option value="25" <?= $data[9] == 25 ? 'selected' : '' ?>>Tidak Ada (25)</option>
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Tambah Alternatif</button>
				</form>
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
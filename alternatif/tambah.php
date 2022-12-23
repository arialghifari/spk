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

				<form method="post" action="prosesTambah.php" class="d-flex flex-column gap-3">
					<div class="input-group">
						<label for="kodeAlternatif" class="w-100 mb-1">Kode Alternatif</label>
						<input type="text" id="kodeAlternatif" name="kodeAlternatif" class="form-control">
					</div>

					<div class="input-group">
						<label for="namaLengkap" class="w-100 mb-1">Nama Pemohon</label>
						<input type="text" id="namaLengkap" name="namaLengkap" class="form-control">
					</div>

					<div class="input-group">
						<label for="dokumenLegalitasPemohon" class="w-100 mb-1">C1: Dokumen Legalitas Pemohon</label>
						<select name="dokumenLegalitasPemohon" id="dokumenLegalitasPemohon" class="form-select">
							<option value="100">Lengkap</option>
							<option value="50">Tidak Lengkap</option>
						</select>
					</div>

					<div class="input-group">
						<label for="suratTanahAgunan" class="w-100 mb-1">C2: Surat Tanah Agunan</label>
						<select name="suratTanahAgunan" id="suratTanahAgunan" class="form-select">
							<option value="100">Sertifikat Hak Milik</option>
							<option value="50">Surat Keterangan Tanah Yang Dilegalisir Camat</option>
						</select>
					</div>

					<div class="input-group">
						<label for="pbbAgunan" class="w-100 mb-1">C3: PBB Agunan</label>
						<select name="pbbAgunan" id="pbbAgunan" class="form-select">
							<option value="100">Besar</option>
							<option value="50">Kecil</option>
						</select>
					</div>

					<div class="input-group">
						<label for="npwp" class="w-100 mb-1">C4: NPWP</label>
						<select name="npwp" id="npwp" class="form-select">
							<option value="50">Ada</option>
							<option value="25">Tidak Ada</option>
						</select>
					</div>

					<div class="input-group">
						<label for="usaha" class="w-100 mb-1">C5: Usaha</label>
						<select name="usaha" id="usaha" class="form-select">
							<option value="100">Menengah</option>
							<option value="75">Kecil</option>
							<option value="50">Mikro</option>
						</select>
					</div>

					<div class="input-group">
						<label for="penghasilan" class="w-100 mb-1">C6: Penghasilan</label>
						<select name="penghasilan" id="penghasilan" class="form-select">
							<option value="100">> 5 Juta</option>
							<option value="80">> 4 Juta – 5 Juta</option>
							<option value="60">> 3 Juta – 4 Juta</option>
							<option value="40">> 2 Juta – 3 Juta</option>
							<option value="20">0 – 2 Juta</option>
						</select>
					</div>

					<div class="input-group">
						<label for="skTidakSilangSengketa" class="w-100 mb-1">C7: SK Tidak Silang Sengketa</label>
						<select name="skTidakSilangSengketa" id="skTidakSilangSengketa" class="form-select">
							<option value="50">Ada</option>
							<option value="25">Tidak Ada</option>
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
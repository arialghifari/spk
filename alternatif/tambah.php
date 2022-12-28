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
		<form method="post" action="prosesTambah.php" class="m-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md w-full">
			<h2 class="font-semibold text-xl mb-2">Tambah Alternatif</h2>

			<div class="form-control">
				<label for="kodeAlternatif">Kode Alternatif</label>
				<input type="text" id="kodeAlternatif" name="kodeAlternatif" class="form-control">
			</div>

			<div class="form-control">
				<label for="namaPemohon">Nama Pemohon</label>
				<input type="text" id="namaPemohon" name="namaPemohon" class="form-control">
			</div>

			<div class="form-control">
				<label for="dokumenLegalitasPemohon">C1: Dokumen Legalitas Pemohon</label>
				<select name="dokumenLegalitasPemohon" id="dokumenLegalitasPemohon">
					<option value="100">Lengkap (100)</option>
					<option value="50">Tidak Lengkap (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="suratTanahAgunan">C2: Surat Tanah Agunan</label>
				<select name="suratTanahAgunan" id="suratTanahAgunan">
					<option value="100">Sertifikat Hak Milik (100)</option>
					<option value="50">Surat Keterangan Tanah Yang Dilegalisir Camat (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="pbbAgunan">C3: PBB Agunan</label>
				<select name="pbbAgunan" id="pbbAgunan">
					<option value="100">Besar (100)</option>
					<option value="50">Kecil (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="npwp">C4: NPWP</label>
				<select name="npwp" id="npwp">
					<option value="50">Ada (50)</option>
					<option value="25">Tidak Ada (25)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="usaha">C5: Usaha</label>
				<select name="usaha" id="usaha">
					<option value="100">Menengah (100)</option>
					<option value="75">Kecil (75)</option>
					<option value="50">Mikro (50)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="penghasilan">C6: Penghasilan</label>
				<select name="penghasilan" id="penghasilan" class="form-select">
					<option value="100">> 5 Juta (100)</option>
					<option value="80">> 4 Juta – 5 Juta (80)</option>
					<option value="60">> 3 Juta – 4 Juta (60)</option>
					<option value="40">> 2 Juta – 3 Juta (40)</option>
					<option value="20">0 – 2 Juta (20)</option>
				</select>
			</div>

			<div class="form-control">
				<label for="skTidakSilangSengketa">C7: SK Tidak Silang Sengketa</label>
				<select name="skTidakSilangSengketa" id="skTidakSilangSengketa">
					<option value="50">Ada (50)</option>
					<option value="25">Tidak Ada (25)</option>
				</select>
			</div>

			<button type="submit" class="bg-blue-600 hover:bg-blue-700 mt-4 p-2 rounded text-white">Tambah Alternatif</button>
		</form>
		</div>
	</main>

</body>

</html>
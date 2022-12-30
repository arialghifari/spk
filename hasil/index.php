<?php

include '../Smart.php';

$smart = new Smart();

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

		<div class="flex flex-col gap-4 text-zinc-100 mx-6 h-screen">
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../"><img src="../assets/ic_home.svg" alt="icon home"> Home</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../kriteria"><img src="../assets/ic_clipboard.svg" alt="icon kriteria"> Kriteria</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../alternatif"><img src="../assets/ic_user.svg" alt="icon alternatif"> Alternatif</a>
		</div>
	</nav>

	<main class="flex w-full h-fit flex-col gap-8 my-8">
		<!-- Kriteria dan Bobot -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Kriteria dan Bobot</h2>

			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Kriteria</th>
						<th>Bobot</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($smart->kriteria as $kriteria) {
					?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $kriteria[1]; ?></td>
							<td><?= $kriteria[2]; ?></td>
							<td><?= $kriteria[3]; ?></td>
						</tr>
					<?php $no++;
					} ?>
					<tr>
						<td colspan="3">Total</td>
						<td><?= $smart->totalBobotKriteria(); ?></td>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- Alternatif -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Alternatif</h2>

			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Nama</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
						<th>C6</th>
						<th>C7</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($smart->alternatif as $alternatif) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $alternatif[1] ?></td>
							<td><?= $alternatif[2] ?></td>
							
							<!-- Kriteria -->
							<td><?= $alternatif[3] ?></td>
							<td><?= $alternatif[4] ?></td>
							<td><?= $alternatif[5] ?></td>
							<td><?= $alternatif[6] ?></td>
							<td><?= $alternatif[7] ?></td>
							<td><?= $alternatif[8] ?></td>
							<td><?= $alternatif[9] ?></td>
						</tr>
					<?php $no++;
					} ?>
				</tbody>
			</table>
		</div>

		<!-- Normalisasi Bobot Kriteria -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Normalisasi Bobot Kriteria</h2>

			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Kriteria</th>
						<th>Bobot</th>
						<th>Normalisasi Bobot</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($smart->normalisasiBobot as $kriteria) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $kriteria[1] ?></td>
							<td><?= $kriteria[2] ?></td>
							<td><?= $kriteria[3] ?></td>
							<td><?= $kriteria[5] ?></td>
						</tr>
					<?php $no++;
					} ?>
				</tbody>
			</table>
		</div>

		<!-- Normalisasi Alternatif -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Normalisasi Alternatif</h2>

			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
						<th>C6</th>
						<th>C7</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($smart->normalisasiAlternatif as $alternatif) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $alternatif[1] ?></td>
							
							<!-- Kriteria -->
							<td><?= $alternatif[3] ?></td>
							<td><?= $alternatif[4] ?></td>
							<td><?= $alternatif[5] ?></td>
							<td><?= $alternatif[6] ?></td>
							<td><?= $alternatif[7] ?></td>
							<td><?= $alternatif[8] ?></td>
							<td><?= $alternatif[9] ?></td>
						</tr>
					<?php $no++;
					} ?>
					<tr>
						<td colspan="2">Cmin</td>
						<?php foreach ($smart->cmin as $cmin) { ?>
							<td><?= $cmin ?></td>
						<?php } ?>
					</tr>
					<tr>
						<td colspan="2">Cmax</td>
						<?php foreach ($smart->cmax as $cmax) { ?>
							<td><?= $cmax ?></td>
						<?php } ?>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- Nilai Utilitas -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Nilai Utilitas</h2>

			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
						<th>C6</th>
						<th>C7</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($smart->utilitas as $utilitas) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $utilitas[1] ?></td>

							<!-- Kriteria -->
							<td><?= $utilitas[3] ?></td>
							<td><?= $utilitas[4] ?></td>
							<td><?= $utilitas[5] ?></td>
							<td><?= $utilitas[6] ?></td>
							<td><?= $utilitas[7] ?></td>
							<td><?= $utilitas[8] ?></td>
							<td><?= $utilitas[9] ?></td>
						</tr>
					<?php $no++;
					} ?>
				</tbody>
			</table>
		</div>

		<!-- Nilai Akhir -->
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl mb-2">Nilai Akhir</h2>

			<table>
				<thead>
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
						<th>C6</th>
						<th>C7</th>
						<th>Total</th>
						<th>Ranking</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $rank = 1;
					foreach ($smart->nilaiAkhir as $nilaiAkhir) { ?>
						<tr class="<?= $smart->cekKelayakan($nilaiAkhir[count($nilaiAkhir) - 1]) ? 'layak' : 'tidakLayak' ?>">
							<td><?= $nilaiAkhir[1] ?></td>
							<td><?= $nilaiAkhir[2] ?></td>

							<!-- Kriteria -->
							<td><?= $nilaiAkhir[3] ?></td>
							<td><?= $nilaiAkhir[4] ?></td>
							<td><?= $nilaiAkhir[5] ?></td>
							<td><?= $nilaiAkhir[6] ?></td>
							<td><?= $nilaiAkhir[7] ?></td>
							<td><?= $nilaiAkhir[8] ?></td>
							<td><?= $nilaiAkhir[9] ?></td>

							<td><?= $nilaiAkhir[10] ?></td>
							<td><?= $rank ?></td>
							<td><?= $smart->cekKelayakan($nilaiAkhir[count($nilaiAkhir) - 1]) ? "Layak" : "Tidak Layak" ?></td>
						</tr>
					<?php $rank++;
					} ?>
				</tbody>
			</table>
		</div>
	</main>
</body>

</html>
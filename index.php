<?php

require_once './Smart.php';

$smart = new Smart();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SPK PEMBERIAN KREDIT USAHA RAKYAT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<!-- Kriteria dan Bobot -->
		<h2>Kriteria dan Bobot</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Kriteria</th>
					<th>Bobot</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($smart->kriteria as $kriteria) { ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $kriteria[0] ?></td>
						<td><?= $kriteria[1] ?></td>
						<td><?= $kriteria[2] ?></td>
					</tr>
				<?php $no++;
				} ?>
				<tr>
					<td colspan="3">Total</td>
					<td><?= $smart->totalBobotKriteria(); ?></td>
				</tr>
			</tbody>
		</table>

		<!-- Alternatif -->
		<h2>Data Alternatif</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kode</th>
					<?php
					if (count($smart->alternatif)) {
						for ($i = 1; $i <= count($smart->alternatif[1]) - 2; $i++) { ?>
							<th>C<?= $i ?></th>
					<?php }
					} ?>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($smart->alternatif as $alternatif) { ?>
					<tr>
						<td><?= $no ?></td>
						<?php for ($i = 0; $i <= count($smart->cmin) + 1; $i++) { ?>
							<td><?= $alternatif[$i] ?></td>
						<?php } ?>
					</tr>
				<?php $no++;
				} ?>
				<tr>
					<td colspan="3">Cmin</td>
					<?php foreach ($smart->cmin as $cmin) { ?>
						<td><?= $cmin ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td colspan="3">Cmax</td>
					<?php foreach ($smart->cmax as $cmax) { ?>
						<td><?= $cmax ?></td>
					<?php } ?>
				</tr>
			</tbody>
		</table>

		<!-- Normalisasi Bobot -->
		<h2>Normalisasi Bobot</h2>
		<table class="table">
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
						<td><?= $kriteria[0] ?></td>
						<td><?= $kriteria[1] ?></td>
						<td><?= $kriteria[2] ?></td>
						<td><?= $kriteria[4] ?></td>
					</tr>
				<?php $no++;
				} ?>
			</tbody>
		</table>

		<!-- Nilai Utilitas -->
		<h2>Nilai Utilitas</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<?php
					if (count($smart->alternatif)) {
						for ($i = 1; $i <= count($smart->alternatif[1]) - 2; $i++) { ?>
							<th>C<?= $i ?></th>
					<?php }
					} ?>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($smart->utilitas as $utilitas) { ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $utilitas[1] ?></td>
						<?php for ($i = 2; $i <= count($smart->cmin) + 1; $i++) { ?>
							<td><?= $utilitas[$i] ?></td>
						<?php } ?>
					</tr>
				<?php $no++;
				} ?>
			</tbody>
		</table>

		<!-- Nilai Akhir -->
		<h2>Nilai Akhir</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<?php
					if (count($smart->alternatif)) {
						for ($i = 1; $i <= count($smart->alternatif[1]) - 2; $i++) { ?>
							<th>C<?= $i ?></th>
					<?php }
					} ?>
					<th>Total</th>
					<th>Ranking</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($smart->nilaiAkhir as $nilaiAkhir) { ?>

					<tr>
						<td><?= $no ?></td>
						<td><?= $nilaiAkhir[1] ?></td>
						<?php for ($i = 1; $i <= count($smart->cmin) + 1; $i++) { ?>
							<td><?= $nilaiAkhir[$i + 1] ?></td>
						<?php } ?>
						<td><?= $no ?></td>
						<td><?= $smart->cekKelayakan($nilaiAkhir[count($nilaiAkhir) - 1]) ?></td>
					</tr>
				<?php $no++;
				} ?>
			</tbody>
		</table>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
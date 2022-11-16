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
</head>

<body>
	<!-- Kriteria dan Bobot -->
	<h2>Kriteria dan Bobot</h2>
	<table border="1">
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
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
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
			foreach ($smart->alternatif as $alternatif) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $alternatif[0] ?></td>
					<td><?= $alternatif[1] ?></td>
					<td><?= $alternatif[2] ?></td>
					<td><?= $alternatif[3] ?></td>
					<td><?= $alternatif[4] ?></td>
					<td><?= $alternatif[5] ?></td>
					<td><?= $alternatif[6] ?></td>
					<td><?= $alternatif[7] ?></td>
					<td><?= $alternatif[8] ?></td>
				</tr>
			<?php $no++;
			} ?>
		</tbody>
	</table>

	<!-- 1 Normalisasi Bobot -->
	<h2>1. Normalisasi Bobot</h2>
	<table border="1">
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
</body>

</html>
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
			<div class="col-12 col-md-2 m-0 bg-light py-4">
				<div class="d-flex flex-column gap-2">
					<a class="border-bottom text-decoration-none py-2" href="../">Home</a>
					<a class="border-bottom text-decoration-none py-2" href="../kriteria">Kriteria</a>
					<a class="border-bottom text-decoration-none py-2" href="./">Alternatif</a>
				</div>
			</div>

			<div class="col-12 col-md-10 m-0 mb-4 px-4">
				<div class="d-flex align-items-center">
					<h2 class="mt-4 mb-3 fs-4">Data Alternatif</h2>
					<a href="tambah.php" class="btn btn-primary">Tambah Alternatif</a>
				</div>
				<div class="table-responsive">
					<table class="table">
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
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($smart->alternatif as $alternatif) { ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $alternatif[1] ?></td>
									<td><?= $alternatif[2] ?></td>
									<?php for ($i = 0; $i < 7; $i++) { ?>
										<td><?= $alternatif[$i + 3] ?></td>
									<?php } ?>
									<td><a href="./edit.php?id=<?= $alternatif[0] ?>">Edit</a> | <a href="./prosesHapus.php?id=<?= $alternatif[0] ?>">Hapus</a> </td>
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
				</div>
				<div class="d-flex justify-content-center mt-4">
					<a href="../hasil" class="btn btn-primary text-end">Hitung Hasil</a>
				</div>
			</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
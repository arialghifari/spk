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
				<h2 class="mt-4 mb-3 fs-4">Kriteria dan Bobot</h2>
				<div class="table-responsive">
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
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
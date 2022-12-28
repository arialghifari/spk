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

		<div class="flex flex-col gap-4 text-zinc-100 mx-6">
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../"><img src="../assets/ic_home.svg" alt="icon home"> Home</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center active" href="./"><img src="../assets/ic_clipboard.svg" alt="icon kriteria"> Kriteria</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../alternatif"><img src="../assets/ic_user.svg" alt="icon alternatif"> Alternatif</a>
		</div>
	</nav>

	<main class="flex w-full h-fit">
		<div class="m-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md w-full">
			<h2 class="font-semibold text-xl mb-2">Kriteria dan Bobot</h2>
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Kriteria</th>
						<th>Tipe</th>
						<th>Bobot</th>
						<th>Aksi</th>
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
							<td><?= $kriteria[4] == '1' ? "Benefit" : "Cost" ?></td>
							<td><?= $kriteria[3]; ?></td>
							<td>
								<a class="flex w-fit" href="./edit.php?id=<?= $kriteria[0] ?>" title="Edit <?= $kriteria[2] ?>">
									<img class="bg-blue-400 hover:bg-blue-700 p-1 rounded" src="../assets/ic_edit.svg" alt="icon edit">
								</a>
							</td>
						</tr>
					<?php $no++;
					} ?>
					<tr>
						<td colspan="4">Total</td>
						<td colspan="2"><?= $smart->totalBobotKriteria(); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>

</body>

</html>
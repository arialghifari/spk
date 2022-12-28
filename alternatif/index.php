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
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="../kriteria"><img src="../assets/ic_clipboard.svg" alt="icon kriteria"> Kriteria</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center active" href="./"><img src="../assets/ic_user.svg" alt="icon alternatif"> Alternatif</a>
		</div>
	</nav>

	<main class="flex w-full h-fit">
		<div class="m-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md w-full">
			<div class="flex justify-between items-center mb-2">
				<h2 class="font-semibold text-xl">Data Alternatif</h2>
				<a href="tambah.php" class="bg-zinc-300 py-2 px-4 rounded hover:bg-zinc-400">Tambah Alternatif</a>
			</div>
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
							<td class="flex gap-2">
								<a href="./edit.php?id=<?= $alternatif[0] ?>" title="Edit <?= $alternatif[2] ?>">
									<img class="bg-blue-400 hover:bg-blue-700 p-1 rounded" src="../assets/ic_edit.svg" alt="icon edit">
								</a>
								<a href="./prosesHapus.php?id=<?= $alternatif[0] ?>" title="Hapus <?= $alternatif[2] ?>">
									<img class="bg-red-400 hover:bg-red-600 p-1 rounded" src="../assets/ic_trash.svg" alt="icon edit">
								</a>
							</td>
						</tr>
					<?php $no++;
					} ?>
				</tbody>
			</table>

			<a href="../hasil" class="mt-4 bg-blue-600 p-2 text-center rounded text-white hover:bg-blue-700">Hitung Hasil</a>
	</main>

</body>

</html>
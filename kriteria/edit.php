<?php

include '../connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM kriteria WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

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
		<form action="prosesUpdate.php" method="post" class="m-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md w-full">
			<h2 class="font-semibold text-xl">Edit Bobot</h2>

			<input type="hidden" name="id" value="<?= $data[0] ?>">

			<div class="form-control">
				<label for="namaKriteria">Nama Kriteria</label>
				<input type="text" id="namaKriteria" name="namaKriteria" value="<?= $data[2] ?>" disabled>
			</div>

			<div class="form-control">
				<label for="bobot">Bobot</label>
				<input type="text" id="bobot" name="bobot" value="<?= $data[3] ?>">
			</div>

			<button type="submit" class="bg-blue-600 hover:bg-blue-700 mt-4 p-2 rounded text-white">Update</button>
		</form>
	</main>

</body>

</html>
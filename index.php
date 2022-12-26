<?php

include './Smart.php';

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
	<link rel="stylesheet" href="./style.css">
</head>

<body class="bg-zinc-200 flex">
	<nav class="flex flex-col w-80 bg-zinc-800 h-screen gap-8 sticky top-0">
		<div class=" text-center py-5 text-white border-b-2 border-zinc-700">
			<a href="./" class="text-lg font-bold tracking-widest">SPK</a>
		</div>

		<div class="flex flex-col gap-4 text-zinc-100 mx-6">
			<a class="py-2 px-4 rounded active" href="./">Home</a>
			<a class="py-2 px-4 hover:bg-zinc-700 rounded" href="./kriteria">Kriteria</a>
			<a class="py-2 px-4 hover:bg-zinc-700 rounded" href="./alternatif">Alternatif</a>
		</div>
	</nav>

	<main class="flex w-full h-fit">
		<div class="m-8 bg-zinc-50 p-6 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl">SIMPLE MULTI-ATTRIBUTE RATING TECHNIQUE (SMART)</h2>
			<p>Simple multi-attribute rating technique (SMART) adalah sebuah teknik yang digunakan untuk menilai atau mengevaluasi sebuah proyek atau alternatif yang memiliki beberapa atribut atau kriteria. Teknik ini memfokuskan pada pemberian nilai terhadap setiap atribut atau kriteria yang dianggap penting untuk menentukan keberhasilan dari proyek atau alternatif tersebut.</p>
			<p>SMART merupakan versi yang lebih sederhana dari metode multi-attribute decision making (MADM), dimana teknik ini hanya mengacu pada beberapa atribut atau kriteria saja yang dianggap paling penting, sementara MADM mengacu pada semua atribut atau kriteria yang terkait dengan proyek atau alternatif tersebut.</p>
			<p>Untuk menilai proyek atau alternatif menggunakan SMART, pertama-tama harus ditentukan atribut atau kriteria yang akan dijadikan acuan. Kemudian, setiap atribut atau kriteria tersebut diberi nilai dengan menggunakan skala yang sesuai, misalnya skala 1 hingga 5 atau A hingga E. Setelah itu, nilai yang telah diberikan tersebut dikali dengan bobot atribut atau kriteria tersebut, yang menunjukkan tingkat pentingnya atribut atau kriteria tersebut dalam menentukan keberhasilan proyek atau alternatif. Nilai yang diperoleh setelah dikalikan dengan bobot tersebut kemudian dijumlahkan untuk mendapatkan nilai akhir proyek atau alternatif tersebut.</p>
			<p>SMART dapat digunakan dalam berbagai situasi, seperti dalam proses perencanaan proyek, pemilihan alternatif investasi, atau dalam proses pemilihan vendor. Teknik ini dapat membantu mempermudah proses pengambilan keputusan karena memfokuskan pada atribut atau kriteria yang dianggap paling penting, sehingga mengurangi kebingungan dan mempermudah pemahaman terhadap alternatif yang ada.</p>
		</div>
	</main>

</body>

</html>
<?php

include './connection.php';

$sql_kriteria = "SELECT COUNT(id) FROM kriteria";
$query_kriteria = mysqli_query($conn, $sql_kriteria);
$count_kriteria = mysqli_fetch_array($query_kriteria)[0];

$sql_alternatif = "SELECT COUNT(id) FROM alternatif";
$query_alternatif = mysqli_query($conn, $sql_alternatif);
$count_alternatif = mysqli_fetch_array($query_alternatif)[0];

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
		<div class=" text-center py-4 text-white border-b-2 border-zinc-700">
			<a href="./" class="text-xl font-bold tracking-widest">SPK</a>
			<p class="text-sm">Kredit Usaha Rakyat</p>
		</div>

		<div class="flex flex-col gap-4 text-zinc-100 mx-6">
			<a class="py-2 px-4 rounded flex gap-2 items-center active" href="./"><img src="./assets/ic_home.svg" alt="icon home"> Home</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="./kriteria"><img src="./assets/ic_clipboard.svg" alt="icon kriteria"> Kriteria</a>
			<a class="py-2 px-4 rounded flex gap-2 items-center hover:bg-zinc-700" href="./alternatif"><img src="./assets/ic_user.svg" alt="icon alternatif"> Alternatif</a>
		</div>
	</nav>

	<main class="flex flex-col w-full h-fit my-8 gap-8">
		<div class="flex mx-8 gap-4">
			<div class="bg-zinc-50 p-4 px-8 rounded flex flex-col gap-4 shadow-md shadow-red-200 w-full">
				<h2 class="font-semibold text-lg">KRITERIA</h2>
				<h2 class="font-semibold text-3xl"><?= $count_kriteria ?></h2>
			</div>
			<div class="bg-zinc-50 p-4 px-8 rounded flex flex-col gap-4 shadow-md shadow-blue-200 w-full">
				<h2 class="font-semibold text-lg">ALTERNATIF</h2>
				<h2 class="font-semibold text-3xl"><?= $count_alternatif ?></h2>
			</div>
			<div class="bg-zinc-50 p-4 px-8 rounded flex flex-col gap-4 shadow-md shadow-green-200 w-full">
				<h2 class="font-semibold text-lg">SMART STEP</h2>
				<h2 class="font-semibold text-3xl">6</h2>
			</div>
		</div>
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl">Sistem Pendukung Keputusan (SPK)</h2>
			<p>Sistem Pendukung Keputusan (SPK) adalah sebuah sistem yang dibuat untuk membantu dan memudahkan proses pengambilan keputusan dengan menggunakan metode-metode tertentu, seperti analisis data, algoritma, atau teknik lainnya. SPK biasanya digunakan dalam situasi dimana terdapat banyak alternatif yang perlu dipertimbangkan, atau dimana proses pengambilan keputusan harus dilakukan dengan cepat dan tepat.</p>
			<p>SPK dapat membantu dalam mengelola data yang banyak dan kompleks, serta menyediakan informasi yang berguna bagi pengambilan keputusan. SPK juga dapat membantu mengurangi subyektivitas dan bias pribadi dalam proses pengambilan keputusan, karena keputusan yang diambil berdasarkan data yang telah dianalisis dengan metode yang terstruktur.</p>
		</div>
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl">Metode Simple Multi-Attribute Rating Technique (SMART)</h2>
			<p>Simple multi-attribute rating technique (SMART) adalah sebuah teknik yang digunakan untuk menilai atau mengevaluasi sebuah proyek atau alternatif yang memiliki beberapa atribut atau kriteria. Teknik ini memfokuskan pada pemberian nilai terhadap setiap atribut atau kriteria yang dianggap penting untuk menentukan keberhasilan dari proyek atau alternatif tersebut.</p>
			<p>SMART merupakan versi yang lebih sederhana dari metode multi-attribute decision making (MADM), dimana teknik ini hanya mengacu pada beberapa atribut atau kriteria saja yang dianggap paling penting, sementara MADM mengacu pada semua atribut atau kriteria yang terkait dengan proyek atau alternatif tersebut.</p>
			<p>Untuk menilai proyek atau alternatif menggunakan SMART, pertama-tama harus ditentukan atribut atau kriteria yang akan dijadikan acuan. Kemudian, setiap atribut atau kriteria tersebut diberi nilai dengan menggunakan skala yang sesuai, misalnya skala 1 hingga 5 atau A hingga E. Setelah itu, nilai yang telah diberikan tersebut dikali dengan bobot atribut atau kriteria tersebut, yang menunjukkan tingkat pentingnya atribut atau kriteria tersebut dalam menentukan keberhasilan proyek atau alternatif. Nilai yang diperoleh setelah dikalikan dengan bobot tersebut kemudian dijumlahkan untuk mendapatkan nilai akhir proyek atau alternatif tersebut.</p>
			<p>SMART dapat digunakan dalam berbagai situasi, seperti dalam pemilihan alternatif penerima kredit usaha rakyat, proses perencanaan proyek, pemilihan alternatif investasi, atau dalam proses pemilihan vendor. Teknik ini dapat membantu mempermudah proses pengambilan keputusan karena memfokuskan pada atribut atau kriteria yang dianggap paling penting, sehingga mengurangi kebingungan dan mempermudah pemahaman terhadap alternatif yang ada.</p>
		</div>
		<div class="mx-8 bg-zinc-50 p-8 rounded flex flex-col gap-4 shadow-md">
			<h2 class="font-semibold text-xl">SPK Kredit Usaha Rakyat</h2>
			<p>Sistem Pendukung Keputusan Kredit Usaha Rakyat (SPK KUR) dibangun dengan tujuan untuk membantu mempercepat pengolahan data yang berkaitan dengan permohonan Kredit Usaha Rakyat (KUR) di Bank. SPK KUR ini akan membantu dalam mengelola data yang banyak dan kompleks yang terkait dengan permohonan KUR, serta menyediakan informasi yang berguna bagi pengambilan keputusan terkait dengan pemberian KUR. Dengan adanya SPK KUR ini, diharapkan proses pengambilan keputusan terkait dengan pemberian KUR dapat dilakukan dengan lebih cepat dan tepat, serta dapat mengurangi subyektivitas dan bias pribadi dalam proses tersebut.</p>
			<p>Sistem Pendukung Keputusan (SPK) ini dibangun dengan menggunakan metode Simple Multi-Attribute Rating Technique (SMART), karena metode ini sesuai dengan karakteristik dari SPK yang akan dibangun. Metode SMART memiliki keunggulan dalam mengelola multi atribut dalam setiap kriterianya, dengan nilai yang telah ditentukan sebelumnya. Dengan menggunakan metode SMART, SPK ini dapat mengelola data yang banyak dan kompleks dengan lebih efektif dan efisien, serta menyediakan informasi yang berguna bagi pengambilan keputusan yang akan dilakukan. Selain itu, metode SMART juga dapat membantu mengurangi subyektivitas dan bias pribadi dalam proses pengambilan keputusan, karena keputusan yang diambil berdasarkan data yang telah dianalisis dengan metode yang terstruktur.</p>
		</div>
	</main>

</body>

</html>
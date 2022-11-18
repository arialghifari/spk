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
	<title>SPK PEMBERIAN KREDIT USAHA RAKYAT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<nav class="navbar bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="./">SPK KREDIT USAHA RAKYAT</a>
			</div>
		</nav>
	</header>

	<main>
		<div class="row m-0">
			<div class="col-12 col-md-2 m-0 bg-light py-4">
				<div class="d-flex flex-column gap-2">
					<a class="border-bottom text-decoration-none py-2" href="./">Home</a>
					<a class="border-bottom text-decoration-none py-2" href="./kriteria">Kriteria</a>
					<a class="border-bottom text-decoration-none py-2" href="./alternatif">Alternatif</a>
				</div>
			</div>

			<div class="col-12 col-md-10 m-0 mb-4 px-4">
				<!-- Kriteria dan Bobot -->
				<h2 class="mt-4 mb-3 fs-4">SIMPLE MULTI-ATTRIBUTE RATING TECHNIQUE (SMART)</h2>
				<p>SMART (Simple Multi Attribute Rating Technique) merupakan metode pengambilan keputusan yang multi-atribut yang dikembangkan oleh Edward pada tahun 1971 (Filho 2005). Pendekatan ini dirancang pada awalnya untuk memberikan cara mudah untuk menerapkan teknik MAUT (Multi-Attribute Utility Theory). Selama bertahun-tahun, kegagalan dalam metode ini telah diidentifikasi, dan telah diperbaiki (Edwards and Barron, 1994) yang menciptakan metode SMARTS dan SMARTER, menyajikan dua bentuk berbeda untuk memperbaiki kekurangan ini (Filho, 2005).</p>
				<p>Metode SMARTER (Simple Multi Attribute Rating Technique Exploiting Rank) merupakan pengembangan dari metode SMART (Simple Multi-Attribute Rating Technique). Metode SMART baru dinamai sebagai metode SMART pada tahun 1977. Semenjak awal kemunculannya, metode SMART telah dikembangkan menjadi metode SMARTS (Simple Multi-Attribute Rating Technique Swing) lalu setelah dimodifikasi dan diperbaiki oleh Edward dan Baron pada tahun 1994 menjadi metode SMARTER (Simple Multi-Attribute Rating Technique Exploiting Rank). </p>
				<p>Perbedaan antara metode SMARTER dengan metode SMART dan SMARTS terletak pada cara pembobotannya. Pembobotan kriteria pada ketiga metode tersebut tergantung pada urutan prioritas atribut dimana pada urutan pertama ditempati oleh atribut yang dianggap paling penting. Pada metode SMART dan SMARTER pembobotan diberikan langsung oleh pengambil keputusan. Tetapi prosedur pembobotan tersebut dianggap tidak proporsional dimana setiap bobot yang diberikan harus mencerminkan jarak dan prioritas setiap kriteria dengan tepat. Untuk mengatasi hal tersebut, pada metode SMARTER digunakan rumus pembobotan Rank Order Centroid (ROC) (Dwi Haryanti dkk, 2016).</p>
				<p>SMART (Simple Multi Attribute Rating Technique) merupakan metode pengambilan keputusan yang multi-atribut. Teknik pembuatan keputusan multi-atribut ini digunakan untuk mendukung pembuat keputusan dalam memilih antara beberapa alternatif. Setiap pembuat keputusan harus memilih sebuah alternatif yang sesuai dengan tujuan yang telah dirumuskan.</p>
				<p>Setiap alternatif terdiri dari sekumpulan atribut dan setiap atribut mempunyai nilai-nilai. Nilai ini dirata-rata dengan skala tertentu. Setiap atribut mempunyai bobot yang menggambarkan seberapa penting skala tertentu dan tiap atribut mempunyai bobot yang menggambarkan seberapa pentingkah suatu atribut dibandingkan dengan atribut lain. Pembobotan dan pemberian peringkat ini digunakan untuk menilai setiap alternatif agar diperoleh alternatif yang terbaik.</p>
			</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
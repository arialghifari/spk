<?php

include "connection.php";

class Smart
{
	public $kriteria = array();
	public $alternatif = array();
	public $normalisasiAlternatif = array();
	public $normalisasiBobot = array();
	public $cmin = array();
	public $cmax = array();
	public $utilitas = array();
	public $nilaiAkhir = array();
	public $bobotMinimal = 0.65;

	function __construct()
	{
		$conn = mysqli_connect("localhost", "root", "", "spk");
		$queryKriteria = mysqli_query($conn, "SELECT * FROM kriteria");
		$queryAlternatif = mysqli_query($conn, "SELECT * FROM alternatif");

		// Data Kriteria dan Bobot
		while ($row = mysqli_fetch_array($queryKriteria)) {
			array_push($this->kriteria, array($row["id"], $row["kode"], $row["nama"], $row["bobot"], $row["isBenefit"]));
		};

		// Data Alternatif
		while ($row = mysqli_fetch_array($queryAlternatif)) {
			array_push($this->alternatif, array($row["id"], $row["kode"], $row["nama"], $row['C1'], $row['C2'], $row['C3'], $row['C4'], $row['C5'], $row['C6'], $row['C7']));
		};

		$this->normalisasiAlternatif();
		$this->normalisasiBobot();
		$this->cmin();
		$this->cmax();
		$this->utilitas();
		$this->nilaiAkhir();
	}

	function totalBobotKriteria()
	{
		$total = 0;

		foreach ($this->kriteria as $kriteria) {
			$total += $kriteria[3];
		}

		return $total;
	}

	function normalisasiBobot()
	{
		foreach ($this->kriteria as $kriteria) {
			// Normalisasi Bobot: bobotKriteria / sumBobotKriteria
			$kriteria[count($kriteria)] = round($kriteria[3] / $this->totalBobotKriteria(), 3);

			array_push($this->normalisasiBobot, $kriteria);
		}
	}

	function setDynamicArray($length, $value)
	{
		$array = array();

		for ($i = 1; $i <= $length; $i++) {
			array_push($array, $value);
		}

		return $array;
	}

	function cmin()
	{
		$this->cmin = $this->setDynamicArray(count($this->kriteria), 100);

		foreach ($this->normalisasiAlternatif as $alternatif) {
			for ($i = 0; $i < 7; $i++) {
				if ($this->cmin[$i] > $alternatif[$i + 3]) {
					$this->cmin[$i] = $alternatif[$i + 3];
				}
			}
		}
	}

	function cmax()
	{
		$this->cmax = $this->setDynamicArray(count($this->kriteria), 0);

		foreach ($this->normalisasiAlternatif as $alternatif) {
			for ($i = 0; $i < 7; $i++) {
				if ($this->cmax[$i] < $alternatif[$i + 3]) {
					$this->cmax[$i] = $alternatif[$i + 3];
				}
			}
		}
	}

	function normalisasiAlternatif()
	{
		$nilaiPembagi = array();

		// Pangkatkan tiap kriteria alternatif
		foreach ($this->alternatif as $alternatif) {
			for ($i = 0; $i < 7; $i++) {
				@$nilaiPembagi[$i] += pow($alternatif[$i + 3], 2);
			}
		}

		// Akar kuadratkan tiap kriteria alternatif
		for ($i = 0; $i < 7; $i++) {
			@$nilaiPembagi[$i] = round(sqrt($nilaiPembagi[$i]), 3);
		}

		// Tiap
		foreach ($this->alternatif as $alternatif) {
			for ($i = 0; $i < 7; $i++) {
				@$alternatif[$i + 3] = round($alternatif[$i + 3] / $nilaiPembagi[$i], 3);
			}

			array_push($this->normalisasiAlternatif, $alternatif);
		}
	}

	function utilitas()
	{
		foreach ($this->normalisasiAlternatif as $alternatif) {
			for ($i = 0; $i < 7; $i++) {
				if ($this->cmax[$i] - $this->cmin[$i] == 0) {
					$alternatif[$i + 3] = 0;
				} else {
					if ($this->kriteria[3]) {
						// Benefit: (Ci - Cmin) / (Cmax - Cmin)
						$alternatif[$i + 3] = round(($alternatif[$i + 3] - $this->cmin[$i]) / ($this->cmax[$i] - $this->cmin[$i]), 3);
					} else {
						// Cost: (Cmax - Ci) / (Cmax - Cmin)
						$alternatif[$i + 3] = round(($this->cmax[$i] - $alternatif[$i + 3]) / ($this->cmax[$i] - $this->cmin[$i]), 3);
					}
				}
			}

			array_push($this->utilitas, $alternatif);
		}
	}

	function nilaiAkhir()
	{
		foreach ($this->normalisasiAlternatif as $utilitas) {
			$total = 0;
			for ($i = 0; $i < 7; $i++) {
				// Nilai Akhir: nilaiUtilitas * bobotUtilitas
				$utilitas[$i + 3] = round($utilitas[$i + 3] * $this->normalisasiBobot[$i][5], 3);
				// Total: sumNilaiAkhir
				$total += $utilitas[$i + 3];
			}
			$utilitas[count($utilitas)] = round($total, 3);

			array_push($this->nilaiAkhir, $utilitas);

			// Perangkingan
			usort($this->nilaiAkhir, function ($a, $b) {
				return $b[10] <=> $a[10];
			});
		}
	}

	function cekKelayakan($bobot)
	{
		if ($bobot >= $this->bobotMinimal) {
			return "Layak";
		} else {
			return "Tidak Layak";
		}
	}
}
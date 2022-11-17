<?php

class Smart
{
	public $kriteria = array();
	public $alternatif = array();
	public $normalisasiBobot = array();
	public $cmin = array();
	public $cmax = array();
	public $utilitas = array();
	public $nilaiAkhir = array();

	function __construct()
	{
		// Data Kriteria dan Bobot
		array_push($this->kriteria, array('C1', 'Dokumen Legalitas Pemohon', 30, true));
		array_push($this->kriteria, array('C2', 'Surat Tanah Agunan', 50, true));
		array_push($this->kriteria, array('C3', 'PBB Agunan', 40, true));
		array_push($this->kriteria, array('C4', 'NPWP', 20, true));
		array_push($this->kriteria, array('C5', 'Usaha', 40, true));

		// Data Alternatif
		array_push($this->alternatif, array('Lulu', 'A1', 100, 100, 100, 50, 50));
		array_push($this->alternatif, array('Dhika', 'A2', 100, 100, 50, 25, 75));
		array_push($this->alternatif, array('Asril', 'A3', 100, 50, 100, 25, 75));
		array_push($this->alternatif, array('Demian', 'A4', 50, 50, 100, 50, 100));
		array_push($this->alternatif, array('Ardhito', 'A5', 50, 100, 50, 25, 100));

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
			$total += $kriteria[2];
		}

		return $total;
	}

	function normalisasiBobot()
	{
		foreach ($this->kriteria as $kriteria) {
			$kriteria[4] = round($kriteria[2] / $this->totalBobotKriteria(), 3);

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

		foreach ($this->alternatif as $alternatif) {
			for ($i = 0; $i < count($this->cmin); $i++) {
				if ($this->cmin[$i] > $alternatif[$i + 2]) {
					$this->cmin[$i] = $alternatif[$i + 2];
				}
			}
		}
	}

	function cmax()
	{
		$this->cmax = $this->setDynamicArray(count($this->kriteria), 0);

		foreach ($this->alternatif as $alternatif) {
			for ($i = 0; $i < count($this->cmax); $i++) {
				if ($this->cmax[$i] < $alternatif[$i + 2]) {
					$this->cmax[$i] = $alternatif[$i + 2];
				}
			}
		}
	}

	function utilitas()
	{
		foreach ($this->alternatif as $alternatif) {
			for ($i = 0; $i < count($this->cmax); $i++) {
				if ($this->cmax[$i] - $this->cmin[$i] == 0) {
					$alternatif[$i + 2] = 0;
				} else {
					if ($alternatif[3]) {
						$alternatif[$i + 2] = round(($alternatif[$i + 2] - $this->cmin[$i]) / ($this->cmax[$i] - $this->cmin[$i]), 3);
					} else {
						$alternatif[$i + 2] = round(($this->cmax[$i] - $alternatif[$i + 2]) / ($this->cmax[$i] - $this->cmin[$i]), 3);
					}
				}
			}

			array_push($this->utilitas, $alternatif);
		}
	}

	function nilaiAkhir()
	{
		foreach ($this->utilitas as $utilitas) {
			$total = 0;
			for ($i = 0; $i < count($this->cmax); $i++) {
				$utilitas[$i + 2] = round($utilitas[$i + 2] * $this->normalisasiBobot[$i][4], 3);
				$total += $utilitas[$i + 2];
			}

			$utilitas[count($utilitas)] = round($total, 3);
			array_push($this->nilaiAkhir, $utilitas);
		}
	}
}

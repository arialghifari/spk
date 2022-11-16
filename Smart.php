<?php

class Smart
{
	public $kriteria = array();
	public $alternatif = array();
	public $normalisasiBobot = array();
	public $cmin = array();
	public $cmax = array();

	function __construct()
	{
		// Data Kriteria dan Bobot
		array_push($this->kriteria, array('C1', 'Dokumen Legalitas Pemohon', 30, true));
		array_push($this->kriteria, array('C2', 'Surat Tanah Agunan', 50, true));
		array_push($this->kriteria, array('C3', 'PBB Agunan', 40, true));
		array_push($this->kriteria, array('C4', 'NPWP', 20, true));
		array_push($this->kriteria, array('C5', 'Usaha', 40, true));
		array_push($this->kriteria, array('C6', 'Penghasilan', 50, true));
		array_push($this->kriteria, array('C7', 'Surat Keterangan Tidak Silang Sengketa', 20, true));

		// Data Alternatif
		array_push($this->alternatif, array('Lulu', 'A1', 100, 100, 100, 50, 50, 60, 50));
		array_push($this->alternatif, array('Dhika', 'A2', 100, 100, 50, 25, 75, 100, 50));
		array_push($this->alternatif, array('Asril', 'A3', 100, 50, 100, 25, 75, 80, 25));

		$this->normalisasiBobot();
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
}

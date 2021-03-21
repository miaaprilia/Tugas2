<?php
class bimPasien
{
  public $nama;
  public $umur;
  public $jenisKelamin;
  public $beratBadan;
  public $tinggiBadan;
  public $resultBMI;
  public $statusBMI;

  public function __construct($nama, $umur, $jenisKelamin, $beratBadan, $tinggiBadan)
  {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jenisKelamin = $jenisKelamin;
    $this->beratBadan = $beratBadan;
    $this->tinggiBadan = $tinggiBadan;
  }
  public function hasilBMI()
  {
    $this->tinggiBadan = $this->tinggiBadan / 100;
    $this->resultBMI = $this->beratBadan / $this->tinggiBadan;
  }
  public function statusBMI()
  {
    if ($this->resultBMI < 18.5) {
      return $this->statusBMI = "Kekurangan Berat Badan";
    } elseif ($this->resultBMI >= 18.5 && $this->resultBMI <= 24.9) {
      return $this->statusBMI = "Berat Badan Normal";
    } elseif ($this->resultBMI >= 25.0 && $this->resultBMI <= 29.9) {
      return $this->statusBMI = "Berat badan berlebih";
    } else {
      return $this->statusBMI = "Kegemukan";
    }
  }
}

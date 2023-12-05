<?php

    class Siswa{
        private $name;
        private $nilaiTugas;
        private $nilaiKuis;
        private $nilaiMID;
        private $nilaiUAS;

        public function __construct($name, $nilaiTugas, $nilaiKuis, $nilaiMID, $nilaiUAS){
            $this->name = $name;
            $this->nilaiTugas = $nilaiTugas;
            $this->nilaiKuis = $nilaiKuis;
            $this->nilaiMID = $nilaiMID;
            $this->nilaiUAS = $nilaiUAS;
        }

        public function hitungNilaiAkhir(){
            return ($this->nilaiTugas * 0.10) + ($this->nilaiKuis * 0.20) + ($this->nilaiMID * 0.30) + ($this->nilaiUAS * 0.40);
        }

        public function beasiswa(){
            $nilaiAkhir = $this->hitungNilaiAkhir();

            if ($nilaiAkhir > 85){
                return $nilaiAkhir * 0.35 . "%";
            } elseif ($nilaiAkhir > 75){
                return $nilaiAkhir * 0.25 . "%";
            } else {
                return "Tidak Ada";
            }
        }

        public function kategoriNilai(){
            $nilaiAkhir = $this->hitungNilaiAkhir();

            if ($nilaiAkhir > 85){
                return "A";
            } elseif ($nilaiAkhir > 75){
                return "B";
            } elseif ($nilaiAkhir > 55){
                return "C";
            } elseif ($nilaiAkhir > 40){
                return "D";
            } else {
                return "E";
            }
        }        
    }   
?>
<?php
require_once "Kendaraan.php";

class Mobil extends Kendaraan {
    public $kapasitasPenumpang;

    public function __construct($merek, $tahunProduksi, $kapasitasPenumpang) {
        parent::__construct($merek, $tahunProduksi);
        $this->kapasitasPenumpang = $kapasitasPenumpang;
    }


    public function getInfo() {
        return parent::getInfo() . "\nKapasitas Penumpang: $this->kapasitasPenumpang orang";
    }
}
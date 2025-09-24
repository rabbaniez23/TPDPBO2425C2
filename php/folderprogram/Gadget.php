<?php
require_once "ProdukElektronik.php";

class Gadget extends ProdukElektronik {
    private $jenis;
    private $garansi;
    private $status;
    private $stok;
    private $foto;

    public function __construct($kode = "", $nama = "", $harga = 0, $deskripsi = "",
                                $jenis = "", $garansi = "", $status = "", $stok = 0,$foto = ""  ) {
        parent::__construct($kode,$nama, $harga, $deskripsi);
        $this->jenis = $jenis;
        $this->garansi = $garansi;
        $this->status = $status;
        $this->stok = $stok;
        $this->foto = $foto;
    }

    // Getter & Setter
    public function getJenis() { return $this->jenis; }
    public function setJenis($jenis) { $this->jenis = $jenis; }

    public function getGaransi() { return $this->garansi; }
    public function setGaransi($garansi) { $this->garansi = $garansi; }

    public function getStatus() { return $this->status; }
    public function setStatus($status) { $this->status = $status; }

    public function getStok() { return $this->stok; }
    public function setStok($stok) { $this->stok = $stok; }

     public function getFoto() { return $this->foto; } // Tambahkan getter untuk $foto
    public function setFoto($foto) { $this->foto = $foto; } // Tambahkan setter untuk $foto


    public function displayInfo() {
        parent::displayInfo();
        echo "Jenis: {$this->jenis}<br>";
        echo "Garansi: {$this->garansi}<br>";
        echo "Status: {$this->status}<br>";
        echo "Stok: {$this->stok}<br>";
        echo "Foto: {$this->foto}<br>";
    }
}
?>

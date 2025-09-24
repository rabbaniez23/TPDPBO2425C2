<?php
class ProdukElektronik {
    private $kode;
    private $nama;
    private $harga;
    private $deskripsi;

    public function __construct($kode = "", $nama = "", $harga = 0, $deskripsi = "") {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }

    // Getter & Setter
    public function getKode() { return $this->kode; }
    public function setKode($kode) { $this->kode = $kode; }

    public function getNama() { return $this->nama; }
    public function setNama($nama) { $this->nama = $nama; }

    public function getHarga() { return $this->harga; }
    public function setHarga($harga) { $this->harga = $harga; }

    public function getDeskripsi() { return $this->deskripsi; }
    public function setDeskripsi($deskripsi) { $this->deskripsi = $deskripsi; }

    public function displayInfo() {
        echo "Kode: {$this->kode}<br>";
        echo "Nama: {$this->nama}<br>";
        echo "Harga: Rp{$this->harga}<br>";
        echo "Deskripsi: {$this->deskripsi}<br>";
    }
}
?>

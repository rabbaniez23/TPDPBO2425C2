<?php
require_once "Gadget.php";

class Smartphone extends Gadget {
    private $sistemOperasi;
    private $memori;
    private $kamera;

    public function __construct($kode = "", $nama = "", $harga = 0, $deskripsi = "",
                                $jenis = "", $garansi = "", $status = "", $stok = 0,
                                $sistemOperasi = "", $memori = "", $kamera = "", $foto = "") {
        // Panggil konstruktor parent dan teruskan semua parameter, termasuk $foto
        parent::__construct($kode, $nama, $harga, $deskripsi, $jenis, $garansi, $status, $stok, $foto);
        $this->sistemOperasi = $sistemOperasi;
        $this->memori = $memori;
        $this->kamera = $kamera;
    }

    // Getter & Setter
    public function getSistemOperasi() { return $this->sistemOperasi; }
    public function setSistemOperasi($sistemOperasi) { $this->sistemOperasi = $sistemOperasi; }

    public function getMemori() { return $this->memori; }
    public function setMemori($memori) { $this->memori = $memori; }

    public function getKamera() { return $this->kamera; }
    public function setKamera($kamera) { $this->kamera = $kamera; }
    
    // getFoto() dan setFoto() tidak perlu lagi karena sudah ada di kelas Gadget
    
    public function displayInfo() {
        parent::displayInfo();
        echo "Sistem Operasi: {$this->sistemOperasi}<br>";
        echo "Memori: {$this->memori}<br>";
        echo "Kamera: {$this->kamera}<br>";
    }
}
?>
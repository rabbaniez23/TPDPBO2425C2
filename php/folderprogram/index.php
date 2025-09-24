<?php
require_once "Smartphone.php";

session_start();
if (!isset($_SESSION['daftarSmartphone'])) {
    $_SESSION['daftarSmartphone'] = [];

    // Data default
    $_SESSION['daftarSmartphone'][] = new Smartphone("AE51","Samsung Galaxy S24", 17500000,"Flagship Samsung","Smartphone","2 Tahun","Baru",50,"Android","12GB","200MP","uploads/s24.jpg");
    $_SESSION['daftarSmartphone'][] = new Smartphone("AE52","iPhone 15 Pro",21000000,"Flagship Apple","Smartphone","1 Tahun","Baru",40,"iOS","8GB","48MP","uploads/iphone15.jpg");
    $_SESSION['daftarSmartphone'][] = new Smartphone("AE53","Google Pixel 8",14000000,"Kamera terbaik","Smartphone","1 Tahun","Baru",30,"Android","12GB","50MP","uploads/pixel18.jpg"); // <-- DIUBAH
    $_SESSION['daftarSmartphone'][] = new Smartphone("AE54","Xiaomi 14 Ultra",15500000,"Kamera Leica","Smartphone","1.5 Tahun","Baru",25,"Android","16GB","50MP","uploads/xiomi14.jpeg"); // <-- DIUBAH
    $_SESSION['daftarSmartphone'][] = new Smartphone("AE55","Oppo Find X7",13000000,"Desain elegan","Smartphone","1 Tahun","Baru",20,"Android","16GB","50MP","uploads/oppox7.jpeg"); // <-- DIUBAH
}

// Tambah data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $jenis = $_POST['jenis'];
    $garansi = $_POST['garansi'];
    $status = $_POST['status'];
    $stok = $_POST['stok'];
    $sistemOperasi = $_POST['sistemOperasi'];
    $memori = $_POST['memori'];
    $kamera = $_POST['kamera'];

    // Upload foto
    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $fileName = time() . "_" . basename($_FILES['foto']['name']);
        $targetFile = $targetDir . $fileName;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
            $foto = $targetFile;
        }
    }

    $smartphone = new Smartphone(
        $kode,$nama,$harga,$deskripsi,$jenis,$garansi,$status,$stok,
        $sistemOperasi,$memori,$kamera,$foto
    );
    $_SESSION['daftarSmartphone'][] = $smartphone;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background: #007bff; color: white; }
        img { max-width: 100px; }
        form input, form button { margin: 5px 0; padding: 5px; }
    </style>
</head>
<body>
    <h2>📱 Daftar Smartphone</h2>

    <form method="POST" enctype="multipart/form-data">
        <h3>Tambah Data</h3>
        <label>Kode: <input type="text" name="kode" required></label><br>
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Harga: <input type="number" name="harga" required></label><br>
        <label>Deskripsi: <input type="text" name="deskripsi"></label><br>
        <label>Jenis: <input type="text" name="jenis" value="Smartphone"></label><br>
        <label>Garansi: <input type="text" name="garansi"></label><br>
        <label>Status: <input type="text" name="status"></label><br>
        <label>Stok: <input type="number" name="stok"></label><br>
        <label>Sistem Operasi: <input type="text" name="sistemOperasi"></label><br>
        <label>Memori: <input type="text" name="memori"></label><br>
        <label>Kamera: <input type="text" name="kamera"></label><br>
        <label>Foto: <input type="file" name="foto" accept="image/*"></label><br>
        <button type="submit">Tambah</button>
    </form>

    <h3>Data Smartphone</h3>
    <table>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Jenis</th>
            <th>Garansi</th>
            <th>Status</th>
            <th>Stok</th>
            <th>OS</th>
            <th>Memori</th>
            <th>Kamera</th>
            <th>Foto</th>
        </tr>
        <?php
        $no = 1;
        foreach ($_SESSION['daftarSmartphone'] as $hp) {
            echo "<tr>
                    <td>".$no++."</td>
                    <td>".$hp->getKode()."</td>
                    <td>".$hp->getNama()."</td>
                    <td>".$hp->getHarga()."</td>
                    <td>".$hp->getDeskripsi()."</td>
                    <td>".$hp->getJenis()."</td>
                    <td>".$hp->getGaransi()."</td>
                    <td>".$hp->getStatus()."</td>
                    <td>".$hp->getStok()."</td>
                    <td>".$hp->getSistemOperasi()."</td>
                    <td>".$hp->getMemori()."</td>
                    <td>".$hp->getKamera()."</td>
                    <td>";
            if ($hp->getFoto()) {
                echo "<img src='".$hp->getFoto()."' alt='Foto Smartphone'>";
            } else {
                echo "-";
            }
            echo "</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
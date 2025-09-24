# Smartphone.py

from Gadget import Gadget

class Smartphone(Gadget):
    def __init__(self, kode, nama, harga, deskripsi, jenis, garansi, status, stok,
                 sistemOperasi, memori, kamera):
        # FIXED: Meneruskan semua argumen yang diperlukan ke parent class
        super().__init__(kode, nama, harga, deskripsi, jenis, garansi, status, stok)
        self.sistemOperasi = sistemOperasi
        self.memori = memori
        self.kamera = kamera

    def display_info(self):
        super().display_info()
        print(f"Sistem Operasi: {self.sistemOperasi}")
        print(f"Memori: {self.memori}")
        print(f"Kamera: {self.kamera}")
        print("-" * 30) # Pemisah antar data

    # FIXED: Getter dan Setter dipindahkan ke dalam kelas
    def get_sistemOperasi(self):
        return self.sistemOperasi

    def set_sistemOperasi(self, sistemOperasi):
        self.sistemOperasi = sistemOperasi

    def get_memori(self):
        return self.memori

    def set_memori(self, memori):
        self.memori = memori

    def get_kamera(self):
        return self.kamera

    def set_kamera(self, kamera):
        self.kamera = kamera
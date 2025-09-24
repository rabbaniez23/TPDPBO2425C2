# Gadget.py

from ProdukElektronik import ProdukElektronik

class Gadget(ProdukElektronik):
    def __init__(self, kode, nama, harga, deskripsi, jenis, garansi, status, stok):
        # FIXED: Meneruskan 'kode' ke parent class
        super().__init__(kode, nama, harga, deskripsi)
        self.jenis = jenis
        self.garansi = garansi
        self.status = status
        self.stok = stok
        
    # ADDED: Metode display_info untuk kelas Gadget
    def display_info(self):
        super().display_info()
        print(f"Jenis: {self.jenis}")
        print(f"Garansi: {self.garansi}")
        print(f"Status: {self.status}")
        print(f"Stok: {self.stok}")

    # FIXED: Getter dan Setter dipindahkan ke dalam kelas
    def get_jenis(self):
        return self.jenis

    def set_jenis(self, jenis):
        self.jenis = jenis

    def get_garansi(self):
        return self.garansi

    def set_garansi(self, garansi):
        self.garansi = garansi

    def get_status(self):
        return self.status

    def set_status(self, status):
        self.status = status

    def get_stok(self):
        return self.stok

    def set_stok(self, stok):
        self.stok = stok
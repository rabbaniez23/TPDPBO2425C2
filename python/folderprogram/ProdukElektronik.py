# ProdukElektronik.py

class ProdukElektronik:
    def __init__(self, kode, nama, harga, deskripsi):
        # FIXED: Menambahkan atribut 'kode'
        self.kode = kode
        self.nama = nama
        self.harga = harga
        self.deskripsi = deskripsi

    def display_info(self):
        print(f"Kode: {self.kode}")
        print(f"Nama: {self.nama}")
        print(f"Harga: Rp{self.harga:,.2f}")
        print(f"Deskripsi: {self.deskripsi}")

    # FIXED: Getter dan Setter dipindahkan ke dalam kelas
    def get_kode(self):
        return self.kode

    def set_kode(self, kode):
        self.kode = kode
        
    def get_nama(self):
        return self.nama

    def set_nama(self, nama):
        self.nama = nama

    def get_harga(self):
        return self.harga

    def set_harga(self, harga):
        self.harga = harga

    def get_deskripsi(self):
        return self.deskripsi

    def set_deskripsi(self, deskripsi):
        self.deskripsi = deskripsi
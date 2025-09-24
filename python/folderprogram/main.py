# main.py

from Smartphone import Smartphone

# Data awal tidak diubah
daftar_smartphone = [
    Smartphone("S24", "Samsung Galaxy S24", 17500000.00, "Flagship Samsung", "Smartphone", "2 Tahun", "Baru", 50, "Android", "12GB", "200MP"),
    Smartphone("IP15", "iPhone 15 Pro", 21000000.00, "Flagship Apple", "Smartphone", "1 Tahun", "Baru", 45, "iOS", "8GB", "48MP"),
    Smartphone("PX8", "Google Pixel 8", 14000000.00, "Kamera canggih", "Smartphone", "1 Tahun", "Baru", 30, "Android", "12GB", "50MP"),
    Smartphone("XM14", "Xiaomi 14 Ultra", 15500000.00, "Kamera Leica", "Smartphone", "1.5 Tahun", "Baru", 25, "Android", "16GB", "50MP"),
    Smartphone("OP7", "Oppo Find X7", 13000000.00, "Desain elegan", "Smartphone", "1 Tahun", "Baru", 20, "Android", "16GB", "50MP")
]

# --- FUNGSI YANG DIPERBARUI ---
def tampilkan_tabel(data_list):
    if not data_list:
        print("Tidak ada data untuk ditampilkan.")
        return

    # Header Tabel - FIXED: Menambahkan kembali kolom 'Deskripsi'
    # Tabel ini akan cukup lebar
    print("-" * 185)
    header = (f"{'No.':<4} | {'Kode':<5} | {'Nama':<25} | {'Jenis':<12} | {'Deskripsi':<18} | {'Harga':<15} | {'Garansi':<10} | "
              f"{'Status':<10} | {'Stok':<5} | {'Sistem Operasi':<15} | {'Memori':<8} | {'Kamera':<10}")
    print(header)
    print("-" * 185)

    # Menampilkan data - FIXED: Menambahkan 'smartphone.deskripsi'
    for i, smartphone in enumerate(data_list):
        row = (f"{i + 1:<4} | {smartphone.kode:<5} | {smartphone.nama:<25} | {smartphone.jenis:<12} | {smartphone.deskripsi:<18} | {smartphone.harga:<15,.2f} | "
               f"{smartphone.garansi:<10} | {smartphone.status:<10} | {smartphone.stok:<5} | "
               f"{smartphone.sistemOperasi:<15} | {smartphone.memori:<8} | {smartphone.kamera:<10}")
        print(row)

    print("-" * 185)

# Fungsi tambah_data tidak diubah
def tambah_data(data_list):
    print("\n--- Tambah Data Smartphone ---")
    kode = input("Masukkan Kode Produk: ")
    nama = input("Masukkan Nama: ")
    harga = float(input("Masukkan Harga: "))
    deskripsi = input("Masukkan Deskripsi: ")
    jenis = "Smartphone" 
    garansi = input("Masukkan Garansi: ")
    status = input("Masukkan Status (Baru/Second): ")
    stok = int(input("Masukkan Stok: "))
    sistem_operasi = input("Masukkan Sistem Operasi: ")
    memori = input("Masukkan Memori: ")
    kamera = input("Masukkan Kamera: ")

    smartphone_baru = Smartphone(kode, nama, harga, deskripsi, jenis, garansi, status, stok, sistem_operasi, memori, kamera)
    data_list.append(smartphone_baru)
    
    print("\nData berhasil ditambahkan.")

# Loop utama tidak diubah
while True:
    print("\n--- Menu Utama ---")
    print("1. Tampilkan Semua Data")
    print("2. Tambah Data Smartphone")
    print("3. Keluar")
    
    pilihan = input("Masukkan pilihan Anda (1/2/3): ")

    if pilihan == '1':
        tampilkan_tabel(daftar_smartphone)
    elif pilihan == '2':
        tambah_data(daftar_smartphone)
    elif pilihan == '3':
        print("Terima kasih, program selesai.")
        break
    else:
        print("Pilihan tidak valid, silakan coba lagi.")
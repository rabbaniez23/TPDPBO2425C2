#include <iostream>
#include <iomanip>
#include <vector>
#include "Smartphone.cpp"
using namespace std;

// Fungsi untuk menampilkan data dalam bentuk tabel
void tampilkanTabel(vector<Smartphone>& daftar) {
    if (daftar.empty()) {
        cout << "Tidak ada data untuk ditampilkan.\n";
        return;
    }

  cout << string(170, '-') << endl;
    cout << left << setw(4)  << "No."
         << " | " << setw(8)  << "Kode"
         << " | " << setw(20) << "Nama"
         << " | " << setw(10) << "Harga"
         << " | " << setw(25) << "Deskripsi"
         << " | " << setw(12) << "Jenis"
         << " | " << setw(12) << "Garansi"
         << " | " << setw(8)  << "Status"
         << " | " << setw(6)  << "Stok"
         << " | " << setw(15) << "Sistem Operasi"
         << " | " << setw(10) << "Memori"
         << " | " << setw(10) << "Kamera" << endl;
    cout << string(170, '-') << endl;


   for (size_t i = 0; i < daftar.size(); i++) {
        Smartphone hp = daftar[i];
        cout << left << setw(4)  << (i + 1)
             << " | " << setw(8)  << hp.getkode()
             << " | " << setw(20) << hp.getnama()
             << " | " << setw(10) << hp.getharga()
             << " | " << setw(25) << hp.getdeskripsi()
             << " | " << setw(12) << hp.getjenis()
             << " | " << setw(12) << hp.getgaransi()
             << " | " << setw(8)  << hp.getstatus()
             << " | " << setw(6)  << hp.getstok()
             << " | " << setw(15) << hp.getSistemOperasi()
             << " | " << setw(10) << hp.getMemori()
             << " | " << setw(10) << hp.getKamera()
             << endl;
    }
    cout << string(170, '-') << endl;
}

// Fungsi tambah data
void tambahData(vector<Smartphone>& daftar) {
    Smartphone hp;
    string kode,nama, deskripsi, jenis, garansi, status, stok;
    string sistemOperasi, memori, kamera;
    int harga;

    cin.ignore();
    cout << "Masukkan Kode: ";
    getline(cin, kode);
    cout << "Masukkan Nama: ";
    getline(cin, nama);
    cout << "Masukkan Harga: ";
    cin >> harga; cin.ignore();
    cout << "Masukkan Deskripsi: ";
    getline(cin, deskripsi);
    cout << "Masukkan Jenis: ";
    getline(cin, jenis);
    cout << "Masukkan Garansi: ";
    getline(cin, garansi);
    cout << "Masukkan Status: ";
    getline(cin, status);
    cout << "Masukkan Stok: ";
    getline(cin, stok);
    cout << "Masukkan Sistem Operasi: ";
    getline(cin, sistemOperasi);
    cout << "Masukkan Memori: ";
    getline(cin, memori);
    cout << "Masukkan Kamera: ";
    getline(cin, kamera);


    hp.setkode(kode);
    hp.setnama(nama);
    hp.setharga(harga);
    hp.setdeskripsi(deskripsi);
    hp.setjenis(jenis);
    hp.setgaransi(garansi);
    hp.setstatus(status);
    hp.setstok(stok);
    hp.setSistemOperasi(sistemOperasi);
    hp.setMemori(memori);
    hp.setKamera(kamera);

    daftar.push_back(hp);
    cout << "\nData berhasil ditambahkan!\n";
}

int main() {
    vector<Smartphone> daftarSmartphone;

    // ====== 5 Data Default ======
    Smartphone s1;
    s1.setkode("AE56");
    s1.setnama("Samsung Galaxy S24");
    s1.setharga(17500000);
    s1.setdeskripsi("Smartphone flagship ");
    s1.setjenis("Smartphone");
    s1.setgaransi("2 Tahun");
    s1.setstatus("Baru");
    s1.setstok("50");
    s1.setSistemOperasi("Android");
    s1.setMemori("12GB");
    s1.setKamera("200MP");
    daftarSmartphone.push_back(s1);

    Smartphone s2;
    s2.setkode("AE57");
    s2.setnama("iPhone 15 Pro");
    s2.setharga(21000000);
    s2.setdeskripsi("Flagship Apple ");
    s2.setjenis("Smartphone");
    s2.setgaransi("1 Tahun");
    s2.setstatus("Baru");
    s2.setstok("40");
    s2.setSistemOperasi("iOS");
    s2.setMemori("8GB");
    s2.setKamera("48MP");
    daftarSmartphone.push_back(s2);

    Smartphone s3;
    s3.setkode("AE58");
    s3.setnama("Google Pixel 8");
    s3.setharga(14000000);
    s3.setdeskripsi("Smartphone kamera baik");
    s3.setjenis("Smartphone");
    s3.setgaransi("1 Tahun");
    s3.setstatus("Baru");
    s3.setstok("30");
    s3.setSistemOperasi("Android");
    s3.setMemori("12GB");
    s3.setKamera("50MP");
    daftarSmartphone.push_back(s3);

    Smartphone s4;
    s4.setkode("AE59");
    s4.setnama("Xiaomi 14 Ultra");
    s4.setharga(15500000);
    s4.setdeskripsi("Kamera Leica premium");
    s4.setjenis("Smartphone");
    s4.setgaransi("1.5 Tahun");
    s4.setstatus("Baru");
    s4.setstok("25");
    s4.setSistemOperasi("Android");
    s4.setMemori("16GB");
    s4.setKamera("50MP");
    daftarSmartphone.push_back(s4);

    Smartphone s5;
    s5.setkode("AE60");
    s5.setnama("Oppo Find X7");
    s5.setharga(13000000);
    s5.setdeskripsi("Desain elegan premium");
    s5.setjenis("Smartphone");
    s5.setgaransi("1 Tahun");
    s5.setstatus("Baru");
    s5.setstok("20");
    s5.setSistemOperasi("Android");
    s5.setMemori("16GB");
    s5.setKamera("50MP");
    daftarSmartphone.push_back(s5);
    // =============================

    while (true) {
        cout << "\n--- Menu Utama ---\n";
        cout << "1. Tambah Data Smartphone\n";
        cout << "2. Tampilkan Semua Data\n";
        cout << "3. Keluar\n";
        cout << "Pilih menu: ";
        int pilihan;
        cin >> pilihan;

        if (pilihan == 1) {
            tambahData(daftarSmartphone);
        } else if (pilihan == 2) {
            tampilkanTabel(daftarSmartphone);
        } else if (pilihan == 3) {
            cout << "Terima kasih, program selesai.\n";
            break;
        } else {
            cout << "Pilihan tidak valid!\n";
        }
    }

    return 0;
}


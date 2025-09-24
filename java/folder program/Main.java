import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static ArrayList<Smartphone> daftarSmartphone = new ArrayList<>();
    static Scanner sc = new Scanner(System.in);

    public static void tampilkanTabel() {
        if (daftarSmartphone.isEmpty()) {
            System.out.println("Tidak ada data untuk ditampilkan.");
            return;
        }

        System.out.printf("%-4s | %-8s | %-20s | %-10s | %-25s | %-12s | %-12s | %-8s | %-6s | %-15s | %-10s | %-10s\n",
                          "No.", "Kode", "Nama", "Harga", "Deskripsi", "Jenis", "Garansi", "Status", "Stok", "Sistem Operasi", "Memori", "Kamera");
        System.out.println("-------------------------------------------------------------------------------------------------------------------------------------------------------------------------");

        int no = 1;
        for (Smartphone hp : daftarSmartphone) {
            System.out.printf("%-4d | %-8s | %-20s | %-10d | %-25s | %-12s | %-12s | %-8s | %-6s | %-15s | %-10s | %-10s\n",
                              no++, hp.getKode(), hp.getNama(), hp.getHarga(), hp.getDeskripsi(),
                              hp.getJenis(), hp.getGaransi(), hp.getStatus(), hp.getStok(),
                              hp.getSistemOperasi(), hp.getMemori(), hp.getKamera());
        }
    }

    public static void tambahData() {
        sc.nextLine(); // buang newline
        System.out.print("Masukkan Kode: ");
        String kode = sc.nextLine();
        System.out.print("Masukkan Nama: ");
        String nama = sc.nextLine();
        System.out.print("Masukkan Harga: ");
        int harga = sc.nextInt(); sc.nextLine();
        System.out.print("Masukkan Deskripsi: ");
        String deskripsi = sc.nextLine();
        System.out.print("Masukkan Jenis: ");
        String jenis = sc.nextLine();
        System.out.print("Masukkan Garansi: ");
        String garansi = sc.nextLine();
        System.out.print("Masukkan Status: ");
        String status = sc.nextLine();
        System.out.print("Masukkan Stok: ");
        String stok = sc.nextLine();
        System.out.print("Masukkan Sistem Operasi: ");
        String sistemOperasi = sc.nextLine();
        System.out.print("Masukkan Memori: ");
        String memori = sc.nextLine();
        System.out.print("Masukkan Kamera: ");
        String kamera = sc.nextLine();

        Smartphone hp = new Smartphone(kode, nama, harga, deskripsi, jenis, garansi, status, stok,
                                       sistemOperasi, memori, kamera);
        daftarSmartphone.add(hp);
        System.out.println("\nData berhasil ditambahkan!");
    }

    public static void main(String[] args) {
        // Tambahkan 5 data default
        daftarSmartphone.add(new Smartphone("AE56", "Samsung Galaxy S24", 17500000, "Flagship Samsung", "Smartphone", "2 Tahun", "Baru", "50", "Android", "12GB", "200MP"));
        daftarSmartphone.add(new Smartphone("AE57", "iPhone 15 Pro", 21000000, "Flagship Apple", "Smartphone", "1 Tahun", "Baru", "40", "iOS", "8GB", "48MP"));
        daftarSmartphone.add(new Smartphone("AE58", "Google Pixel 8", 14000000, "Kamera terbaik", "Smartphone", "1 Tahun", "Baru", "30", "Android", "12GB", "50MP"));
        daftarSmartphone.add(new Smartphone("AE59", "Xiaomi 14 Ultra", 15500000, "Kamera Leica", "Smartphone", "1.5 Tahun", "Baru", "25", "Android", "16GB", "50MP"));
        daftarSmartphone.add(new Smartphone("AE60", "Oppo Find X7", 13000000, "Desain elegan", "Smartphone", "1 Tahun", "Baru", "20", "Android", "16GB", "50MP"));

        while (true) {
            System.out.println("\n--- Menu Utama ---");
            System.out.println("1. Tambah Data Smartphone");
            System.out.println("2. Tampilkan Semua Data");
            System.out.println("3. Keluar");
            System.out.print("Pilih menu: ");
            int pilihan = sc.nextInt();

            if (pilihan == 1) {
                tambahData();
            } else if (pilihan == 2) {
                tampilkanTabel();
            } else if (pilihan == 3) {
                System.out.println("Terima kasih, program selesai.");
                break;
            } else {
                System.out.println("Pilihan tidak valid!");
            }
        }
    }
}

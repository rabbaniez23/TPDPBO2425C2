public class Smartphone extends Gadget {
    private String sistemOperasi;
    private String memori;
    private String kamera;

    public Smartphone() {}

    public Smartphone(String kode,String nama, int harga, String deskripsi,
                      String jenis, String garansi, String status, String stok,
                      String sistemOperasi, String memori, String kamera) {
        super(kode,nama, harga, deskripsi, jenis, garansi, status, stok);
        this.sistemOperasi = sistemOperasi;
        this.memori = memori;
        this.kamera = kamera;
    }

    // Getter & Setter
    public String getSistemOperasi() { return sistemOperasi; }
    public void setSistemOperasi(String sistemOperasi) { this.sistemOperasi = sistemOperasi; }

    public String getMemori() { return memori; }
    public void setMemori(String memori) { this.memori = memori; }

    public String getKamera() { return kamera; }
    public void setKamera(String kamera) { this.kamera = kamera; }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Sistem Operasi: " + sistemOperasi);
        System.out.println("Memori: " + memori);
        System.out.println("Kamera: " + kamera);
    }
}

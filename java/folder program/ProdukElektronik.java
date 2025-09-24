public class ProdukElektronik {
    private String kode;
    private String nama;
    private int harga;
    private String deskripsi;

    // Constructor default
    public ProdukElektronik() {}

    // Constructor parameter
    public ProdukElektronik(String kode,String nama, int harga, String deskripsi) {
        this.kode = kode;
        this.nama = nama;
        this.harga = harga;
        this.deskripsi = deskripsi;
    }

    // Getter & Setter
     public String getKode() { return kode; }
    public void setKode(String kode) { this.kode= kode; }

    public String getNama() { return nama; }
    public void setNama(String nama) { this.nama = nama; }

    public int getHarga() { return harga; }
    public void setHarga(int harga) { this.harga = harga; }

    public String getDeskripsi() { return deskripsi; }
    public void setDeskripsi(String deskripsi) { this.deskripsi = deskripsi; }

    public void displayInfo() {
        System.out.println("Kode: " + kode);
        System.out.println("Nama: " + nama);
        System.out.println("Harga: Rp" + harga);
        System.out.println("Deskripsi: " + deskripsi);
    }
}

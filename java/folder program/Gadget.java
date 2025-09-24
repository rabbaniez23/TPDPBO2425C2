public class Gadget extends ProdukElektronik {
    private String jenis;
    private String garansi;
    private String status;
    private String stok;

    public Gadget() {}

    public Gadget(String kode,String nama, int harga, String deskripsi,
                  String jenis, String garansi, String status, String stok) {
        super(kode,nama, harga, deskripsi);
        this.jenis = jenis;
        this.garansi = garansi;
        this.status = status;
        this.stok = stok;
    }

    // Getter & Setter
    public String getJenis() { return jenis; }
    public void setJenis(String jenis) { this.jenis = jenis; }

    public String getGaransi() { return garansi; }
    public void setGaransi(String garansi) { this.garansi = garansi; }

    public String getStatus() { return status; }
    public void setStatus(String status) { this.status = status; }

    public String getStok() { return stok; }
    public void setStok(String stok) { this.stok = stok; }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Jenis: " + jenis);
        System.out.println("Garansi: " + garansi);
        System.out.println("Status: " + status);
        System.out.println("Stok: " + stok);
    }
}

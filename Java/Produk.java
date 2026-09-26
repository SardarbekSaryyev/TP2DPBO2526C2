public class Produk {
    protected String nama, kategori, kode;
    protected double harga;

    public Produk(String nama, String kategori, String kode, double harga) {
        this.nama = nama;
        this.kategori = kategori;
        this.kode = kode;
        this.harga = harga;
    }

    public String getNama() { return nama; }
    public String getKategori() { return kategori; }
    public String getKode() { return kode; }
    public double getHarga() { return harga; }
}

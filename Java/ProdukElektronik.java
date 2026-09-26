public class ProdukElektronik extends Produk {
    protected String merek, garansi, daya;

    public ProdukElektronik(String nama, String kategori, String kode, double harga,
                            String merek, String garansi, String daya) {
        super(nama, kategori, kode, harga);
        this.merek = merek;
        this.garansi = garansi;
        this.daya = daya;
    }

    public String getMerek() { return merek; }
    public String getGaransi() { return garansi; }
    public String getDaya() { return daya; }
}

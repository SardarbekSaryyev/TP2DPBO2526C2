public class Laptop extends ProdukElektronik {
    private String ram, storage, processor;

    public Laptop(String nama, String kategori, String kode, double harga,
                   String merek, String garansi, String daya,
                   String ram, String storage, String processor) {
        super(nama, kategori, kode, harga, merek, garansi, daya);
        this.ram = ram;
        this.storage = storage;
        this.processor = processor;
    }

    public String getRam() { return ram; }
    public String getStorage() { return storage; }
    public String getProcessor() { return processor; }
}

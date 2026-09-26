import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static void tampilkan(ArrayList<Laptop> data) {
        System.out.printf("%-10s %-16s %-12s %-12s %-12s %-10s %-8s %-8s %-12s %-16s%n",
                "Kode", "Nama", "Kategori", "Harga", "Merek", "Garansi",
                "Daya", "RAM", "Storage", "Processor");
        System.out.println("-".repeat(125));

        for (Laptop x : data) {
            System.out.printf("%-10s %-16s %-12s %-12.0f %-12s %-10s %-8s %-8s %-12s %-16s%n",
                    x.getKode(), x.getNama(), x.getKategori(), x.getHarga(),
                    x.getMerek(), x.getGaransi(), x.getDaya(), x.getRam(),
                    x.getStorage(), x.getProcessor());
        }
    }

    public static void main(String[] args) {
        ArrayList<Laptop> data = new ArrayList<>();

        data.add(new Laptop("MacBook Air", "Laptop", "L001", 15000000, "Apple", "1 tahun", "30W", "8GB", "256GB", "Apple M1"));
        data.add(new Laptop("ThinkPad E14", "Laptop", "L002", 12000000, "Lenovo", "2 tahun", "65W", "16GB", "512GB", "Intel i5"));
        data.add(new Laptop("VivoBook 14", "Laptop", "L003", 9000000, "ASUS", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5"));
        data.add(new Laptop("Pavilion 14", "Laptop", "L004", 11000000, "HP", "2 tahun", "65W", "16GB", "512GB", "Intel i5"));
        data.add(new Laptop("Aspire 5", "Laptop", "L005", 8500000, "Acer", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5"));

        Scanner input = new Scanner(System.in);

        while (true) {
            System.out.println("\n1. Tampilkan data");
            System.out.println("2. Add laptop");
            System.out.println("0. Keluar");
            System.out.print("Pilih: ");
            int pilihan = Integer.parseInt(input.nextLine());

            if (pilihan == 1) {
                tampilkan(data);
            } else if (pilihan == 2) {
                System.out.print("Kode: "); String kode = input.nextLine();
                System.out.print("Nama: "); String nama = input.nextLine();
                System.out.print("Harga: "); double harga = Double.parseDouble(input.nextLine());
                System.out.print("Merek: "); String merek = input.nextLine();
                System.out.print("Garansi: "); String garansi = input.nextLine();
                System.out.print("Daya: "); String daya = input.nextLine();
                System.out.print("RAM: "); String ram = input.nextLine();
                System.out.print("Storage: "); String storage = input.nextLine();
                System.out.print("Processor: "); String processor = input.nextLine();

                data.add(new Laptop(nama, "Laptop", kode, harga, merek, garansi, daya,
                        ram, storage, processor));
                System.out.println("Data berhasil ditambahkan.");
            } else if (pilihan == 0) {
                break;
            } else {
                System.out.println("Pilihan tidak valid.");
            }
        }
        input.close();
    }
}

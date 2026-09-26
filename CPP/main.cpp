#include <iostream>
#include <vector>
#include <iomanip>
#include <string>
using namespace std;

class Produk {
protected:
    string nama, kategori, kode;
    double harga;
public:
    Produk(string nama, string kategori, string kode, double harga)
        : nama(nama), kategori(kategori), kode(kode), harga(harga) {}

    string getNama() const { return nama; }
    string getKategori() const { return kategori; }
    string getKode() const { return kode; }
    double getHarga() const { return harga; }
};

class ProdukElektronik : public Produk {
protected:
    string merek, garansi, daya;
public:
    ProdukElektronik(string nama, string kategori, string kode, double harga,
                     string merek, string garansi, string daya)
        : Produk(nama, kategori, kode, harga),
          merek(merek), garansi(garansi), daya(daya) {}

    string getMerek() const { return merek; }
    string getGaransi() const { return garansi; }
    string getDaya() const { return daya; }
};

class Laptop : public ProdukElektronik {
private:
    string ram, storage, processor;
public:
    Laptop(string nama, string kategori, string kode, double harga,
           string merek, string garansi, string daya,
           string ram, string storage, string processor)
        : ProdukElektronik(nama, kategori, kode, harga, merek, garansi, daya),
          ram(ram), storage(storage), processor(processor) {}

    string getRam() const { return ram; }
    string getStorage() const { return storage; }
    string getProcessor() const { return processor; }
};

void tampilkan(const vector<Laptop>& data) {
    cout << "\n=== DATA LAPTOP ===\n";
    cout << left
         << setw(12) << "Kode"
         << setw(16) << "Nama"
         << setw(12) << "Kategori"
         << setw(12) << "Harga"
         << setw(12) << "Merek"
         << setw(10) << "Garansi"
         << setw(10) << "Daya"
         << setw(8)  << "RAM"
         << setw(12) << "Storage"
         << setw(16) << "Processor" << "\n";
    cout << string(120, '-') << "\n";

    for (const auto& x : data) {
        cout << left
             << setw(12) << x.getKode()
             << setw(16) << x.getNama()
             << setw(12) << x.getKategori()
             << setw(12) << x.getHarga()
             << setw(12) << x.getMerek()
             << setw(10) << x.getGaransi()
             << setw(10) << x.getDaya()
             << setw(8)  << x.getRam()
             << setw(12) << x.getStorage()
             << setw(16) << x.getProcessor() << "\n";
    }
}

int main() {
    vector<Laptop> data = {
        Laptop("MacBook Air", "Laptop", "L001", 15000000, "Apple", "1 tahun", "30W", "8GB", "256GB", "Apple M1"),
        Laptop("ThinkPad E14", "Laptop", "L002", 12000000, "Lenovo", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
        Laptop("VivoBook 14", "Laptop", "L003", 9000000, "ASUS", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5"),
        Laptop("Pavilion 14", "Laptop", "L004", 11000000, "HP", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
        Laptop("Aspire 5", "Laptop", "L005", 8500000, "Acer", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5")
    };

    int pilihan;
    do {
        cout << "\n1. Tampilkan data\n2. Add laptop\n0. Keluar\nPilih: ";
        cin >> pilihan;
        cin.ignore();

        if (pilihan == 1) {
            tampilkan(data);
        } else if (pilihan == 2) {
            string nama, kode, merek, garansi, daya, ram, storage, processor;
            double harga;

            cout << "Kode: "; getline(cin, kode);
            cout << "Nama: "; getline(cin, nama);
            cout << "Harga: "; cin >> harga; cin.ignore();
            cout << "Merek: "; getline(cin, merek);
            cout << "Garansi: "; getline(cin, garansi);
            cout << "Daya: "; getline(cin, daya);
            cout << "RAM: "; getline(cin, ram);
            cout << "Storage: "; getline(cin, storage);
            cout << "Processor: "; getline(cin, processor);

            data.emplace_back(nama, "Laptop", kode, harga, merek, garansi, daya,
                              ram, storage, processor);
            cout << "Data berhasil ditambahkan.\n";
        }
    } while (pilihan != 0);

    return 0;
}

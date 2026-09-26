class Produk:
    def __init__(self, nama, kategori, kode, harga):
        self.nama = nama
        self.kategori = kategori
        self.kode = kode
        self.harga = harga

class ProdukElektronik(Produk):
    def __init__(self, nama, kategori, kode, harga, merek, garansi, daya):
        super().__init__(nama, kategori, kode, harga)
        self.merek = merek
        self.garansi = garansi
        self.daya = daya

class Laptop(ProdukElektronik):
    def __init__(self, nama, kategori, kode, harga, merek, garansi, daya,
                 ram, storage, processor):
        super().__init__(nama, kategori, kode, harga, merek, garansi, daya)
        self.ram = ram
        self.storage = storage
        self.processor = processor

def tampilkan(data):
    headers = ["Kode", "Nama", "Kategori", "Harga", "Merek", "Garansi",
               "Daya", "RAM", "Storage", "Processor"]
    print("\n=== DATA LAPTOP ===")
    print(" | ".join(f"{h:<12}" for h in headers))
    print("-" * 135)
    for x in data:
        row = [x.kode, x.nama, x.kategori, f"{x.harga:.0f}", x.merek,
               x.garansi, x.daya, x.ram, x.storage, x.processor]
        print(" | ".join(f"{str(v):<12}" for v in row))

data = [
    Laptop("MacBook Air", "Laptop", "L001", 15000000, "Apple", "1 tahun", "30W", "8GB", "256GB", "Apple M1"),
    Laptop("ThinkPad E14", "Laptop", "L002", 12000000, "Lenovo", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
    Laptop("VivoBook 14", "Laptop", "L003", 9000000, "ASUS", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5"),
    Laptop("Pavilion 14", "Laptop", "L004", 11000000, "HP", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
    Laptop("Aspire 5", "Laptop", "L005", 8500000, "Acer", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5")
]

while True:
    print("\n1. Tampilkan data")
    print("2. Add laptop")
    print("0. Keluar")
    pilihan = input("Pilih: ")

    if pilihan == "1":
        tampilkan(data)
    elif pilihan == "2":
        kode = input("Kode: ")
        nama = input("Nama: ")
        harga = float(input("Harga: "))
        merek = input("Merek: ")
        garansi = input("Garansi: ")
        daya = input("Daya: ")
        ram = input("RAM: ")
        storage = input("Storage: ")
        processor = input("Processor: ")

        data.append(Laptop(nama, "Laptop", kode, harga, merek, garansi, daya,
                           ram, storage, processor))
        print("Data berhasil ditambahkan.")
    elif pilihan == "0":
        break
    else:
        print("Pilihan tidak valid.")

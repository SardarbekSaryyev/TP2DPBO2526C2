# TP2 DPBO 2026 - Multilevel Inheritance

## Tema
Sistem data produk laptop.

## Janji
Saya mengerjakan TP2 DPBO dengan menerapkan konsep OOP Multilevel Inheritance pada empat bahasa: C++, Python, Java, dan PHP.

## Design Diagram

```text
Produk
├── nama
├── kategori
├── kode
└── harga
      │
      ▼
ProdukElektronik
├── merek
├── garansi
└── daya
      │
      ▼
Laptop
├── ram
├── storage
└── processor
```

Relasi:
`Laptop is-a ProdukElektronik` dan `ProdukElektronik is-a Produk`.

## Penjelasan Class

### 1. Produk
Class dasar yang menyimpan data umum produk:
- nama
- kategori
- kode
- harga

### 2. ProdukElektronik
Turunan dari `Produk`. Menambahkan:
- merek
- garansi
- daya

### 3. Laptop
Turunan dari `ProdukElektronik`. Menambahkan:
- ram
- storage
- processor

## Methods
Getter digunakan untuk mengambil nilai atribut yang diperlukan saat menampilkan data.
Program C++, Python, dan Java menyediakan menu:
1. Tampilkan data
2. Add laptop
0. Keluar

PHP menampilkan data dalam tabel HTML. Sesuai requirement, PHP boleh menggunakan data hardcode.

## Alur Program
1. Program membuat 5 object awal.
2. User dapat memilih untuk menampilkan seluruh data.
3. User dapat memilih Add untuk memasukkan laptop baru pada C++, Python, dan Java.
4. Data baru masuk ke collection/list/vector.
5. Seluruh data ditampilkan dalam satu tabel.

## Struktur Repo

- `CPP/` - kode C++ dan testcase
- `Python/` - kode Python dan testcase
- `Java/` - kode Java dan testcase
- `PHP/` - kode PHP dan file pendukung
- `Dokumentasi/` - dokumentasi dan screenshot/screenrecord
- `README.md`

## Cara Menjalankan

### C++
```bash
g++ main.cpp -o main
./main
```

### Python
```bash
python main.py
```

### Java
```bash
javac *.java
java Main
```

### PHP
Jalankan dengan PHP server lokal, misalnya:
```bash
php -S localhost:8000
```
Kemudian buka `http://localhost:8000`.

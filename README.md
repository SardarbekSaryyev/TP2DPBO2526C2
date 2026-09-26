TP2 DPBO 2026 - Multilevel Inheritance

Identitas

Mata Kuliah: Dasar Pemrograman Berorientasi Objek (DPBO)

TP: TP2

Kelas: C2

Bahasa: C++, Python, Java, dan PHP

Tema: Sistem Data Produk Laptop

Janji

Saya mengerjakan TP2 ini dengan menerapkan konsep OOP Multilevel Inheritance pada program data laptop. Program dibuat dalam empat bahasa pemrograman, yaitu C++, Python, Java, dan PHP.

1. Tema Program

Program yang dibuat adalah Sistem Data Produk Laptop.

Tema ini dipilih karena hubungan antar objeknya masih masuk akal di dunia nyata. Laptop merupakan produk elektronik, sedangkan produk elektronik merupakan bagian dari produk secara umum.

2. Design Diagram

Produk
│
├── nama
├── kategori
├── kode
└── harga
      │
      │ inheritance
      ▼
ProdukElektronik
│
├── merek
├── garansi
└── daya
      │
      │ inheritance
      ▼
Laptop
│
├── ram
├── storage
└── processor

Relasi class:

Laptop is-a ProdukElektronik
ProdukElektronik is-a Produk

Jadi, Laptop mewarisi atribut dari ProdukElektronik, dan ProdukElektronik sendiri mewarisi atribut dari Produk.

3. Penjelasan Class

3.1 Produk

Produk adalah base class atau parent class.

Atribut:

nama : nama produk

kategori : kategori produk

kode : kode produk

harga : harga produk

Method:

getNama()

getKategori()

getKode()

getHarga()

3.2 ProdukElektronik

ProdukElektronik merupakan turunan dari Produk.

Atribut tambahan:

merek : merek produk

garansi : lama garansi

daya : kebutuhan daya

Method:

getMerek()

getGaransi()

getDaya()

3.3 Laptop

Laptop merupakan turunan dari ProdukElektronik.

Atribut tambahan:

ram : kapasitas RAM

storage : kapasitas penyimpanan

processor : jenis processor

Method:

getRam()

getStorage()

getProcessor()

4. Konsep Multilevel Inheritance

Konsep inheritance pada program ini digunakan secara bertingkat:

Produk
   ↓
ProdukElektronik
   ↓
Laptop

Dengan cara ini, atribut yang bersifat umum tidak perlu ditulis ulang pada setiap class.

Contohnya:

Produk mempunyai nama dan harga.

ProdukElektronik otomatis mewarisi atribut tersebut dan menambahkan merek, garansi, dan daya.

Laptop otomatis mewarisi semua atribut di atas dan menambahkan ram, storage, dan processor.

5. Alur Program

Program membuat 5 object laptop awal.

User dapat memilih menu Tampilkan data untuk melihat seluruh data.

Pada C++, Python, dan Java, user dapat memilih Add laptop.

User memasukkan data laptop baru.

Data baru ditambahkan ke collection/list/vector.

Seluruh data ditampilkan kembali dalam satu tabel.

Pada PHP, data awal ditampilkan dalam tabel HTML dan atribut foto_produk digunakan untuk menampilkan foto laptop.

6. Requirement yang Dipenuhi

3 class

Minimal 3 atribut pada setiap class

Menggunakan konsep Multilevel Inheritance

5 object awal pada main

Input user untuk menambahkan data pada C++, Python, dan Java

Menampilkan seluruh data dalam satu tabel

File testcase untuk C++, Python, dan Java

foto_produk khusus PHP

Design diagram

Dokumentasi

Program dibuat dalam C++, Python, Java, dan PHP

7. Struktur Repository

TP2DPBO2526C2/
│
├── CPP/
│   ├── main.cpp
│   └── testcase.txt
│
├── Python/
│   ├── main.py
│   └── testcase.txt
│
├── Java/
│   ├── Main.java
│   ├── Produk.java
│   ├── ProdukElektronik.java
│   ├── Laptop.java
│   └── testcase.txt
│
├── PHP/
│   ├── index.php
│   ├── macbook.jpg
│   ├── thinkpad.jpg
│   ├── vivobook.jpg
│   ├── pavilion.jpg
│   └── aspire.jpg
│
├── Dokumentasi/
│   ├── cpp_result.png
│   ├── python_result.png
│   ├── java_result.png
│   ├── php_result.png
│   └── design_diagram.txt
│
└── README.md

8. Cara Menjalankan

C++

cd CPP
g++ main.cpp -o main
./main

Python

cd Python
python3 main.py

Java

cd Java
javac *.java
java Main

PHP

cd PHP
php -S localhost:8000

Kemudian buka:

http://localhost:8000

9. Dokumentasi

Dokumentasi hasil program disimpan pada folder Dokumentasi.

Dokumentasi tersebut meliputi:

hasil program C++

hasil program Python

hasil program Java

hasil program PHP

design diagram

10. Testcase

File testcase.txt disediakan pada directory bahasa yang membutuhkan input testcase.

Contoh input:
[README.md](https://github.com/user-attachments/files/32682670/README.md)

L006
IdeaPad Slim 3
10000000
Lenovo
2 tahun
65W
16GB
512GB
Intel i5

11. Hasil

Program berhasil dijalankan pada empat bahasa pemrograman dan dapat menampilkan data laptop. C++, Python, dan Java juga dapat menerima input user untuk menambahkan data laptop baru.


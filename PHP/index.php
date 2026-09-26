<?php

class Produk {
    protected string $nama;
    protected string $kategori;
    protected string $kode;
    protected float $harga;
    protected string $foto_produk;

    public function __construct($nama, $kategori, $kode, $harga, $foto_produk) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->kode = $kode;
        $this->harga = $harga;
        $this->foto_produk = $foto_produk;
    }

    public function getNama() { return $this->nama; }
    public function getKategori() { return $this->kategori; }
    public function getKode() { return $this->kode; }
    public function getHarga() { return $this->harga; }
    public function getFotoProduk() { return $this->foto_produk; }
}

class ProdukElektronik extends Produk {
    protected string $merek;
    protected string $garansi;
    protected string $daya;

    public function __construct($nama, $kategori, $kode, $harga, $foto_produk,
                                $merek, $garansi, $daya) {
        parent::__construct($nama, $kategori, $kode, $harga, $foto_produk);
        $this->merek = $merek;
        $this->garansi = $garansi;
        $this->daya = $daya;
    }

    public function getMerek() { return $this->merek; }
    public function getGaransi() { return $this->garansi; }
    public function getDaya() { return $this->daya; }
}

class Laptop extends ProdukElektronik {
    private string $ram;
    private string $storage;
    private string $processor;

    public function __construct($nama, $kategori, $kode, $harga, $foto_produk,
                                $merek, $garansi, $daya,
                                $ram, $storage, $processor) {
        parent::__construct($nama, $kategori, $kode, $harga, $foto_produk,
                            $merek, $garansi, $daya);
        $this->ram = $ram;
        $this->storage = $storage;
        $this->processor = $processor;
    }

    public function getRam() { return $this->ram; }
    public function getStorage() { return $this->storage; }
    public function getProcessor() { return $this->processor; }
}

$data = [
    new Laptop("MacBook Air", "Laptop", "L001", 15000000, "macbook.jpg", "Apple", "1 tahun", "30W", "8GB", "256GB", "Apple M1"),
    new Laptop("ThinkPad E14", "Laptop", "L002", 12000000, "thinkpad.jpg", "Lenovo", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
    new Laptop("VivoBook 14", "Laptop", "L003", 9000000, "vivobook.jpg", "ASUS", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5"),
    new Laptop("Pavilion 14", "Laptop", "L004", 11000000, "pavilion.jpg", "HP", "2 tahun", "65W", "16GB", "512GB", "Intel i5"),
    new Laptop("Aspire 5", "Laptop", "L005", 8500000, "aspire.jpg", "Acer", "1 tahun", "45W", "8GB", "512GB", "Ryzen 5")
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Laptop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #eee; }
        img { width: 70px; height: 50px; object-fit: cover; }
    </style>
</head>
<body>
<h2>Data Laptop</h2>
<table>
<tr>
    <th>Foto</th><th>Kode</th><th>Nama</th><th>Kategori</th><th>Harga</th>
    <th>Merek</th><th>Garansi</th><th>Daya</th><th>RAM</th>
    <th>Storage</th><th>Processor</th>
</tr>
<?php foreach ($data as $x): ?>
<tr>
    <td><img src="<?= htmlspecialchars($x->getFotoProduk()) ?>" alt="foto"></td>
    <td><?= htmlspecialchars($x->getKode()) ?></td>
    <td><?= htmlspecialchars($x->getNama()) ?></td>
    <td><?= htmlspecialchars($x->getKategori()) ?></td>
    <td>Rp <?= number_format($x->getHarga(), 0, ',', '.') ?></td>
    <td><?= htmlspecialchars($x->getMerek()) ?></td>
    <td><?= htmlspecialchars($x->getGaransi()) ?></td>
    <td><?= htmlspecialchars($x->getDaya()) ?></td>
    <td><?= htmlspecialchars($x->getRam()) ?></td>
    <td><?= htmlspecialchars($x->getStorage()) ?></td>
    <td><?= htmlspecialchars($x->getProcessor()) ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>

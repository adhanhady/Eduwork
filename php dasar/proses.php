<?php
// Ambil data dari form (POST)
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

// Validasi sederhana: pastikan tidak kosong
if (empty($nama) || empty($harga) || empty($deskripsi)) {
    echo "Semua field wajib diisi!";
    exit; // hentikan proses
}

// Jika lolos validasi
echo "<h2>Data berhasil diproses!</h2>";
echo "Nama Produk: " . $nama . "<br>";
echo "Harga: Rp " . $harga . "<br>";
echo "Deskripsi: " . $deskripsi . "<br>";

// Di tahap selanjutnya data ini bisa disimpan ke database
?>
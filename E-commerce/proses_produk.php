<?php
include 'koneksi.php';

// Deklarasi variabel dari form
$nama       = $_POST['nama'];
$harga      = $_POST['harga'];
$deskripsi  = $_POST['deskripsi'];

// VALIDASI: cek apakah ada input kosong
if ($nama == "" || $harga == "" || $deskripsi == "") {
    echo "Gagal! Semua field harus diisi.";
} else {

    // Operator: menghitung total harga contoh (misal diskon 10%)
    $diskon = $harga * 0.10;
    $harga_final = $harga - $diskon;

    // Insert ke DB
    $query = "INSERT INTO products (nama_produk, harga, deskripsi, stok)
              VALUES ('$nama', '$harga_final', '$deskripsi', 10)";

    if (mysqli_query($conn, $query)) {
        echo "Produk berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>
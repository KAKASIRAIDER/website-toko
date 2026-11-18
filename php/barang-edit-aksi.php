<?php
include 'koneksi.php';

$id_barang   = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];

// Perbaikan query SQL: tambah '=', sesuaikan nama kolom 'harga', dan hapus koma sebelum WHERE
$query = "UPDATE barang SET 
            nama_barang='$nama_barang',
            harga='$harga',
            stok='$stok' 
          WHERE id_barang='$id_barang'";

mysqli_query($koneksi, $query);

header("location:barang.php?pesan=update");
exit; // Tambahkan exit setelah header agar kode di bawahnya tidak dieksekusi
?>
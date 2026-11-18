<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi,"INSERT INTO barang VALUES('$nama_barang','$harga','$stok')");
header("location:barang.php?pesan=input");


?>
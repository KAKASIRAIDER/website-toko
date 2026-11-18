<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data Barang</h1>
    </div>

    <br>

    <a href="barang.php">Lihat semua data</a>
    
    <br><br>
   
    <?php
        include "koneksi.php";
        // Pastikan parameter id ada di URL
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'" );

            while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
         
        <!-- Perbaikan tag form dan penambahan tanda = pada name -->
        <form action="barang-edit-aksi.php" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang'] ?>">
                        <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
                </tr>
                <tr>
                    <td>Stok Barang</td>
                    <td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <!-- Perbaikan value menjadi value -->
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>

    <?php 
            } 
        } else {
            echo "ID barang tidak ditemukan di URL.";
        }
    ?>

</body>
</html>
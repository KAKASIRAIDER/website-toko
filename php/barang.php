<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Tabel Barang</title>

</head>

<body>

    <h2>Tabel Barang</h2>

    <br>
    <a href="barang-input.php">Inpu Data Barang</a>
     
    <br>
    <table border="1">

        <tr>

            <th>ID Barang</th>

            <th>Nama Barang</th>

            <th>Harga</th>

            <th>Stok</th>

            <th>aksi</th>

        </tr>


        <?php

        include "koneksi.php";

        $data = mysqli_query(
            $koneksi,
            "SELECT * FROM barang"
        );

        while ($tampil = mysqli_fetch_array($data)) {

        ?>

            <tr>

                <td>
                    <?php echo $tampil['id_barang']; ?>
                </td>

                <td>
                    <?php echo $tampil['nama_barang']; ?>
                </td>

                <td>
                    <?php echo $tampil['harga']; ?>
                </td>

                <td>
                    <?php echo $tampil['stok']; ?>
                </td>

                <td>
                    <a href="barang-edit.php?id=<?php echo $data['id_barang']; ?>">Edit</a>
                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>
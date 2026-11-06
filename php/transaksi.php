<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Tabel transaksi</title>

</head>

<body>

    <h2>Tabel Transaksi</h2>

    <br>
    <a href="transaksi-input.php">Inpu Data Transaksi</a>
    <br>

     
    <br>
    <table border="1">

        <tr>

            <th>Id Transaksi</th>

            <th>Id barang</th>

            <th>qty</th>

            <th>harga total</th>

            <th>nip</th>

        </tr>


        <?php

        include "koneksi.php";

        $data = mysqli_query(
            $koneksi,
            "SELECT * FROM transaksi"
        );

        while ($tampil = mysqli_fetch_array($data)) {

        ?>

            <tr>

                <td>
                    <?php echo $tampil['id_transaksi']; ?>
                </td>

                <td>
                    <?php echo $tampil['id_barang']; ?>
                </td>

                <td>
                    <?php echo $tampil['qty']; ?>
                </td>

                <td>
                    <?php echo $tampil['harga_total']; ?>
                </td>

                <td>
                    <?php echo $tampil['nip']; ?>
                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>
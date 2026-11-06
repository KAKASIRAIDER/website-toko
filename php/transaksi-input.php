
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input Data Transaksi</title>
</head>

<body>

    <h2>Input Data Transaksi</h2>

    <form action="Transaksi-input-aksi.php" method="post">

        <table>

            <tr>
                <td>Id transaksi</td>
                <td>
                    <input type="text" name="id_transaksi" required>
                </td>
            </tr>

            <tr>
                <td>Id barang</td>
                <td>
                    <input type="text" name="id_barang" required>
                </td>
            </tr>

            <tr>
                <td>QTY</td>
                <td>
                    <input type="text" name="qty" required>
                </td>
            </tr>

            <tr>
                <td>Harga Total</td>
                <td>
                    <input type="text" name="harga_total" required>
                </td>
            </tr>

             <tr>
                <td>nip</td>
                <td>
                    <input type="text" name="nip" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>

        </table>

    </form>

</body>

</html>
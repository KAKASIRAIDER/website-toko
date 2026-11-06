
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Input Data Pegawai</title>
</head>

<body>

    <h2>Input Data Pegawai</h2>

    <form action="pegawai-input-aksi.php" method="post">

        <table>

            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="nip" required>
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" required>
                </td>
            </tr>

            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>

             <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password" required>
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
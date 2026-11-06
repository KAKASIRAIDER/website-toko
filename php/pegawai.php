<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Tabel Pegawai</title>

</head>

<body>

    <h2>Tabel Pegawai</h2>

    <br>
    <a href="pegawai-input.php">Inpu Data Pegawai</a>
    <br>

    <table border="1">

        <tr>

            <th>NIP</th>

            <th>Nama</th>

            <th>Alamat</th>

            <th>Username</th>

        </tr>


        <?php

        include "koneksi.php";

        $data = mysqli_query(
            $koneksi,
            "SELECT * FROM pegawai"
        );

        while ($tampil = mysqli_fetch_array($data)) {

        ?>

            <tr>

                <td>
                    <?php echo $tampil['nip']; ?>
                </td>

                <td>
                    <?php echo $tampil['nama']; ?>
                </td>

                <td>
                    <?php echo $tampil['alamat']; ?>
                </td>

                <td>
                    <?php echo $tampil['username']; ?>
                </td>

            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>
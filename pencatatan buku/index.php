<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tabel Mahasiswa</h1>
        <p><a href="tambah.php">+ Tambah Data</a></p>
        <table border="1" class="text-center">
            <thead>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * From mahasiswa") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td><?php echo $baris['npm'] ?></td>
                <td><?php echo $baris['nama'] ?></td>
                <td><?php echo $baris['alamat'] ?></td>
                <td>
                    <a href="update.php?npm=<?php echo $baris['npm'] ?>" class="btn btn-primary">Update Data</a>
                    <a href="hapus.php?npm=<?php echo $baris['npm'] ?>" class="btn btn-primary">Hapus Data</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <div class="col-md-6">
            <form action="prosestambah.php" method="post">
                <label for="npm">NPM</label>
                <input type="number" class="form-control" name="npm">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat">
                <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
            </form>
        </div>
    </div>
</body>
</html>

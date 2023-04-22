<?php
require_once __DIR__ . "/function.php";

if (isset($_POST['tambah'])) {
    insertData($_POST, $_FILES);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <h1>Data Mahasiswa</h1>
    </header>
    <div class="container">
        <div class="inventaris mt-5 mb-5" style="width: 90%;">
            <div class="card">
                <div class="card-header text-center bg-biru">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputData" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="nim" placeholder="NIM" autofocus required autocomplete="off" pattern="[A-Za-z0-9]+">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputData" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required autocomplete="off" pattern="[a-zA-Z ]+">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputData" class="col-sm-2 col-form-label">E-Mail</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" placeholder="email" required autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputData" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-5">
                                <select  class="form-control" name="jurusan" placeholder="Jurusan" required>
                                    <option disabled selected value>Pilih Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputData" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="gambar" placeholder="Gambar" required autocomplete="off" accept="image/*">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-tambah" name="tambah"
                                style="color: white;">Tambah</button>
                            <button type="reset" class="btn btn-tambah" name="reset"><a href="index.php"
                                    style="color: white;">Batal</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
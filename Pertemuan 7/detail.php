<?php 
require_once __DIR__. "/function.php";
$nim = $_GET['id'];
$result = getById($nim);
?>

<html>
    <head>
        <title>detail</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
    <header>
        <h1>Data Mahasiswa</h1>
    </header>
    <section>
        <?php foreach ($result as $value) { ?>
        <img src="./assets/img/<?= $value['gambar']; ?>" alt="gambar" class="gambar">
        <div class="detail">
            <p>NIM <span>:</span> <?= $value['nim']; ?></p>
            <p>Nama <span>:</span> <?= $value['nama']; ?></p>
            <p>Email <span>:</span> <?= $value['email']; ?></p>
            <p>Jurusan <span>:</span> <?= $value['jurusan']; ?></p>
            <a href="" class="link"><button>Ubah</button></a>
            <a href="index.php" class="link"><button>kembali</button></a>
        </div>
        <?php }; ?>
    </section>
    </body>
</html>
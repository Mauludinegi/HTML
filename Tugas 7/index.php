<?php
require_once __DIR__ . "/function.php";
$result = selectAll();
?>

<html>

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
</head>

<body>
    <header>
        <h1>Data Mahasiswa</h1>
    </header>
    <main>
        <a href="tambah.php"><button class="add"><span>Tambah Mahasiswa</span></button></a>
        <table class="tableMahasiswa">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Gambar</td>
                    <td>Nama</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php if (sizeof($result) > 0) {
                    for ($i = 0; $row = $result[$i]; $i++) { ?>
                        <tr>
                            <td>
                                <?= $i + 1; ?>
                            </td>
                            <td>
                                <img src="./assets/img/<?= $row['gambar']; ?>" alt="gambar">
                            </td>
                            <td>
                                <?= $row['nama']; ?>
                            </td>
                            <td><a href="detail.php?id=<?= $row['nim']; ?>"><button><span>detail</span></button></a></td>
                        </tr>
                        <?php
                        if ($i == sizeof($result) - 1) {
                            break;
                        }
                    }
                } ?>
            </tbody>
        </table>
    </main>
</body>

</html>
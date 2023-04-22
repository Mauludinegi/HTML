<?php
require_once __DIR__ . "/koneksi.php";
function selectAll()
{
    $connection = getConnection();
    $sql = "select * from mahasiswa order by no asc";
    try {
        $preparedStatement = $connection->prepare($sql);
        $preparedStatement->execute();
        return $result = $preparedStatement->fetchAll();
    } catch (PDOException $e) {
        echo "Belum ada data";
    }
}

function getById($id)
{
    $connection = getConnection();
    $sql = "select * from mahasiswa where nim = ?";
    try {
        $preparedStatement = $connection->prepare($sql);
        $preparedStatement->execute([$id]);
        return $result = $preparedStatement->fetchAll();
    } catch (PDOException $e) {
        echo $e;
    }
}


function insertData($data, $file)
{
    $connection = getConnection();
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = $file['gambar'];
    $ext = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
    $tipe = $gambar['type'];
    $size = $gambar['size'];

    if (is_uploaded_file($gambar['tmp_name'])) { //cek apakah ada file yang di upload

        if (!in_array(($tipe), $ext)) { //cek ekstensi file
            echo '<script type="text/javascript">alert("Format gambar tidak diperbolehkan!");window.history.go(-1)</script>';
            return false;
        } else if ($size > 2097152) {
            echo '<script type="text/javascript">alert("Ukuran gambar terlalu besar!");window.history.go(-1);</script>';
            return false;
        } else {
            $extractFile = pathinfo($gambar['name']);
            $dir = "./assets/img/";
            $newName = microtime() . '.' . $extractFile['extension'];

            //pindahkan file yang di upload ke directory tujuan bila berhasil jalankan perintah query untuk mennyimpan ke database
            if (move_uploaded_file($gambar['tmp_name'], $dir . $newName)) {
                $sql = "INSERT INTO mahasiswa(gambar, nim, nama, email, jurusan) VALUES(?, ?, ?, ?, ?)";
                try {
                    $preparedStament = $connection->prepare($sql);
                    $preparedStament->execute([$newName, $nim, $nama, $email, $jurusan]);
                    echo "<script>alert('upload sukses')
                    window.location.href='index.php'
                    </script>";
                    return true;
                } catch (PDOException $e) {
                    echo '<script type="text/javascript">alert("Terjadi kesalahan pada database");window.history.go(-1);</script>';
                    return false;
                }
            } else {
                echo '<script type="text/javascript">alert("Foto gagal diupload");window.history.go(-1);</script>';
                return false;
            }
        }
    } else {
        echo "<script>alert('terjadi kesalahan')</script>";
        return false;
    }
}

?>
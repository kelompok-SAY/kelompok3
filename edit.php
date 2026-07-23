<?php
session_start();
if (!isset($SESSION['login'])) {
    header("Location: login.php");
}

include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "
    SELECT * FROM siswa
    WHERE id_siswa='$id'
");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
<h2>Edit Data Siswa</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id"
           value="<?= $d['id_siswa']; ?>">
    <label>NIS</label>
    <br>
    <input type="text" name="nis"
           value="<?= $d['nis']; ?>">
    <br></br>
    <label>Nama</label>
    <br>
    <input type="text" name="nama"
           value="<?= $d['nama']; ?>">
    <br></br>
    <label>Jurusan</label>
    <br>
    <input type="text" name="jurusan"
           value="<?= $d['jurusan']; ?>">
    <br></br>
    <label>Alamat</label>
    <br>
    <textarea name="alamat"><?= $d['alamat']; ?></textarea>
    <br></br>

    <button type="submit">
        Update
    </button>
</form>
</body>
</html>
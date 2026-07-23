<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
<h2>Tambah Data Siswa</h2>
<form action="simpan.php" method="POST">
    <label>NIS</label>
    <br>
    <input type="text" name="nis">
    <br><br>
    <label>Nama</label>
    <br>
    <input type="text" name="nama">
    <br><br>
    <label>Jurusan</label>
    <br>
    <input type="text" name="jurusan">
    <br><br>
    <label>Alamat</label>
    <br>
    <input type="text" name="alamat">
    <br><br>

    <button type="submit">
        Simpan
    </button>
</form>
</body>
</html>
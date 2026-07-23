<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Locatin: login.php");
}

include "koneksi.php";
$total = mysqli_query($koneksi, "SELECT * FROM siswa");
$jumlah = mysqli_num_rows($total);
?>

< html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Dashboard</h2>
<p>Total Siswa : <?= $jumlah;  ?></p>
<a href="tambah.php">Tambah Siswa</a>
|
<a href="logout.php">Logout</a>
<br></br>
<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data =mysqli_query($koneksi, "
    SEKECT * FROM siswa
");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nis']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['jurusan']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id_siswa']; ?>">
            Edit
        </a>
        |
        <a href="hapus.php?id=<?= $d['id_siswa']; ?>"
           onclick="return confirm('Yakin hapus data?')">
           Hapus
        </a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
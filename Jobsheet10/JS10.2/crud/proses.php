<?php
include('koneksi.php');

$aksi = $_GET['aksi'];
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);

if ($aksi == 'tambah') {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi);
?>

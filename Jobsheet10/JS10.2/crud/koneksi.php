<?php
$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'prakwebdb'; 

// Koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}
?>
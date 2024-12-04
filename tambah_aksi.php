<?php

// koneksi database
include 'database.php';

//menangkap data yang dikirim dari form
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Prodi = $_POST['Prodi'];
$Alamat = $_POST['Alamat'];
$Kontak = $_POST['Kontak'];

//menginputkan data ke database 
mysqli_query($koneksi, "insert into peserta value('$NIM','$Nama','$Prodi','$Alamat','$Kontak')");

//mengalihkan halaman kembali ke index.php
header("location: index.php");

?>
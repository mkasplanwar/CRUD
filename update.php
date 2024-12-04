<?php
//koneksi database
//koneksi database
include 'database.php';

//menangkap data yang dikirim dari form
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Prodi = $_POST['Prodi'];
$Alamat = $_POST['Alamat'];
$Kontak = $_POST['Kontak'];


//update data ke database
mysqli_query($koneksi,"update peserta set NIM='$NIM',Nama='$Nama',Prodi='$Prodi',Alamat='$Alamat',Kontak='$Kontak' where NIM='$NIM'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

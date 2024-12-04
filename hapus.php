<?php
//koneksi database
include 'database.php';

//menangkap data id yang dikirim dari url
$NIM= $_GET['NIM'];

//menghapus data dari database
mysqli_query($koneksi,"delete from peserta where NIM='$NIM'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
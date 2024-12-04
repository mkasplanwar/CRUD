<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi - Kelas TI A</title>
    <style>
        body {
            text-align: center;
            background-image: url('https://img.freepik.com/free-vector/watercolor-stains-abstract-background_23-2149107181.jpg?w=900&t=st=1703029180~exp=1703029780~hmac=005cacd65cdb2c7f32cfea5a5b88fd017dc95b7b709975b796fab1902250c3c5'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; /* Ganti warna teks sesuai kebutuhan agar cocok dengan warna background */
        }

        table {
            margin: 0 auto;
            text-align: left;
            color: #000; /* Ganti warna teks sesuai kebutuhan agar cocok dengan latar belakang */
        }

    </style>

</head>
<body>
    <h2 style="color: #000; font-weight: bold; text-decoration: underline;">CRUD DATA MAHASISWA - Kelas TI A</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th align = "center">No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'database.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from peserta");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td align = "center"><?php echo $no++; ?></td>
                <td align = "center"><?php echo $d['NIM']; ?></td>
                <td align = "center"><?php echo $d['Nama']; ?></td>
                <td align = "center"><?php echo $d['Prodi']; ?></td>
                <td align = "center"><?php echo $d['Alamat']; ?></td>
                <td align = "center"><?php echo $d['Kontak']; ?></td>
                <td>
                    <a href="edit.php?NIM=<?php echo $d['NIM']; ?>">EDIT</a>
                    <a href="hapus.php?NIM=<?php echo $d['NIM']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
	<br><br><br>
	<marquee style="color: #000;"><strong>TULIS KODINGAN DENGAN TELITIIIIII           - "ANWAR"</strong></marquee>
</body>
</html>

<html>
<head>
	<title>CRUD PHP dan MySQL - Kelas TI A</title>
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
	<a href = "index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3 style="text-align: center;">TAMBAH DATA MAHASISWA</h3>
	<form method = "post" action = "tambah_aksi.php">
		<table>
		 <style>
        table {
            width: 50%;
            margin: 0 auto; 
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
			<tr>
				<td>NIM</td>
				<td><input type = "text" name = "NIM"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type = "text" name = "Nama"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type = "text" name = "Prodi"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type = "text" name = "Alamat"></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type = "text" name = "Kontak"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type = "submit" value = "SIMPAN"></td>
			</tr>
		</table>		
		<br><br><br>
	<marquee style="color: #000;"><strong>TULIS KODINGAN DENGAN TELITIIIIII           - "ANWAR"</strong></marquee>
	</form>
</body>
</html>
		
			
			

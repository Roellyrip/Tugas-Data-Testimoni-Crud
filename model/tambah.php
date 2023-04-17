<!DOCTYPE html>
<html>
<head>
<title>Daftar Testimoni</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Daftar Data Testimoni Oreo Bolu Softcake di Shoope</h2>
	</div>

	<br />
	<a href="../view/index.php">< Lihat Semua Data</a>
	
	<h3>Tambah Testimoni</h3>
	<form action="../controller/tambah.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" required></td>					
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="Tanggal" required></td>					
			</tr>	
			<tr>
				<td>Rasa (Enak = 1, Tidak enak = 2, Biasa = 3)</td>
				<td><input type="number" name="Rasa_id" required></td>					
			</tr>	
			<tr>
				<td>Kualitas</td>
				<td><input type="text" name="Kualitas" required></td>					
			</tr>
			<tr>
				<td>Screenshot</td>
				<td><input type="text" name="Screenshot" required></td>					
			</tr>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
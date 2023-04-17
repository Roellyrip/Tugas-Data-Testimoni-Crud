<?php
require '../controller/koneksi.php';

$desert = query("SELECT * FROM oreo");
?>

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
	
	<h3>Edit Testimoni</h3>
	<form action="../controller/edit.php" method="post">
	
		
		<table>
		<?php foreach($desert as $dst); ?>
			<tr>
				<td>Id</td>
				<td><input type="number" name="id" value="<?= $dst['id'];?>" required></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" value="<?= $dst['Nama'];?>" required></td>					
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="Tanggal" value="<?= $dst['Tanggal'];?>" required></td>					
			</tr>	
			<tr>
				<td>Rasa</td>
				<td><input type="number" name="Rasa_id" value="<?= $dst['Rasa_id']; ?>" required></td>					
			</tr>	
			<tr>
				<td>Kualitas</td>
				<td><input type="text" name="Kualitas" value="<?= $dst['Kualitas']; ?>" required></td>					
			</tr>
			<tr>
				<td>Screenshot</td>
				<td><input type="text" name="Screenshot" value="<?= $dst['Screenshot']; ?>" required></td>					
			</tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>				
			</tr>
						
		</table>

	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Presensiku</title>
</head>
<body>
	<h2>Presensiku</h2>
	
	<p><a href="index.php">Beranda</a> // <a href="riwayat.php">Riwayat</a></p>
	
	<h3>Input Presensi</h3>
	
	<form action="presensi_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="user_id" required></td>
			</tr>
			<tr>
				<td>Jam Masuk</td>
				<td>:</td>
				<td><input type="time" name="jam_masuk" size="30" required></td>
            </tr>
            
            <tr>
				<td>Jam Keluar</td>
				<td>:</td>
				<td><input type="time" name="jam_keluar" size="10" required></td>
            </tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
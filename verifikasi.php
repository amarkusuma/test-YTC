
<!DOCTYPE html>
<html>
<head>
	<title>Presensiku</title>
</head>
<body>
	<h2>Presensiku</h2>
	
	<p><a href="index.php">Beranda</a> </p>
	
	<h3>Verifikasi</h3>
	
	<form action="verifikasi_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="nik" required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" size="30" required></td>
            </tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><button type="submit" name="submit" >Tambah</button></td>
			</tr>
		</table>
	</form>
</body>
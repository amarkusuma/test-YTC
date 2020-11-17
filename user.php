
<!DOCTYPE html>
<html>
<head>
	<title>Presensiku</title>
</head>
<body>
	<h2>Presensiku</h2>
	
	<p><a href="index.php">Beranda</a> </p>
	
	<h3>Tambah Data User</h3>
	
	<form action="tambah_user.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="nik" required></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
            </tr>
            
            <tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" size="10" required></td>
            </tr>
            
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="">Pilih </option>
						<option value="siswa">Siswa</option>
						<option value="guru">Guru</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
                <input type="radio" id="male" name="jenis_kelamin" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="jenis_kelamin" value="female">
                <label for="female">Female</label><br>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><button type="submit" name="submit" >Tambah</button></td>
			</tr>
		</table>
	</form>
</body>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="presensi.php">Presensi</a> // <a href="verifikasi.php">Verifikasi</a></p>
	
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>NIK</th>
			<th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Tanggal</th>
		</tr>
		
        <?php
        
        session_start();
        
		include('koneksi.php');
        
        $nik = $_SESSION['nik'];

		$result = mysqli_query($conn, "SELECT * FROM presensi ORDER BY id desc limit 30 ");
    
	    $presensi = mysqli_fetch_array($result);
        
		if(empty($nik)){
			
			echo '<tr><td colspan="6">Verifikasi Dulu!</td></tr>';
			
		}else{
           
			$no = 1;
			while($data = mysqli_fetch_array($result)){
                
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['user_id'].'</td>';	
					echo '<td>'.$data['jam_masuk'].'</td>';
                    echo '<td>'.$data['jam_keluar'].'</td>';
				echo '</tr>';
		
				$no++;
			}
			
		}
		?>
	</table>
</body>
</html>

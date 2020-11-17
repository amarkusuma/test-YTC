<?php

if(isset($_POST['nik'])){
   
	include('koneksi.php');
	
	$nik = $_POST['nik'];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE nik=$nik");
    
	$user_data = mysqli_fetch_array($result);

	if (empty($user_data)) {

		$nik		= $_POST['nik'] ? $_POST['nik'] : null ;	
		$nama		= $_POST['nama'] ? $_POST['nama'] : null;	
		$tgl_lahir		= $_POST['tgl_lahir'] ? $_POST['tgl_lahir'] : null;	
		$status	= $_POST['status'] ? $_POST['status'] : null;	
		$jenis_kelamin = $_POST['jenis_kelamin'] ? $_POST['jenis_kelamin'] : null;

		$input = mysqli_query($conn, "INSERT INTO user VALUES(NULL, $nik, '$nama', '$status', '$jenis_kelamin', '$tgl_lahir')");

		if($input){
			
			echo 'Data berhasil di tambahkan! ';		
			echo '<a href="user.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menambahkan data! ';		
			echo '<a href="user.php">Kembali</a>';	
			
		}
 
	}else{
		  
		echo 'NIK Sudah di gunakan ';		
		echo '<a href="user.php">Kembali</a>';	
	}
	
	
}else{
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
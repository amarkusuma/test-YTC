<?php

if(isset($_POST['user_id'])){
   
	include('koneksi.php');
	
	$user_id		= $_POST['user_id'] ? $_POST['user_id'] : null ;	
	$jam_masuk		= $_POST['jam_masuk'] ? $_POST['jam_masuk'] : null;	
    $jam_keluar	= $_POST['jam_keluar'] ? $_POST['jam_keluar'] : null;	

    $tanggal = date("Y-m-d H:i:s");

    $input = mysqli_query($conn, "INSERT INTO presensi(user_id, tanggal, jam_masuk, jam_keluar) VALUES($user_id, '$tanggal', '$jam_masuk', '$jam_keluar')");

	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="presensi.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="presensi.php">Kembali</a>';	
		
	}
 
}else{
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
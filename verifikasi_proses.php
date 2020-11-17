<?php
session_start();

$_SESSION['nik'] = null ;
$_SESSION['tgl_lahir'] = null ;

if (isset($_POST['nik'])) {
    
    include('koneksi.php');
	
    $nik = $_POST['nik'];
    $tgl_lahir = $_POST['tgl_lahir'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE nik=$nik");
    
    $user_data = mysqli_fetch_array($result);
    
    if (!empty($user_data)) {
       
       if ($user_data['tgl_lahir'] == $tgl_lahir) {
          
        $_SESSION['nik'] = $nik ;
        $_SESSION['tgl_lahir'] = $tgl_lahir ;

        header("Location: riwayat.php");
        
       }else{
        echo '<script>window.history.back()</script>';
       }

    }else{
       
        echo '<script>window.history.back()</script>';
    }

}else{
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
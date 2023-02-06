<?php 

require_once("../koneksi.php");

 session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }

    $id_siswa = $_GET['id'];
    $sql = "DELETE  from siswa where Id_Siswa='$id_siswa'";
    $delete = mysqli_query($koneksi,$sql);
    if($delete){
    	echo "<script>alert('Data Berhasil Dihapus');
		window.location='index.php'</script>";
		
	}
	else{
		echo "<script>alert('Data Gagal Dihapus');
		window.location='index.php'<script>";	
	}

  
 ?>
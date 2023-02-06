<?php 

require_once("../koneksi.php");

 session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }

    $Id_Kegiatan = $_GET['id'];
    $sql = "DELETE  from kegiatan where Id_Kegiatan='$Id_Kegiatan'";
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
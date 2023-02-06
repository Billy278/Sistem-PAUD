<?php
require_once("koneksi.php");
session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }

    
if(isset($_POST['Simpan'])){
	$id_kegiatan = $_POST['Id_Kegiatan'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kegiatan = $_POST['jenis_kegiatan'];
	$tempat_kegiatan = $_POST['tempat_kegiatan'];
	$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
	$lama_kegiatan = $_POST['lama_kegiatan'];

	$sql = "INSERT INTO kegiatan values 
			('$id_kegiatan','$nama_siswa','$jenis_kegiatan','$tempat_kegiatan','$tanggal_kegiatan','$lama_kegiatan')";

	$run = mysqli_query($koneksi,$sql);
	if($run){
		echo "<script>alert('Data Berhasil Diinput');
		window.location='daftar_kegiatan.php'</script>";
	}
	else{
		echo "<script>alert('Data Gagal Diinput');
		window.location='daftar_kegiatan.php'<script>";	
	}

	
}


 ?>
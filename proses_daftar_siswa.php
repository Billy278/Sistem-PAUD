<?php
require_once("koneksi.php");
session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }

    
if(isset($_POST['Simpan'])){
	$id_siswa = $_POST['id_siswa'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenkel = $_POST['jenkel'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO siswa values 
			('$id_siswa','$nama_siswa','$jenkel','$tempat_lahir','$tanggal_lahir','$alamat')";

	$run = mysqli_query($koneksi,$sql);
	if($run){
		echo "<script>alert('Data Berhasil Diinput');
		window.location='daftar_siswa.php'</script>";
		
	}
	else{
		echo "<script>alert('Data Gagal Diinput');
		window.location='daftar_siswa.php'<script>";	
	}

	
}


 ?>
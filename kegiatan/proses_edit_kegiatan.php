<?php 

require_once("../koneksi.php");

    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }

    if(isset($_POST['proses'])){
	 $idkegiatan = $_POST['Id_Kegiatan']; 
	$namasiswa = $_POST['nama_siswa'];
	$jeniskegiatan = $_POST['jenis_kegiatan'];
	$tempatkegiatan = $_POST['tempat_kegiatan'];
	$tanggalkegiatan = $_POST['tanggal_kegiatan'];
	$lamakegiatan = $_POST['lama_kegiatan'];

	 $update ="UPDATE kegiatan SET Nama_Siswa='$namasiswa', Jenis_Kegiatan='$jeniskegiatan', Tempat_Kegiatan ='$tempatkegiatan' , Tanggal_Kegiatan='$tanggalkegiatan', Lama_Kegiatan ='$lamakegiatan' WHERE Id_Kegiatan='$idkegiatan'";

	$run= mysqli_query($koneksi,$update);
	echo "$idkegiatan<br>";
	echo "$namasiswa<br>";
	echo "$jeniskegiatan<br>";
	echo "$tempatkegiatan<br>";
	echo "$tanggalkegiatan<br>";
	echo "$lamakegiatan<br>";
	if ($run) {
		echo "<script>
		alert('Data berhasi diubah.');
		window.location='index.php';
		</script>";
	}else{
		echo "<script>
		alert('Data gagal diubah. Silahkan ulang lagi.');
		
		</script>";
	}


}

 ?>


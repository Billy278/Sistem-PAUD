<?php 

require_once("../koneksi.php");
	   session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
 	

    if(isset($_POST['proses'])){
	$id_siswa = $_POST['id_siswa']; 
	$nama_siswa = $_POST['nama_siswa'];
	$jenkel = $_POST['jenkel'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];

	$query=  "UPDATE siswa set Nama_Siswa='$nama_siswa', Jenis_Kelamin ='$jenkel', Tempat_Lahir='$tempat_lahir', Tanggal_Lahir = '$tanggal_lahir' , Alamat ='$alamat' where Id_Siswa ='$id_siswa'";

	$run = mysqli_query($koneksi,$query) or die ("Proses Pengeditan gagal");

	
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
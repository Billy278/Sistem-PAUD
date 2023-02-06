<?php 
include ("koneksi.php");
session_start();
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "Select * from admin where Username='$username' and Password ='$password'";
$data= mysqli_query($koneksi,$sql);
$cek = mysqli_num_rows($data);
$run = mysqli_fetch_array($data);
	if($cek >0){
		 $_SESSION['username'] = $username;
		 $_SESSION['status'] = "login";
		header("location:home.php?");

		}
	else{
		header("location:index.php?pesan=gagal");
		
		}
}
else{
	header("location:login.php?");
}


 ?>
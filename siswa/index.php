<?php
require_once("../koneksi.php");
$sql="Select * from siswa";
$data=mysqli_query($koneksi,$sql);
$no=1;

  ?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="styles/style_home.css"> -->
    <!-- <script src="js/home.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../styles/style_home.css">
    <title>Home</title>

  </head>
<body>
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
      ?>
    <table width="100%">
        <tr>
            <td align="center">
                <a href="../home.php"><img src="../image/logo.png" class="gambar"></a>    
            </td>
            <td>
                <h1 align="left" style="text-decoration: none; color: black">PAUD MANDIRI KUTABULUH</h1>
            </td>
                    
        </tr>
            
    </table>
    
    
<nav class="navbar navbar-dark bg-info navbar-expand-md">
    
   <div class="container">
        <button class="navbar-toggler d-none" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav w-100 justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Home</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="../daftar_siswa.php">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../daftar_kegiatan.php">Data kegiatan</a>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" data-display="static" aria-expanded="false">Lihat Data</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="index.php">Data Siswa</a>
                        <a class="dropdown-item" role="presentation" href="../kegiatan/index.php">Data Kegiatan</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" data-display="static" aria-expanded="false">Laporan</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="../laporan/cetaksiswa.php" target="blank">laporan Siswa</a>
                        <a class="dropdown-item" role="presentation" href="../laporan/cetakkegiatan.php" target="blank">laporan kegiatan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div class="row">
    <div class="col-md-12 px-0" align="center">
        <a href="print_siswa.php" onclick="window.print()"><input type="image" src="../image/print.png" width="60" height="50" class="btn btn-primary" /><h5 style="text-decoration: none; color: black;">Print</h5>
        </a>

    </div>
</div>
<form class="form-inline" action="index.php" method="get">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">cari</label>
    <input type="text" class="form-control"  placeholder="masukkan kode siswa" name="cari">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cari</button>
</form><br>
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<div class="row">
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-10 px-0">
                <table class="table table-striped w-100">
                  <thead>
                    <tr class="table-warning">
                      <th>No</th>
                      <th>Id Siswa</th>
                      <th>Nama Siswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($koneksi,"select * from siswa where Id_Siswa like '%".$cari."%'");    
 }else{
  $data = mysqli_query($koneksi,"select * from siswa");  
 }
 ?>
                    <?php
                        while($siswa= mysqli_fetch_array($data)){

                      ?>
                    <tr class="table-info">
                        <th scope="row"><?=$no++?></th>
                        <td><?= $siswa['Id_Siswa']?></td>
                        <td><?= $siswa['Nama_Siswa']?></td>
                        <td><?= $siswa['Jenis_Kelamin']?></td>
                        <td><?= $siswa['Tempat_Lahir']?></td>
                        <td><?= $siswa['Tanggal_Lahir']?></td>
                        <td><?= $siswa['Alamat']?></td>
                        <td>
                            <a href="edit_siswa.php?id=<?=$siswa['Id_Siswa']?>"><input type="button" class="btn btn-primary" value="Edit"></a>
                            <a href="hapus_siswa.php?id=<?=$siswa['Id_Siswa']?>" onclick="return confirm('Anda Yakin ?')"><input type="button" class="btn btn-danger" value="Hapus"></a>
                        </td>
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
            </div>
    </div>
<div class="row mt-3 bg-info py-2">
    <div class="col-md">
        <p class="text-center my-auto text-light font-weight-bold ">2020 &copy; Winda Ginting</p>
    </div>
</div>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
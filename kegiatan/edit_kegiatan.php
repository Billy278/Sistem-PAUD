<?php
require_once("../koneksi.php");
$id = $_GET['id'];
$tampil = "SELECT * FROM kegiatan where Id_Kegiatan='$id'";
$run = mysqli_query($koneksi,$tampil);
$data = mysqli_fetch_assoc($run);

$xId_Kegiatan = $data['Id_Kegiatan'];
$xnama_siswa = $data['Nama_Siswa'];
$xjenis_kegiatan = $data['Jenis_Kegiatan'];
$xtempat_kegiatan = $data['Tempat_Kegiatan'];   
$xtanggal_kegiatan = $data['Tanggal_Kegiatan'];
$xlama_kegiatan = $data['Lama_Kegiatan'];




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
                    <a class="nav-link" href="daftar_siswa.php">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar_kegiatan.php">Data kegiatan</a>
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
                        <a class="dropdown-item" role="presentation" href="../laporan/cetakkegiatan.php">laporan kegiatan</a>
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
<div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-12">Edit Daftar Siswa</h3>
                        </div>
                    </div><br>
                    <table width="100%">
                        <tr>
                            <td align="right">
                                <div class="col-lg-9">
                                    <a href="index.php"><input type="reset" class="btn btn-success btn-sm float-right" value="Kembali" ></a>

                                </div>
                            </td>
                        </tr>
                    </table>
                     <div class="row">
                    <div class="col-md-2 px-0 mt-2">
                    </div>
                    <div class="col-md-9 px-0 mt-2">
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="proses_edit_kegiatan.php" method="POST">
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">ID Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Masukkan ID Siswa" name="Id_Kegiatan" value="<?=$xId_Kegiatan?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nama Siswa</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Masukkan Nama Siswa" name="nama_siswa" value="<?=$xnama_siswa ?>" autofocus required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Jenis Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"  name="jenis_kegiatan" value="<?=$xjenis_kegiatan ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Tempat Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Masukkan Tempat Kegiatan" name="tempat_kegiatan" value="<?=$xtempat_kegiatan ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Tanggal Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" name="tanggal_kegiatan" value="<?=$xtanggal_kegiatan ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Lama Kegiatan</label>
                                    <div class="col-lg-9">
                                       <input class="form-control" type="text" name="lama_kegiatan" value="<?=$xlama_kegiatan ?>" required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Simpan Perubahan" name="proses">
                                        <input type="reset" class="btn btn-secondary" value="Batal" >
                                    </div>
                                </div>
                            </form>
                        </div>
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
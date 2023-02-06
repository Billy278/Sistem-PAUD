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
    <link rel="stylesheet" type="text/css" href="styles/style_home.css">
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
                <a href="home.php"><img src="image/logo.png" class="gambar"></a>    
            </td>
            <td>
                <h1 align="left" style="text-decoration: none; color: black">PAUD MANDIRI KUTABULUH</h1>
            </td>
                    
        </tr>
            
    </table>
    <marquee bgcolor="blue" scrollamount="10" style="font-family:arial; font-size:20px; color:#ffffff;">JAM KERJA 8:00-11.00</marquee>
    
<nav class="navbar navbar-dark bg-info navbar-expand-md">
    
   <div class="container">
        <button class="navbar-toggler d-none" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav w-100 justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="daftar_siswa.php">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar_kegiatan.php">Data kegiatan</a>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" data-display="static" aria-expanded="false" >Lihat Data</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="siswa/index.php">Data Siswa</a>
                        <a class="dropdown-item" role="presentation" href="kegiatan/index.php">Data Kegiatan</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" data-display="static" aria-expanded="false" >Laporan</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="laporan/cetaksiswa.php" target="blank">Laporan Siswa</a>
                        <a class="dropdown-item" role="presentation" href="laporan/cetakkegiatan.php" target="blank">laporan Kegiatan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-10 px-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/PAUD 6.jpg" height="500" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="image/PAUD 2.JPG" height="500" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="image/PAUD 3.JPG" height="500" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="image/PAUD 1.JPG" height="500" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="image/PAUD 5.JPG" height="500" class="d-block w-100">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
<div class="row">
 <div class="col-md-1 pl-0 mt-2">
 </div>   
 <div class="col-md-10 pl-0 mt-2">
                <div class="card">
                    <div class="card-header">
                        Kata Sambutan Kepala sekolah
                    </div>
                    <div class="card-body">
                        <p>
                            Pendidikan anak usia dini (PAUD)  adalah suatu upaya yang ditujukan kepada anak sejak lahir sampai usia enam tahun yang dilakukan melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut.
                        </p>
                        <p>
                            Di PAUD Mandiri Kutabuluh anak-anak diajarkan mengurutkan angka, mengenal huruf, berhitung, menulis dan mereka juga mmeiliki kegiatan rutinitas setiap minggu dan bulannya.
                        </p>
                        <p>
                            Kami memberikan pelayanan pendidikan dengan sepenuh hati kepada seluruh peserta didik, anak-anak yang kami cintai sepenuh hati. PAUD Mandiri Kuta Buluh adalah salah satu wadah bermain dan belajar untuk anak-anak kita. PAUD Mandiri Kuta Buluh siap membantu orang tua untuk menyelamatkan “Usia Emas” putra putrinya.
                        </p>
                        <p>
                            Perencanaan pembelajaran pada program PAUD Mandiri kuta Buluh Segedong telah disusun dengan matang untuk memberikan arah yang tepat dalam proses pembelajarannya dengan mempertimbangkan keseimbangan antara pendidikan umum dan pendidikan keagamaan.
                        </p>
                        <p>
                            Semoga apa yang akan kami berikan melalui situs web PAUD Mandiri Kuta Buluh  dapat bermanfaat bagi anak didik. orang tua murid, masyarakat dan sekolah. Akhir kata, jangan lupa kami mengajak terimakasih kepada semua pihak yang ikut berpartisipasi dalam Website ini. Semoga semua yang kami beri bermanfaat.
                        </p>
                        <i>Shaloom</i>
                    </div>
            </div>
    </div>
</div>
<div class="row mt-3 bg-info py-2">
    <div class="col-md">
        <p class="text-center my-auto text-light font-weight-bold ">2020 &copy; Winda ginting</p>
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
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
      <script>
        window.print();
    </script>    
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
<br>

</div><br>
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
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        while($siswa= mysqli_fetch_array($data)){

                      ?>
                    <tr class="table-light">
                        <th scope="row"><?=$no++?></th>
                        <td><?= $siswa['Id_Siswa']?></td>
                        <td><?= $siswa['Nama_Siswa']?></td>
                        <td><?= $siswa['Jenis_Kelamin']?></td>
                        <td><?= $siswa['Tempat_Lahir']?></td>
                        <td><?= $siswa['Tanggal_Lahir']?></td>
                        <td><?= $siswa['Alamat']?></td>
                        
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
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
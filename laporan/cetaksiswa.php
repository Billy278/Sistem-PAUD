<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PAUD MANDIRI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA PAUD MANDIRI',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID SISWA',1,0);
$pdf->Cell(80,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(30,6,'JENIS KELAMIN',1,0);
$pdf->Cell(40,6,'TANGGAL LAHIR',1,0);
$pdf->Cell(29,6,'ALAMAT',1,1);

$pdf->SetFont('Arial','',10);

require_once("../koneksi.php");
$mahasiswa = mysqli_query($koneksi, "select * from siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['Id_Siswa'],1,0);
    $pdf->Cell(80,6,$row['Nama_Siswa'],1,0);
    $pdf->Cell(30,6,$row['Jenis_Kelamin'],1,0);
    $pdf->Cell(40,6,$row['Tanggal_Lahir'],1,0); 
     $pdf->Cell(29,6,$row['Alamat'],1,1); 
}
$pdf->Cell(20,25,'',0,1);
$pdf->SetLeftMargin(70);
$pdf->SetFont('Times','',12);
$pdf->Cell(190,7,date(' d-m-Y'),0,1,'C');
$pdf->SetFont('Times','B',12);
$pdf->Cell(190,7,'Penyelenggara',0,1,'C');
$pdf->Cell(10,9,'',0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(190,7,'SAUDARANTA PINEM',0,1,'C');
$pdf->Output();
?>
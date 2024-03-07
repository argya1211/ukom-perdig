<?php

include '../../koneksi/koneksi.php';
 
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$Foto        = $_FILES['Foto']['name'];
$Buku        = $_FILES['Buku']['name'];
$file        = $_FILES['Foto']['tmp_name'];
$file_tmp    = $_FILES['Buku']['tmp_name'];
$ekstensi_diperbolehkan = array('pdf');

move_uploaded_file($file, '../asset/Foto/' .$Foto);
move_uploaded_file($file_tmp, '../asset/Buku/' .$Buku);
mysqli_query($koneksi,"INSERT into buku 
                        values('', '$judul','$penulis','$penerbit','$tahunterbit','$Foto','$Buku') ");
 
header("location:../buku.php");
 
?>
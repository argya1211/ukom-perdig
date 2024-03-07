<?php 
include '../../koneksi/koneksi.php';

$id = $_GET['idbuku'];

mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$id'")or die(mysql_error());
 
header("location:../buku.php");
?>
<?php

include '../koneksi/koneksi.php';

$nis = $_POST['nis'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
mysqli_query($koneksi,"INSERT into tb_user(username,password,email,nama_lengkap,no_telp, alamat,level)
    values('$username','$password','$email','$nama_lengkap','$no_telp','$alamat','$level')");

header("location:../index.php");



?>
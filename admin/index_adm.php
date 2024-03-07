<?php
include 'layout/header.php';
?>

<div class="container">

    <?php
    include '../koneksi/koneksi.php';

    $buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
    $user = mysqli_query($koneksi, "SELECT * FROM tb_user");
    $pinjaman = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman");

    $b = mysqli_num_rows($buku);
    $u = mysqli_num_rows($user);
    $p = mysqli_num_rows($pinjaman);
    ?>
    <div class="row my-3">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-success">
            <h2>Data Buku</h2>
            <h1><b><?php echo $b;?></b></h1>
        </div>
            <a href="buku.php" class="btn btn-dark btn-sm">Selengkapnya...</a>
      </div>
    </div>
            <div class="col-sm-3">
            <div class="card">
                  <div class="card-body text-white text-center bg-danger">
                    <h2>Data Anggota</h2>
                  <h1><b><?php echo $u;?></b></h1>
              </div>
            <a href="anggota.php" class="btn btn-dark btn-sm">Selengkapnya...</a>
      </div>
    </div>
    <div class="col-sm-3">
            <div class="card">
                  <div class="card-body text-white text-center bg-warning">
                    <h2>Data Peminjam</h2>
                  <h1><b><?php echo $p;?></b></h1>
              </div>
            <a href="anggota.php" class="btn btn-dark btn-sm">Selengkapnya...</a>
      </div>
    </div>
    <div class="col-sm-3">
            <div class="card">
                  <div class="card-body text-white text-center bg-primary">
                    <h2>Laporan</h2>
                  <h1><b>3</b></h1>
              </div>
            <a href="laporan.php" class="btn btn-dark btn-sm">Selengkapnya...</a>
      </div>
  </div>
  <div class="row">
  <div class="col-sm-7" style="margin-top: 6rem;">
      <h3>Selamat Datang</h3>
      <h5>di halaman Admin Perpustakaan</h5>
      <samp>Mari membaca, karena membaca adalah kunci keberhasilan</samp>
    </div>
    <div class="col-sm-5">
      <img src="../asset/img/boook.jpg" width="400" alt="">
    </div>
    </div>


<?php
include 'layout/footer.php';
?>
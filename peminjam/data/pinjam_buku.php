<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container">
            <div class="card" style="margin-top: 3rem;">
                <div class="row m-4">
                    <?php
                    include "../../koneksi/koneksi.php";
                    if (isset($_GET['idbuku'])) {
                        $idbuku = $_GET['idbuku'];
                    }
                    else {
                        die ("Data tidak tersedia");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku'");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col-sm-7">
                        <h3>Form Peminjaman Buku</h3>
                        <a href="../buku.php" class= "btn btn-danger m-2">Kembali</a>
                        <form action="t_pinjam.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" class="form-control" required value="<?php echo $result['IDbuku']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                            <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_peminjaman" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                                        <input type="date" name="tgl_pengembalian" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status Peminjaman</label>
                                <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                     <option value="dipinjam">Pinjam</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
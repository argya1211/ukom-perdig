<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-3">
                    <h3>LAPORAN DATA BUKU</h3>
                    <h3>APLKASI PERPUSTAKAAN DIGITAL</h3>
                    <span>Data merupakan keseluruhan data buku yang tersedia di Asa Library</span>
                </div>
            </div>
            <div class="row">
            <table class="table my-2">
        <thead class="table table-success">
            <tr>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            </tr>
        </thead>
        <?php
        include '../../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM tb_buku");
        while ($d = mysqli_fetch_array($data)) {
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['id_buku'];?></th>
            <td><?php echo $d['judul'];?></td>
            <td><?php echo $d['penulis'];?></td>
            <td><?php echo $d['penerbit'];?></td>
            <td><?php echo $d['tahun_terbit'];?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
            </div>
            <div class="row">
                <div class="col">
                    <p style="line-height: 1rem;">Mengetahui :</p>
                    <p>Kepala Pusat Perpustakaan DIgital</p>
                    <p style="margin-top: 5rem;"><b>Alam Semesta</b></p>
                </div>
            </div>
        </div>
        <script>
            window.print();
        </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

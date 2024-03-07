<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
      <h2>Data Anggota</h2>
      <div class="col1">
      <table class="table my-3">
        <thead class="table table-success">
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIS</th>
            <th scope="col">Full Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM tb_user");
        while ($d = mysqli_fetch_array($data)) {
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['id_user'];?></th>
            <td><?php echo $d['nis'];?></td>
            <td><?php echo $d['namalengkap'];?></td>
            <td>
                <a href="data/detail_anggota.php?iduser=<?php echo $d['id_user'];?>" class="btn btn-warning text-white">Detail</a>
              </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
      </div>
  </div>
</div>


<?php
include 'layout/footer.php';
?>
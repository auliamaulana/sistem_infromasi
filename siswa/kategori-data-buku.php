<?php 
include '../admin/kepala.php';

if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']); 
}
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">DATA BUKU</h5>
      <a class="btn btn-outline-secondary " href="data-buku-perpus.php">Kembali</a>
      <a class="btn btn-primary text-white" href="tambah-kategori-buku.php">Tambah</a>
      <?php if (isset($pesan_sukses)): ?>
        <div class="alert alert-success w-25 mt-3" role="alert">
          <?php echo $pesan_sukses; ?>
        </div>
      <?php endif ?>
      <div class="table-responsive mt-3">
        <table
        id="zero_config"
        class="table table-striped table-bordered "
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $data_buku = mysqli_query($conn,"SELECT * FROM kategori_buku ");
          $no = 1; 
          ?>

          <?php foreach ($data_buku as $data) : ?>
            <tr>
              <td><?php echo $no;; ?></td>
              <td><?php echo $data['kategori_buku'];  ?></td>
              <td>
                <a class="btn btn-success btn-sm text-white" href="edit-kategori-buku.php?id=<?php echo $data['id_kategori'] ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="hapus-kategori-buku.php?id=<?php echo $data['id_kategori'] ?>">Hapus</a>
              </td>
            </tr>
            <?php $no++ ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir kelas -->
</div>
</div>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
</body>
</html>
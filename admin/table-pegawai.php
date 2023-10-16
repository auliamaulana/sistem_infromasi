<?php
include 'kepala.php';

$table_pegawai = query('SELECT * FROM tabel_pegawai');
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- satrt pegawai-->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE PEGAWAI</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Hp</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Pengalaman Kerja</th>
            <th>Prestasi</tha>
            <th>Jabatan</th>
            <th>Pendidikan</th>
          </tr>
        </thead>
        <tbody>
          <?php  $no = 1;?> 
          <?php foreach ($table_pegawai as $tampil) : ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $tampil['nama_lengkap']; ?></td>
              <td><?php echo $tampil['alamat']; ?></td>
              <td><?php echo $tampil['nomor_telephone']; ?></td>
              <td><?php echo $tampil['agama']; ?></td>
              <td><?php echo $tampil['tgl_lahir']; ?></td>
              <td><?php echo $tampil['pengalaman_kerja']; ?></td>
              <td><?php echo $tampil['prestasi_penghargaan']; ?></td>
              <td><?php echo $tampil['jabatan']; ?></td>
              <td><?php echo $tampil['pendidikan']; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir table pegawai -->
</div>
</div>
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
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
       $("#zero_config").DataTable();
     </script>
   </body>
   </html>

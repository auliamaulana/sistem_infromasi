<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$id = $_GET['id'];
	$nis_siswa = $_POST['nis_siswa']; 
	$nisn = $_POST['nisn']; 
	$nama_siswa = $_POST['nama_siswa']; 
	$kelas = $_POST['kelas']; 
	$alamat = $_POST['alamat']; 
	$tanggal_lahir = $_POST['tanggal_lahir']; 
	$tempat_lahir = $_POST['tempat_lahir']; 
	$agama = $_POST['agama']; 
	$jarak_tempuh = $_POST['jarak_tempuh']; 
	$nama_orang_tua = $_POST['nama_orang_tua']; 
	$tahun_masuk = $_POST['tahun_masuk']; 

	$data_siswa = mysqli_query($conn,"UPDATE tabel_siswa SET nis_siswa='$nis_siswa',nisn='$nisn',nama_siswa='$nama_siswa',kelas='$kelas',alamat='$alamat',tgl_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',agama='$agama',jarak_tempuh='$jarak_tempuh',nama_ortu='$nama_orang_tua',tahun_masuk='$tahun_masuk' WHERE id='$id'");

	$pesan_sukses= "Update Data Berhasil";

}
$id = $_GET['id'];
$data_siswa = mysqli_query($conn,"SELECT * FROM tabel_siswa WHERE id='$id'");

while ($row = mysqli_fetch_assoc($data_siswa)) {
	$nis_siswa = $row['nis_siswa'];
	$nisn = $row['nisn'];
	$nama_siswa = $row['nama_siswa'];
	$alamat = $row['alamat'];
	$tanggal_lahir = $row['tgl_lahir'];
	$tempat_lahir = $row['tempat_lahir'];
	$agama = $row['agama'];
	$jarak_tempuh = $row['jarak_tempuh'];
	$nama_orang_tua = $row['nama_ortu'];
	$tahun_masuk = $row['tahun_masuk'];
}


$data_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas");

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h2 class="text-center">Form Edit Data Siswa</h2>
			<a class="btn btn-primary" href="table-siswa.php">Kembali</a>
			<?php if (isset($pesan_sukses)): ?>
				<div class="alert alert-success w-25 mt-3" role="alert">
					<?php echo $pesan_sukses; ?>
				</div>
			<?php endif ?>
			<div class="row p-4 border rounded-5">
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nis Siswa</label>
						<input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput"  value="<?php echo $nis_siswa; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Nis</label>
						<input type="text" class="form-control form-control-sm " name="nisn" id="formGroupExampleInput2" value="<?php echo $nisn; ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput3" class="form-label">Nama Siswa</label>
						<input type="text" class="form-control form-control-sm " name="nama_siswa" id="formGroupExampleInput3"   value="<?php echo $nama_siswa ?>" required>
					</div>
					<div class="mb-3">
						<label for="kelas">Kelas</label>
						<select name="kelas" id="kelas">
							<?php foreach ($data_kelas as $row) :?>
								<option  value="<?php echo $row['id_kelas'] ?>"><?php echo $row['nama_kelas'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput5" class="form-label">Alamat</label>
						<input type="text" class="form-control form-control-sm " name="alamat" id="formGroupExampleInput5" value="<?php echo $alamat ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm " name="tanggal_lahir" id="formGroupExampleInput5" value="<?php echo $tanggal_lahir ?>" required>
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tempat Lahir</label>
						<input type="text" class="form-control form-control-sm " name="tempat_lahir" id="formGroupExampleInput6"  value="<?php echo $tempat_lahir ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Agama</label>
						<input type="text" class="form-control form-control-sm " name="agama" id="formGroupExampleInput5" value="<?php echo $agama ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Jarak Tempuh</label>
						<input type="text" class="form-control form-control-sm " name="jarak_tempuh" id="formGroupExampleInput5"   value="<?php echo $jarak_tempuh ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Nama Orang Tua</label>
						<input type="text" class="form-control form-control-sm " name="nama_orang_tua" id="formGroupExampleInput5"  value="<?php echo $nama_orang_tua ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tahun Masuk</label>
						<input type="text" class="form-control form-control-sm " name="tahun_masuk" id="formGroupExampleInput5"   value="<?php echo $tahun_masuk ?>" required>
					</div>
					<button type="submit" name="simpan" class="btn btn-success text-white ">Simpan</button>
				</div>
				<div>
				</div>
			</div>
		</div>
	</form>
	<!-- akhir -->
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

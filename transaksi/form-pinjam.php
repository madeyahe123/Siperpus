<?php 

include '../koneksi.php';
include 'fungsi-transaksi.php';

$buku = ambilBuku($koneksi);
$anggota = ambilAnggota($koneksi);

include '../aset/header.php';

 ?>

 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md-8">
 			
 		</div>
 	</div>
 </div>

 <div class="card">
 				<div class="card-header">
 					<h3>Form Tambah Peminjaman</h3>
 				</div>
 				<div class="card-body">
 					<form method="post" action="proses-pinjam.php">
 						
 						<div class="from-group">
 							<label for = "anggota">Nama Anggota</label>
 							<select name="id_anggota" class="form-control">
 								<?php
 								foreach ($anggota as $a) { ?>
 									<option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></option>
 									<?php } ?>
 								}	
 							</select>
 						</div>

 						<div class="from-group">
 							<label for = "buku">Judul Buku</label>
 							<select name="id_buku" class="form-control">
 								<?php
 								foreach ($buku as $b) { ?>
 									<option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
 									<?php } ?>
 								}	
 							</select>
 						</div>

 						<div class="from-group">
 							<label for="datepicker">Tanggal Pinjam</label>
 							<input type="date" name="tgl_pinjam" class="form-control">
 						</div>

 						<div class="form-group">
 							<br>
 							<center>
 							<button type="submit" name="btnPinjam" class="btn btn-primary mr-auto">Simpan</button>
 							</center>
 						</div>

 					</form>

 				</div>
 			</div>

 <?php 
include '../aset/footer.php';
  ?>
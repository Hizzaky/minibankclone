<?php include '../../fun.php'; error_reporting(0);
	// $id = json_decode($_POST["nid"]);
	$id = $_SESSION['nid'];

	$sql="SELECT * FROM mb_t_nasabah WHERE id='$id'";
	$x=db()->query($sql)->fetch_array();
	$sql="SELECT * FROM mb_t_kelengkapan WHERE id_nasabah='$id'";
	$y=db()->query($sql)->fetch_array();
	$sql="SELECT * FROM mb_t_pinjaman WHERE id_nasabah='$id'";
	$z=db()->query($sql)->fetch_array();

 ?>
<div class="card" style="background: #eee;">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>KETERANGAN JUMLAH PENGAJUAN PINJAMAN</h4>
					<h4 class="up">OLEH NASABAH <?php echo $x['nama_nasabah']; ?></h4>
				</div>
				<div class="card-body">
					<div class="form-group mb-3">
						<label class="label" for="kwn">Jumlah Pinjaman Yang Disetujui :<label class="x"> </label></label>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-11">
								<div class=" form-inline">
									<label class="pr" for="acc">Rp. </label>
									<h3><label><strong>
<?php 									if (is_null($z['pinjaman']) || empty($z['pinjaman'])){
											echo "0";
										} else{
											echo number_format($z['pinjaman']);
										}
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
								</div>
<?php 								if (is_null($z['pinjaman']) || empty($z['pinjaman'])) {
											// echo "0";
									} else{
											echo "<label>Terbilang : <strong>".terbilang($z['pinjaman'])." Rupiah.</strong></label>";
									} ?>
							</div>
						</div>
					</div>
					<?php if (is_null($z['cicilan']) || empty($z['cicilan']) || $z['cicilan']==""): ?>
						
					<?php else: ?>
						<hr>
						<div class="form-group mb-3">
							<label class="label" for="kwn">Keterangan Cicilan Nasabah :<label class="x"> </label></label>
							<div class="row">
								<div class="col-sm-1"></div>
								<div class=" col-sm-11">
									<div class=" form-inline">
										<label class="pr" for="acc">Rp. </label>
										<h3><label><strong>
<?php 									if (is_null($z['cicilan']) || empty($z['cicilan'])){
												echo "0";
											} else{
												echo number_format($z['cicilan']);
											}
										 ?></strong></label></h3>
										<label class="" for="acc"> <h3> /Bulan</h3></label>
									</div>
<?php 								if (is_null($z['cicilan']) || empty($z['cicilan'])) {
												// echo "0";
										} else{
												echo "<label>Terbilang : <strong>".terbilang($z['cicilan'])." Rupiah.</strong></label>";
										} ?>
								</div>
							</div>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>		
	</div>
</div> <!-- end card -->
<?php if ($z['status']==0): ?>
	
	<div class="card" style="background: #eee;">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card">
					<div class="card-header"><h4>FORM BULAN CICILAN NASABAH</h4></div>
					<div class="card-body">
						<div class="form-group mb-3">
							<!-- <label class="label" for="">Nomor Identitas Utama<label class="x"> </label></label> -->
							<form action="proses.php" method="POST" enctype="multipart/form-data">
								<input type="text" name="nid" value="<?php echo $id ?>" hidden>
								<input type="text" name="pinjaman" value="<?php echo $z['pinjaman'] ?>" hidden>
								<div class="row">
									<div class="col-sm-1"></div>
									<div class=" col-sm-11">
									</div>
									<div class="col-sm-1"></div>
										<div class="col-sm-5 "><br>
											<div class="form-inline">
												<label class="pr" for="jumlah_bulan">Jumlah Bulan : </label>
												<input class="form-control bln" type="number" name="jumlah_bulan" placeholder ="0" maxlength="8" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
											</div>
										</div>
										<div class="col-sm-6 "><br>
											<div class="form-inline">
												<label class="pr" for="tgl_cicil_awal">Tgl. Dimulai : </label>
												<input class="form-control fc" type="date" name="tgl_cicil_awal" required>
											</div>
										</div>
								</div>
								<br><button class="btn btn-outline-secondary form-control">Simpan Data Cicilan Nasabah</button>
							</form>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div> <!-- end card -->
<?php else: ?>
<div class="card" style="background: #eee;">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>KETERANGAN JUMLAH PENGAJUAN PINJAMAN</h4>
					<h4 class="up">OLEH NASABAH <?php echo $x['nama_nasabah']; ?></h4>
				</div>
				<div class="card-body">
					<div class="form-group mb-3">
						<label class="label" for="kwn">Jumlah Cicilan Yang Belum Lunas<label class="x"> </label></label>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-11">
								<div class=" form-inline">
									<label class="pr" for="acc">Rp. </label>
									<h3><label><strong>
										<?php echo $z['sisa_cicilan']; ?>
										</strong></label></h3>
									<label class="" for="acc"></label>
								</div>	
<?php 								
									$retVal = ($z['sisa_cicilan']==0) ? "Nol" : terbilang($z['sisa_cicilan']) ;
									echo "	<label>Terbilang : 
												<strong>".$retVal." Rupiah.
											</strong></label>"; ?>
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-11">
								<div class=" form-inline">
								</div>
							</div>
						</div><hr>
						<div class="" style="overflow: auto;" style="padding: 1em;">
<?php 						$jumlah_bulan=$z['jumlah_bulan']; ?>
<?php 						$cicilan=$z['cicilan']; ?>
<?php 						$jumlah_bulan_cicil=$z['jumlah_bulan_cicil']; ?>
							<table class="table table-striped text-nowrap">
								<thead>
									<tr>
<?php 							for ($i=1; $i <= $jumlah_bulan; $i++) { 
									echo "<th>Cicilan Bulan $i</th>"; } ?>
									</tr>
								</thead>
								<tbody>
									<tr>
<?php 							for ($i=0; $i < $jumlah_bulan; $i++) { 
									if ($i<$jumlah_bulan_cicil) {
										echo "<td style='background:lightgreen'>Rp. $cicilan</td>"; 
									}else{
										echo "<td>Rp. $cicilan</td>"; 
									}
								} ?>
									</tr>
								</tbody>
							</table>
						</div><br>
						<?php if ($jumlah_bulan==$jumlah_bulan_cicil): ?>
								<a  style="text-decoration: none;" href="lunas.php?nid=<?php echo $id ?>">
								<button class="btn btn-primary form-control">
									LUNASKAN PINJAMAN NASABAH
								</button>
							</a>
						<?php else: ?>	
							<a  style="text-decoration: none;" href="cicilan.php?nid=<?php echo $id ?>">
								<button class="btn btn-outline-info form-control">
									Konfirmasi Cicilan Nasabah Untuk Bulan Ke-<?php echo $z['jumlah_bulan_cicil']+1 ?>
								</button>
							</a>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div> <!-- end card -->
<?php endif ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Jumlah Pinjaman Yang Akan Disetujui</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true" style="color: red">&times;</span>
			</button>
		</div>
		<form action="proses.php" method="POST" enctype="multipart/form-data">
			
			<div class="modal-body">
				<input class="form-control c " type="text" name="nid" value="<?php echo $id ?>" hidden> 
				<input class="form-control c " type="number" name="pinjaman" placeholder="0,00" required> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</form>
		</div>
	</div>
</div>
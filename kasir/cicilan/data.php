<?php include '../../fun.php'; error_reporting(0);
	$id = json_decode($_POST["DATA"]);

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
				<div class="card-header"><h4>KETERANGAN PINJAMAN NASABAH</h4></div>
				<div class="card-body">
					<div class="form-group mb-3">
						<label class="label" for="kwn">Jumlah Pinjaman Yang Disetujui<label class="x"> </label></label>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-6">
								<div class=" form-inline">
									<label class="pr" for="acc">Rp. </label>
									<h3><label><strong>
<?php 									if (is_null($z['pinjaman']) || empty($z['pinjaman'])){
											echo "0";
										} else{
											echo $z['pinjaman'];
										}
									 ?></strong></label></h3>
									<label class="" for="acc">,00</label>
								</div>
<?php 								if (is_null($z['pinjaman']) || empty($z['pinjaman'])) {
											// echo "0";
									} else{
											echo "<label>".terbilang($z['pinjaman'])." Rupiah</label>";
									} ?>
							</div>
							<div class=" col-sm-5">
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Jumlah Dipinjamkan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div> <!-- end card -->

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
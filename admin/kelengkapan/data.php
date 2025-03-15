<?php include '../../fun.php'; 
	// $id = json_decode($_POST["DATA"]);
	$id = $_SESSION['nid'];
// print_r($_SESSION);


	$sql="SELECT * FROM mb_t_nasabah WHERE id='$id'";
	$x=db()->query($sql)->fetch_array();
	$sql="SELECT * FROM mb_t_kelengkapan WHERE id_nasabah='$id'";
	$y=db()->query($sql)->fetch_array();
	$sql="SELECT * FROM mb_t_pinjaman WHERE id_nasabah='$id'";
	$z=db()->query($sql)->fetch_array();
	$form=slct2("mb_t_form_pengajuan", "WHERE id_nasabah=".$id);
	$setuju=db()->query("SELECT * FROM mb_t_pinjaman WHERE id_nasabah='$id'")->fetch_assoc();
	// print_r($x);
	// $retVal = ($x['tgl_terbit_pelengkap']=="0000-00-00") ? "-" : $x['tgl_terbit_pelengkap'] ;
 ?>
<div class="card" style="background: #eee;">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header"><h4>KETERANGAN PINJAMAN NASABAH</h4></div>
				<div class="card-body">
					<div class="form-group mb-3">
						<label class="label" for="kwn">Jumlah Pengajuan Pinjaman Nasabah :<label class="x"> </label></label>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-4">
								<div class=" form-inline">
									<label class="pr" for="acc">Rp. </label>
									<h3><label><strong>
<?php 									if (is_null($form['jumlah_pengajuan']) || 
											empty($form['jumlah_pengajuan'])){
											echo "0";
										} else{
											echo number_format($form['jumlah_pengajuan']);
										}
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
								</div>
<?php 								
									echo "<label>".terbilang($form['jumlah_pengajuan'],",")." Rupiah.</label>";
?>
							</div>
							<div class=" col-sm-3">
								<div class=" form-inline">
									<label class="pr" for="acc">Dengan Waktu : </label>
									<h3><label><strong>
<?php 								echo $form["jangka_waktu"]." Bulan";
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
								</div>
							</div>
							<div class=" col-sm-4">
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Jumlah Yang Disetujui</button>
							</div>
						</div>
					</div>
<?php  				$cekPinjaman=cek_data("mb_t_pinjaman","id_nasabah",$id);
					 if ($cekPinjaman>=1): ?>
					<div style="background: lightgreen; padding: 5px;">
						
						<hr><label class="label" for="kwn">Jumlah Pengajuan Yang Disetujui :<label class="x"> </label></label>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class=" col-sm-3">
								<div class=" form-inline">
									<label class="pr" for="acc">Rp. </label>
									<h3><label><strong>
<?php 									
									echo number_format($setuju['pinjaman']);
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
								</div>
<?php 						
								echo "<label>".terbilang($setuju['pinjaman'],",")." Rupiah.</label>";
?>							</div>
							<div class=" col-sm-3">
								<div class=" form-inline">
									<label class="pr" for="acc">Dengan Waktu : </label>
									<h3><label><strong>
<?php 								//$setuju=db()->query("SELECT pinjaman FROM mb_t_pinjaman 
										// WHERE id_nasabah='$id'")->fetch_assoc();	
									// echo number_format($setuju['pinjaman']);
									echo $setuju["jumlah_bulan"]." Bulan";
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
								</div>
							</div>
							<div class=" col-sm-4">
								<div class=" form-inline">
									<label class="pr" for="acc">Cicilan Perbulan : </label>
									<h3><label><strong>
<?php 								//$setuju=db()->query("SELECT pinjaman FROM mb_t_pinjaman 
										// WHERE id_nasabah='$id'")->fetch_assoc();	
									// echo number_format($setuju['pinjaman']);
									echo "Rp. ".number_format($setuju["cicilan"])."";
									 ?></strong></label></h3>
									<label class="" for="acc"></label>
<?php 								echo "<label>".terbilang($setuju['cicilan'],",")." 											Rupiah.</label>";

 ?>
								</div>
							</div>
					<?php endif ?>
					</div>	

				</div>
			</div>
		</div>		
	</div>
</div> <!-- end card -->

<hr>
<?php include 'data-pribadi.php'; ?>
<?php include 'data-penghasilan.php'; ?>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="min-width: 500px;">
	<div class="modal-dialog modal-md" role="document" >
		<div class="modal-content" style="padding-left: ; background: transparent;">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Jumlah Pinjaman Yang Akan Disetujui</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true" style="color: red">&times;</span>
			</button>
		</div>
			<div class="modal-body">
				<!-- isi -->
				<table class="table-bordered" style="background: whitesmoke;">
					<thead style="text-align: center;">
						<tr>
							<th>Jumlah</th>
							<th colspan="4">Jangka Waktu Pembayaran</th>
						</tr>
						<tr>
							<th>Pembiayaan</th>
							<th>12 Bulan</th>
							<th>18 Bulan</th>
							<th>24 Bulan</th>
							<th>36 Bulan</th>
						</tr>
					</thead>
					<tbody>
<?php 					$sql="SELECT * FROM mb_t_pembiayaan";
						$biaya=db()->query($sql);
						foreach ($biaya as $key => $value) {
							// echo '<form action="proses.php?biaya="'.$value["pembiayaan"].'"&cicil="'.$value[""].'" method="POST" enctype="multipart/form-data">'
								if ($form["jumlah_pengajuan"] == $value["pembiayaan"]) {
									$bulan="bln".$form['jangka_waktu'];
									if ($form['jangka_waktu']==12) {
										$bulan12="bln";
										$bulan18="";
										$bulan24="";
										$bulan36="";
									}elseif ($form['jangka_waktu']==18) {
										$bulan12="";
										$bulan18="bln";
										$bulan24="";
										$bulan36="";
									}elseif ($form['jangka_waktu']==24) {
										$bulan12="";
										$bulan18="";
										$bulan24="bln";
										$bulan36="";
									}elseif ($form['jangka_waktu']==36) {
										$bulan12="";
										$bulan18="";
										$bulan24="";
										$bulan36="bln";
									}
									echo "	<tr style='background:#d1c3a7';>
												<td>Rp. ".number_format($value['pembiayaan'])."</td>
												<td class='".$bulan12."'><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln12"]."&bln=12&nid=".$id."'>Rp. ".number_format($value['bln12'])."</a></td>
												<td class='".$bulan18."'><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln18"]."&bln=18&nid=".$id."'>Rp. ".number_format($value['bln18'])."</a></td>
												<td class='".$bulan24."'><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln24"]."&bln=24&nid=".$id."'>Rp. ".number_format($value['bln24'])."</a></td>
												<td class='".$bulan36."'><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln36"]."&bln=36&nid=".$id."'>Rp. ".number_format($value['bln36'])."</a></td>
											</tr>
									";
								}else{
									echo "	<tr style='background:';>
												<td>Rp. ".number_format($value['pembiayaan'])."</td>
												<td><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln12"]."&bln=12&nid=".$id."'>Rp. ".number_format($value['bln12'])."</a></td>
												<td><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln18"]."&bln=18&nid=".$id."'>Rp. ".number_format($value['bln18'])."</a></td>
												<td><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln24"]."&bln=24&nid=".$id."'>Rp. ".number_format($value['bln24'])."</a></td>
												<td><a href='proses.php?biaya=".$value["pembiayaan"]."&cicil=".$value["bln36"]."&bln=36&nid=".$id."'>Rp. ".number_format($value['bln36'])."</a></td>

											</tr>
									";

								}
						// echo '</form>';
						}
 ?>
						
					</tbody>
				</table>
				<!-- end isi -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
				<!-- <button class="btn btn-primary">Setujui</button> -->
			</div>
		</div>
	</div>
</div>

<!--  -->
<!-- 	
 -->

<!--  -->
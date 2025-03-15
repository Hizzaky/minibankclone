
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pengajuan Pinjaman</title>
	<!-- <link rel="stylesheet" type="text/css" href="../../trap/css/bootstrap.css"> -->
	<!-- <script type="text/javascript" src="../../trap/js/jquery.js"></script> -->
</head>
<style type="text/css">

	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}
	body{
		/*padding-top: 2em;*/
	}
	h2,h4{
		text-align: center;
	}
	h5{
		color: white;
	}
	h5.blck{
		color: black;
	}
	div.box{
		border: 2px solid black;
		/*background-color: lightgrey;*/
		/*width: 300px;*/
		/*padding: 50px;*/
		/*margin: 20px;*/
	}
	div.bottom{
		border-bottom: 2px solid black;
	}
	div.top{
		border-top: 2px solid black;
	}
	div.left{
		border-left: 2px solid black;
	}
	div.right{
		border-right: 2px solid black;
	}
	div.sub{
		background: #28ad54;
		padding-left: 3px;
	}
	p{
		font-weight: bold;
		padding-left: 5px;
	}
	.pr{
		padding-right: 5px;
	}
	.pl{
		padding-left: 5px;
	}
	.input{
		width: 100%;
	}
	.textarea{
		width: 100%;
		height: 100px;
	}div.pad{
		padding-top: 5px;
	}
	input.rt{
		width: 50px;
	}
	p.fnt{
		padding: 2em; 
		text-align: justify; 
		font-weight: normal;
	}
	ul{
		box-sizing: border-box;
		list-style-type: none; 
		width: 100%; 
		display:table; 
		border-collapse: collapse;
		/*table-layout: fixed; */
	}
	li{
		/*flex: 0 0 10%;*/
		padding: 1em;
		display: table-row;
		/*align-items: flex-end;*/
	}
	li div{
		border: 1px solid black;
		display: table-cell;

	}
</style>
<body>
	<div class="container">
	</div>
	<div class="container">
	</div>
	<!-- <form action="form-ttd-pemohon.php" method="POST" enctype="multipart/form-data">	 -->
		<div class="container">
			<div class="box">
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>DATA SUAMI/ISTRI (diisi apabila sudah menikah)</h5></div><br>
				</div>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline ">
							<div class="col-md-4">
								<p class="pr">Nama</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="nama_menikah"  value="<?php echo $form['nama_menikah'] ?>" readonly >
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline ">
							<div class="col-md-4">
								<p class="pr">Tempat/Tanggal Lahir</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="ttl_menikah" value="<?php echo $form['ttl_menikah'] ?>" readonly >
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline ">
							<div class="col-md-4">
								<p class="pr">Nomor KTP</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="number"  name="ktp_menikah" value="<?php echo $form['ktp_menikah'] ?>" readonly >
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline ">
							<div class="col-md-4">
								<p class="pr">Nomor HP</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" style="width: 200px;" type="text" name="hp_menikah" value="<?php echo $form['hp_menikah'] ?>" readonly >
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline">
							<div class="col-md-4">
								<p class="pr">Jenis Pekerjaan </p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7 pad">	
								<input type="text" name=""  value="<?php echo $form['jenis_pekerjaan_menikah'] ?>" readonly >>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Alamat Sesuai KTP</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<textarea class="textarea" name="alamat_menikah" readonly><?php echo $form['alamat_menikah'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_menikah" value="<?php echo $form['no_menikah'] ?>" readonly >
									<p class="pr">RT:</p>
									<input class="rt" type="number" name="rt_menikah" value="<?php echo $form['rt_menikah'] ?>" readonly > 
									<p class="pr">RW:</p>
									<input class="rt" type="number" name="rw_menikah" value="<?php echo $form['rw_menikah'] ?>" readonly > 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_menikah" value="<?php echo $form['lurah_menikah'] ?>" readonly> 
								</div>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">Kecamatan:</p>
									<input class="" style="width: 35%;" type="text" name="kecamatan_menikah" value="<?php echo $form['kecamatan_menikah'] ?>" readonly > 
								</div>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">Kota/Kab:</p>
									<input class="" style="width: 35%;" type="text" name="kota_menikah" value="<?php echo $form['kota_menikah'] ?>" readonly > 
								</div>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">provinsi:</p>
									<input class="" style="width: 35%;" type="text" name="provinsi_menikah" value="<?php echo $form['provinsi_menikah'] ?>" readonly >
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_menikah" value="<?php echo $form['pos_menikah'] ?>" readonly > 
								</div>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">Telepon:</p>
									<input class="" type="number" name="telepon_menikah" value="<?php echo $form['telepon_menikah'] ?>" readonly > 
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
			</div>
		</div><br>
		<div class="container">
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>RINCIAN PENGHASILAN</h5></div>
				</div><br>
			<div class="box">
				<div style="padding: 2em;">
					<p class="bold">A. Bagi Yang Berpenghasilan Tetap</p>
					<div class="container">
						<table class="table table-striped  table-responsive text-nowrap" style="margin-left: 3em;">
							<thead>
								<tr>
									<th>No.</th>
									<th>Penghasilan Tetap/Bln</th>
									<th>Pemohon</th>
									<th>Pasangan Pemohon</th>
								</tr>
							</thead>
							<tbody class="">
								<tr> <!-- START -->
									<td class="">1</td>
									<td class="">Gaji Pokok Perbulan</td>
									<td>Rp. 
										<input type="number" id="gaji_tetap_pemohon" name="gaji_tetap_pemohon" value="<?php echo $form['gaji_tetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="gaji_tetap_pasangan" id="gaji_tetap_pasangan" value="<?php echo $form['gaji_tetap_pasangan'] ?>" readonly > 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">2</td>
									<td class="">Tunjangan Tetap Perbulan</td>
									<td>Rp. 
										<input type="number" name="tunjangan_tetap_pemohon" id="tunjangan_tetap_pemohon" value="<?php echo $form['tunjangan_tetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="tunjangan_tetap_pasangan" id="tunjangan_tetap_pasangan" value="<?php echo $form['tunjangan_tetap_pasangan'] ?>" readonly >
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">3</td>
									<td class="">Potongan Resmi</td>
									<td>Rp. 
										<input type="number" name="potongan_tetap_pemohon" id="potongan_tetap_pemohon" value="<?php echo $form['potongan_tetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="potongan_tetap_pasangan" id="potongan_tetap_pasangan" value="<?php echo $form['potongan_tetap_pasangan'] ?>" readonly > 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">4</td>
									<td class="">Cicilan Hutang Perbulan</td>
									<td>Rp. 
										<input type="number" name="cicilan_tetap_pemohon" id="cicilan_tetap_pemohon" value="<?php echo $form['cicilan_tetap_pemohon'] ?>" readonly >
									</td>
									<td>Rp. 
										<input type="number" name="cicilan_tetap_pasangan" id="cicilan_tetap_pasangan" value="<?php echo $form['cicilan_tetap_pasangan'] ?>" readonly >
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class=""></td>
									<td class="">Total (1+2)-(3+4)</td>
									<td>Rp. <span id="hasil_tetap_pemohon"><?php
									$total1=(floatval($form['gaji_tetap_pemohon'])+floatval($form['tunjangan_tetap_pemohon']))-(floatval($form['potongan_tetap_pemohon'])+floatval($form['cicilan_tetap_pemohon']));
									 echo number_format($total1) ?></span></td>
									<td>Rp. <span id="hasil_tetap_pasangan"><?php 
									$total2=(floatval($form['gaji_tetap_pasangan'])+floatval($form['tunjangan_tetap_pasangan']))-(floatval($form['potongan_tetap_pasangan'])+floatval($form['cicilan_tetap_pasangan']));
									echo number_format($total2) ?></span></td>
								</tr><!-- END -->
							</tbody>
						</table>
						<div style="text-align: center;">
						<?php 
							$totaltetap=floatval($total1)+floatval($total2);
							if ($totaltetap==0) {
								$totaltetap=0;
							}

						 ?>
							<label>Rp. <span id="total_ppb"><?php echo number_format($totaltetap) ?></span></label>
						</div>
					</div><hr>
					<p class="bold">B. Bagi Yang Berpenghasilan Tidak Tetap</p>
					<div class="container">
						<table class="table table-striped  table-responsive text-nowrap" style="margin-left: 3em;">
							<thead>
								<tr>
									<th>No.</th>
									<th>Penghasilan Tetap/Bln</th>
									<th>Pemohon</th>
									<th>Pasangan Pemohon</th>
								</tr>
							</thead>
							<tbody class="">
								<tr> <!-- START -->
									<td class="">1</td>
									<td class="">Gaji Pokok Perbulan</td>
									<td>Rp. 
										<input type="number" id="gaji_xtetap_pemohon" name="gaji_xtetap_pemohon" value="<?php echo $form['gaji_xtetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="gaji_xtetap_pasangan" id="gaji_xtetap_pasangan" value="<?php echo $form['gaji_xtetap_pasangan'] ?>" readonly > 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">2</td>
									<td class="">Tunjangan Tetap Perbulan</td>
									<td>Rp. 
										<input type="number" name="tunjangan_xtetap_pemohon" id="tunjangan_xtetap_pemohon" value="<?php echo $form['tunjangan_xtetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="tunjangan_xtetap_pasangan" id="tunjangan_xtetap_pasangan" value="<?php echo $form['tunjangan_xtetap_pasangan'] ?>" readonly >
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">3</td>
									<td class="">Potongan Resmi</td>
									<td>Rp. 
										<input type="number" name="potongan_xtetap_pemohon" id="potongan_xtetap_pemohon" value="<?php echo $form['potongan_xtetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="potongan_xtetap_pasangan" id="potongan_xtetap_pasangan" value="<?php echo $form['potongan_xtetap_pasangan'] ?>" readonly > 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">4</td>
									<td class="">Cicilan Hutang Perbulan</td>
									<td>Rp. 
										<input type="number" name="cicilan_xtetap_pemohon" id="cicilan_xtetap_pemohon" value="<?php echo $form['cicilan_xtetap_pemohon'] ?>" readonly > 
									</td>
									<td>Rp. 
										<input type="number" name="cicilan_xtetap_pasangan" id="cicilan_xtetap_pasangan" value="<?php echo $form['cicilan_xtetap_pasangan'] ?>" readonly > 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class=""></td>
									<td class="">Total (1+2)-(3+4)</td>
									<td>Rp. <span id="hasil_xtetap_pemohon"><?php 
									$totalx1=(floatval($form['gaji_xtetap_pemohon'])+floatval($form['tunjangan_xtetap_pemohon']))-(floatval($form['potongan_xtetap_pemohon'])+floatval($form['cicilan_xtetap_pemohon']));

									echo number_format($totalx1) ?></span></td>
									<td>Rp.  <span id="hasil_xtetap_pasangan"><?php
									$totalx2=(floatval($form['gaji_xtetap_pasangan'])+floatval($form['tunjangan_xtetap_pasangan']))-(floatval($form['potongan_xtetap_pasangan'])+floatval($form['cicilan_xtetap_pasangan']));
									 echo number_format($totalx2) ?></span></td>
								</tr><!-- END -->
							</tbody>
						</table>
						<div style="text-align: center;">
						<?php 
							$totalxtetap=floatval($totalx1)+floatval($totalx2);
							if ($totalxtetap==0) {
								$totalxtetap=0;
							}

						 ?>
							<label>Rp. <span id="total_ppb"><?php echo number_format($totalxtetap) ?></span></label>
						</div>
					</div>
				</div>
			</div>
			
		</div>	<hr>
	<!-- </form> -->
</body>
</html>
<script type="text/javascript">
	$("input").keyup(function () {

		// PEMOHON TETAP
	    var pokok = $("#gaji_tetap_pemohon").val();
	    var tunjangan = $("#tunjangan_tetap_pemohon").val();
	    var potongan = $("#potongan_tetap_pemohon").val();
	    var cicilan = $("#cicilan_tetap_pemohon").val();

	    if (pokok=="") {
	    	pokok.values=0;
	    }

	    var total = (parseFloat(pokok)+parseFloat(tunjangan))-(parseFloat(potongan)+parseFloat(cicilan));
	    $("#hasil_tetap_pemohon").text(total);
	    // END PEMOHON TETAP
		// PASANGAN TETAP
	    var pokok = $("#gaji_tetap_pasangan").val();
	    var tunjangan = $("#tunjangan_tetap_pasangan").val();
	    var potongan = $("#potongan_tetap_pasangan").val();
	    var cicilan = $("#cicilan_tetap_pasangan").val();
	    var total = (parseFloat(pokok)+parseFloat(tunjangan))-(parseFloat(potongan)+parseFloat(cicilan));
	    $("#hasil_tetap_pasangan").text(total);
	    // END PEMOHON TETAP
		// PEMOHON TIDAK TETAP
	    var pokok = $("#gaji_xtetap_pemohon").val();
	    var tunjangan = $("#tunjangan_xtetap_pemohon").val();
	    var potongan = $("#potongan_xtetap_pemohon").val();
	    var cicilan = $("#cicilan_xtetap_pemohon").val();
	    var total = (parseFloat(pokok)+parseFloat(tunjangan))-(parseFloat(potongan)+parseFloat(cicilan));
	    $("#hasil_xtetap_pemohon").text(total);
	    // END PEMOHON TIDAK TETAP
		// PASANGAN TIDAK TETAP
	    var pokok = $("#gaji_xtetap_pasangan").val();
	    var tunjangan = $("#tunjangan_xtetap_pasangan").val();
	    var potongan = $("#potongan_xtetap_pasangan").val();
	    var cicilan = $("#cicilan_xtetap_pasangan").val();
	    var total = (parseFloat(pokok)+parseFloat(tunjangan))-(parseFloat(potongan)+parseFloat(cicilan));
	    $("#hasil_xtetap_pasangan").text(total);
	    // END PEMOHON TIDAK TETAP
	});
</script>
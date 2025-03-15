<?php include '../../fun.php'; 
	foreach($_POST as $key => $item) {
		$_SESSION[$key]=$_POST[$key];
	} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pengajuan Pinjaman</title>
	<link rel="stylesheet" type="text/css" href="../../trap/css/bootstrap.css">
	<script type="text/javascript" src="../../trap/js/jquery.js"></script>
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
		padding-top: 2em;
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
		<div><h2>logo</h2></div>
		<h4>BISMILLAAHIRRAHMAANIRRAHIIM</h4>
		<h4>FORM APLIKASI PEMBIAYAAN CUSTOMER BANK MINI SYARIAH EKSYAR FAI UMMAT</h4><hr>
	</div>
	<div class="container">
		<h5 class="blck">Kepada</h5>
		<h5 class="blck">BANK MINI SYARIAH EKSYAR FAI UMMAT</h5>
		<br>Harap diisi lengkap untuk kelancaaran proses.
	</div>
	<form action="form-ttd-pemohon.php" method="POST" enctype="multipart/form-data">	
		<div class="container">
			<div class="box">
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>DATA SUAMI/ISTRI (diisi apabila sudah menikah)</h5></div>
				</div>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline ">
							<div class="col-md-4">
								<p class="pr">Nama</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="nama_menikah" maxlength="50" >
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
								<input class="input" type="text" name="ttl_menikah" maxlength="50" >
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
								<input class="input" type="number"  name="ktp_menikah" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
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
								<input class="input" style="width: 200px;" type="number" name="hp_menikah" maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
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
								<div class="form-inline">
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="PNS/ASN">PNS/ASN</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="BUMN BUMD">BUMN BUMD</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="Swasta">Swasta</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="TNI/Polri">TNI/Polri</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="Profesional">Profesional</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="Wiraswasta">Wiraswasta</label>
								</div>
								<div class="form-inline " style="padding-bottom: 5px;">
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan_menikah" value="Lainnya">Lainnya:</label>
									<input type="text" name="jenis_pekerjaan_menikah2" >
								</div>
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
								<textarea class="textarea" name="alamat_menikah" ></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_menikah" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RT:</p>
									<input class="rt" type="number" name="rt_menikah" maxlength="2"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RW:</p>
									<input class="rt" type="number" name="rw_menikah" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_menikah" > 
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_menikah" > 
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
									<input class="" style="width: 35%;" type="text" name="kota_menikah"  > 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_menikah" > 
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_menikah" maxlength="5"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
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
									<input class="" type="number" name="telepon_menikah" maxlength="13"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
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
										<input type="number" id="gaji_tetap_pemohon" name="gaji_tetap_pemohon" maxlength="15"  value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="gaji_tetap_pasangan" id="gaji_tetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">2</td>
									<td class="">Tunjangan Tetap Perbulan</td>
									<td>Rp. 
										<input type="number" name="tunjangan_tetap_pemohon" id="tunjangan_tetap_pemohon" maxlength="15"  value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="tunjangan_tetap_pasangan" id="tunjangan_tetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">3</td>
									<td class="">Potongan Resmi</td>
									<td>Rp. 
										<input type="number" name="potongan_tetap_pemohon" id="potongan_tetap_pemohon" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="potongan_tetap_pasangan" id="potongan_tetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">4</td>
									<td class="">Cicilan Hutang Perbulan</td>
									<td>Rp. 
										<input type="number" name="cicilan_tetap_pemohon" id="cicilan_tetap_pemohon" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="cicilan_tetap_pasangan" id="cicilan_tetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class=""></td>
									<td class="">Total (1+2)-(3+4)</td>
									<td>Rp. <span id="hasil_tetap_pemohon">0</span></td>
									<td>Rp. <span id="hasil_tetap_pasangan">0</span></td>
								</tr><!-- END -->
							</tbody>
						</table>
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
										<input type="number" id="gaji_xtetap_pemohon" name="gaji_xtetap_pemohon"  maxlength="15"  value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="gaji_xtetap_pasangan" id="gaji_xtetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">2</td>
									<td class="">Tunjangan Tetap Perbulan</td>
									<td>Rp. 
										<input type="number" name="tunjangan_xtetap_pemohon" id="tunjangan_xtetap_pemohon" maxlength="15"  value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="tunjangan_xtetap_pasangan" id="tunjangan_xtetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">3</td>
									<td class="">Potongan Resmi</td>
									<td>Rp. 
										<input type="number" name="potongan_xtetap_pemohon" id="potongan_xtetap_pemohon" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="potongan_xtetap_pasangan" id="potongan_xtetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class="">4</td>
									<td class="">Cicilan Hutang Perbulan</td>
									<td>Rp. 
										<input type="number" name="cicilan_xtetap_pemohon" id="cicilan_xtetap_pemohon" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
									<td>Rp. 
										<input type="number" name="cicilan_xtetap_pasangan" id="cicilan_xtetap_pasangan" maxlength="15" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									</td>
								</tr><!-- END -->
								<tr> <!-- START -->
									<td class=""></td>
									<td class="">Total (1+2)-(3+4)</td>
									<td>Rp. <span id="hasil_xtetap_pemohon">0</span></td>
									<td>Rp.  <span id="hasil_xtetap_pasangan">0</span></td>
								</tr><!-- END -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="form-inline">
					<label>
					<input type="checkbox" name="" required>
					<p class="fnt">Saya menyatakan bahwa semua informasi diatas beserta lampirannya yang diberikan adalah benar. Infomasi ini diberikan untuk tujuan pemohonan pembiayaan dan dengan ini Saya mengijinkan Bank Mini Syariah Eksyar FAI UMMAT untuk mendapatkan dan memeriksa seluruh infomasi yang diperlukan. Dengan ini pula saya menyatakan bersedia dan akan patuh pada peraturan dan persyaratan yang ditentukan Bank dan Saya mengetahui dan menyetujui bahwa Bank berhak menyutuji/menolak permohonan ini tanpa memberitahukan alasannya.</p>	
					</label>
				</div><br>
				<button class="btn btn-outline-primary form-control">Selanjutnya</button>
			</div><br>
		</div>	<hr>
	</form>
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
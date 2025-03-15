<?php include '../../fun.php';
	$id=$_SESSION['id'];
	$data=dqr("SELECT * FROM mb_t_nasabah WHERE id='$id'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pengajuan </title>
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
		/*padding-top: 1em;*/
		background: lightslategrey;
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
		background: white;
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
	div.kop{
		/*background-color: lightgreen;*/
		/*border-radius: 10px;*/
		border-top-left-radius: 2em;
		border-bottom-right-radius: 2em;
		/*opacity: 70%;*/
		padding: 3px;
		/*background: #7bcc78;*/
		border: 5px solid green;
	}
	h2.kop{
		color: black;
		font-family: Segoe Print;
		font-weight: bolder;
	}
	h3.h3{
		color: white;
	}
</style>
<body>


    <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
					<div class="col-md-2" ></div>
						<div style="margin-left: 5em;">
			            	<img src="../../pic/fai.png" width="100" height="100" alt="Computer Hope">
			        	</div>
			        <div class=" text-center ">
						<h3 class="heading-section h3"><strong>APLIKASI MINI BANK</strong></h3>
						<h3 class="heading-section h3"><strong>EKONOMI SYARIAH</strong></h3>
			        </div>
			        <div class="" style="margin-right: 20em;">
			            <img src="../../pic/mb.png" width="100" height="100" alt="Computer Hope">
			        </div>
         	</div>
        </nav>
    <!-- END Navbar -->
	<div class="container">
		<div>
	</div>
	<br>
		<h4><i>BISMILLAAHIRRAHMAANIRRAHIIM</i></h4>
		<h4>FORM APLIKASI <?php echo strtoupper($_GET['pengajuan']); ?> CUSTOMER BANK MINI SYARIAH EKSYAR FAI UMMAT</h4><hr>
	</div>
	<div class="container">
		<h5 class="blck">Kepada</h5>
		<h5 class="blck">BANK MINI SYARIAH EKSYAR FAI UMMAT</h5>
		<br>Harap diisi lengkap untuk kelancaaran proses.
	</div>
	<form action="form-penghasilan.php" method="POST" enctype="multipart/form-data">	
		<div class="container">
			<div class="box">
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>PERMOHONAN <?php echo strtoupper($_GET['pengajuan']); ?></h5></div>
				</div>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-3"><p>Produk <?php echo ucwords($_GET['pengajuan']); ?>:</p></div>
						<div class="col-md-9">
							<div class="row">
<?php 							if ($_GET['pengajuan']=='tabungan'): ?>
									<div class="col-md-3">
										<label><input type="radio" name="produk" required value="Tabungan Wadiah">Tabungan Wadiah
										</label>
										<label><input type="radio" name="produk" required value="Tabugnan Giro Wadiah">Tabugnan Giro Wadiah</label>
										<label><input type="radio" name="produk" required value="Deposito">Deposito</label>
									</div>
<?php 							elseif ($_GET['pengajuan']=='pembiayaan'): ?>
								
									<div class="col-md-3">
										</label>
										<label><input type="radio" name="produk" required value="Akad Mudharabah">Akad Mudharabah</label>
										<label><input type="radio" name="produk" required value="Akad Musyarakah">Akad Musyarakah</label>
										<label><input type="radio" name="produk" required value="Akad Murabahah">Akad Murabahah</label>
									</div>
									<div class="col-md-3">
										<label><input type="radio" name="produk" required value="Akad Salam">Akad Salam</label>
										<label><input type="radio" name="produk" required value="Akad Istishna">Akad Istishna</label>
										<label><input type="radio" name="produk" required value="Akad Ijarah">Akad Ijarah</label>
									</div>
									<div class="col-md-4">
										<label><input type="radio" name="produk" required value="Akad Ijarah Muntahiyah Bit Tamlik">Akad Ijarah Muntahiyah Bit Tamlik</label>
										<label><input type="radio" name="produk" required value="Akad Qardh">Akad Qardh</label>
									</div>
<?php 							endif ?>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<p class="pr">Jumlah Pembiayaan Yang Diajukan:</p>
							<div class="col-md-5">							
								<select name="jumlah_pengajuan" required>
									<option></option>
<?php 								
									$pembiayaan=db()->query("SELECT * FROM mb_t_pembiayaan");
									foreach ($pembiayaan as $key => $value) {
										echo '<option value="'.$value['pembiayaan'].'">Rp. '.number_format($value['pembiayaan']).'</option>';
									}
 ?>									
								</select>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Pengajuan:</p>
								<div class="form-inline">
									<label class="pr pl">
										<input type="radio" name="jenis_pengajuan" required value="Baru">Baru
									</label>
									<label class="pr pl">
										<input type="radio" name="jenis_pengajuan" required value="Refinancing">Refinancing
									</label>
									<label class="pr pl">
										<input type="radio" name="jenis_pengajuan" required value="Take Over">Take Over
									</label>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline">
							<p class="pr">Jangka Waktu:</p>
							<div class="col-md-5">							
								<select name="jangka_waktu" required>
									<option></option>
									<option value="12">12 Bulan</option>
									<option value="18">18 Bulan</option>
									<option value="24">24 Bulan</option>
									<option value="36">36 Bulan</option>
								</select>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline pad">
							<p class="pr">Tujuan Penggunaan (dijelaskan):</p>
							<div class="col-md-8">	
								<textarea class="textarea" name="tujuan_penggunaan" required></textarea>						
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>DATA PRIBADI PEMOHON</h5></div>
				</div>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Nama</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="nama_pribadi" maxlength="50" required value="<?php echo $data[0]['nama_nasabah'] ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Jenis Kelamin:</p>
								<div class="form-inline">
									<label class="pr pl">
										<input type="radio" name="jk_pribadi" value="Pria" required <?php echo $retVal = ($data[0]['jk']=="Pria") ? $retVal="checked" : $retVal="" ; ?>>Pria
									</label>
									<label class="pr pl">
										<input type="radio" name="jk_pribadi" value="Wanita" required <?php echo $retVal = ($data[0]['jk']=="Wanita") ? $retVal="checked" : $retVal="" ; ?>>Wanita
									</label>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Tempat/Tanggal Lahir</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="ttl_pribadi" readonly required value="<?php echo $data[0]['tempat_lahir']."/".date("d-M-Y",strtotime($data[0]['tanggal_lahir'])) ?>">
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Status:</p>
								<div class="form-inline">
									<label class="pr pl">
										<input type="radio" name="status_pribadi" required value="Lajang" <?php echo $retVal = ($data[0]['status_pernikahan']=="Lajang") ? $retVal="checked" : $retVal="" ; ?>>Lajang
									</label>
									<label class="pr pl">
										<input type="radio" name="status_pribadi" required value="Menikah" <?php echo $retVal = ($data[0]['status_pernikahan']=="Menikah") ? $retVal="checked" : $retVal="" ; ?>>Menikah
									</label>
									<label class="pr pl">
										<input type="radio" name="status_pribadi" required value="Janda/Duda" <?php echo $retVal = ($data[0]['status_pernikahan']=="Janda/Duda") ? $retVal="checked" : $retVal="" ; ?>>Janda/Duda
									</label>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Nomor Identitas Utama (<?php echo $data[0]['jenis_identitas_utama'] ?>)</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
									<input class="input" type="number" required name="ktp_pribadi" value="<?php echo $data[0]['nomor_identitas_utama'] ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Jumlah Tanggungan:</p>
								<div class="col-md-7 pad">
									<input class="input" type="number" required name="jumlah_tanggungan_pribadi" maxlength="15" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Nomor NPWP</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="number" name="npwp_pribadi" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Pendidikan Terakhir:</p>
								<div class="col-md-7 pad">
									<input class="input" type="text" name="pendidikan_terakhir_pribadi" readonly required value="<?php echo $data[0]['pendidikan_terakhir'] ?>"> 
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Alamat Sesuai Identitas Utama</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<textarea class="textarea" name="alamat_ktp_pribadi" readonly required ><?php echo $data[0]['alamat_nasabah'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_ktp_pribadi" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RT:</p>
									<!-- <input class="rt" type="number" name="rt_ktp_pribadi" maxlength="2" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  -->
									<input class="rt" type="number" name="rt_ktp_pribadi" maxlength="2" required readonly value="<?php echo $data[0]['rt'] ?>"> 
									<p class="pr">RW:</p>
									<!-- <input class="rt" type="number" name="rw_ktp_pribadi" maxlength="3" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  -->
									<input class="rt" type="number" name="rw_ktp_pribadi" maxlength="3" required readonly value="<?php echo $data[0]['rw'] ?>"> 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_ktp_pribadi" required> 
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_ktp_pribadi"  required> 
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
									<input class="" style="width: 35%;" type="text" name="kota_ktp_pribadi"  required> 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_ktp_pribadi"  required> 
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_ktp_pribadi" maxlength="5" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
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
									<input class="" type="number" name="telepon_ktp_pribadi" maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Alamat Tinggal (Diisi apabila alamat tidak sesuai dengan alamat Identitas utama)</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<textarea class="textarea" name="alamat_tinggal_pribadi"></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_tinggal_pribadi" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RT:</p>
									<input class="rt" type="number" name="rt_tinggal_pribadi" maxlength="2"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RW:</p>
									<input class="rt" type="number" name="rw_tinggal_pribadi" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_tinggal_pribadi"  > 
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_tinggal_pribadi"  > 
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
									<input class="" style="width: 35%;" type="text" name="kota_tinggal_pribadi"  > 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_tinggal_pribadi"  > 
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_tinggal_pribadi" maxlength="5"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
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
									<input class="" type="number" name="telepon_tinggal_pribadi" maxlength="13"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Status Tempat Tinggal </p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad form-inline">							
								<label class="pl pr"><input type="radio" name="status_tempat_tinggal_pribadi" required value="Pribadi">Pribadi</label>
								<label class="pl pr"><input type="radio" name="status_tempat_tinggal_pribadi" required value="Keluarga">Keluarga</label>
								<label class="pl pr"><input type="radio" name="status_tempat_tinggal_pribadi" required value="Dinas">Dinas</label>
								<label class="pl pr"><input type="radio" name="status_tempat_tinggal_pribadi" required value="Lainnya">Lainnya:</label>
								<input type="text" name="status_tempat_tinggal_pribadi" >
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Nomor HP </p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad form-inline">							
								<!-- <input type="number" name="hp_pribadi" maxlength="13" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  -->
								<input type="number" name="hp_pribadi" maxlength="13" required value="<?php echo $data[0]['hp'] ?>"> 
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>DATA PEKERJAAN</h5></div>
				</div>
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Jenis Pekerjaan </p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<div class="form-inline">
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="PNS/ASN" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="PNS/ASN") ? $retVal="checked" : $retVal="" ; ?>>PNS/ASN</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="BUMN BUMD" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="BUMN BUMD") ? $retVal="checked" : $retVal="" ; ?>>BUMN BUMD</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="Swasta" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="Swasta") ? $retVal="checked" : $retVal="" ; ?>>Swasta</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="TNI/Polri" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="TNI/Polri") ? $retVal="checked" : $retVal="" ; ?>>TNI/Polri</label>
								</div>
								<div class="form-inline">
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="Profesional" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="Profesional") ? $retVal="checked" : $retVal="" ; ?>>Profesional</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="Wiraswasta" <?php echo $retVal = ($data[0]['tipe_pekerjaan']=="Wiraswasta") ? $retVal="checked" : $retVal="" ; ?>>Wiraswasta</label>
									<label class="pl pr"><input type="radio" name="jenis_pekerjaan" required value="Lainnya"  <?php echo $retVall = (($data[0]['tipe_pekerjaan']!="PNS/ASN") AND ($data[0]['tipe_pekerjaan']!="BUMN BUMD") AND ($data[0]['tipe_pekerjaan']!="Swasta") AND ($data[0]['tipe_pekerjaan']!="TNI/Polri") AND ($data[0]['tipe_pekerjaan']!="Profesional") AND ($data[0]['tipe_pekerjaan']!="Wiraswasta")) ? $retVall="checked" : $retVall="" ; ?>>Lainnya:</label>
									<input type="text" name="jenis_pekerjaan2" value="<?php echo $lnl = ($retVall=="checked") ? $lnl=$data[0]['tipe_pekerjaan'] : $lnl="" ; ?>">
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Bentuk Badan Usaha </p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<div class="form-inline">
									
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="Instansi Pemerintah">Instansi Pemerintah</label>
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="UD">UD</label>
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="CV">CV</label>
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="PT">PT</label>
								</div>
								<div class="form-inline">
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="Koperasi">Koperasi</label>
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="Yayasan">Yayasan</label>
									<label class="pl pr"><input type="radio" name="bentuk_pekerjaan" required value="Lainnya">Lainnya:</label>
									<input type="text" name="bentuk_pekerjaan2" >
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Nama Instansi/ Perusahaan</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<div class="form-inline">
									<input type="text" name="nama_instansi_pekerjaan" style="width: 30%;" required value="<?php echo $data[0]['nama_instansi']; ?>">
									<p class="pr" style="padding-left: 20%;">Lama Bekerja:</p>
									<input class="rt" type="number" name="lama_kerja_pekerjaan" maxlength="2" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p style="padding-top: 10px;">Tahun</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Golongan/Pangkat Jabatan</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<input type="text" name="jabatan_pekerjaan" style="width: 30%;" required value="<?php echo $data[0]['jabatan'] ?>">
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Alamat Instansi/ Perusahaan</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<textarea class="textarea" name="alamat_instansi_pekerjaan" required><?php echo $data[0]['alamat_instansi'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_instansi_pekerjaan" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RT:</p>
									<input class="rt" type="number" name="rt_instansi_pekerjaan"  maxlength="2"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">RW:</p>
									<input class="rt" type="number" name="rw_instansi_pekerjaan"  maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_instansi_pekerjaan" required > 
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_instansi_pekerjaan" required > 
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
									<input class="" style="width: 35%;" type="text" name="kota_instansi_pekerjaan" required > 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_instansi_pekerjaan" required > 
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_instansi_pekerjaan" maxlength="5" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
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
									<input class="" type="number" name="telepon_instansi_pekerjaan" maxlength="13" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">  
								</div>
							</div>
						</div>

					</div>
				</div> <!-- END box sub-->
			</div><br>
				<button class="btn btn-info btn-block">Selanjutnya</button>
		</div><br>
	</form>
</body><hr>
</html>
<?php include '../fun.php'; ?>
<!DOCTYPE html>
<html>
<head>
  	<title>REGISTER AKUN MINI BANK UMMAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../trap/css/bootstrap.css">
</head>
<style>
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
		background-color: cadetblue;
		padding: 1em;
	}
	h2{
		text-align: center;
		color: white;
	}
	div.top{
		padding-top: 5%;
	}
	div.card{
		padding: 5px;
	}
	div.card-header{
		background: lightblue;
	}
	label.label{
		font-weight: bold;
	}
	input.fc{
		width: 70% !important;
	}
	label.pr{
		padding-right: 5px;
	}
	label.pl{
		padding-left: 5px !important;
	}
	input.up{
		text-transform: uppercase;
	}
	label.x{
		color: red;
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
</style>
</head>
<body>
	<input type="text" id="id" value="2" hidden>
	<div class="container">
		<div class="row ">
			<div class="col-md-1" ></div>
	        <div class="col-sm-2 ">
	            <div style="margin-left:2em;">
	            	<img src="../pic/fai.png" width="130" height="130" alt="Computer Hope">
	        	</div>
	        </div>
	        <div class="col-md-6 text-center kop">
	            <p></p>
				<h2 class="heading-section kop"><strong>APLIKASI MINI BANK</strong></h2>
				<h2 class="heading-section kop"><strong>EKONOMI SYARIAH</strong></h2>
	        </div>
	        <div class="col-sm-2 ">
	            <img src="../pic/mb.png" width="130" height="130" alt="Computer Hope">
	        </div>
	    </div>
		<div class="top col-md-12">
			<h2><strong>FORMULIR APLIKASI PEMBUKAAN REKENING</strong></h2><br>
			<h2><strong>BANK MINI SYARIAH EKSYAR FAI UMMAT</strong></h2><br>
		</div>
		<div class="card" style="background: #eee;">
			<form id="formReg" onsubmit="return reg()" action="" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="card">
							<div class="card-header">DATA DIRI :</div>
							<div class="card-body">
								<div class="form-group mb-3">
									<label class="label" for="kwn">Kewarganegaraan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-3">
											<label><input class="" type="radio" name="kwn" value="WNI" required> WNI</label>
										</div>
										<div class=" col-sm-6">
											<div class=" form-inline">
												<input class="" type="radio" name="kwn" value="Lainnya" required >
												<label class="pl pr">WNA : </label>
												<input class="form-control fc" type="text" name="kwn2" placeholder="WNA" maxlength="30"> 
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="jenis_identitas">Jenis Identitas Utama<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<label><input class="" type="radio" name="jenis_identitas_utama" value="KTP" required> KTP</label>
										</div>
										<div class="col-sm-2">
											<label><input class="" type="radio" name="jenis_identitas_utama" value="Paspor" required> Paspor</label>
										</div>
										<div class=" col-sm-6">
											<div class=" form-inline">
												<input class="" type="radio" name="jenis_identitas_utama" value="Lainnya" required>
												<label class="pr pl"> Lainnya :</label>
												<input class="form-control fc" type="text" name="jenis_identitas_utama2" maxlength="20" placeholder="Lainnya"> 
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nomor Identitas Utama<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control" type="number" name="nomor_identitas_utama" maxlength="50" placeholder="Nomor Identitas"> 
										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-5"><br>
											<label for="tgl_terbit_utama">Tgl. Terbit : </label>
											<input type="date" name="tgl_terbit_utama">
										</div>
										<div class="col-sm-6"><br>
											<label for="tgl_xpr_utama">Tgl. Kadaluwarsa : </label>
											<input type="date" name="tgl_xpr_utama">
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Jenis Identitas Pelengkap</label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<label><input class="" type="radio" name="jenis_identitas_pelengkap" value="KITAS" > KITAS</label>
										</div>
										<div class="col-sm-2">
											<label><input class="" type="radio" name="jenis_identitas_pelengkap" value="KITAP" > KITAP</label>
										</div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="" type="radio" name="jenis_identitas_pelengkap" value="KIA" > 
												<label class="pr pl">KIA</label>
											</div>
										</div>
										<div class=" col-sm-5">
											<div class="form-inline">
												<input class="" type="radio" name="jenis_identitas_pelengkap" value="Lainnya" > 
												<label class="pr pl">Lainnya :</label>
												<input class="form-control fc" type="text" name="jenis_identitas_pelengkap2" maxlength="20" placeholder="Lainnya"> 
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nomor Identitas Pelengkap</label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control" type="number" name="nomor_identitas_pelengkap" maxlength="50" placeholder="Nomor Identitas Pelengkap" > 
										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-5"><br>
											<label for="tgl_terbit_pelengkap">Tgl. Terbit : </label>
											<input type="date" name="tgl_terbit_pelengkap" >
										</div>
										<div class="col-sm-6"><br>
											<label for="tgl_xpr_pelengkap">Tgl. Kadaluwarsa : </label>
											<input type="date" name="tgl_xpr_pelengkap" >
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nama Sesuai Identitas<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control" type="text" name="nama_nasabah" placeholder="Nama Lengkap Sesuai Identitas" maxlength="50" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Alamat Sesuai Identitas<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control " type="text" name="alamat_nasabah" placeholder="Alamat Lengkap Sesuai Identitas" required> 
										</div>
										<div class="col-sm-2"></div>
										<div class="col-sm-3"><br>
											<div class="form-inline">
												<label class="pr">RT : </label>
												<input class="form-control fc" type="text" name="rt" placeholder="RT" maxlength="3" required> 
											</div>
										</div>
										<div class="col-sm-3"><br>
											<div class="form-inline">
												<label class="pr">RW : </label>
												<input class="form-control fc" type="text" name="rw" placeholder="RW" maxlength="3" required> 
											</div>
										</div>
										<div class="col-sm-4"><br>
											<div class="form-inline">
												<label class="pr">Kode Pos : </label>
												<input class="form-control fc" type="text" name="pos" placeholder="Kode Pos" maxlength="10" required> 
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Tempat, Tanggal Lahir<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-6">
											<div class="form-inline">
												<label class="pr" for="tempat_lahir">Tempat Lahir : </label>
												<input class="form-control fc" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
											</div>
										</div>
										<div class="col-sm-5">
											<label for="tanggal_lahir">Tanggal Lahir : </label>
											<input type="date" name="tanggal_lahir" required>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Jenis Kelamin<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="jk" placeholder="" value="Wanita" required> 
												<label class="pl">Wanita</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-inline">
												<input class="form-control" type="radio" name="jk" placeholder="" value="Pria" required> 
												<label class="pl">Pria</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Golongan Nasabah<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="golongan_nasabah" placeholder="" value="Penduduk" required> 
												<label class="pl">Penduduk</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-inline">
												<input class="form-control" type="radio" name="golongan_nasabah" placeholder="" value="Non Penduduk" required> 
												<label class="pl">Non Penduduk</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Penidikan Terakhir<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="SD" required> 
												<label class="pl">SD</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="SMP" required> 
												<label class="pl">SMP</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="SMA" required> 
												<label class="pl">SMA</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="Diploma" required> 
												<label class="pl">Diploma</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="S1" required> 
												<label class="pl">S1</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="S2" required> 
												<label class="pl">S2</label>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="S3" required> 
												<label class="pl">S3</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="Tidak Sekolah" required> 
												<label class="pl">Tidak Sekolah</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="pendidikan_terakhir" placeholder="" value="Lainnya" required> 
												<label class="pl pr">Lainnya :</label>
												<input class="form-control fc" type="text" name="pendidikan_terakhir2" maxlength="20" placeholder="Lainnya">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Agama<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control " style="width: 300px;" type="text" name="agama" placeholder="Agama" maxlength="15" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Status Pernikahan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="status_pernikahan" placeholder="" value="Lajang" required> 
												<label class="pl">Lajang</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="status_pernikahan" placeholder="" value="Menikah" required> 
												<label class="pl">Menikah</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-inline">
												<input class="form-control" type="radio" name="status_pernikahan" placeholder="" value="Janda/Duda" required> 
												<label class="pl">Janda/Duda</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nama Gadis Ibu Kandung<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control " type="text" name="ibu_kandung" placeholder="Nama Lengkap Ibu Kandung" maxlength="50" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nomor NPWP</label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control " type="text" name="npwp" placeholder="Nomor NPWP" maxlength="15"> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Informasi Kontak<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<div class="form-inline">
												<label class="pr pl">Nomor HP<label class="x"> *</label> :</label>
												<input class="form-control fc" type="number" name="hp" placeholder="Nomor HP" maxlength="13" required
												oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
											</div><br>
											<div class="form-inline">
												<label class="pr pl" style="padding-right: 40px;">Email :</label>
												<input class="form-control fc" type="email" name="email" placeholder="Email" maxlength="50"> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="" style="padding: 1em;">
					<button class="btn btn-info form-control"><strong>NEXT</strong></button>
				</div>
			</form>
		</div> <!-- end card -->
		<br><br><br>
	</div>
</body>
<script type="text/javascript">
</script>
</html>
<?php include '../fun.php'; 
	foreach($_POST as $key => $item) {
		$_SESSION[$key]=$_POST[$key];
	} ?>
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
	<input type="text" id="id" value="3" hidden>
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
							<div class="card-header">DATA PEKERJAAN :</div>
							<div class="card-body">
								<div class="form-group mb-3">
									<label class="label" for="">Tipe Pekerjaan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="PNS/ASN" required> 
												<label class="pl">PNS/ASN</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="BUMN BUMD" required> 
												<label class="pl">BUMN BUMD</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="Wiraswasta" required> 
												<label class="pl">Wiraswasta</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="Swasta" required> 
												<label class="pl">Swasta</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="TNI/Polri" required> 
												<label class="pl">TNI/Polri</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="Profesional" required> 
												<label class="pl">Profesional</label>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tipe_pekerjaan" placeholder="" value="Lainnya" required> 
												<label class="pl pr">Lainnya :</label>
												<input class="form-control fc" type="text" name="tipe_pekerjaan2" maxlength="20" placeholder="Lainnya">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Bidang Usaha/Pekerjaan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control" style="width: 50%;" type="text" name="bidang_usaha" maxlength="30" placeholder="Contoh: Pendidikan" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Jabatan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control" style="width: 50%;" type="text" name="jabatan" maxlength="30" placeholder="Contoh: Mahasiswa" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Nama Kantor/Instansi Tempat Bekerja<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control" style="width: 50%;" type="text" name="nama_instansi" maxlength="50" placeholder="Nama Instansi" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Alamat Kantor/Instansi Tempat Bekerja<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class=" col-sm-11">
											<input class="form-control"  type="text" name="alamat_instansi" placeholder="Alamat Instansi" required> 
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Telepon Kantor/Instansi Tempat Bekerja<label class="x"> </label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<input class="form-control"  type="number" name="telepon_instansi" style="width: 50%;" placeholder="Nomor Telepon Instansi" maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> 
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
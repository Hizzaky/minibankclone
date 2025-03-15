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
	<input type="text" id="id" value="4" hidden>
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
			<!-- <form id="formReg" onsubmit="return reg()" action="" enctype="multipart/form-data"> -->
			<form id="formReg" action="insert.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="card">
							<div class="card-header">DATA KEUANGAN :</div>
							<div class="card-body">
								<div class="form-group mb-3">
									<label class="label" for="">Tujuan Pembuatan Rekening<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tujuan_rekening" placeholder="" value="Menabung" required> 
												<label class="pl">Menabung</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="tujuan_rekening" placeholder="" value="Transaksi" required> 
												<label class="pl">Transaksi</label>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="form-inline">
												<input class="form-control" type="radio" name="tujuan_rekening" placeholder="" value="Investasi" required> 
												<label class="pl">Investasi</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="tujuan_rekening" placeholder="" value="Lainnya" required> 
												<label class="pl pr">Lainnya :</label>
												<input class="form-control fc" type="text" name="tujuan_rekening2" maxlength="20" placeholder="Lainnya">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Sumber Dana<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-2">
											<div class="form-inline">
												<input class="form-control" type="radio" name="sumber_dana" placeholder="" value="Gaji" required> 
												<label class="pl">Gaji</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="sumber_dana" placeholder="" value="Orang Tua" required> 
												<label class="pl">Orang Tua</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="sumber_dana" placeholder="" value="Usaha" required> 
												<label class="pl">Usaha</label>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="form-inline">
												<input class="form-control" type="radio" name="sumber_dana" placeholder="" value="Dana Bantuan" required> 
												<label class="pl">Dana Bantuan</label>
											</div>
											<div class="form-inline">
												<input class="form-control" type="radio" name="sumber_dana" placeholder="" value="Lainnya" required> 
												<label class="pl pr">Lainnya :</label>
												<input class="form-control fc" type="text" name="sumber_dana2" maxlength="20" placeholder="Lainnya">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="">Penghasilan Nasabah Perbulan<label class="x"> *</label></label>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class=" col-sm-11">
											<div class="form-inline">
												<label class="pr">Rp. </label>
												<input class="form-control"  type="number" name="penghasilan_nasabah" style="width: 50%;" placeholder="" required> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="" style="padding: 1em;">
					<button class="btn btn-info form-control"><strong>REGISTER</strong></button>
				</div>
			</form>
		</div> <!-- end card -->
		<br><br><br>
	</div>
</body>
<script type="text/javascript">
</script>
</html>
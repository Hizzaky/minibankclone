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
	input{
		padding-left: 10px;
	}
	textarea{
		padding-left: 10px;
	}
</style>
<body>
	<div class="container">
	</div>
	<div class="container">
	</div>
	<!-- <form action="form-penghasilan.php" method="POST" enctype="multipart/form-data">	 -->
		<div class="container">
			<div class="box">
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>PERMOHONAN PEMBAYARAN</h5></div>
				</div><br>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-3"><p>Produk Pembiayaan:</p></div>
						<div class="col-md-4">
							<div class="row">
								<input class="input" type="text" name="produk" value="<?php echo $form['produk']; ?>" readonly>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<p class="pr">Jumlah Pembiayaan Yang Diajukan:</p>
							<div class="col-md-5">							
								<input class="input" type="text" name="jumlah_pengajuan" value="<?php echo number_format($form['jumlah_pengajuan']) ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Pengajuan:</p>
								<div class="form-inline">
									<label class="pr pl">
									<input class="input" type="text" name="" value="<?php echo $form['jenis_pengajuan']; ?>" readonly>
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
								<input class="input" type="text" name="" value="<?php echo $form['jangka_waktu']." Bulan" ?>" readonly>

							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline pad">
							<p class="pr">Tujuan Penggunaan (dijelaskan):</p>
							<div class="col-md-8">	
								<textarea class="textarea" name="tujuan_penggunaan" readonly><?php echo $form['tujuan_penggunaan']; ?></textarea>						
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class=""> <!-- START box bab-->
					<div class="box sub"><h5>DATA PRIBADI PEMOHON</h5></div>
				</div><br>
				<div class=""> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Nama</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="nama_pribadi" maxlength="50" required  value="<?php echo $form['nama_pribadi'] ?>">
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Jenis Kelamin:</p>
								<div class="form-inline">
									<input class="input" type="text" name="" value="<?php echo $form['jk_pribadi'] ?>" readonly>

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
								<input class="input" type="text" name="" value="<?php echo $form['ttl_pribadi'] ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Status:</p>
								<div class="form-inline">
									<input class="input" type="text" name="" value="<?php echo $form['status_pribadi'] ?>" readonly>

								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-7 form-inline right">
							<div class="col-md-4">
								<p class="pr">Nomor KTP</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-7">							
								<input class="input" type="text" name="" value="<?php echo $form['ktp_pribadi'] ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Jumlah Tanggungan:</p>
								<div class="col-md-7 pad">
								<input class="input" type="text" name="" value="<?php echo number_format($form['jumlah_tanggungan_pribadi']) ?>" readonly>
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
								<input class="input" type="text" name="" value="<?php echo $form['npwp_pribadi'] ?>" readonly>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<p class="pr">Pendidikan Terakhir:</p>
								<div class="col-md-7 pad">
								<input class="input" type="text" name="" value="<?php echo $form['pendidikan_terakhir_pribadi'] ?>" readonly>
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
								<textarea class="textarea" name="alamat_ktp_pribadi" readonly><?php echo $form['alamat_ktp_pribadi'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
								<input class="rt" type="text" name="" value="<?php echo $form['no_ktp_pribadi'] ?>" readonly>
									<p class="pr">RT:</p>
								<input class="rt" type="text" name="" value="<?php echo $form['rt_ktp_pribadi'] ?>" readonly>
									<p class="pr">RW:</p>
								<input class="rt" type="text" name="" value="<?php echo $form['rw_ktp_pribadi'] ?>" readonly>
									<p class="pr">Desa/Lurah:</p>
								<input class="" type="text" name="" value="<?php echo $form['lurah_ktp_pribadi'] ?>" readonly>
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_ktp_pribadi" value="<?php echo $form['kecamatan_ktp_pribadi'] ?>" readonly> 
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
									<input class="" style="width: 35%;" type="text" name="kota_ktp_pribadi" value="<?php echo $form['kota_ktp_pribadi'] ?>" readonly> 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_ktp_pribadi" value="<?php echo $form['provinsi_ktp_pribadi'] ?>" readonly>  
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_ktp_pribadi" value="<?php echo $form['pos_ktp_pribadi'] ?>" readonly> 
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
									<input class="" type="number" name="telepon_ktp_pribadi" value="<?php echo $form['telepon_ktp_pribadi'] ?>" readonly> 
								</div>
							</div>
						</div>
					</div>
				</div> <!-- END box sub-->
				<div class="top"> <!-- START box sub-->
					<div class="row">
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
								<p class="pr">Alamat Tinggal (Diisi apabila alamat tidak sesuai dengan alamat KTP)</p>
							</div>
							<div class="col-md-1"><p>:</p></div>
							<div class="col-md-8 pad">							
								<textarea class="textarea" name="alamat_tinggal_pribadi" readonly><?php echo $form['alamat_tinggal_pribadi'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="text" name="no_tinggal_pribadi" value="<?php echo $form['no_tinggal_pribadi'] ?>" readonly> 
									<p class="pr">RT:</p>
									<input class="rt" type="text" name="rt_tinggal_pribadi"  value="<?php echo $form['rt_tinggal_pribadi'] ?>" readonly> 
									<p class="pr">RW:</p>
									<input class="rt" type="text" name="rw_tinggal_pribadi" value="<?php echo $form['rw_tinggal_pribadi'] ?>" readonly> 
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_tinggal_pribadi" value="<?php echo $form['lurah_tinggal_pribadi'] ?>" readonly> 
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_tinggal_pribadi"  value="<?php echo $form['kecamatan_tinggal_pribadi'] ?>" readonly>  
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
									<input class="" style="width: 35%;" type="text" name="kota_tinggal_pribadi" value="<?php echo $form['kota_tinggal_pribadi'] ?>" readonly>  
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
									<input class="" style="width: 35%;" type="text" name="provinsi_tinggal_pribadi" value="<?php echo $form['provinsi_tinggal_pribadi'] ?>" readonly>  
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_tinggal_pribadi" value="<?php echo $form['pos_tinggal_pribadi'] ?>" readonly>  
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
									<input class="" type="number" name="telepon_tinggal_pribadi"  value="<?php echo $form['telepon_tinggal_pribadi'] ?>" readonly>  
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
								<input type="text" name="status_tempat_tinggal_pribadi" value="<?php echo $form['status_tempat_tinggal_pribadi'] ?>" readonly> 
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
								<input type="number" name="hp_pribadi" value="<?php echo $form['hp_pribadi'] ?>" readonly>  
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
								<input class="" type="text" style="width: 50%;" value="<?php echo $form['jenis_pekerjaan'] ?>" readonly >
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
								<input type="text" name="" style="width: 50%;" value="<?php echo $form['bentuk_pekerjaan'] ?>" readonly >
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
									<input type="text" name="nama_instansi_pekerjaan" style="width: 30%;" value="<?php echo $form['nama_instansi_pekerjaan'] ?>" readonly >
									<p class="pr" style="padding-left: 20%;">Lama Bekerja:</p>
									<input class="rt" type="number" name="lama_kerja_pekerjaan"  value="<?php echo $form['lama_kerja_pekerjaan'] ?>" readonly > 
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
								<input type="text" name="jabatan_pekerjaan" style="width: 30%;" value="<?php echo $form['jabatan_pekerjaan'] ?>" readonly>
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
								<textarea class="textarea" name="alamat_instansi_pekerjaan" readonly><?php echo $form['alamat_instansi_pekerjaan'] ?></textarea>
							</div>
						</div>
						<div class="col-md-12 form-inline">
							<div class="col-md-2">
							</div>
							<div class="col-md-1"><p></p></div>
							<div class="col-md-9 top pad">
								<div class="form-inline">
									<p class="pr">No:</p>
									<input class="rt" type="number" name="no_instansi_pekerjaan" value="<?php echo $form['no_instansi_pekerjaan'] ?>" readonly > 
									<p class="pr">RT:</p>
									<input class="rt" type="number" name="rt_instansi_pekerjaan" value="<?php echo $form['rt_instansi_pekerjaan'] ?>" readonly >
									<p class="pr">RW:</p>
									<input class="rt" type="number" name="rw_instansi_pekerjaan" value="<?php echo $form['rw_instansi_pekerjaan'] ?>" readonly >
									<p class="pr">Desa/Lurah:</p>
									<input class="" style="width: 35%;" type="text" name="lurah_instansi_pekerjaan" value="<?php echo $form['lurah_instansi_pekerjaan'] ?>" readonly >
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
									<input class="" style="width: 35%;" type="text" name="kecamatan_instansi_pekerjaan" value="<?php echo $form['kecamatan_instansi_pekerjaan'] ?>" readonly > 
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
									<input class="" style="width: 35%;" type="text" name="kota_instansi_pekerjaan" value="<?php echo $form['kota_instansi_pekerjaan'] ?>" readonly > 
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
									<input class="" style="width: 35%;" type="text" name="provinsi_instansi_pekerjaan" value="<?php echo $form['provinsi_instansi_pekerjaan'] ?>" readonly >
									<p class="pr">Kode Pos:</p>
									<input class="" style="width: 10%;" type="number" name="pos_instansi_pekerjaan" value="<?php echo $form['pos_instansi_pekerjaan'] ?>" readonly >  
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
									<input class="" type="number" name="telepon_instansi_pekerjaan" value="<?php echo $form['telepon_instansi_pekerjaan'] ?>" readonly >
								</div>
							</div>
						</div>

					</div>
				</div> <!-- END box sub-->
			</div><br>
				<!-- <button class="btn btn-outline-primary btn-block">Selanjutnya</button> -->
		</div><br>
	<!-- </form> -->
</body>
</html>
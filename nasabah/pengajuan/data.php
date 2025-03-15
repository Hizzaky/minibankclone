<?php include '../../fun.php'; error_reporting(0);
	$data=slct2("mb_t_kelengkapan","WHERE id_nasabah=".$_SESSION['id']);
	$cek=cek_data("mb_t_form_pengajuan","id_nasabah",$_SESSION['id']);
 ?>

 <div class="row">
 	<div class="form-group mb-3">
<?php 	if (is_null($data['kk']) || empty($data['kk']) || $data['kk']=="") { ?>
	 		<form id="form" action="up.php?data=kk" method="POST" enctype="multipart/form-data">
				<label class="label" for="">Kartu Keluarga (KK)<label class="x"> *</label></label>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class=" col-sm-9">
						<input class="form-control" type="text" name="field" value="kk" hidden> 
						<input class="form-control" type="file" name="file" placeholder="Input Tautan Kartu Keluarga" required> 
					</div>
					<div class=" col-sm-2">
						<button class="btn btn-primary">Simpan Data KK</button>
					</div>
				</div>
	 		</form>
<?php 	}else{ ?>
			<form id="form" action="del.php" method="POST" enctype="multipart/form-data">
				<label class="label" for="">Kartu Keluarga (KK)<label class="x"> *</label></label>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class=" col-sm-9">
						<input class="form-control" type="text" id="kk" name="kk" value="<?php echo $data['kk']; ?>"  hidden> 
						<input class="form-control" type="text" id="" name="" value="<?php echo $data['kk']; ?>"  required disabled> 
					</div>
					<div class=" col-sm-2">
						<button class="btn btn-danger">Hapus Tautan KK</button>
					</div>
				</div>
	 		</form>
<?php	} ?>
	</div>
 	<div class="form-group mb-3">
<?php 	if (is_null($data['ktp']) || empty($data['ktp']) || $data['ktp']=="") { ?>
	 		<form id="form" action="up.php?data=ktp" method="POST" enctype="multipart/form-data">
				<label class="label" for="">Kartu Tanda Penduduk (KTP)<label class="x"> *</label></label>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class=" col-sm-9">
						<input class="form-control" type="text" name="field" value="ktp" hidden>
						<input class="form-control" type="file" id="ktp" name="file" placeholder="Input Tautan Kartu Tanda Penduduk"  required> 
					</div>
					<div class=" col-sm-2">
						<button class="btn btn-primary">Simpan Data KTP</button>
					</div>
				</div>
	 		</form>
<?php 	}else{ ?>
			<form id="form" action="del.php" method="POST" enctype="multipart/form-data">
				<label class="label" for="">Kartu Tanda Penduduk (KTP)<label class="x"> *</label></label>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class=" col-sm-9">
						<input class="form-control" type="text" id="ktp" name="ktp" value="<?php echo $data['ktp']; ?>" required hidden> 
						<input class="form-control" type="text" id="" name="" value="<?php echo $data['ktp']; ?>" required disabled> 
					</div>
					<div class=" col-sm-2">
						<button class="btn btn-danger">Hapus Tautan KTP</button>
					</div>
				</div>
	 		</form>
<?php	} ?>
	</div>

	<div style="margin-left: 5%;">
		<div class="p-3 m-4 border border-dark position-relative d-block" style="margin-left: 10%; width:80%;">
			<fieldset>
				<legend class="position-absolute top-0 bg-white" style="width:max-content; transform:translateX(30%); transform:translateY(-50%);">Pengajuan :</legend>

				<div class="form-outline m-2">

					<a href="../form-pengajuan?pengajuan=tabungan">
						<button class="btn btn-info" style="height: 50px; width: 49%;">Tabungan</button>
					</a>
					<a href="../form-pengajuan?pengajuan=pembiayaan">
						<button class="btn btn-info" style="height: 50px; width: 49%;">Pembiayaan</button>
					</a>
				</div>
			</fieldset>
		</div>
	</div>

 	<div class="form-group mb-3">
<?php 
		if ((!is_null($data['kk']) || !empty($data['kk']) || !$data['kk']=="") AND (!is_null($data['ktp']) || !empty($data['ktp']) || !$data['ktp']=="") AND (!is_null($data['form']) || !empty($data['form']) || !$data['form']=="")) { ?>
			<?php if ($data['pengajuan_nasabah']==1): ?>
				<button class="btn alert alert-info form-control bt " disabled >Silahkan Tunggu Untuk Disetujui.</button>				
			<?php elseif ($data['pengajuan_nasabah']==2): ?>
				<form action="ajuan.php" method="POST" enctype="multipart/form-data">
					<button class="btn alert alert-info form-control bt">Ajukan Data</button>
					<button class="btn alert alert-danger form-control bt " disabled >Permohonan Anda Ditolak Pihak CS.</button>				
				</form>	
			<?php elseif ($data['pengajuan_nasabah']==3): ?>
				<form action="ajuan.php" method="POST" enctype="multipart/form-data">
				</form>	
			<?php else: ?>
					<?php if ($data['form']==1): ?>
						<form action="ajuan.php" method="POST" enctype="multipart/form-data">
							<button class="btn alert alert-info form-control bt">Ajukan Data</button>
						</form>	
					<?php endif ?>
			<?php endif ?>
<?php	}else{
			up_pengajuan('0',$_SESSION['id']);
		} ?>
	</div>
 </div>